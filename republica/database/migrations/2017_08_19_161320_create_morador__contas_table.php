<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMoradorContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('morador__contas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');            
            $table->string('tipoConta');
            $table->decimal('valor');
            $table->integer('conta_id')->unsigned();
            $table->integer('morador_id')->unsigned();

            $table->foreign('conta_id')
                        ->references('id')
                        ->on('contas');

            $table->foreign('morador_id')
                ->references('id')
                ->on('moradors');


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
        Schema::dropIfExists('morador__contas');
    }
}
