<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Lessoncategories.
 *
 * @author  The scaffold-interface created at 2021-11-22 01:14:17pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Lessoncategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('lessoncategories',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('category');
        
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
        Schema::drop('lessoncategories');
    }
}
