<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Menjalankan migrasi untuk membuat tabel pengguna.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->string('email', 150)->unique();
            $table->string('password');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_users');
    }
}