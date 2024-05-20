<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dienthoai', function (Blueprint $table) {
            $table->increments('id'); // id (integer , primary key, increment)
            $table->string('tenDT', 30)->unique(); // tenDT (string, 30, duy nhất không được trùng)
            $table->string('moTa', 1000)->nullable(); // moTa (string, 1000, nullable)
            $table->dateTime('ngayCapNhat'); // ngayCapNhat (DateTime)
            $table->double('gia', 8, 2); // gia (double 8,2)
            $table->double('giaKM', 8, 2)->default(0); // giaKM (double 8,2 , default =0)
            $table->string('urlHinh', 200)->nullable(); // urlHinh (string, 200, nullable)
            $table->integer('soLuongTonKho')->default(0); // soLuongTonKho (integer, default=0)
            $table->boolean('hot')->default(0); // hot (boolean, default=0)
            $table->boolean('anHien')->default(1); // anHien (boolean, default=1)
            $table->timestamps(); // created_at, updated_at
        });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dienthoai');
    }
};
