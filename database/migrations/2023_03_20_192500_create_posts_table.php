<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("post_id")->unique();
            $table->string("name", 255);
            $table->string("hash")->unique();
            $table->text("description")->nullable();
            $table->string("singer");
            $table->string("subtitle")->default("@mern_music");
            $table->bigInteger("post_length");
            $table->bigInteger("start")->default(0);
            $table->bigInteger("end");
            $table->bigInteger("music_length");
            $table->boolean("is_posted");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
