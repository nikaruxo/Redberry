<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecruitementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitements', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable();
            $table->string('cv')->nullable();
            $table->string('last_name')->nullable();
            $table->string('position')->nullable();
            $table->string('mobilenumber')->nullable();
            $table->string('email')->nullable();
            $table->string('experience')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('min_salary')->nullable();
            $table->string('max_salary')->nullable();
            $table->string('skills')->nullable();
            $table->integer('status_id')->nullable();
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
        Schema::dropIfExists('recruitements');
    }
}
