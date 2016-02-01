<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alc_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id');   //隶属模块
            $table->string('name'); //权限名称
            $table->string('ident');    //标识
            $table->integer('created_at');
            $table->integer('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('alc_permissions');
    }
}
