<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->increments('id')->nullable(false);
            $table->integer('id_user')->unsigned()->nullable(false);
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('rua')->nullable(false);
            $table->integer('cep')->nullable(false);
            $table->string('bairro')->nullable(false);
            $table->string('complemento')->nullable(false);
            $table->string('cidade')->nullable(false);
            $table->string('estado')->nullable(false);
            $table->string('pais')->nullable(false);
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
        Schema::dropIfExists('addressph');
    }
}
