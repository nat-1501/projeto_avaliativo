<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Skills extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skils', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->timestamps();

            $table->foreignId('tipo_skils_id')->constrained()->onDelete('cascade');
            $table->foreignId('categoria_skils_id')->constrained()->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skils');
    }
}
