<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->date('dt_birth');
            $table->integer('RG');
            $table->integer('CPF');
            $table->string('genre');
            $table->integer('CEP');
            $table->string('address');
            $table->integer('house_number');
            $table->string('complement');
            $table->string('city');
            $table->char('state','2');
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
        Schema::dropIfExists('profiles');
    }
}
