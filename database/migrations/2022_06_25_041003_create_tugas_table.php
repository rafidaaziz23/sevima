<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_id')->nullable()->index('fk_tugas_kelas');
            $table->string('tugas_judul');
            $table->longText('tugas_desc');
            $table->dateTime('tugas_due');
            $table->foreignId('create_by')->nullable()->index('fk_tugas_create_by');
            $table->foreignId('update_by')->nullable()->index('fk_tugas_update_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tugas');
    }
};
