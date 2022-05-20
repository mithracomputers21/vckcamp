<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCampsTable extends Migration
{
    public function up()
    {
        Schema::table('camps', function (Blueprint $table) {
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id', 'state_fk_6133637')->references('id')->on('states');
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id', 'district_fk_6133638')->references('id')->on('districts');
            $table->unsignedBigInteger('block_name_id')->nullable();
            $table->foreign('block_name_id', 'block_name_fk_6133639')->references('id')->on('unions');
            $table->unsignedBigInteger('panchayat_name_id')->nullable();
            $table->foreign('panchayat_name_id', 'panchayat_name_fk_6133640')->references('id')->on('panchayats');
            $table->unsignedBigInteger('habitation_name_id')->nullable();
            $table->foreign('habitation_name_id', 'habitation_name_fk_6133641')->references('id')->on('habitations');
            $table->unsignedBigInteger('legislative_assembly_id')->nullable();
            $table->foreign('legislative_assembly_id', 'legislative_assembly_fk_6133642')->references('id')->on('assemblies');
            $table->unsignedBigInteger('parliament_assembly_id')->nullable();
            $table->foreign('parliament_assembly_id', 'parliament_assembly_fk_6133643')->references('id')->on('parliments');
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->foreign('owner_id', 'owner_fk_6133647')->references('id')->on('users');
        });
    }
}
