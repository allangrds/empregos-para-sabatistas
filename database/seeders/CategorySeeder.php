<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            array(
                'name' => 'administration',
                'text' => 'Administração',
            ),
            array(
                'name' => 'marketing',
                'text' => 'Publicidade e marketing',
            ),
            array(
                'name' => 'tecnology',
                'text' => 'TI',
            ),
            array(
                'name' => 'sales',
                'text' => 'Vendas',
            ),
            array(
                'name' => 'comercial_operations',
                'text' => 'Operações comerciais',
            ),
            array(
                'name' => 'customer_service',
                'text' => 'Atendimento ao cliente',
            ),
            array(
                'name' => 'art_fashion_design',
                'text' => 'Arte, Design e Moda',
            ),
            array(
                'name' => 'transport',
                'text' => 'Transporte e logística',
            ),
            array(
                'name' => 'finances',
                'text' => 'Contabilidade e finanças',
            ),
            array(
                'name' => 'human_resources',
                'text' => 'Recursos humanos',
            ),
            array(
                'name' => 'law',
                'text' => 'Jurídico',
            ),
            array(
                'name' => 'engineering',
                'text' => 'Ciência e engenharia',
            ),
            array(
                'name' => 'health',
                'text' => 'Saúde',
            )
        );

        foreach ($categories as &$category) {
            Category::create([
                'name' => $category['name'],
                'text' => $category['text'],
            ]);
        }
    }
}
