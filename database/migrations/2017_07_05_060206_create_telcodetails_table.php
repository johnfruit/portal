<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTelcodetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telcodetails', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('telcos_id')->nullable();
            $table->string('oldpayments')->nullable();
            $table->string('oldtelco')->nullable();
            $table->integer('oldaccount')->nullable();
            $table->string('oldcircuitsitelocation',100)->nullable();
            $table->string('oldsitecode')->nullable();
            $table->string('oldstatus')->nullable();
            $table->string('oldcircuitid')->nullable();
            $table->string('oldbw')->nullable();
            $table->decimal('oldmrc',10,2)->nullable();
            $table->date('oldactivation')->nullable();
            $table->date('oldexpiration')->nullable();
            $table->string('oldremarks',100)->nullable();
            $table->string('oldservice')->nullable();
            $table->string('oldrecipient')->nullable();
            $table->string('oldbillingaddress',100)->nullable();
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
        Schema::dropIfExists('telcodetails');
    }
}
