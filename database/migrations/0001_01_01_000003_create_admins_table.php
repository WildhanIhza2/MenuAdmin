<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migration untuk membuat tabel admins.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken(); // untuk fitur "remember me"
            $table->timestamps();    // created_at dan updated_at
        });
    }

    /**
     * Rollback (hapus) tabel admins jika dibatalkan.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
