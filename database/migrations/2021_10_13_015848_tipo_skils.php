<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoSkills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_skils', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();

            table->foreignId('skils_id')->constrained('skils')->onDelete('cascate');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tipo_skils');
    }
}
