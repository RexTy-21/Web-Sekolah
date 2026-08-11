<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('calon_siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nisn')->unique();
            $table->string('asal_sekolah');
            $table->string('nomor_hp');
            $table->text('alamat');
            $table->timestamps();
        });
    }
    public function down() {
        Schema::dropIfExists('calon_siswas');
    }
};