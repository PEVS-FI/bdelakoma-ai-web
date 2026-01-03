<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', static function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('menu_title_sk')->index();
            $table->string('menu_title_en')->index();
            $table->string('title_sk')->index();
            $table->string('title_en')->index();
            $table->string('length_sk')->nullable();
            $table->string('length_en')->nullable();
            $table->string('slug_sk')->unique();
            $table->string('slug_en')->unique();
            $table->text('abstract_sk')->nullable();
            $table->text('abstract_en')->nullable();
            $table->longText('text_sk')->nullable();
            $table->longText('text_en')->nullable();
            $table->boolean('is_active')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
