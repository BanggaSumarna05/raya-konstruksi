# Font Display Fix - Change Summary

## Tanggal: 2024
## Tujuan: Memisahkan font Montserrat (heading) dan Inter (body) dengan benar

---

## Perubahan yang Dilakukan

### 1. **tailwind.config.js** ✅
```javascript
// BEFORE:
fontFamily: {
  sans: ["Montserrat", ...defaultTheme.fontFamily.sans],  // ❌ Salah - body jadi Montserrat
  heading: ["Montserrat", ...defaultTheme.fontFamily.sans],
}

// AFTER:
fontFamily: {
  sans: ["Inter", ...defaultTheme.fontFamily.sans],       // ✅ Benar - body pakai Inter
  heading: ["Montserrat", ...defaultTheme.fontFamily.sans], // ✅ Heading tetap Montserrat
}
```

**Impact**: 
- Default font (`.font-sans`) sekarang menggunakan Inter
- Body text otomatis menggunakan Inter karena Tailwind default
- Heading tetap menggunakan Montserrat via `.font-heading` class

---

### 2. **public/assets/css/raya-design-system.css** ✅

Ditambahkan dokumentasi yang lebih jelas:

```css
/*
 * FONT USAGE:
 * - Heading (h1-h6, titles, headlines): Montserrat (var(--font-head))
 * - Body (paragraphs, text, descriptions): Inter (var(--font-body))
 */

:root {
  /* Typography */
  --font-head: "Montserrat", sans-serif;  /* For headings only */
  --font-body: "Inter", sans-serif;       /* For body text */
}
```

---

### 3. **FONT-USAGE.md** ✅ (NEW FILE)

Dibuat file dokumentasi lengkap yang berisi:
- Penjelasan penggunaan font
- Best practices
- Examples untuk Vue components
- Reference ke file-file terkait

---

## File yang TIDAK Diubah (Already Correct)

### ✅ resources/views/app.blade.php
```css
body {
  font-family: "Inter", system-ui, sans-serif;  /* ✅ Sudah benar */
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Montserrat", sans-serif;  /* ✅ Sudah benar */
}
```

### ✅ Google Fonts Loading
```html
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800;900&family=Inter:wght@300;400;500;600;700;800;900&display=optional" />
```
Sudah memuat kedua font dengan benar.

---

## Testing Checklist

Setelah perubahan ini, pastikan untuk test:

### Visual Testing:
- [ ] Body text menggunakan Inter (terlihat lebih ringan & readable)
- [ ] Heading (h1-h6) menggunakan Montserrat (terlihat lebih bold)
- [ ] Tidak ada font flash/CLS saat page load
- [ ] Font rendering consistent di semua pages

### Technical Testing:
```bash
# 1. Rebuild Tailwind CSS
npm run build
# atau untuk development
npm run dev

# 2. Clear browser cache
# 3. Test di Chrome DevTools:
#    - Inspect element → Computed → font-family
#    - Body elements should show: Inter
#    - Heading elements should show: Montserrat
```

---

## Browser DevTools Inspection

### Expected Results:

**Body Text (`<p>`, `.section-body`, etc):**
```
font-family: "Inter", system-ui, sans-serif
```

**Headings (`<h1>-<h6>`, `.section-title`, etc):**
```
font-family: "Montserrat", sans-serif
```

---

## Rollback Instructions

Jika ada masalah, revert `tailwind.config.js`:

```javascript
fontFamily: {
  sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
  heading: ["Montserrat", ...defaultTheme.fontFamily.sans],
}
```

Kemudian rebuild:
```bash
npm run build
```

---

## Notes

- Perubahan ini **backwards compatible** dengan existing Vue components yang menggunakan hardcoded `font-family: "Montserrat"` atau `font-family: "Inter"`
- CSS variables (`var(--font-head)` dan `var(--font-body)`) tetap sama
- Font loading strategy (`display=optional`) tidak diubah untuk menjaga performance

---

## Related Files

- `tailwind.config.js` - Tailwind font configuration
- `resources/views/app.blade.php` - Font loading & global styles
- `public/assets/css/raya-design-system.css` - CSS variables & design tokens
- `FONT-USAGE.md` - Font usage documentation (NEW)
