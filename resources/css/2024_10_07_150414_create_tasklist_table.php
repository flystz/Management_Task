<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasklistTable extends Migration
{
    public function up(): void
    {
        Schema::create('tasklist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_departemen')->constrained('master_departemen')->onDelete('cascade');
            $table->string('nama_tasklist');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tasklist');
    }
}

