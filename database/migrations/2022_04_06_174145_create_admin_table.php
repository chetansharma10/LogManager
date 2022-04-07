<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('admin'))
        {
            Schema::create('admin', function (Blueprint $table) {
                $table->id('admin_id');
                $table->string('name','40');
                $table->string('email');
                $table->integer('jobid');
                $table->string('username','40');
                $table->string('password','100');
                $table->string('teamkey','100');
                $table->text('discription');
                $table->timestamps(); //created at and updated at
            
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
};
