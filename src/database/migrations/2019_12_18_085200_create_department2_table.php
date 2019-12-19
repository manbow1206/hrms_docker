<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartment2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department2', function (Blueprint $table) {
            $table->integer('id');
            $table->unsignedInteger('name');
            $table->text('body');
            $table->timestamps();

            $table->foreign('name')->references('department_id')->on('employees2');
            //マスターテーブルを見られる側に設定
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department2');
    }
}
