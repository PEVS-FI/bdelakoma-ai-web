<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pages', static function (Blueprint $table) {
            $table->id();
            $table->string('title_sk')->index();
            $table->string('title_en')->index();
            $table->string('slug_sk')->unique();
            $table->string('slug_en')->unique();
            $table->string('photo')->nullable();
            $table->longText('text_sk')->nullable();
            $table->longText('text_en');
            $table->boolean('is_active')->default(false);
            $table->boolean('show_in_menu')->default(false);
            $table->integer('menu_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
