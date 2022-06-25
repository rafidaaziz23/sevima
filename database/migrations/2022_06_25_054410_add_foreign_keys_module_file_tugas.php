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
        Schema::table('modules_files', function (Blueprint $table) {
            $table->foreign('tugas_id', 'fk_file_tugas')->references('id')->on('tugas')
                ->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('modules_files', function (Blueprint $table) {
            $table->dropForeign('fk_file_tugas');
        });
    }
};
