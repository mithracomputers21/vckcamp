<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampsTable extends Migration
{
    public function up()
    {
        Schema::create('camps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('camp_name');
            $table->timestamps();
        });
    }
}
