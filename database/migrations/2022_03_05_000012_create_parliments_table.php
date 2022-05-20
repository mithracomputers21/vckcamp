<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParlimentsTable extends Migration
{
    public function up()
    {
        Schema::create('parliments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('parliment_assembly_name')->nullable();
            $table->timestamps();
        });
    }
}
