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
            $table->date('dt_birth')->nullable();
            $table->integer('RG')->nullable();
            $table->integer('CPF')->nullable();
            $table->string('genre')->nullable();
            $table->integer('CEP')->nullable();
            $table->string('address')->nullable();
            $table->integer('house_number')->nullable();
            $table->string('complement')->nullable();
            $table->string('city')->nullable();
            $table->char('state','2')->nullable();
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
