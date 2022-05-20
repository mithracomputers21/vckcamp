<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUsersTable extends Migration
{
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('state_id')->nullable();
            $table->foreign('state_id', 'state_fk_6133611')->references('id')->on('states');
            $table->unsignedBigInteger('district_id')->nullable();
            $table->foreign('district_id', 'district_fk_6133612')->references('id')->on('districts');
            $table->unsignedBigInteger('block_id')->nullable();
            $table->foreign('block_id', 'block_fk_6133613')->references('id')->on('unions');
            $table->unsignedBigInteger('panchayat_id')->nullable();
            $table->foreign('panchayat_id', 'panchayat_fk_6133614')->references('id')->on('panchayats');
            $table->unsignedBigInteger('habitation_id')->nullable();
            $table->foreign('habitation_id', 'habitation_fk_6133615')->references('id')->on('habitations');
            $table->unsignedBigInteger('legislative_assembly_name_id')->nullable();
            $table->foreign('legislative_assembly_name_id', 'legislative_assembly_name_fk_6133616')->references('id')->on('assemblies');
            $table->unsignedBigInteger('parliament_assemply_id')->nullable();
            $table->foreign('parliament_assemply_id', 'parliament_assemply_fk_6133617')->references('id')->on('parliments');
        });
    }
}
