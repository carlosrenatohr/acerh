<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCandidatesJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidates_jobs', function (Blueprint $table) {
            $table->integer('candidate_id', false, true);
            $table->integer('job_id', false, true);
            $table->dateTime('interview_date'); // calculate # of week
            $table->dateTime('hire_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates_jobs');
    }
}
