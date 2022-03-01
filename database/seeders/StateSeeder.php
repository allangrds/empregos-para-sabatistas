<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Norte
        State::create([
            'name' => 'Acre',
            'uf' => 'AC',
        ]);
        State::create([
            'name' => 'Amapá',
            'uf' => 'AP',
        ]);
        State::create([
            'name' => 'Amazonas',
            'uf' => 'AM',
        ]);
        State::create([
            'name' => 'Pará',
            'uf' => 'PA',
        ]);
        State::create([
            'name' => 'Rondônia',
            'uf' => 'RO',
        ]);
        State::create([
            'name' => 'Roraima',
            'uf' => 'RR',
        ]);
        State::create([
            'name' => 'Tocantins',
            'uf' => 'TO',
        ]);

        //Nordeste
        State::create([
            'name' => 'Alagoas',
            'uf' => 'AL',
        ]);
        State::create([
            'name' => 'Bahia',
            'uf' => 'BA',
        ]);
        State::create([
            'name' => 'Ceará',
            'uf' => 'CE',
        ]);
        State::create([
            'name' => 'Maranhão',
            'uf' => 'MA',
        ]);
        State::create([
            'name' => 'Paraíba',
            'uf' => 'PB',
        ]);
        State::create([
            'name' => 'Pernambuco',
            'uf' => 'PE',
        ]);
        State::create([
            'name' => 'Piauí',
            'uf' => 'PI',
        ]);
        State::create([
            'name' => 'Rio Grande do Norte',
            'uf' => 'RN',
        ]);
        State::create([
            'name' => 'Sergipe',
            'uf' => 'SE',
        ]);

        //Sudeste
        State::create([
            'name' => 'Espírito Santo',
            'uf' => 'ES',
        ]);
        State::create([
            'name' => 'Minas Gerais',
            'uf' => 'MG',
        ]);
        State::create([
            'name' => 'Rio de Janeiro',
            'uf' => 'RJ',
        ]);
        State::create([
            'name' => 'São Paulo',
            'uf' => 'SP',
        ]);

        //Sul
        State::create([
            'name' => 'Paraná',
            'uf' => 'PR',
        ]);
        State::create([
            'name' => 'Rio Grande do Sul',
            'uf' => 'RS',
        ]);
        State::create([
            'name' => 'Santa Catarina',
            'uf' => 'SC',
        ]);

        //Centro-oeste
        State::create([
            'name' => 'Distrito Federal',
            'uf' => 'DF',
        ]);
        State::create([
            'name' => 'Goiás',
            'uf' => 'GO',
        ]);
        State::create([
            'name' => 'Mato Grosso',
            'uf' => 'MT',
        ]);
        State::create([
            'name' => 'Mato Grosso do Sul',
            'uf' => 'MS',
        ]);
    }
}
