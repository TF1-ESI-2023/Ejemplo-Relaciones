<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("persona_id");
            $table->unsignedBigInteger("producto_id");
            $table->date("fecha");
            $table->foreign("persona_id")->references("id")->on("personas");
            $table->foreign("producto_id")->references("id")->on("productos");
            $table->unique(["fecha","persona_id","producto_id"]);
            $table->softDeletes();
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
        Schema::dropIfExists('compras');
    }
}
