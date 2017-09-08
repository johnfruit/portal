<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelcosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telcos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sitename');
            $table->string('sitecode');
            $table->decimal('mrc',10,2);
            $table->string('BW');
            $table->string('telco');
            $table->date('startofcontract');
            $table->date('endofcontract');
            $table->string('name');
            // $table->integer('account');
            // $table->string('circuitsitelocation',100)->nullable();
            // $table->string('sitecode')->nullable();
            // $table->string('status')->nullable();
            // $table->string('oldcircuitid')->nullable();
            // $table->string('newcicuitid')->nullable();
            // $table->string('oldbw')->nullable();
            // $table->string('newbw')->nullable();
            // $table->decimal('oldmrc',10,2)->nullable();
            // $table->decimal('newmrc',10,2)->nullable();
            // $table->date('oldactivation')->nullable();
            // $table->date('newactivation')->nullable();
            // $table->date('oldexpiration')->nullable();
            // $table->date('newexpiration')->nullable();
            // $table->string('oldremarks',100)->nullable();
            // $table->string('service')->nullable();
            // $table->string('newremarks',100)->nullable();
            // $table->string('recipient')->nullable();
            // $table->string('billingaddress',100)->nullable();
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
        Schema::dropIfExists('telcos');
    }
}
