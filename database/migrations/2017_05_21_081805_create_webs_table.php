<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('BU');
            $table->string('type_of_serv');
            $table->string('details');
            $table->dateTime('exp_date');
            $table->string('provider');
            $table->decimal('price',10,2);
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
        Schema::dropIfExists('webs');
    }
}
