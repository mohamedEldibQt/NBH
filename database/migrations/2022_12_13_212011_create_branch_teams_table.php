<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_teams', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('branch_id');
            $table->string('branch_team_img');
            $table->string('branch_team_position');
            $table->string('branch_team_name');
            $table->string('branch_team_description');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('branch_teams');
    }
}
