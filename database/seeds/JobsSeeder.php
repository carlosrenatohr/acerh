<?php

use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('jobs')->truncate();
        $titles = ['Contador', 'Ingeniero', 'Plomero', 'Vendedor', 'Gerente'];
        for($i = 0; $i < 10; $i++) {
            \App\Job::create([
               'title' => $titles[array_rand($titles)],
               'client_id' => rand(1, 5),
               'description' => "lorem  ipsum",
//               'status' => 0
            ]);
        }
    }
}
