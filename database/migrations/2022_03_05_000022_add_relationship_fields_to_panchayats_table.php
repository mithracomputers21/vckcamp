<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPanchayatsTable extends Migration
{
    public function up()
    {
        Schema::table('panchayats', function (Blueprint $table) {
            $table->unsignedBigInteger('block_id')->nullable();
            $table->foreign('block_id', 'block_fk_6132929')->references('id')->on('unions');
        });
    }
}
