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
        Schema::create('projects', function (Blueprint $table) {
            // id() genera una colonna int, primary key, AI, not null
            $table->id();
        
            $table->string('title', 20);
            $table->integer('year')->unique();
            $table->enum('type', ['graphic', 'web', 'writing']);
            $table->integer('time')->unsigned();
            $table->text('description')->nullable();
            $table->text('image')->nullable();
        
            // timestamps() genera le colonne created_at ed updated_at
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
        Schema::dropIfExists('projects');
    }
};
