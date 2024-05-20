<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateDienthoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            $table->text('baiViet')->nullable(); // Thêm cột baiViet (text, nullable)
            $table->string('ghiChu', 500)->nullable(); // Thêm cột ghiChu (string, 500, nullable)
            $table->unsignedBigInteger('idLoai'); // Thêm cột idLoai (unsigned Big Integer)

            // Khai báo khóa ngoại là idLoai để thiết lập quan hệ với bảng loaisp (field id)
            $table->foreign('idLoai')->references('id')->on('loaisp')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dienthoai', function (Blueprint $table) {
            // Hủy bỏ khóa ngoại trước khi xóa cột
            $table->dropForeign(['idLoai']);

            $table->dropColumn('baiViet');
            $table->dropColumn('ghiChu');
            $table->dropColumn('idLoai');
        });
    }



};
