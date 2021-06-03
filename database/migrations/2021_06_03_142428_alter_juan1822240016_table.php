<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterJuan1822240016Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('juan1822240016', function (Blueprint $table) {
            //
            $table->renameColumn('nama', 'nama_mahasiswa');
            $table->text('alamat')->after('tanggal_lahir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('juan1822240016', function (Blueprint $table) {
            //
            $table->renameColumn('nama mahasiswa', 'nama');
            $table->dropColumn('alamat');
        });
    }
}
