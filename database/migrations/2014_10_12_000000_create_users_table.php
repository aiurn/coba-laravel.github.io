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
    public function up() //method yang digunakan ntuk membuat scheme atau struktur dari tabel
    {//dieksekusi ketika kita ketik migrate
        Schema::create('users', function (Blueprint $table) { //struktur table
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //untuk menghilangkan scheme yang telah kita buat
    {
        Schema::dropIfExists('users');
    }
};
