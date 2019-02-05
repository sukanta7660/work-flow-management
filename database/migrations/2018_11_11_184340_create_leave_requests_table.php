<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeaveRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leave_requests', function (Blueprint $table) {
            $table->increments('leaverequestID');
            $table->integer('employeeID')->nullable()->unsigned()->index();
            $table->foreign('employeeID')->references('employeeID')->on('employee')->onDelete('No Action')->onUpdate('No Action');
            $table->string('name',150)->nullable();
            $table->string('subject',300)->nullable();
            $table->text('description')->nullable();
            $table->string('sincerely',150)->nullable();
            $table->string('status',20)->default('Pending');
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
        Schema::dropIfExists('leave_requests');
    }
}
