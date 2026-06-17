# Font Usage Guide - RAYA KONSTRUKSI

## Typography System

Proyek ini menggunakan dua font utama:

### 1. **Bricolage Grotesque** - Untuk Heading
- **Penggunaan**: h1, h2, h3, h4, h5, h6, title, headline
- **Weights**: 200–800 (variable font)
- **Karakteristik**: Ekspresif, modern, strong presence

### 2. **Pliant** - Untuk Body Text
- **Penggunaan**: Paragraf, deskripsi, body text, labels
- **Weights**: 100–900 (variable font)
- **Karakteristik**: Readable, clean, professional

---

## Implementasi di Tailwind

```javascript
// tailwind.config.js
theme: {
  extend: {
    fontFamily: {
      sans: ["Pliant", ...defaultTheme.fontFamily.sans],               // Default untuk body
      heading: ["Bricolage Grotesque", ...defaultTheme.fontFamily.sans], // Untuk heading
    },
  },
}
```

### Penggunaan Class Tailwind:
- `font-sans` → Pliant (default)
- `font-heading` → Bricolage Grotesque

---

## Implementasi di CSS

### CSS Variables (Recommended):
```css
:root {
  --font-head: "Bricolage Grotesque", sans-serif;  /* Untuk heading */
  --font-body: "Pliant", sans-serif;               /* Untuk body */
}

/* Gunakan variable */
h1, h2, h3, h4, h5, h6 {
  font-family: var(--font-head);
}

body, p {
  font-family: var(--font-body);
}
```

### Hardcoded (jika diperlukan):
```css
/* Heading only */
font-family: 'Bricolage Grotesque', sans-serif;

/* Body text */
font-family: 'Pliant', sans-serif;
```

---

## Best Practices

### ✅ DO:
- Gunakan Bricolage Grotesque untuk semua heading (h1-h6)
- Gunakan Pliant untuk semua body text
- Gunakan CSS variables (`var(--font-head)` dan `var(--font-body)`) untuk consistency
- Gunakan Tailwind classes (`font-heading` dan `font-sans`) di Vue components

### ❌ DON'T:
- Jangan mix fonts untuk tujuan yang sama
- Jangan hardcode font-family di banyak tempat (use variables)
- Jangan gunakan Bricolage Grotesque untuk body text

---

## Font Loading

Font dimuat via Google Fonts di `app.blade.php`:

```html
<!-- Google Fonts — Bricolage Grotesque (headings) + Pliant (body) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&family=Pliant:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />
```

**Font Display Strategy**: `swap` — browser render dengan fallback dulu, lalu swap ke Pliant/Bricolage Grotesque begitu font selesai download.

---

## Fallback Fonts

Fallback fonts dikonfigurasi di `app.blade.php` untuk mencegah CLS:

```css
@font-face {
  font-family: 'Bricolage Grotesque';
  src: local('Arial Black'), local('Arial Bold');
  font-weight: 200 800;
  size-adjust: 105%;
  /* ... metric overrides */
}

@font-face {
  font-family: 'Pliant';
  src: local('Arial'), local('Helvetica Neue');
  font-weight: 100 900;
  size-adjust: 100%;
  /* ... metric overrides */
}
```

---

## Examples

### Vue Component:
```vue
<template>
  <!-- Heading menggunakan Bricolage Grotesque -->
  <h1 class="font-heading text-4xl font-bold">
    Building Tomorrow, Today
  </h1>
  
  <!-- Body menggunakan Pliant (default) -->
  <p class="text-base text-gray-600">
    Excellence meets innovation to deliver unparalleled solutions.
  </p>
</template>

<style scoped>
/* Atau menggunakan CSS variables */
.custom-title {
  font-family: var(--font-head);
  font-weight: 800;
}

.custom-body {
  font-family: var(--font-body);
  font-weight: 400;
}
</style>
```

---

## Reference Files

- **Tailwind Config**: `tailwind.config.js`
- **CSS Variables**: `public/assets/css/raya-design-system.css`
- **Font Loading**: `resources/views/app.blade.php`
