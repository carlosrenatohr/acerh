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
        for($i = 0; $i < 5; $i++) {
            \App\Client::create([
                'name' => $titles[$i],
                'slug' => str_replace(' ', '-', $titles[$i]),
                'email' => 'admin@' . strtolower(str_replace(' ', '-', $titles[$i])). ".com",
                'contact_name' => 'Juanito Perez',
                'contact_phone' => '505' . rand(87511111, 87597244),
            ]);
        }
    }
}
