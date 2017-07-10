<?php

use Illuminate\Database\Seeder;

class CandidatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('candidates')->truncate();
        $candidates = factory(\App\Candidate::class, 10);
        foreach ($candidates as $candidate) {
            \App\Candidate::create($candidate);
        }
    }
}
