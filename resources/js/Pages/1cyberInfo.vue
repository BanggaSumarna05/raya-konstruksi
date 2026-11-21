<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { usePageMotion } from '../Composables/usePageMotion';

usePageMotion();

const protocols = [
    {
        icon: 'bi-shield-lock-fill',
        code: 'SPF',
        full: 'Sender Policy Framework',
        desc: 'Lets the domain owner authorise IP addresses that are allowed to send email for the domain. Receiving servers can verify that messages are sent from servers allowed by the domain owner.',
    },
    {
        icon: 'bi-pen-fill',
        code: 'DKIM',
        full: 'DomainKeys Identified Mail',
        desc: 'Adds a digital signature to every sent message. Receiving servers use the signature to verify that messages are authentic and were not forged or changed during transit.',
    },
    {
        icon: 'bi-file-earmark-check-fill',
        code: 'DMARC',
        full: 'Domain-based Message Authentication',
        desc: 'Tells receiving mail servers what to do when they get a message that appears to be from your organisation, but does not pass authentication checks or meet policy requirements.',
    },
];
</script>

<template>
    <Head title="Cyber Security Information" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/refresh/wwd-plant.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Security Notice</span>
            <h1 class="page-hero-title">Cyber Security<br />Information</h1>
            <p class="page-hero-sub">
                Important information regarding email security and fraud prevention for
                communications related to Raya Konstruksi Internasional.
            </p>
        </div>
    </section>

    <!-- ── Alert Banner ── -->
    <section class="cyber-alert-section">
        <div class="container">
            <div class="cyber-alert" data-rv>
                <div class="cyber-alert-icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
                <div>
                    <h4 class="cyber-alert-title">Phishing &amp; Email Spoofing Warning</h4>
                    <p class="cyber-alert-text">
                        Cybercrime is among the top 10 global risks. Phishing emails exploiting
                        <strong>spoofing</strong> and <strong>typosquatting</strong> techniques may attempt
                        to impersonate Raya Konstruksi. Examples of fraudulent domains:
                        <code>ray4konstruksi.com</code>, <code>rayak0nstruksi.com</code>, <code>rayakonstruksl.com</code>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Protocols ── -->
    <section class="cyber-protocols-section">
        <div class="container">
            <div class="text-center mb-5" data-rv>
                <span class="section-eyebrow">Email Authentication</span>
                <h2 class="section-title mt-2">Our Security Protocols</h2>
                <div class="section-divider mx-auto"></div>
                <p class="section-body mx-auto" style="max-width: 580px;">
                    For every Raya Konstruksi domain, we use three protocols working together to ensure
                    the validity and reliability of every email message.
                </p>
            </div>
            <div class="row g-4 justify-content-center">
                <div v-for="(p, i) in protocols" :key="i"
                     class="col-md-4"
                     data-rv :data-rv-delay="i * 80">
                    <div class="cyber-card">
                        <div class="cyber-card-icon"><i :class="'bi ' + p.icon"></i></div>
                        <div class="cyber-card-code">{{ p.code }}</div>
                        <div class="cyber-card-full">{{ p.full }}</div>
                        <p class="cyber-card-desc">{{ p.desc }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Recommendation ── -->
    <section class="cyber-rec-section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-rv>
                    <span class="section-eyebrow">Our Recommendation</span>
                    <h2 class="section-title mt-2">What You Should Do</h2>
                    <div class="section-divider"></div>
                    <ul class="cyber-rec-list">
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Always verify SPF, DKIM and DMARC records before trusting email communications.
                        </li>
                        <li>
                            <i class="bi bi-x-circle-fill cyber-icon-red"></i>
                            <strong>Reject all communications</strong> that do not pass these authentication checks.
                        </li>
                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Raya Konstruksi advises all companies in its supply chain to adopt these protocols.
                        </li>
                        <li>
                            <i class="bi bi-envelope-fill"></i>
                            To report suspected fraud, contact: <strong>it@rayakonstruksi.com</strong>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6" data-rv>
                    <div class="cyber-contact-card">
                        <div class="cyber-contact-icon"><i class="bi bi-envelope-shield-fill"></i></div>
                        <h4 class="cyber-contact-title">Report Suspicious Email</h4>
                        <p class="cyber-contact-body">
                            If you receive an email that appears to be from Raya Konstruksi but seems
                            suspicious, please report it immediately to our IT Security team.
                        </p>
                        <a href="mailto:it@rayakonstruksi.com" class="cyber-contact-btn">
                            <i class="bi bi-envelope me-2"></i>it@rayakonstruksi.com
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* Alert banner */
.cyber-alert-section { padding: 48px 0; background: var(--paper); border-bottom: 1px solid var(--border); }
.cyber-alert {
    display: flex; align-items: flex-start; gap: 20px;
    background: var(--off); border: 1px solid var(--border); border-left: 4px solid var(--navy);
    border-radius: var(--radius-card); padding: 28px 32px;
}
.cyber-alert-icon { font-size: 28px; color: var(--navy); flex-shrink: 0; margin-top: 2px; }
.cyber-alert-title { font-family: "Figtree", sans-serif; font-weight: 800; font-size: 16px; color: var(--navy); margin: 0 0 8px; }
.cyber-alert-text { font-size: 14px; color: var(--text-body); line-height: 1.7; margin: 0; }
.cyber-alert-text code { background: #1E1E1E; color: #FFFFFF; padding: 2px 6px; border-radius: 4px; font-size: 13px; font-weight: 700; }
@media (max-width: 575px) { .cyber-alert { flex-direction: column; padding: 20px; } }

/* Protocols */
.cyber-protocols-section { padding: 80px 0; background: var(--off); }
.cyber-card {
    background: #fff; border: 1px solid #D9DDE5; border-radius: 16px;
    padding: 36px 28px; height: 100%; text-align: center;
    transition: box-shadow 0.3s, transform 0.3s, border-color 0.3s;
}
.cyber-card:hover { box-shadow: 0 20px 50px rgba(43,65,132,0.12); transform: translateY(-6px); border-color: var(--navy); }
.cyber-card-icon {
    width: 64px; height: 64px; border-radius: 16px;
    background: linear-gradient(135deg, #2B4184, #6070A3);
    display: flex; align-items: center; justify-content: center;
    margin: 0 auto 20px; font-size: 28px; color: var(--tint);
    transition: transform 0.3s;
}
.cyber-card:hover .cyber-card-icon { transform: rotate(-6deg) scale(1.1); }
.cyber-card-code { font-family: "Figtree", sans-serif; font-weight: 900; font-size: 20px; color: #2B4184; margin-bottom: 4px; }
.cyber-card-full { font-size: 12px; font-weight: 700; color: var(--gold); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 14px; }
.cyber-card-desc { font-size: 13px; color: #666; line-height: 1.65; margin: 0; }

/* Recommendation */
.cyber-rec-section { padding: 80px 0; background: var(--paper); }
.cyber-rec-list { list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 16px; }
.cyber-rec-list li { display: flex; align-items: flex-start; gap: 12px; font-size: 15px; color: var(--muted); line-height: 1.6; }
.cyber-rec-list li strong { color: var(--eerie); }
.cyber-rec-list li i { font-size: 18px; color: var(--gold); flex-shrink: 0; margin-top: 2px; }
.cyber-icon-red { color: #ef4444 !important; }

.cyber-contact-card {
    background:
        radial-gradient(120% 140% at 100% 0%, rgba(255, 255, 255, 0.10) 0%, rgba(255, 255, 255, 0) 55%),
        linear-gradient(150deg, #2B4184 0%, #24366E 60%, #1E1E1E 100%);
    border-radius: 20px; padding: 44px 36px; text-align: center;
    box-shadow: 0 20px 60px rgba(43,65,132,0.25);
}
.cyber-contact-icon { font-size: 48px; color: var(--tint); margin-bottom: 20px; }
.cyber-contact-title { font-family: "Figtree", sans-serif; font-weight: 800; font-size: 20px; color: #fff; margin-bottom: 12px; }
.cyber-contact-body { font-size: 14px; color: rgba(255,255,255,0.70); line-height: 1.7; margin-bottom: 28px; }
.cyber-contact-btn {
    display: inline-flex; align-items: center; gap: 8px;
    background: var(--cta); color: #FFFFFF;
    font-family: "Figtree", sans-serif; font-size: 14px; font-weight: 700;
    padding: 13px 28px; border-radius: 50px; text-decoration: none;
    transition: background 0.2s, transform 0.2s;
}
.cyber-contact-btn:hover { background: var(--cta-hover); color: #FFFFFF; transform: translateY(-2px); }

@media (max-width: 767px) { .cyber-protocols-section { padding: 60px 0; } .cyber-rec-section { padding: 60px 0; } .cyber-contact-card { padding: 32px 24px; } }
</style>
