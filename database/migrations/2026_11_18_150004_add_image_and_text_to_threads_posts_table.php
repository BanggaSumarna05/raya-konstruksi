<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('threads_posts', function (Blueprint $table) {
            $table->string('image', 500)->nullable()->after('url');
            $table->text('text')->nullable()->after('image');
        });
    }

    public function down(): void
    {
        Schema::table('threads_posts', function (Blueprint $table) {
            $table->dropColumn(['image', 'text']);
        });
    }
};
