<script setup>
import { Head, usePage } from '@inertiajs/vue3';
import { ref, computed } from 'vue';
import vueRecaptcha from 'vue3-recaptcha2';

// ── CSRF token ──────────────────────────────────────────────────────────────
const csrfToken = ref('');
try {
    const meta = document.querySelector('meta[name="csrf-token"]');
    csrfToken.value = meta ? meta.getAttribute('content') : '';
} catch (e) { csrfToken.value = ''; }

// ── reCAPTCHA site key (shared from AppServiceProvider) ─────────────────────
const page = usePage();
const recaptchaKey = computed(() => page.props.config?.google_recaptcha_key ?? '');

// ── Office info ──────────────────────────────────────────────────────────────
const offices = [
    {
        icon: "bi-building",
        label: "Head Office",
        address: "Talavera Office Park, 15th Floor\nJl. TB Simatupang No. 23, RT 3/RW 1,\nCilandak Barat, Kec. Cilandak,\nJakarta Selatan 12430",
        maps: "https://www.google.com/maps/place/Talavera+Office+Park/@-6.2912807,106.8010619,17z/",
    },
    {
        icon: "bi-tools",
        label: "Workshop",
        address: "Jl. Balai Kimia | 15, RT 15/RW 9,\nPekayon, Kec. Ps. Rebo,\nJakarta Timur 13790",
        maps: "https://www.google.com/maps/search/Jl.+Balai+Kimia+l+15,+RT+15%2FRW+9,+Pekayon/",
    },
    {
        icon: "bi-geo-alt",
        label: "Riau Branch",
        address: "Jl. Dwikora I No. 16,\nKel. Suka Maju, Kec. Sail,\nPekanbaru, Kepulauan Riau",
        maps: "https://www.google.com/maps/place/Jl.+Dwikora+I+No.16,+Suka+Maju/",
    },
];

// ── Flash messages from Laravel redirect()->back()->with(...) ───────────────
const flash = computed(() => page.props.flash ?? {});

// ── Form state ────────────────────────────────────────────────────────────────
const form = ref({
    name: '',
    email: '',
    phone: '',
    company: '',
    subject: '',
    message: '',
    'g-recaptcha-response': '',
});
const errors    = ref({});
const submitting = ref(false);
const recaptchaRef = ref(null);

function onRecaptchaVerify(token) {
    form.value['g-recaptcha-response'] = token;
    errors.value['g-recaptcha-response'] = '';
}
function onRecaptchaExpire() {
    form.value['g-recaptcha-response'] = '';
}

async function handleSubmit() {
    errors.value = {};

    // Client-side required checks
    if (!form.value.name.trim())    { errors.value.name = 'Name is required.'; }
    if (!form.value.email.trim())   { errors.value.email = 'Email is required.'; }
    if (!form.value.message.trim()) { errors.value.message = 'Message is required.'; }
    if (!form.value['g-recaptcha-response']) {
        errors.value['g-recaptcha-response'] = 'Please complete the CAPTCHA.';
    }
    if (Object.keys(errors.value).length) return;

    submitting.value = true;

    const payload = new FormData();
    payload.append('_token', csrfToken.value);
    for (const [key, val] of Object.entries(form.value)) {
        payload.append(key, val);
    }

    try {
        const res = await fetch('/submit-inquiry-form', {
            method: 'POST',
            body: payload,
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
        });

        if (res.ok) {
            // Laravel redirects back with flash — on SPA we parse JSON if available
            const ct = res.headers.get('content-type') ?? '';
            if (ct.includes('application/json')) {
                const json = await res.json();
                if (json.success) {
                    form.value = { name:'', email:'', phone:'', company:'', subject:'', message:'', 'g-recaptcha-response':'' };
                    recaptchaRef.value?.reset();
                    errors.value = { _success: json.success };
                } else {
                    errors.value = json.errors ?? { _error: 'Failed to send.' };
                }
            } else {
                // Standard redirect response — treat 200/302 as success
                form.value = { name:'', email:'', phone:'', company:'', subject:'', message:'', 'g-recaptcha-response':'' };
                recaptchaRef.value?.reset();
                errors.value = { _success: 'Your inquiry has been sent. We will contact you shortly.' };
            }
        } else if (res.status === 422) {
            const json = await res.json();
            // Laravel validation errors format: { errors: { field: ['msg'] } }
            const raw = json.errors ?? {};
            Object.keys(raw).forEach(k => { errors.value[k] = raw[k][0]; });
            recaptchaRef.value?.reset();
            form.value['g-recaptcha-response'] = '';
        } else {
            errors.value._error = 'Failed to send inquiry. Please try again.';
        }
    } catch {
        errors.value._error = 'Network error. Please check your connection and try again.';
    } finally {
        submitting.value = false;
    }
}
</script>

<template>
    <Head title="Contact Us" />

    <!-- ── Page Hero ── -->
    <section class="page-hero" style="background-image: url('/assets/img/hero-carousel/hover-2-new.webp');">
        <div class="page-hero-overlay"></div>
        <div class="container page-hero-body">
            <span class="section-eyebrow">Get In Touch</span>
            <h1 class="page-hero-title">Contact Us</h1>
            <p class="page-hero-sub">
                Reach out to discuss your next industrial project. Our team is ready to help.
            </p>
        </div>
    </section>

    <!-- ── Contact Details + Map ── -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-5 align-items-start">

                <!-- Map -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-map-wrap">
                        <iframe
                            class="contact-map"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?hl=en&q=talavera+office+park&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                            title="Office Location - Talavera Office Park">
                        </iframe>
                    </div>
                </div>

                <!-- Details -->
                <div class="col-lg-6" data-aos="fade-left">
                    <span class="section-eyebrow">Reach Us</span>
                    <h2 class="section-title">Contact Details</h2>
                    <div class="section-divider"></div>

                    <h4 class="contact-company-name">PT Raya Konstruksi Internasional</h4>

                    <!-- Phone & Email -->
                    <div class="contact-direct">
                        <a href="tel:02127814774" class="contact-direct-item">
                            <div class="contact-info-icon"><i class="bi bi-telephone-fill"></i></div>
                            <div>
                                <div class="contact-info-label">Phone</div>
                                <div class="contact-info-value">(021) 27814774</div>
                            </div>
                        </a>
                        <a href="mailto:marketing@rayakonstruksi.com" class="contact-direct-item">
                            <div class="contact-info-icon"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <div class="contact-info-label">Email</div>
                                <div class="contact-info-value">marketing@rayakonstruksi.com</div>
                            </div>
                        </a>
                    </div>

                    <!-- Office locations -->
                    <div v-for="(office, i) in offices" :key="i" class="contact-info-row">
                        <div class="contact-info-icon">
                            <i :class="'bi ' + office.icon"></i>
                        </div>
                        <div class="flex-grow-1">
                            <div class="contact-info-label">{{ office.label }}</div>
                            <div class="contact-info-value" style="white-space: pre-line;">{{ office.address }}</div>
                            <a :href="office.maps" target="_blank" rel="noopener noreferrer" class="contact-maps-link">
                                <i class="bi bi-geo-alt-fill"></i> View on Maps
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Inquiry Form ── -->
    <section class="inquiry-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="inquiry-card" data-aos="fade-up">
                        <div class="text-center mb-5">
                            <span class="section-eyebrow">Send a Message</span>
                            <h2 class="section-title mt-2">Inquiry Form</h2>
                            <div class="section-divider mx-auto"></div>
                            <p class="section-body" style="max-width: 480px; margin: 0 auto;">
                                Fill in the form below and our team will get back to you within one business day.
                            </p>
                        </div>

                        <!-- Flash / submission feedback -->
                        <div v-if="errors._success" class="alert-success" role="alert">
                            <i class="bi bi-check-circle-fill me-2"></i>{{ errors._success }}
                        </div>
                        <div v-if="errors._error" class="alert-error" role="alert">
                            <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ errors._error }}
                        </div>

                        <form @submit.prevent="handleSubmit" novalidate>
                            <div class="row g-3">

                                <!-- Name -->
                                <div class="col-md-6">
                                    <label class="form-label" for="inq-name">
                                        Full Name <span class="required-mark">*</span>
                                    </label>
                                    <input
                                        id="inq-name"
                                        v-model="form.name"
                                        type="text"
                                        class="form-control-raya"
                                        :class="{ 'is-invalid': errors.name }"
                                        placeholder="Your full name"
                                        maxlength="100"
                                        autocomplete="name"
                                    />
                                    <div v-if="errors.name" class="field-error">{{ errors.name }}</div>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label class="form-label" for="inq-email">
                                        Email Address <span class="required-mark">*</span>
                                    </label>
                                    <input
                                        id="inq-email"
                                        v-model="form.email"
                                        type="email"
                                        class="form-control-raya"
                                        :class="{ 'is-invalid': errors.email }"
                                        placeholder="your@email.com"
                                        maxlength="255"
                                        autocomplete="email"
                                    />
                                    <div v-if="errors.email" class="field-error">{{ errors.email }}</div>
                                </div>

                                <!-- Phone -->
                                <div class="col-md-6">
                                    <label class="form-label" for="inq-phone">Phone Number</label>
                                    <input
                                        id="inq-phone"
                                        v-model="form.phone"
                                        type="tel"
                                        class="form-control-raya"
                                        placeholder="+62 xxx xxxx xxxx"
                                        maxlength="30"
                                        autocomplete="tel"
                                    />
                                </div>

                                <!-- Company -->
                                <div class="col-md-6">
                                    <label class="form-label" for="inq-company">Company Name</label>
                                    <input
                                        id="inq-company"
                                        v-model="form.company"
                                        type="text"
                                        class="form-control-raya"
                                        placeholder="PT Your Company"
                                        maxlength="150"
                                        autocomplete="organization"
                                    />
                                </div>

                                <!-- Subject -->
                                <div class="col-12">
                                    <label class="form-label" for="inq-subject">Subject</label>
                                    <input
                                        id="inq-subject"
                                        v-model="form.subject"
                                        type="text"
                                        class="form-control-raya"
                                        placeholder="e.g. Catalyst Handling Project Inquiry"
                                        maxlength="255"
                                    />
                                </div>

                                <!-- Message -->
                                <div class="col-12">
                                    <label class="form-label" for="inq-message">
                                        Message <span class="required-mark">*</span>
                                    </label>
                                    <textarea
                                        id="inq-message"
                                        v-model="form.message"
                                        class="form-control-raya"
                                        :class="{ 'is-invalid': errors.message }"
                                        rows="5"
                                        placeholder="Describe your project or inquiry in detail..."
                                        minlength="10"
                                        maxlength="5000"
                                    ></textarea>
                                    <div v-if="errors.message" class="field-error">{{ errors.message }}</div>
                                </div>

                                <!-- reCAPTCHA -->
                                <div class="col-12">
                                    <vue-recaptcha
                                        ref="recaptchaRef"
                                        :sitekey="recaptchaKey"
                                        @verify="onRecaptchaVerify"
                                        @expire="onRecaptchaExpire"
                                    />
                                    <div v-if="errors['g-recaptcha-response']" class="field-error">
                                        {{ errors['g-recaptcha-response'] }}
                                    </div>
                                </div>

                                <!-- Submit -->
                                <div class="col-12">
                                    <button
                                        type="submit"
                                        class="btn-submit-inquiry"
                                        :disabled="submitting"
                                    >
                                        <span v-if="submitting">
                                            <i class="bi bi-hourglass-split me-2"></i> Sending…
                                        </span>
                                        <span v-else>
                                            Send Inquiry <i class="bi bi-send-fill ms-2"></i>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped>
/* ── Sections ── */
.contact-section  { padding: 80px 0; background: #fff; }
.inquiry-section  { padding: 60px 0 80px; background: var(--bg-light, #f8f9fa); }

/* ── Map ── */
.contact-map-wrap { border-radius: 16px; overflow: hidden; box-shadow: var(--shadow-md); }
.contact-map { width: 100%; height: 560px; display: block; }
@media (max-width: 991px) { .contact-map { height: 400px; } }
@media (max-width: 575px) { .contact-map { height: 300px; } }

/* ── Contact detail elements ── */
.contact-company-name {
    font-family: var(--font-head);
    font-size: 18px; font-weight: 800;
    color: var(--text-dark); margin-bottom: 20px;
}
.contact-direct { display: flex; flex-direction: column; gap: 12px; margin-bottom: 28px; }
.contact-direct-item {
    display: flex; align-items: center; gap: 12px;
    text-decoration: none; padding: 14px 18px;
    border: 1px solid var(--border, #e2e8f0); border-radius: 10px;
    transition: background 0.2s, border-color 0.2s;
}
.contact-direct-item:hover { background: var(--bg-light); border-color: var(--navy); }
.contact-maps-link {
    display: inline-flex; align-items: center; gap: 4px;
    font-size: 12px; color: var(--navy); text-decoration: none;
    margin-top: 6px; font-weight: 600;
}
.contact-maps-link:hover { text-decoration: underline; }

/* ── Inquiry card ── */
.inquiry-card {
    background: #fff; border-radius: 20px;
    padding: 48px 40px; box-shadow: 0 4px 40px rgba(0,0,0,0.08);
    border: 1px solid var(--border, #e2e8f0);
}
@media (max-width: 575px) { .inquiry-card { padding: 32px 20px; } }

/* ── Form controls ── */
.form-label {
    display: block; font-size: 13px; font-weight: 700;
    color: var(--text-dark, #111827); margin-bottom: 6px;
    font-family: var(--font-head);
}
.required-mark { color: #e53e3e; }

.form-control-raya {
    width: 100%; padding: 11px 14px;
    border: 1.5px solid var(--border, #cbd5e0);
    border-radius: 8px; font-size: 14px;
    font-family: var(--font-body, 'Pliant', sans-serif);
    color: #111827; background: #fff;
    transition: border-color 0.2s, box-shadow 0.2s;
    outline: none;
}
.form-control-raya:focus {
    border-color: var(--navy, #1B2F6E);
    box-shadow: 0 0 0 3px rgba(27,47,110,0.12);
}
.form-control-raya.is-invalid { border-color: #e53e3e; }
.form-control-raya::placeholder { color: #9ca3af; }

textarea.form-control-raya { resize: vertical; min-height: 120px; }

.field-error { font-size: 12px; color: #e53e3e; margin-top: 4px; }

/* ── Alerts ── */
.alert-success, .alert-error {
    padding: 14px 18px; border-radius: 10px;
    font-size: 14px; font-weight: 600; margin-bottom: 24px;
    display: flex; align-items: center;
}
.alert-success { background: #f0fdf4; color: #166534; border: 1px solid #bbf7d0; }
.alert-error   { background: #fef2f2; color: #991b1b; border: 1px solid #fecaca; }

/* ── Submit button ── */
.btn-submit-inquiry {
    width: 100%; padding: 14px 24px;
    background: var(--navy, #1B2F6E); color: #fff;
    border: none; border-radius: 10px; cursor: pointer;
    font-size: 15px; font-weight: 700;
    font-family: var(--font-head);
    letter-spacing: 0.3px;
    transition: background 0.2s, transform 0.15s, opacity 0.2s;
    display: flex; align-items: center; justify-content: center;
}
.btn-submit-inquiry:hover:not(:disabled) {
    background: #152558; transform: translateY(-1px);
}
.btn-submit-inquiry:disabled { opacity: 0.65; cursor: not-allowed; }

.me-2 { margin-right: 8px; }
.ms-2 { margin-left: 8px; }
.mb-5 { margin-bottom: 28px !important; }
.mt-2 { margin-top: 8px !important; }
</style>
