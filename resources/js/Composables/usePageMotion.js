import { onMounted, onBeforeUnmount } from "vue";
import Lenis from "@studio-freight/lenis";

/**
 * usePageMotion — sistem motion halaman yang sama dengan Home:
 *  1. Scroll-reveal via atribut `data-rv` (stagger otomatis per grup parent,
 *     atau manual via `data-rv-delay="120"`).
 *  2. Split-text headings — judul muncul huruf per huruf (default:
 *     `.page-hero-title` langsung, `.section-title` saat masuk viewport).
 *  3. Smooth scroll Lenis.
 *
 * Dipanggil di dalam <script setup>: usePageMotion({ headings: "..." });
 * Hormat pada prefers-reduced-motion — semua animasi dilewati.
 */
export function usePageMotion(options = {}) {
    const {
        headings = ".page-hero-title, .section-title",
        stagger = 80,
    } = options;

    let revealObserver = null;
    let splitObserver = null;
    let lenis = null;
    let lenisFrame = 0;

    /* ── 1. reveal: [data-rv] naik ke tempatnya saat masuk viewport ── */
    function setupReveal() {
        if (!("IntersectionObserver" in window)) return;

        revealObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    entry.target.dataset.rv = "in";
                    revealObserver.unobserve(entry.target);
                });
            },
            { rootMargin: "0px 0px -10% 0px", threshold: 0.05 }
        );

        const groups = new Map();
        document.querySelectorAll("[data-rv]").forEach((el) => {
            if (el.dataset.rvBound) return;
            el.dataset.rvBound = "1";
            el.dataset.rv = "out";

            const manual = el.getAttribute("data-rv-delay");
            let delay;
            if (manual !== null) {
                delay = parseInt(manual, 10) || 0;
            } else {
                // stagger otomatis: urutan di antara saudara [data-rv] dengan parent yang sama
                const parent = el.parentElement;
                const idx = groups.get(parent) ?? 0;
                groups.set(parent, idx + 1);
                delay = Math.min(idx * stagger, 320);
            }
            el.style.setProperty("--rv-delay", `${delay}ms`);
            revealObserver.observe(el);
        });
    }

    /* ── 2. split headings jadi kata + huruf (sama dengan home) ── */
    function splitHeading(el) {
        if (el.dataset.split === "done") return;
        el.dataset.split = "done";

        const visual = document.createElement("span");
        visual.className = "h-split";
        visual.setAttribute("aria-hidden", "true");
        while (el.firstChild) visual.appendChild(el.firstChild);

        const sr = document.createElement("span");
        sr.className = "h-sr";
        sr.textContent = (visual.textContent || "").replace(/\s+/g, " ").trim();
        el.appendChild(sr);
        el.appendChild(visual);

        let index = 0;
        const walker = document.createTreeWalker(visual, NodeFilter.SHOW_TEXT);
        const textNodes = [];
        while (walker.nextNode()) {
            if (walker.currentNode.nodeValue.trim()) textNodes.push(walker.currentNode);
        }

        textNodes.forEach((node) => {
            const prev = node.previousSibling;
            const next = node.nextSibling;
            let value = node.nodeValue.replace(/[ \t\r\n]+/g, " ");
            if (!prev || prev.nodeName === "BR") value = value.replace(/^ /, "");
            if (!next || next.nodeName === "BR") value = value.replace(/ $/, "");

            const frag = document.createDocumentFragment();
            value.split(/(\s+)/).forEach((part) => {
                if (!part) return;
                if (/^\s+$/.test(part)) {
                    frag.appendChild(document.createTextNode(" "));
                    return;
                }
                const word = document.createElement("span");
                word.className = "h-word";
                const inner = document.createElement("span");
                inner.className = "h-word-in";
                inner.style.setProperty("--i", index++);
                inner.textContent = part;
                word.appendChild(inner);
                frag.appendChild(word);
            });
            node.replaceWith(frag);
        });
    }

    function setupSplitHeadings() {
        if (!("IntersectionObserver" in window)) return;

        splitObserver = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (!entry.isIntersecting) return;
                    entry.target.classList.add("is-split-in");
                    splitObserver.unobserve(entry.target);
                });
            },
            { rootMargin: "0px 0px -8% 0px", threshold: 0.2 }
        );

        document.querySelectorAll(headings).forEach((el) => {
            if (el.dataset.split === "done") return;
            splitHeading(el);
            // judul hero langsung tampil, judul section menunggu masuk viewport
            if (el.closest(".page-hero, .hero-section, .h-hero")) {
                requestAnimationFrame(() => requestAnimationFrame(() => el.classList.add("is-split-in")));
            } else {
                splitObserver.observe(el);
            }
        });
    }

    /* ── 3. Lenis smooth scroll ── */
    function startLenis() {
        lenis = new Lenis({ duration: 1.1, smoothWheel: true });
        const raf = (time) => {
            lenis.raf(time);
            lenisFrame = requestAnimationFrame(raf);
        };
        lenisFrame = requestAnimationFrame(raf);
    }

    onMounted(() => {
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) return;
        setupSplitHeadings();
        setupReveal();
        startLenis();
    });

    onBeforeUnmount(() => {
        if (lenis) lenis.destroy();
        cancelAnimationFrame(lenisFrame);
        if (revealObserver) revealObserver.disconnect();
        if (splitObserver) splitObserver.disconnect();
    });

    return { startLenis, setupReveal, setupSplitHeadings };
}
