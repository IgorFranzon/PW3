<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller

{
    public function aluno($name, $lastname, $age, $rm, $gender, $address){
        return view('aluno')->with('name', $name)->with('lastname', $lastname)->with('age', $age)->with('rm', $rm)->with('gender', $gender)->with('address', $address);
    }

    public function contas($operation, $num1, $num2){
        $result = 0;
        switch ($operation){
            case 'soma' : 
            $result = $num1 + $num2;
            break;

            case 'subtracao' :
            $result = $num1 - $num2;
            break;

            case 'multiplicacao' :
            $result = $num1 * $num2;
            break;

            case 'divisao' :
            $result = $num2 !=0 ? $num1 / $num2 : 'Divisão por zero'; 
        }
        return view('Contas')->with('operation', $operation)->with('num1', $num1)->with('num2', $num2)->with('result', $result);
    }
    public function lista(){
        $produto = [
            ['descricao' => 'Fone de ouvido Hyperx', 'categoria' => 'aparelho eletronico', 'preco' => 293],
            ['descricao' => 'Era das Arcas', 'categoria' => 'literário', 'preco' => 53],
            ['descricao' => 'Luvas de Boxe', 'categoria' => 'esportivo', 'preco' => 175],
            ['descricao' => 'Jogo de tabuleiro Monopoly', 'categoria' => 'entretenimento', 'preco' => 100],
            ['descricao' => 'caderno 10 matérias', 'categoria' => 'material escolar', 'preco' => 23],
            ['descricao' => 'Whey Protein', 'categoria' => 'fitness', 'preco' => 90],
        ];
        return view('lista', ['products' => $produto]);
    }

    public function usuario($name, $lastname){
        return view('usuario')->with('name', $name)->with('lastname', $lastname);
    }
    }