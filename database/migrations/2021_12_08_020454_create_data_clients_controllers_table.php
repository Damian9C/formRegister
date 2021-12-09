<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataClientsControllersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName');
            $table->text('businessTurn');
            $table->string('name');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->boolean('status');
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
        Schema::dropIfExists('data_clients_controllers');
    }
}
