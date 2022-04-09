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
        Schema::create('dev', function (Blueprint $table) {
            $table->id('dev_id');
            $table->string('name','40');
            $table->string('email');
            $table->string('discAboutDev','200');
            $table->string('username','40');
            $table->string('password','100');

            $table->string('teamkey','100');
            
            $table->string('serverip','100');
            $table->string('logaccesskey','100');
            $table->string('domain','40');
            $table->string('projectname','40');
            $table->string('repolink','100');
            $table->string('discAboutproject','200');
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
        Schema::dropIfExists('dev');
    }
};
