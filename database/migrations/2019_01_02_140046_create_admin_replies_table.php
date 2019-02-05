<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_replies', function (Blueprint $table) {
            $table->increments('adminrplyID');
            $table->integer('employeeID')->nullable()->unsigned()->index();
            $table->foreign('employeeID')->references('employeeID')->on('employee')->onDelete('No Action')->onUpdate('No Action');
            $table->string('name',150)->nullable();
            $table->text('message')->nullable();
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
        Schema::dropIfExists('admin_replies');
    }
}
