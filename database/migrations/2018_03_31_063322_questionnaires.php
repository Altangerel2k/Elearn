<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Questionnaires.
 *
 * @author  The scaffold-interface created at 2018-03-31 06:33:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Questionnaires extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('questionnaires',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('title');
        
        $table->String('headline');
        
        $table->boolean('is_active');
        
        $table->longText('about');
        
        $table->String('result_text');
        
        $table->String('thumb');
        
        $table->String('username');
        
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
        Schema::drop('questionnaires');
    }
}
