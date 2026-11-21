<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('linkedin_posts', function (Blueprint $table) {
            $table->id();
            $table->string('url', 500);
            $table->unsignedInteger('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        $posts = [
            'urn:li:share:7419212018609680384',
            'urn:li:share:7416807758823391233',
            'urn:li:share:7416807549393461249',
            'urn:li:share:7379845617990356992',
            'urn:li:share:7379361489352192000',
            'urn:li:share:7373984848153292800',
            'urn:li:share:7370785958134231041',
            'urn:li:share:7370786151672000512',
            'urn:li:share:7368933077215055872',
            'urn:li:share:7368551084253986818',
            'urn:li:share:7368294514458836994',
            'urn:li:share:7368294009443635200',
        ];

        foreach ($posts as $index => $urn) {
            DB::table('linkedin_posts')->insert([
                'url' => 'https://www.linkedin.com/embed/feed/update/'.$urn,
                'order' => $index + 1,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('linkedin_posts');
    }
};
