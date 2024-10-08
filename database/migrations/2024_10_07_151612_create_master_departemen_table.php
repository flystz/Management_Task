<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDepartemenTable extends Migration
{
    public function up(): void
    {
        Schema::create('master_departemen', function (Blueprint $table) {
            $table->id('id_departemen');
            $table->string('nama_departemen');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('master_departemen');
    }
}

