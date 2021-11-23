<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Feedback.
 *
 * @author  The scaffold-interface created at 2018-03-28 10:56:59am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Feedback extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('feedback',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->String('email');
        
        $table->String('phone');
        
        $table->String('subject');
        
        $table->String('body');
        
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
        Schema::drop('feedback');
    }
}
