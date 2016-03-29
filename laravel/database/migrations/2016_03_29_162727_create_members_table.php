<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('members', function (Blueprint $table){
			$table->increments('id');
			$table->string('lastname');
			$table->string('firstname');
			$table->string('middlename');
			$table->string('cell_phone');
			$table->text('address');
			$table->string('baptismal_date');
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
        //
        Schema::drop('members');
    }
}
