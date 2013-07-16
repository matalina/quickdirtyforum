<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InstallTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{   
        Schema::create('tags', function(Blueprint $table)
    	{
			$table->increments('id');
            $table->string('tag',50);
			$table->timestamps();
		});
        
        Schema::create('topics', function(Blueprint $table)
    	{
			$table->increments('id');
            $table->string('title',255);
            $table->datetime('last_post_date');
            $table->integer('user_id');
            $table->integer('count');
			$table->timestamps();
		});
        
        Schema::create('posts', function(Blueprint $table)
    	{
			$table->increments('id');
            $table->integer('user_id');
            $table->text('entry');
			$table->timestamps();
		});
        
        Schema::create('tag_topic', function(Blueprint $table)
    	{
			$table->increments('id');
            $table->integer('tag_id');
            $table->integer('topic_id');
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
        Schema::drop('tags');
        Schema::drop('topics');
        Schema::drop('posts');
        Schema::drop('tag_topic');
	}

}
