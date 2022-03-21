<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('price', 12, 2);
            $table->string('title', 200);
            $table->string('slug',75)->unique();
            $table->text('description');
            $table->year('construction_year');
            $table->smallInteger('rooms');
            $table->foreignId('agent_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estates');
    }
}
