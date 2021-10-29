<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNguoiPhuThuocsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoi_phu_thuocs', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->date('ngay_sinh');
            $table->string('mst');
            $table->integer('so_nam_phu_thuoc');
            $table->string('quan_he');
            $table->string('quoc_tich')->default('Việt Nam');
            $table->string('so_cmnn')->nullable();
            $table->boolean('status')->default(1);
            $table->foreignId('id_nhan_vien')
                ->constrained('nhan_viens')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguoi_phu_thuocs');
    }
}
