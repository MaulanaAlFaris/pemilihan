<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
// {
//     /**
//      * Run the migrations.
//      */
//     public function up(): void
//     {
//         //
//     }

//     /**
//      * Reverse the migrations.
//      */
//     public function down(): void
//     {
//         //
//     }
// };
{
    public function up()
    {
        // Tabel pemilihans
        Schema::create('pemilihans', function (Blueprint $table) {
            $table->id('id_pemilihan');
            $table->string('nama_pemilihan');
            $table->timestamps();
        });

        // Tabel partais
        Schema::create('partais', function (Blueprint $table) {
            $table->id('id_partai');
            $table->string('nama_partai');
            $table->timestamps();
        });

        // Tabel dapils
        Schema::create('dapils', function (Blueprint $table) {
            $table->id('id_dapil');
            $table->string('nomor_dapil');
            $table->timestamps();
        });

        // Tabel calegs
        Schema::create('calegs', function (Blueprint $table) {
            $table->id('id_caleg');
            $table->unsignedBigInteger('pemilihan_id');
            $table->unsignedBigInteger('partai_id');
            $table->unsignedBigInteger('dapil_id');
            $table->integer('no_urut');
            $table->string('nama_caleg');
            $table->timestamps();
    
            $table->foreign('pemilihan_id')->references('id_pemilihan')->on('pemilihans')->onDelete('cascade');
            $table->foreign('partai_id')->references('id_partai')->on('partais')->onDelete('cascade');
            $table->foreign('dapil_id')->references('id_dapil')->on('dapils')->onDelete('cascade');
            
            $table->unique(['pemilihan_id', 'partai_id', 'dapil_id']);
        });

        // Tabel data_pemilihans
        Schema::create('data_pemilihans', function (Blueprint $table) {
            $table->id('id_datapemilihan');
            $table->integer('al');
            $table->integer('ap');
            $table->integer('aj');
            $table->integer('b1l');
            $table->integer('b1p');
            $table->integer('b1j');
            $table->integer('b2l');
            $table->integer('b2p');
            $table->integer('b2j');
            $table->integer('b3l');
            $table->integer('b3p');
            $table->integer('b3j');
            $table->integer('b4l');
            $table->integer('b4p');
            $table->integer('b4j');
            $table->integer('c1');
            $table->integer('c2');
            $table->integer('c3');
            $table->integer('c4');
            $table->integer('dl');
            $table->integer('dp');
            $table->integer('dj');
            $table->timestamps();
        });

        // Tabel data_suaras
        Schema::create('data_suaras', function (Blueprint $table) {
        $table->id('id_suara');
        $table->unsignedBigInteger('caleg_id');
        $table->unsignedBigInteger('datapemilihan_id');
        $table->integer('jmlh_suara');
        $table->timestamps();

        $table->foreign('caleg_id')->references('id_caleg')->on('calegs')->onDelete('cascade');
        $table->foreign('datapemilihan_id')->references('id_datapemilihan')->on('data_pemilihans')->onDelete('cascade');
        
        $table->unique(['id_suara', 'caleg_id', 'datapemilihan_id']);
        });
    }


    

    public function down(): void
    {
        // Drop semua tabel jika rollback migrasi
        Schema::dropIfExists('pemilihans');
        Schema::dropIfExists('partais');
        Schema::dropIfExists('calegs');
        Schema::dropIfExists('dapils');
        Schema::dropIfExists('data_pemilihans');
        Schema::dropIfExists('data_suaras');
    }
};
