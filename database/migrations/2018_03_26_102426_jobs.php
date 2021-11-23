<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Jobs.
 *
 * @author  The scaffold-interface created at 2018-03-26 10:24:27am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Jobs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('jobs',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('title');
        
        $table->String('headline');
        
        $table->String('thumb');
        
        $table->longText('body');
        
        $table->String('icon');
        
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
        Schema::drop('jobs');
    }
}
