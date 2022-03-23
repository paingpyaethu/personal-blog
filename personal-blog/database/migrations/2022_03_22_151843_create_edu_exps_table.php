<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEduExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edu_exps', function (Blueprint $table) {
            $table->id();
            $table->string('edu_exp_title');
            $table->string('edu_year');
            $table->string('edu_name');
            $table->string('degree_name');
            $table->string('project_title');
            $table->string('project_description');
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
        Schema::dropIfExists('edu_exps');
    }
}
