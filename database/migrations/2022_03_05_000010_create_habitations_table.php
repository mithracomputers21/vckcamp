<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitationsTable extends Migration
{
    public function up()
    {
        Schema::create('habitations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('habitation_name');
            $table->timestamps();
        });
    }
}
