export function createTrackCarousel(trackRef, cardSelector, pageRef, pagesRef) {
    function metrics() {
        const el = trackRef.value;
        if (!el) return null;
        const cards = el.querySelectorAll(cardSelector);
        const cardW = cards[0]?.getBoundingClientRect().width;
        if (!cards.length || !cardW || !el.clientWidth) return null;
        const gap = parseFloat(getComputedStyle(el).columnGap) || 14;
        const stride = cardW + gap;
        const perView = Math.max(1, Math.round((el.clientWidth + gap) / stride));
        return {
            el,
            pageStride: perView * stride,
            pages: Math.max(1, Math.ceil(cards.length / perView)),
        };
    }

    function update() {
        const m = metrics();
        if (!m) return;
        pagesRef.value = m.pages;
        pageRef.value = Math.min(m.pages - 1, Math.round(m.el.scrollLeft / m.pageStride));
    }

    function go(i) {
        const m = metrics();
        if (!m) return;
        const target = Math.min(m.pages - 1, Math.max(0, i));
        m.el.scrollTo({ left: target * m.pageStride, behavior: "smooth" });
    }

    function scroll(dir) {
        go(pageRef.value + dir);
    }

    return { update, go, scroll };
}
