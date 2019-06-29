<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
		    $table->string('title');
			$table->string('description');
			$table->integer('type');
			$table->bigInteger('notify_to');
			$table->bigInteger('owner');
			$table->dateTime('date');
			$table->dateTime('expire_at');
			
			
			
			
			
			
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificaciones');
    }
}
