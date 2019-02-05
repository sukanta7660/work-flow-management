<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobCircularTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_circular', function (Blueprint $table) {
            $table->increments('circularID');
            $table->string('jobTitle',150)->nullable();
            $table->integer('vacancy')->default(0);
            $table->text('jobResponsibilities')->nullable();
            $table->string('employmentStatus',20)->nullable();
            $table->text('edu_Requirements')->nullable();
            $table->text('exp_Requirements')->nullable();
            $table->text('addi_Requirements')->nullable();
            $table->string('jobLocation')->nullable();
            $table->double('salary')->default(0);
            $table->text('other_Benefits')->nullable();
            $table->string('imageName',160)->nullable();
            $table->date('deadline')->nullable();
            $table->integer('userID')->unsigned()->index();
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
        Schema::dropIfExists('job_circular');
    }
}
