<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->truncate();
        $titles = ['LG', 'Acerh', 'Samsung', 'Copasa', 'Banco Lafise'];
        for($i = 0; $i < 10; $i++) {
            \App\Client::create([
                'name' => $titles[array_rand($titles)],
                'company' => $titles[array_rand($titles)],
                'contact_name' => "-",
            ]);
        }
    }
}
