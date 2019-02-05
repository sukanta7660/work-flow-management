<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalarySheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_sheet', function (Blueprint $table) {
            $table->increments('salarysheetID');
            $table->string('name',100)->nullable();
            $table->integer('employeeID')->nullable()->unsigned()->index();
            $table->foreign('employeeID')->references('employeeID')->on('employee')->onDelete('No Action')->onUpdate('No Action');
            $table->string('employeeName',100)->nullable();
            $table->string('nid',30)->nullable();
            $table->string('description',160)->nullable();
            $table->date('dob',100)->nullable();
            $table->string('address',150)->nullable();
            $table->double('amount')->default(0);
            $table->integer('userID')->nullable()->unsigned()->index();
            $table->foreign('userID')->references('id')->on('users')->onDelete('No Action')->onUpdate('No Action');
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
        Schema::dropIfExists('salary_sheet');
    }
}
