# PROMPT IMPLEMENTASI HOMEPAGE — rayakonstruksi.com
> Berdasarkan desain UI/UX yang sudah dibuat + koreksi dari review compro 2025
> Stack: Laravel 11 + Inertia.js + Vue.js
> Jalankan SATU prompt per sesi. Jangan skip urutan.

---

## ⚠️ KONTEKS WAJIB — Paste di awal SETIAP sesi

```
Kamu adalah senior frontend developer Vue.js yang mengimplementasi homepage rayakonstruksi.com.

Tech stack:
- Laravel 11 + Inertia.js + Vue 3 (Composition API)
- Tailwind CSS
- File halaman ada di: resources/js/Pages/
- Komponen ada di: resources/js/Components/

Brand system (TIDAK BOLEH DILANGGAR):
- Primary: #1B2F6E
- Secondary: #3A5DB0
- Background: #FFFFFF
- Text utama: #1A1A1A
- Text secondary: #555555
- Heading: font-weight 900, UPPERCASE
- Divider: div lebar 40px, tinggi 4px, background #1B2F6E
- Foto: border-radius 24px
- Accent block dekorasi: kotak solid #1B2F6E

ATURAN KERAS:
- Jangan ubah routing, controller, atau file Laravel apapun
- Jangan install package baru tanpa bilang dulu
- Jangan ubah file selain yang disebutkan di tiap prompt
- Jika ada yang tidak yakin, tanya dulu — jangan asumsi
- Setiap selesai, sebutkan file apa saja yang diubah
```

---

## PROMPT 1 — Hero Section

```
TUGAS: Implementasi hero section homepage sesuai desain, dengan koreksi berikut.

Buka file: resources/js/Pages/Home.vue (atau file homepage yang relevan)

STRUKTUR YANG DIIMPLEMENTASI:
- Layout: full-width, tinggi 100vh atau minimal 600px
- Foto background: foto industrial dari assets (gunakan path yang sudah ada)
- Overlay: tambahkan div overlay gradient dari kiri ke transparan
  - CSS: background: linear-gradient(to right, rgba(27,47,110,0.85) 40%, rgba(27,47,110,0) 100%)
  - Ini supaya teks kiri terbaca tanpa merusak foto di kanan

KONTEN TEKS (posisi: kiri bawah, z-index di atas overlay):
- Heading: "BUILDING TOMORROW, TODAY"
  - Ambil dari compro, bukan "Reliable Construction & Engineering Solutions..."
  - Class Tailwind: text-5xl lg:text-7xl font-black uppercase text-white leading-none
- Divider: div w-10 h-1 bg-white mb-4 (sebelum subtext)
- Subtext: "Excellence meet innovation to deliver unparalleled solutions for all your needs."
  - Class: text-lg text-white/80 max-w-md font-normal
- Tombol CTA: "EXPLORE OUR SERVICES"
  - Style: bg-white text-[#1B2F6E] font-bold px-8 py-3 hover:bg-[#1B2F6E] hover:text-white transition border-2 border-white
  - Link ke: /what-we-do

JANGAN:
- Jangan pakai warna-warni di hero (hanya navy + putih)
- Jangan tambahkan teks subheading panjang di atas heading utama
- Jangan ubah foto background yang sudah ada, cukup tambahkan overlay

Tampilkan kode lengkap section ini saja, jangan file penuh.
```

---

## PROMPT 2 — Service Cards (Ganti Warna-warni)

```
TUGAS: Ganti 4 service cards bawah hero yang sekarang warna-warni (hijau/kuning/biru/merah) menjadi konsisten dengan brand navy.

Cari komponen service cards di homepage. Kemungkinan ada di:
- resources/js/Components/ServiceCards.vue
- atau inline di Home.vue

DATA YANG BENAR (dari compro 2025, ganti nama yang salah):
1. "Fabrication & Construction" — icon: settings/tool
2. "Catalyst Handling" — icon: flask/lab (BUKAN "Catalyst Loading")  
3. "Operation & Maintenance" — icon: gear/maintenance (BUKAN "Plant Maintenance")
4. "Civil & Road Works" — icon: road/construction (BUKAN "Soil & Civil Works")

STYLE BARU (hapus warna-warni, pakai sistem berikut):
- Semua 4 card: background #1B2F6E
- Hover state: background #3A5DB0
- Icon: warna putih
- Judul: text-white font-bold uppercase text-sm
- Deskripsi: text-white/70 text-xs
- Layout: grid 4 kolom di desktop, 2 kolom di tablet, 1 kolom di mobile
- Border-radius: 0 (kotak tegas, sesuai estetika industrial compro)
- Padding: p-6

Tampilkan hanya kode komponen card-nya, bukan seluruh halaman.
```

---

## PROMPT 3 — Raya At a Glance + Stats

```
TUGAS: Implementasi section "Raya At a Glance" dan stats sesuai desain, dengan koreksi data.

LAYOUT:
- Grid 2 kolom di desktop: foto kiri (50%), konten kanan (50%)
- Foto: border-radius 24px, object-cover, tinggi 400px
- Di pojok kiri bawah foto: accent block kotak solid #1B2F6E ukuran 80x80px (dekorasi, posisi absolute)

KONTEN KANAN:
- Label atas: "RAYA AT A GLANCE" — text-xs font-bold tracking-widest text-[#1B2F6E] uppercase
- Heading: "RAYA IS A TRUSTED CONSTRUCTION COMPANY BASED IN INDONESIA."
  - Class: text-3xl lg:text-4xl font-black uppercase text-[#1B2F6E] leading-tight
- Divider: div w-10 h-1 bg-[#1B2F6E] my-4
- Body text: sesuai desain, text-[#555555] text-base

STATS (DATA YANG DIKOREKSI — sesuaikan dengan data compro):
Ganti "20+ Completed Projects" → "36+ Completed Projects" (sesuai jumlah project di compro)
Pertahankan:
- 750+ Skilled Manpower
- 10+ Years Experience  
- 1,000,000+ Safe Manhours

Style stats:
- Angka: text-3xl font-black text-[#1B2F6E]
- Label: text-xs text-[#555555] uppercase tracking-wide
- Grid: 4 kolom, border-top 1px solid #E5E5E5 di atas section stats
- Icon: gunakan yang sudah ada, warna #1B2F6E

Tampilkan kode section ini saja.
```

---

## PROMPT 4 — Trusted By (Client Logos)

```
TUGAS: Implementasi section "Trusted By" dengan logo client.

PENTING — Verifikasi dulu:
Buka file Home.vue, cari section "Trusted By". Tampilkan kode yang sudah ada sebelum mengubah apapun.

Setelah ditampilkan, lakukan perubahan berikut:
1. Heading "TRUSTED BY": text-xs font-bold tracking-widest text-[#555555] uppercase, center
2. Garis divider kiri-kanan heading: gunakan flex items-center gap-4 dengan hr flex-1
3. Logo client: grayscale by default, hover: grayscale-0 (full color), transition-all duration-300
4. Layout: flex row, justify-center, items-center, gap-8 lg:gap-16, flex-wrap
5. Tinggi logo: max-h-10 object-contain

Client yang WAJIB ada (dari compro): Pertamina, Pupuk Indonesia, Chandra Asri, PLN, Kideco
Jika ada client lain yang sudah ada tapi tidak di list ini — tanya dulu sebelum hapus.

Tampilkan kode section ini saja.
```

---

## PROMPT 5 — Why Choose Raya

```
TUGAS: Implementasi section "Why Choose Raya" sesuai desain.

LAYOUT: 2 kolom — list keunggulan di kiri, konten tambahan di kanan (atau full width jika tidak ada konten kanan)

DATA (5 poin, gunakan persis ini):
1. "Experienced Industrial Team" — "Supported by skilled professionals with extensive industry experience."
2. "Strong Safety Culture" — "Safety is our top priority in every project we deliver."
3. "Certified & Compliant" — "We adhere to international standards and industry best practices."
4. "On-Time Project Delivery" — "Committed to delivering quality work on schedule."
5. "Nationwide Coverage" — "Serving industrial projects across Indonesia."

STYLE setiap item:
- Icon circle: w-10 h-10 rounded-full bg-[#1B2F6E] flex items-center justify-center
- Icon: warna putih, ukuran 20px
- Judul: font-bold text-[#1B2F6E] text-sm uppercase
- Deskripsi: text-[#555555] text-sm
- Layout item: flex gap-4 items-start
- Spacing antar item: gap-6

Heading section:
- "WHY CHOOSE RAYA": text-xs font-bold tracking-widest text-[#1B2F6E] uppercase
- Tidak perlu heading besar — label kecil sudah cukup untuk section ini

Tampilkan kode section ini saja.
```

---

## PROMPT 6 — Featured Projects (Koreksi Data)

```
TUGAS: Implementasi section "Featured Projects" dengan data yang benar.

⚠️ MASALAH YANG HARUS DIPERBAIKI:
Desain saat ini menggunakan data project fiktif (Plaju South Sumatra, Gresik East Java) yang tidak ada di compro. Ganti dengan data real berikut.

DATA FEATURED PROJECTS (ambil 3 project terbaru dari compro):

Project 1:
- Nama: "LINE Ethylene Complex Project"
- Client: PT Lotte Chemical Indonesia
- Lokasi: Cilegon, Banten
- Service: Fabrication & Construction
- Periode: Jan 2023 – Nov 2024

Project 2:
- Nama: "Air Products SMIP Mechanical & Piping"
- Client: PT Air Products Indonesia Gases
- Lokasi: Sei Mangkei, Sumatera Utara
- Service: Operation & Maintenance
- Periode: Jan 2023 – Jun 2025

Project 3:
- Nama: "RDMP RU-V Balikpapan Tanks Project"
- Client: RDMP JO / Pertamina
- Lokasi: Balikpapan, Kalimantan Timur
- Service: Fabrication & Construction
- Periode: Mar 2022 – Feb 2025

STYLE card project:
- Background: #FFFFFF
- Border: 1px solid #E5E5E5
- Border-radius: 8px
- Foto: aspect-ratio 16/9, object-cover, border-radius 8px 8px 0 0
- Tag service: bg-[#1B2F6E] text-white text-xs font-bold px-3 py-1 rounded-full — posisi absolute di atas foto
- Nama project: font-bold text-[#1A1A1A] text-base
- Client & lokasi: text-[#555555] text-xs
- Link "VIEW CASE STUDY →": text-[#1B2F6E] font-bold text-xs hover:underline

Heading section:
- "FEATURED PROJECTS": text-xs font-bold tracking-widest text-[#1B2F6E] uppercase
- Link "VIEW ALL PROJECTS →": text-[#1B2F6E] text-sm font-bold — posisi kanan, sejajar heading

JANGAN buat halaman detail project dulu — link "VIEW CASE STUDY" cukup mengarah ke /projects untuk sekarang.

Tampilkan kode section ini saja.
```

---

## PROMPT 7 — Certifications & Testimonial

```
TUGAS: Implementasi section Certifications dan koreksi section Testimonial.

=== CERTIFICATIONS ===
DATA (dari compro, 5 sertifikasi):
1. ISO 9001 — Quality Management
2. ISO 14001 — Environmental Management
3. ISO 45001 — Occupational Health & Safety
4. SMK3 — Safety Management System
5. TKDN — Domestic Component Level

Style:
- Layout: flex row, gap-8, flex-wrap, justify-start
- Setiap item: flex flex-col items-center gap-2
- Logo sertifikasi: max-h-16 object-contain (gunakan gambar yang sudah ada)
- Label: text-xs text-[#555555] text-center max-w-16

=== TESTIMONIAL (KOREKSI PENTING) ===
⚠️ MASALAH: Testimonial saat ini dari "Project Manager, National Oil & Gas Company" — anonim, tidak credible untuk B2B.

SOLUSI: Ganti dengan format yang lebih aman:
- Hapus quote testimonial anonim
- Ganti dengan section sederhana: highlight angka kepuasan atau achievement
- Alternatif konten:

"36+ PROJECTS COMPLETED ACROSS INDONESIA WITH ZERO MAJOR INCIDENTS"

Style alternatif:
- Background: #1B2F6E
- Text: text-white text-3xl font-black uppercase text-center
- Sub-text: "Trusted by Indonesia's leading industrial companies" — text-white/70 text-center text-base
- Padding: py-16

Jika owner/bos punya testimonial real dengan nama dan perusahaan yang bisa disebutkan, tanya dulu sebelum implementasi testimonial. Jangan gunakan testimonial anonim.

Tampilkan kode kedua section ini.
```

---

## PROMPT 8 — Locations & Latest News

```
TUGAS: Implementasi section "Our Locations" dan "Latest News".

=== OUR LOCATIONS ===
KOREKSI DATA — gunakan data alamat dari compro:

Lokasi yang benar:
1. Jakarta (Head Office) — Talavera Office Park 15th Floor, Jl. TB Simatupang No. 23, Jakarta Selatan
2. Balikpapan — Kalimantan Timur (project area)
3. Sei Mangkei — Sumatera Utara (project area)
4. Pekanbaru — Riau Branch Office

HAPUS dari list: "Gresik, East Java" dan "Makassar, South Sulawesi" — tidak ada di data compro.

Style list lokasi:
- Icon pin: warna #1B2F6E
- Nama kota: font-bold text-[#1A1A1A] text-sm
- Sub-label (provinsi): text-[#555555] text-xs

Peta Indonesia:
- Jika ada komponen peta, warna fill peta: #1B2F6E opacity-20
- Pin/marker di peta: warna #1B2F6E solid
- Jangan hapus komponen peta jika sudah ada

=== LATEST NEWS ===
⚠️ PENTING: Jangan hardcode konten berita. Berita harus dynamic dari database/CMS.

Cek apakah data news sudah di-pass dari controller Laravel via Inertia props.
Tampilkan kode controller dan props yang digunakan sebelum mengubah apapun.

Jika data sudah ada via props:
- Render 3 berita terbaru saja
- Style card: flex row (foto kiri 80x80px + konten kanan), gap-4
- Foto: rounded-lg object-cover w-20 h-20 flex-shrink-0
- Judul: font-bold text-[#1A1A1A] text-sm hover:text-[#1B2F6E]
- Tanggal: text-[#888888] text-xs
- Link "VIEW ALL NEWS →": text-[#1B2F6E] font-bold text-sm

Jika data belum ada via props — JANGAN buat data dummy. Laporkan dan hentikan.

Tampilkan kode section ini saja.
```

---

## PROMPT 9 — Final Cleanup & Mobile Responsiveness

```
TUGAS: Cek responsiveness dan cleanup homepage setelah semua section selesai.

Buka file Home.vue. Lakukan review berikut dan LAPORKAN dulu sebelum fix:

CHECKLIST RESPONSIVENESS:
1. Hero section — apakah teks terbaca di mobile (< 768px)? Heading harus min text-3xl di mobile
2. Service cards — apakah grid berubah jadi 1 kolom di mobile?
3. Raya At a Glance — apakah foto dan konten stack vertikal di mobile (foto di atas, konten di bawah)?
4. Stats — apakah 4 kolom berubah jadi 2 kolom di mobile?
5. Featured Projects — apakah 3 card berubah jadi 1 kolom di mobile?
6. Client logos — apakah wrap dan tidak overflow di mobile?

CHECKLIST VISUAL KONSISTENSI:
1. Apakah masih ada warna selain #1B2F6E, #3A5DB0, #FFFFFF, #1A1A1A, #555555?
2. Apakah service cards sudah tidak warna-warni?
3. Apakah heading semua section sudah UPPERCASE?
4. Apakah data project sudah menggunakan data real (bukan Plaju/Gresik)?
5. Apakah testimonial anonim sudah dihapus?

Format laporan:
✅ [item] — OK
⚠️ [item] — Ada masalah: [penjelasan singkat]

Setelah laporan, tunggu konfirmasi sebelum fix.
```

---

## CATATAN PENTING

**Urutan wajib:** 1 → 2 → 3 → 4 → 5 → 6 → 7 → 8 → 9

**Sebelum mulai prompt 6 (Featured Projects):**
Pastikan foto project sudah ada di storage. Kalau belum, gunakan placeholder dengan class `bg-[#1B2F6E]/10` dulu — jangan pakai foto dari internet.

**Sebelum mulai prompt 8 (News):**
Cek dulu ke bos apakah fitur news/blog sudah aktif di CMS Filament. Kalau belum ada data, section news bisa disembunyikan dulu dengan `v-if`.

**Yang TIDAK perlu dikerjakan sekarang:**
- Halaman detail project (case study)
- Fitur filter project
- Animasi scroll
- Dark mode
```
