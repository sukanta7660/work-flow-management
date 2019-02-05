<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalaryPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_payment', function (Blueprint $table) {
            $table->increments('salarypaymentID');
            $table->integer('salarysheetID')->nullable()->unsigned()->index();
            $table->foreign('salarysheetID')->references('salarysheetID')->on('salary_sheet')->onDelete('No Action')->onUpdate('No Action');
            $table->integer('employeeID')->nullable()->unsigned()->index();
            $table->foreign('employeeID')->references('employeeID')->on('employee')->onDelete('No Action')->onUpdate('No Action');
            $table->string('employeeName',100)->nullable();
            $table->string('salaryName',100)->nullable();
            $table->date('dob',100)->nullable();
            $table->string('address',160)->nullable();
            $table->double('amount')->default(0);
            $table->string('descriptions',200)->nullable();
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
        Schema::dropIfExists('salary_payment');
    }
}
