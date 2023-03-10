<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('name') ->nullable();
            $table->double('prix',)->nullable();
            $table->integer('quantite') ->nullable();
            $table->integer('id_cat');
        });
    }

   
};
