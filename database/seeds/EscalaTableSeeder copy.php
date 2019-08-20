<?php

# database/seeds/EscalaTableSeeder.php

use App\Models\Escala;
use Illuminate\Database\Seeder;

class EscalaTableSeeder extends Seeder
{
	public function run()
	{
		Escala::create([
			'user' => 'Felipe Oliveira',
			'email' => 'lippe252@gmail.com',
			'company' => 'Escala',
			'escalas' => '0',
			'status' => 'ativo'
		]);

		Escala::create([
			'user' => 'Abner Silva',
			'email' => 'abnersilva@gmail.com',
			'company' => 'Cooperativa dos Médicos',
			'escalas' => '12',
			'status' => 'ativo'
		]);

		Escala::create([
			'user' => 'Gertrudes Souza',
			'email' => 'gertrudess@gmail.com',
			'company' => 'Cooperativa das Médicas',
			'escalas' => '12',
			'status' => 'inativo'
		]);

		// add more...
	}
}
