<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Questions.
 *
 * @author  The scaffold-interface created at 2018-04-01 12:48:21pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Questions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('questions',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('question');
        
        $table->String('description');
        
        $table->String('type');
        
        $table->longText('answers');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('questions');
    }
}
