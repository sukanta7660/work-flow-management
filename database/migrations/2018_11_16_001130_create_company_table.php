<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company', function (Blueprint $table) {
            $table->increments('companyID');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('city',80)->nullable();
            $table->string('state',80)->nullable();
            $table->string('post',25)->nullable();
            $table->string('currency',10)->nullable();
            $table->string('dateFormat', 10)->nullable();
            $table->string('owner',80)->nullable();
            $table->string('phone',20)->nullable();
            $table->string('fax',20)->nullable();
            $table->string('mobile',15)->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('companyType',100)->nullable();
            $table->string('logo',160)->nullable();
            $table->integer('userID')->nullable()->unsigned();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company');
    }
}
