<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToAssembliesTable extends Migration
{
    public function up()
    {
        Schema::table('assemblies', function (Blueprint $table) {
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id', 'district_fk_6132996')->references('id')->on('districts');
        });
    }
}
