<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContabilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contabilidades', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->double('total', '20', '2');
            $table->boolean('abierto')->default(true);
            $table->double('dinero_base','20', '2');
            $table->double('gastos', '20', '2');
            $table->double('ventas', '20', '2');
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
        Schema::dropIfExists('contabilidades');
    }
}
