<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = ['Fornecedor 1', 'Fornecedor 2', 'Fornecedor 3', 'Fornecedor 4'];
        $fornecedores2 = [
            0 => ['nome'=>'Fornecedor 1','status'=>'N','cnpj'=>'1','ddd'=>'11','telefone'=>'0000-0000'], // sp
            1 => ['nome'=>'Fornecedor 2','status'=>'N','cnpj'=>'00.001.002/003-04','ddd'=>'84','telefone'=>'1500-0000'], // rn
            2 => ['nome'=>'Fornecedor 3','status'=>'N','cnpj'=>'00.005.006/007-08','ddd'=>'85','telefone'=>'0000-0000'] // fortal
        ];
        $fornecedores3 = [0 => ['nome'=>'Fornecedor 3','status'=>'S','cnpj'=>'0']];
        $variavel = 'Estou setado!';
        return view('app.fornecedor.index',compact('fornecedores','fornecedores2','fornecedores3','variavel'));
    }
}
