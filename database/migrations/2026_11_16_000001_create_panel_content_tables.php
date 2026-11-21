<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Equipment / fleet (halaman /equipment — sebelumnya hardcoded di Vue)
        Schema::create('equipments', function (Blueprint $table) {
            $table->id();
            $table->string('brand');          // HYUNDAI, KOBELCO, ...
            $table->string('type');           // Excavator, Crawler Crane, ...
            $table->string('model');          // SK200, 7055-3F, ...
            $table->string('years')->nullable(); // 2015-2019, 2024, ...
            $table->unsignedInteger('qty')->default(1);
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 2. Offices (halaman /contact-us — sebelumnya hardcoded di Vue)
        Schema::create('offices', function (Blueprint $table) {
            $table->id();
            $table->string('name');                 // Head Office, Workshop, ...
            $table->string('icon')->default('bi-geo-alt');
            $table->text('address');
            $table->string('maps_url')->nullable();  // link tombol Google Maps
            $table->text('embed_url')->nullable();   // iframe embed (opsional)
            $table->string('phone')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 3. Project locations (marker peta interaktif di homepage)
        Schema::create('project_locations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 10, 7);
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 4. Careers (lowongan di halaman /careers)
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('location')->nullable();
            $table->string('employment_type')->nullable(); // Full-time, Contract, ...
            $table->text('description')->nullable();
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // 5. Settings (key-value: email inquiry, instagram, dll)
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();
            $table->text('value')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
        Schema::dropIfExists('careers');
        Schema::dropIfExists('project_locations');
        Schema::dropIfExists('offices');
        Schema::dropIfExists('equipments');
    }
};
