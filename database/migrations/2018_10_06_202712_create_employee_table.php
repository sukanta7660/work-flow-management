<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('employeeID');
            $table->string('position',100)->nullable();
            $table->double('salary')->default(0);
            $table->string('father',100)->nullable();
            $table->date('dob')->nullable();
            $table->string('mother',100)->nullable();
            $table->string('gender',10)->nullable();
            $table->string('mobile',30)->nullable();
            $table->string('address',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('postCode',30)->nullable();
            $table->string('country',100)->nullable();
            $table->string('nid',30)->nullable();
            $table->string('imageName',160)->nullable();
            $table->double('account')->default(0);
            $table->integer('userID')->nullable()->unsigned()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade')->onUpdate('No Action');
            $table->unique(['mobile','userID']);
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
        Schema::dropIfExists('employee');
    }
}
