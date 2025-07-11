<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('gudangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kode')->unique();
            $table->text('alamat')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gudangs');
    }
}; 