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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('photo')->nullable();
            $table->foreignId('degree_id')->constrained();
            $table->foreignId('modality_id')->constrained();
            $table->text('description');
            $table->integer('duration')->nullable();
            $table->foreignId('location_id')->constrained();
            //$table->foreignId('language_id')->constrained();
            $table->foreignId('mode_id')->constrained();
            $table->foreignId('language_id')->constrained();
            $table->text('admission')->nullable();
            $table->text('dossier')->nullable();
            $table->text('candidature')->nullable();
            $table->dateTime('datelimite')->nullable();
            $table->text('selection')->nullable();
            $table->string('daterentre')->nullable();
            $table->string('grade')->nullable();
            $table->text('profile')->nullable();
            $table->text('opportunity')->nullable();
            $table->text('review')->nullable();
            $table->string('form')->nullable();
            $table->string('brochure')->nullable();
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
        Schema::dropIfExists('courses');
    }
};