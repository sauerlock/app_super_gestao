<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        // Varialvel atribuida a um array
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 
            'status' => 'N',
            'cnpj' => null,
            'ddd' => '41',
            'telefone' => '0000-0000' 
        ],
            1 => ['nome' => 'Fornecedor 2', 
            'status' => 'N',
            'cnpj' => null,
            'ddd' => '32',
            'telefone' => '0000-0000' 
        ],
            2 => ['nome' => 'Fornecedor 3', 
            'status' => 'N',
            'cnpj' => null,
            'ddd' => '11',
            'telefone' => '0000-0000' 
        ]
    ];               // Passando a variavel para a view, colocando um segundo parametro por compact.
    return view('app.fornecedor.index', compact('fornecedores'));
    }
}