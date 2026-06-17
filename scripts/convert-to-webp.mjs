import sharp from 'sharp';
import { readdir, stat } from 'fs/promises';
import { join, extname, basename, dirname } from 'path';
import { existsSync } from 'fs';

const TARGET_DIR = 'public/assets/img';
const SUPPORTED_EXTS = ['.jpg', '.jpeg', '.png', '.jfif'];
const QUALITY = 85;

async function getAllImages(dir) {
  const entries = await readdir(dir, { withFileTypes: true });
  const files = [];

  for (const entry of entries) {
    const fullPath = join(dir, entry.name);
    if (entry.isDirectory()) {
      const subFiles = await getAllImages(fullPath);
      files.push(...subFiles);
    } else if (entry.isFile()) {
      const ext = extname(entry.name).toLowerCase();
      if (SUPPORTED_EXTS.includes(ext)) {
        files.push(fullPath);
      }
    }
  }

  return files;
}

async function convertToWebp(filePath) {
  const ext = extname(filePath).toLowerCase();
  const nameWithoutExt = basename(filePath, ext);
  const dir = dirname(filePath);
  const outputPath = join(dir, `${nameWithoutExt}.webp`);

  // Skip jika output sudah ada
  if (existsSync(outputPath)) {
    return { status: 'skipped', input: filePath, output: outputPath };
  }

  await sharp(filePath)
    .webp({ quality: QUALITY })
    .toFile(outputPath);

  const inputStat = await stat(filePath);
  const outputStat = await stat(outputPath);
  const saving = ((1 - outputStat.size / inputStat.size) * 100).toFixed(1);

  return {
    status: 'converted',
    input: filePath,
    output: outputPath,
    inputSize: (inputStat.size / 1024).toFixed(1) + ' KB',
    outputSize: (outputStat.size / 1024).toFixed(1) + ' KB',
    saving: saving + '%',
  };
}

async function main() {
  console.log(`\nScanning: ${TARGET_DIR}\n`);
  const images = await getAllImages(TARGET_DIR);
  console.log(`Found ${images.length} image(s) to process.\n`);

  let converted = 0, skipped = 0, failed = 0;
  let totalSavedBytes = 0;

  for (const img of images) {
    try {
      const result = await convertToWebp(img);
      if (result.status === 'converted') {
        console.log(`✓ ${result.input.replace(TARGET_DIR + '/', '')}`);
        console.log(`  ${result.inputSize} → ${result.outputSize} (saved ${result.saving})`);
        converted++;
      } else {
        console.log(`- SKIPPED (already exists): ${img}`);
        skipped++;
      }
    } catch (err) {
      console.error(`✗ FAILED: ${img}`);
      console.error(`  ${err.message}`);
      failed++;
    }
  }

  console.log('\n=== DONE ===');
  console.log(`Converted : ${converted}`);
  console.log(`Skipped   : ${skipped}`);
  console.log(`Failed    : ${failed}`);
  console.log('\nFile asli (.jpg/.png/dll) TIDAK dihapus.');
  console.log('Setelah semua referensi diupdate, kamu bisa hapus file aslinya.\n');
}

main().catch(console.error);
