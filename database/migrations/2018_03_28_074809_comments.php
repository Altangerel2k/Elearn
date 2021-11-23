<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Comments.
 *
 * @author  The scaffold-interface created at 2018-03-28 07:48:10pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('comments',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('username');
        
        $table->longText('msg');
        
        $table->String('status');
        
        $table->integer('parent_id');
        
        $table->String('files');
        
        $table->String('url');
        
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
        Schema::drop('comments');
    }
}
