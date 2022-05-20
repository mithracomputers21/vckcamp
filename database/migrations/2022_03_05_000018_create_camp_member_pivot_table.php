<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampMemberPivotTable extends Migration
{
    public function up()
    {
        Schema::create('camp_member', function (Blueprint $table) {
            $table->unsignedBigInteger('camp_id');
            $table->foreign('camp_id', 'camp_id_fk_6134486')->references('id')->on('camps')->onDelete('cascade');
            $table->unsignedBigInteger('member_id');
            $table->foreign('member_id', 'member_id_fk_6134486')->references('id')->on('members')->onDelete('cascade');
        });
    }
}
