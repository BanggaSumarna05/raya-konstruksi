<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: { type: Boolean },
    status: { type: String },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <Head title="Login — Raya Konstruksi" />

    <div class="login-page">
        <!-- Background photo -->
        <div class="login-bg"></div>
        <div class="login-overlay"></div>

        <!-- Left branding panel (desktop only) -->
        <div class="login-brand-panel">
            <Link href="/" class="login-logo">
                <img src="/assets/img/logo-raya-polos.webp" alt="Raya Konstruksi" class="login-logo-img" />
            </Link>
            <div class="login-brand-body">
                <h1 class="login-brand-title">Raya Konstruksi<br /><span class="login-brand-gold">Internasional</span></h1>
                <p class="login-brand-sub">Admin Portal — Authorized access only.</p>
            </div>
            <div class="login-brand-stats">
                <div class="login-stat">
                    <span class="login-stat-num">50+</span>
                    <span class="login-stat-label">Projects</span>
                </div>
                <div class="login-stat-div"></div>
                <div class="login-stat">
                    <span class="login-stat-num">1000+</span>
                    <span class="login-stat-label">Workforce</span>
                </div>
                <div class="login-stat-div"></div>
                <div class="login-stat">
                    <span class="login-stat-num">8+</span>
                    <span class="login-stat-label">Years</span>
                </div>
            </div>
        </div>

        <!-- Right: form panel -->
        <div class="login-form-panel">
            <!-- Mobile logo -->
            <Link href="/" class="login-mobile-logo">
                <img src="/assets/img/logo-raya-polos.webp" alt="Raya Konstruksi" />
            </Link>

            <div class="login-card">
                <div class="login-card-header">
                    <h2 class="login-card-title">Sign In</h2>
                    <p class="login-card-sub">Enter your credentials to access the admin panel.</p>
                </div>

                <!-- Status message -->
                <div v-if="status" class="login-status">{{ status }}</div>

                <form @submit.prevent="submit" class="login-form">

                    <!-- Email -->
                    <div class="login-field">
                        <label for="email" class="login-label">Email Address</label>
                        <div class="login-input-wrap">
                            <i class="bi bi-envelope login-input-icon"></i>
                            <input
                                id="email"
                                type="email"
                                v-model="form.email"
                                required autofocus
                                autocomplete="username"
                                placeholder="admin@example.com"
                                class="login-input"
                                :class="{ 'login-input--error': form.errors.email }"
                                style="color: #111827 !important; -webkit-text-fill-color: #111827 !important;"
                            />
                        </div>
                        <InputError :message="form.errors.email" class="login-error" />
                    </div>

                    <!-- Password -->
                    <div class="login-field">
                        <label for="password" class="login-label">Password</label>
                        <div class="login-input-wrap">
                            <i class="bi bi-lock login-input-icon"></i>
                            <input
                                id="password"
                                type="password"
                                v-model="form.password"
                                required
                                autocomplete="current-password"
                                placeholder="••••••••"
                                class="login-input"
                                :class="{ 'login-input--error': form.errors.password }"
                                style="color: #111827 !important; -webkit-text-fill-color: #111827 !important;"
                            />
                        </div>
                        <InputError :message="form.errors.password" class="login-error" />
                    </div>

                    <!-- Remember + Forgot -->
                    <div class="login-row">
                        <label class="login-remember">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span>Remember me</span>
                        </label>
                        <Link v-if="canResetPassword" :href="route('password.request')" class="login-forgot">
                            Forgot password?
                        </Link>
                    </div>

                    <!-- Submit -->
                    <button
                        type="submit"
                        class="login-btn"
                        :disabled="form.processing"
                        :class="{ 'login-btn--loading': form.processing }"
                    >
                        <span v-if="form.processing" class="login-btn-spinner"></span>
                        <span v-else>Sign In <i class="bi bi-arrow-right ms-2"></i></span>
                    </button>

                </form>

                <p class="login-back">
                    <Link href="/" class="login-back-link">
                        <i class="bi bi-arrow-left me-1"></i> Back to website
                    </Link>
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped>
/* ── Full-page layout ── */
.login-page {
    min-height: 100vh;
    display: grid;
    grid-template-columns: 1fr 480px;
    position: relative;
    overflow: hidden;
    font-family: "Pliant", system-ui, sans-serif;
}

/* Background photo */
.login-bg {
    position: fixed; inset: 0; z-index: 0;
    background-image: url('/assets/img/projects/airproduct/cover-1.webp');
    background-size: cover; background-position: center;
}
.login-overlay {
    position: fixed; inset: 0; z-index: 1;
    background: linear-gradient(
        105deg,
        rgba(5,12,35,0.92) 0%,
        rgba(10,25,70,0.80) 50%,
        rgba(5,12,35,0.65) 100%
    );
}

/* ── Left: brand panel ── */
.login-brand-panel {
    position: relative; z-index: 2;
    display: flex; flex-direction: column;
    justify-content: space-between;
    padding: clamp(40px, 6vw, 80px);
    padding-right: 60px;
}

.login-logo { display: inline-block; }
.login-logo-img { height: 44px; filter: brightness(0) invert(1); }

.login-brand-body { flex: 1; display: flex; flex-direction: column; justify-content: center; }
.login-brand-title {
    font-family: "Bricolage Grotesque", sans-serif;
    font-weight: 900;
    font-size: clamp(32px, 4vw, 52px);
    color: #fff; line-height: 1.1; margin: 0 0 16px;
}
.login-brand-gold { color: #F59E0B; }
.login-brand-sub {
    font-size: 14px; color: rgba(255,255,255,0.50);
    font-weight: 500; letter-spacing: 0.3px;
}

.login-brand-stats {
    display: flex; align-items: center; gap: 0;
    padding-top: 40px;
    border-top: 1px solid rgba(255,255,255,0.10);
}
.login-stat { display: flex; flex-direction: column; padding-right: 32px; }
.login-stat-num { font-family: "Bricolage Grotesque", sans-serif; font-size: 24px; font-weight: 900; color: #fff; line-height: 1; }
.login-stat-label { font-size: 11px; font-weight: 600; color: rgba(255,255,255,0.40); text-transform: uppercase; letter-spacing: 1.5px; margin-top: 4px; }
.login-stat-div { width: 1px; height: 32px; background: rgba(255,255,255,0.15); margin-right: 32px; flex-shrink: 0; }

/* ── Right: form panel ── */
.login-form-panel {
    position: relative; z-index: 2;
    display: flex; flex-direction: column;
    align-items: center; justify-content: center;
    padding: 40px 32px;
    background: rgba(255,255,255,0.97);
    backdrop-filter: blur(20px);
    -webkit-backdrop-filter: blur(20px);
    min-height: 100vh;
}

.login-mobile-logo { display: none; margin-bottom: 32px; }
.login-mobile-logo img { height: 40px; }

.login-card { width: 100%; max-width: 380px; }

.login-card-header { margin-bottom: 32px; }
.login-card-title {
    font-family: "Bricolage Grotesque", sans-serif;
    font-size: 28px; font-weight: 900;
    color: #1B2F6E; margin: 0 0 8px;
}
.login-card-sub { font-size: 13px; color: #6B7280; margin: 0; }

.login-status {
    background: #d1fae5; color: #065f46;
    border: 1px solid #a7f3d0;
    border-radius: 8px; padding: 10px 14px;
    font-size: 13px; font-weight: 500;
    margin-bottom: 20px;
}

/* Form */
.login-form { display: flex; flex-direction: column; gap: 20px; }

.login-field { display: flex; flex-direction: column; gap: 6px; }
.login-label { font-size: 12px; font-weight: 700; color: #374151; text-transform: uppercase; letter-spacing: 0.5px; }

.login-input-wrap { position: relative; }
.login-input-icon {
    position: absolute; left: 14px; top: 50%; transform: translateY(-50%);
    color: #9ca3af; font-size: 15px; pointer-events: none;
}
.login-input {
    width: 100%; padding: 12px 14px 12px 40px;
    border: 1.5px solid #e5e7eb; border-radius: 10px;
    font-size: 14px; color: #111827 !important; background: #f9fafb !important;
    outline: none;
    transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
    box-sizing: border-box;
    -webkit-text-fill-color: #111827;
}
.login-input:focus {
    border-color: #1B2F6E;
    background: #fff !important;
    box-shadow: 0 0 0 3px rgba(27,47,110,0.10);
    -webkit-text-fill-color: #111827;
}
/* Fix autofill background & text color */
.login-input:-webkit-autofill,
.login-input:-webkit-autofill:hover,
.login-input:-webkit-autofill:focus {
    -webkit-text-fill-color: #111827 !important;
    -webkit-box-shadow: 0 0 0px 1000px #fff inset !important;
    border-color: #1B2F6E;
}
.login-input--error { border-color: #ef4444; }
.login-error { font-size: 12px; color: #ef4444; margin-top: 2px; }

/* Remember + Forgot */
.login-row { display: flex; align-items: center; justify-content: space-between; }
.login-remember { display: flex; align-items: center; gap: 8px; font-size: 13px; color: #555; cursor: pointer; }
.login-forgot { font-size: 13px; font-weight: 600; color: #1B2F6E; text-decoration: none; }
.login-forgot:hover { color: #F59E0B; }

/* Submit button */
.login-btn {
    width: 100%; padding: 14px;
    background: #1B2F6E; color: #fff;
    border: none; border-radius: 10px;
    font-family: "Pliant", sans-serif;
    font-size: 14px; font-weight: 700;
    cursor: pointer; letter-spacing: 0.3px;
    display: flex; align-items: center; justify-content: center;
    transition: background 0.2s, transform 0.15s, box-shadow 0.2s;
    box-shadow: 0 4px 16px rgba(27,47,110,0.25);
}
.login-btn:hover:not(:disabled) { background: #142257; transform: translateY(-1px); box-shadow: 0 8px 24px rgba(27,47,110,0.35); }
.login-btn:disabled { opacity: 0.65; cursor: not-allowed; }
.login-btn-spinner {
    width: 18px; height: 18px;
    border: 2px solid rgba(255,255,255,0.30);
    border-top-color: #fff;
    border-radius: 50%;
    animation: spin 0.7s linear infinite;
}
@keyframes spin { to { transform: rotate(360deg); } }

/* Back to website */
.login-back { text-align: center; margin-top: 24px; }
.login-back-link { font-size: 13px; font-weight: 600; color: #9ca3af; text-decoration: none; transition: color 0.2s; }
.login-back-link:hover { color: #1B2F6E; }

/* Responsive */
@media (max-width: 767px) {
    .login-page { grid-template-columns: 1fr; }
    .login-brand-panel { display: none; }
    .login-form-panel { justify-content: flex-start; padding-top: 60px; }
    .login-mobile-logo { display: block; }
}
</style>
