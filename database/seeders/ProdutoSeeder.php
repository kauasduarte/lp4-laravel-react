<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // create seeders for Produtos migration

        Produto::firstOrCreate([
            //'id' => '01',
            'nome' => 'Leite',
            'tipo' => 'ALIMENTO',
            'preco_custo' => '3.50',
            'preco_venda' => '4.50',
            'lote' => 'XZ2345',
            'data_aquisicao' => '20023-02-02',
            'data_venda' => '2023-04-03',
            'fornecedor' => 'FD543',
            'validade' => '2023-08-04',
   
        ]);
        Produto::firstOrCreate([
            'nome' => 'Alvejante',
            'tipo' => 'LIMPEZA',
            'preco_custo' => '5.50',
            'preco_venda' => '8.50',
            'lote' => 'YB9876',
            'data_aquisicao' => '20023-09-13',
            'data_venda' => '2023-10-14',
            'fornecedor' => 'FD543',
            'validade' => '2024-08-05',
        ]);
        Produto::firstOrCreate([
            'nome' => 'Detergente',
            'tipo' => 'LIMPEZA',
            'preco_custo' => '1.50',
            'preco_venda' => '2.80',
            'lote' => 'XZ2345',
            'data_aquisicao' => '20023-02-02',
            'data_venda' => '2023-04-03',
            'fornecedor' => 'KL675',
            'validade' => '2025-04-23',
        ]);
        Produto::firstOrCreate([
            'nome' => 'Arroz',
            'tipo' => 'ALIMENTO',
            'preco_custo' => '7.50',
            'preco_venda' => '10.50',
            'lote' => 'OS5435',
            'data_aquisicao' => '2023-01-01',
            'data_venda' => '2023-10-23',
            'fornecedor' => 'PQ873',
            'validade' => '2024-01-04',
        ]);
        Produto::firstOrCreate([
            'nome' => 'Corote',
            'tipo' => 'BEBALCOL',
            'preco_custo' => '3.70',
            'preco_venda' => '5.90',
            'lote' => 'CT527',
            'data_aquisicao' => '2022-12-23',
            'data_venda' => '2023-01-05',
            'fornecedor' => 'CR023',
            'validade' => '2027-10-01',
        ]);
        Produto::firstOrCreate([
            'nome' => 'KitKat',
            'tipo' => 'ALIMENTO',
            'preco_custo' => '1.50',
            'preco_venda' => '3.00',
            'lote' => 'XZ2345',
            'data_aquisicao' => '2023-07-03',
            'data_venda' => '2023-09-03',
            'fornecedor' => 'NE843',
            'validade' => '2023-11-09',
        ]);
        Produto::firstOrCreate([
            'nome' => 'MORANGO',
            'tipo' => 'HORTIFRU',
            'preco_custo' => '4.50',
            'preco_venda' => '7.50',
            'lote' => 'HO5425',
            'data_aquisicao' => '2023-04-21',
            'data_venda' => '2023-04-28',
            'fornecedor' => 'FD543',
            'validade' => '2023-05-01',
        ]);
        Produto::firstOrCreate([
            'nome' => 'ALFACE',
            'tipo' => 'HORTIFRU',
            'preco_custo' => '1.00',
            'preco_venda' => '2.50',
            'lote' => 'AL2345',
            'data_aquisicao' => '2023-06-01',
            'data_venda' => '2023-06-03',
            'fornecedor' => 'XO443',
            'validade' => '2023-06-08',
        ]);
    }
}