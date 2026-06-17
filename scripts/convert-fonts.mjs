/**
 * Convert TTF fonts to WOFF2 for better compression (~30% smaller).
 * Usage: node scripts/convert-fonts.mjs
 */
import { compress } from 'wawoff2';
import fs from 'fs';
import path from 'path';

const FONT_DIR = 'public/assets/font';

// Only convert the 3 fonts actually used in production
const fonts = [
    path.join(FONT_DIR, 'Pliant', 'Pliant-VariableFont_wdth,wght.ttf'),
    path.join(FONT_DIR, 'Pliant', 'Pliant-Italic-VariableFont_wdth,wght.ttf'),
    path.join(FONT_DIR, 'BricolageGrotesque', 'BricolageGrotesque-VariableFont_opsz,wdth,wght.ttf'),
];

let converted = 0;

for (const ttfPath of fonts) {
    const woff2Path = ttfPath.replace(/\.ttf$/, '.woff2');

    if (fs.existsSync(woff2Path)) {
        console.log(`  SKIP (already exists): ${woff2Path}`);
        continue;
    }

    if (!fs.existsSync(ttfPath)) {
        console.warn(`  WARN: TTF not found — ${ttfPath}`);
        continue;
    }

    const ttfBuffer = fs.readFileSync(ttfPath);
    const woff2Buffer = await compress(ttfBuffer);
    fs.writeFileSync(woff2Path, woff2Buffer);

    const savings = ((1 - woff2Buffer.length / ttfBuffer.length) * 100).toFixed(1);
    console.log(`  OK: ${path.basename(ttfPath)} → .woff2 (${savings}% smaller)`);
    converted++;
}

console.log(`\nDone. Converted ${converted} font(s).`);
