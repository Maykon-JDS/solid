<?php

namespace App\Class;

use App\Interface\interface_conta_bancaria;

//SRP - Principio da Responsabilidade Única

class Conta_Poupanca implements interface_conta_bancaria{

    private $saldo;

    public function __construct($saldo = null)
    {
        $this->saldo = $saldo;
    }

    public function consultar_saldo() : float
    {
        return $this->saldo;
    }

    public function depositar(float $valor)
    {
        $this->saldo += $valor;
    }

    public function sacar(float $valor)
    {
        
    }

    public function verificar_saldo_suficiente(float $valor) : bool
    {
        $saldo = $this->consultar_saldo();

        if($saldo - $valor >= 0){
            return true;
        }else{
            return false;
        }
    }
}