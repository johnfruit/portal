<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rfcno');
            $table->string('owner')->nullable();
            $table->string('system')->nullable();
            $table->string('description')->nullable();
            $table->string('bu')->nullable();
            $table->string('services_affected')->nullable();
            $table->string('is_spoc')->nullable();
            $table->string('change_requestor')->nullable();
            $table->string('change_datetime')->nullable();
            $table->string('duration')->nullable();
            $table->string('downtime')->nullable();
            $table->string('approval_status')->nullable();
            $table->string('execution_status')->nullable();
            $table->string('document_link')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('rfcs');
    }
}
