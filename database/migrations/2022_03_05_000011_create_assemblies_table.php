<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssembliesTable extends Migration
{
    public function up()
    {
        Schema::create('assemblies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('assembly_name')->unique();
            $table->timestamps();
        });
    }
}
