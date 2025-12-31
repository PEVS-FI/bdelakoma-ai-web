<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('team_members', static function (Blueprint $table) {
            $table->id();
            $table->string('title_before')->nullable();
            $table->string('first_name');
            $table->string('surname');
            $table->string('title_after')->nullable();
            $table->longText('annotation_sk')->nullable();
            $table->longText('annotation_en')->nullable();
            $table->json('skills_sk')->nullable();
            $table->json('skills_en')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
