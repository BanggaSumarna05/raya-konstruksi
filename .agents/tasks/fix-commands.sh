#!/bin/bash
# ============================================================
# INVESTIGASI & FIX: Admin Panel 500 Error
# Raya Konstruksi - Production Server
# ============================================================
# 
# CATATAN PENTING:
# Error 500 terjadi di SEMUA path admin (/admin dan /rk-8472)
# Ini menunjukkan ada masalah fundamental di server production
# ============================================================

echo "🔍 Starting Investigation untuk Admin Panel 500 Error..."
echo "============================================================"

# Pastikan kita berada di folder production yang benar
cd /home/rayakonstruksi/public_html/raya-konstruksi || exit 1

echo "📍 Current Directory: $(pwd)"
echo ""

# ── STEP 1: Cek Laravel Error Log ───────────────────────────
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📋 STEP 1: Checking Laravel Error Logs"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
if [ -f storage/logs/laravel.log ]; then
    echo "📄 Latest 50 lines from Laravel log:"
    echo "------------------------------------------------------------"
    tail -n 50 storage/logs/laravel.log
    echo "------------------------------------------------------------"
    echo ""
else
    echo "⚠️  Laravel log file tidak ditemukan!"
    echo ""
fi

# ── STEP 2: Cek File .env ───────────────────────────────────
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📋 STEP 2: Checking .env File"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
if [ -f .env ]; then
    echo "✅ File .env EXISTS"
    echo "   Size: $(stat -f%z .env 2>/dev/null || stat -c%s .env 2>/dev/null) bytes"
    echo "   Modified: $(stat -f%Sm .env 2>/dev/null || stat -c%y .env 2>/dev/null)"
    echo ""
    echo "🔑 APP_KEY status:"
    if grep -q "APP_KEY=base64:" .env; then
        echo "   ✅ APP_KEY is set"
    else
        echo "   ❌ APP_KEY is NOT set or invalid!"
        echo "   🔧 Run: /usr/local/bin/php artisan key:generate"
    fi
    echo ""
    echo "🗄️  Database config:"
    grep "^DB_" .env || echo "   ⚠️  No DB_ config found!"
    echo ""
else
    echo "❌ File .env TIDAK DITEMUKAN!"
    echo "🔧 Solution:"
    echo "   cp .env.example .env"
    echo "   nano .env  # Edit database credentials"
    echo "   /usr/local/bin/php artisan key:generate"
    echo ""
fi

# ── STEP 3: Cek Permission ──────────────────────────────────
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📋 STEP 3: Checking Permissions"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📁 storage/ permission:"
ls -ld storage
echo ""
echo "📁 bootstrap/cache/ permission:"
ls -ld bootstrap/cache
echo ""

STORAGE_PERM=$(stat -f%A storage 2>/dev/null || stat -c%a storage 2>/dev/null)
CACHE_PERM=$(stat -f%A bootstrap/cache 2>/dev/null || stat -c%a bootstrap/cache 2>/dev/null)

if [ "$STORAGE_PERM" != "775" ]; then
    echo "⚠️  storage/ permission is $STORAGE_PERM (should be 775)"
    echo "🔧 Fix: chmod -R 775 storage"
    echo ""
fi

if [ "$CACHE_PERM" != "775" ]; then
    echo "⚠️  bootstrap/cache/ permission is $CACHE_PERM (should be 775)"
    echo "🔧 Fix: chmod -R 775 bootstrap/cache"
    echo ""
fi

# ── STEP 4: Cek Vendor Directory ────────────────────────────
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📋 STEP 4: Checking Vendor Directory"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
if [ -d vendor ]; then
    VENDOR_SIZE=$(du -sh vendor | cut -f1)
    echo "✅ vendor/ directory exists (Size: $VENDOR_SIZE)"
    
    # Cek apakah Filament terinstall
    if [ -d vendor/filament ]; then
        echo "✅ Filament is installed"
    else
        echo "❌ Filament NOT found in vendor/"
        echo "🔧 Run: /usr/local/bin/php -d allow_url_fopen=On /usr/local/bin/composer install --no-dev"
    fi
else
    echo "❌ vendor/ directory TIDAK DITEMUKAN!"
    echo "🔧 Run: /usr/local/bin/php -d allow_url_fopen=On /usr/local/bin/composer install --no-dev"
fi
echo ""

# ── STEP 5: Test Database Connection ────────────────────────
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📋 STEP 5: Testing Database Connection"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
/usr/local/bin/php artisan db:show 2>&1 || echo "❌ Database connection FAILED!"
echo ""

# ── STEP 6: Cek PHP Version & Extensions ────────────────────
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📋 STEP 6: Checking PHP Version & Extensions"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "🐘 PHP Version:"
/usr/local/bin/php -v | head -n 1
echo ""
echo "📦 Required Extensions:"
for ext in pdo pdo_mysql mbstring xml curl zip gd intl bcmath; do
    if /usr/local/bin/php -m | grep -q "^$ext$"; then
        echo "   ✅ $ext"
    else
        echo "   ❌ $ext (NOT INSTALLED)"
    fi
done
echo ""

# ── STEP 7: Cek Cache Status ────────────────────────────────
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
echo "📋 STEP 7: Checking Cache Status"
echo "━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━"
/usr/local/bin/php artisan about | grep -A 5 "Cache"
echo ""

# ── SUMMARY ─────────────────────────────────────────────────
echo "============================================================"
echo "📊 INVESTIGATION SUMMARY"
echo "============================================================"
echo ""
echo "Silakan review output di atas dan cari:"
echo "  ❌ Error messages di Laravel log"
echo "  ❌ Missing .env atau APP_KEY"
echo "  ❌ Permission issues (bukan 775)"
echo "  ❌ Missing vendor/ atau Filament"
echo "  ❌ Database connection errors"
echo "  ❌ Missing PHP extensions"
echo ""
echo "Setelah menemukan masalahnya, jalankan fix yang sesuai."
echo "============================================================"
