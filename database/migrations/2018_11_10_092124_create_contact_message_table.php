<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_message', function (Blueprint $table) {
            $table->increments('contactID');
            $table->integer('employeeID')->nullable()->unsigned()->index();
            $table->foreign('employeeID')->references('employeeID')->on('employee')->onDelete('No Action')->onUpdate('No Action');
            $table->string('name',150)->nullable();
            $table->string('email',30)->nullable();
            $table->string('subject',100)->nullable();
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
        Schema::dropIfExists('contact_message');
    }
}
