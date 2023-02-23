<?php

namespace App\Class;

use App\Interface\interface_conta_bancaria;
use App\Interface\interface_extrato;
use App\Class\Extrato;
//SRP - Principio da Responsabilidade Única

class Conta_Corrente implements interface_conta_bancaria{
    
    private $saldo;
    private interface_extrato $extrato;

    public function __construct($saldo = 0.0, interface_extrato $extrato = new Extrato)
    {
        $this->extrato = $extrato;
        $this->saldo = $saldo;
    }

    public function consultar_saldo() : float
    {
        return $this->saldo;
    }

    public function depositar(float $valor) : void
    {
        $this->saldo += $valor;
        $this->adicionar_no_extrato("Deposito", $valor);
    }

    public function sacar(float $valor) : void
    {
        $saldo_suficiente = $this->verificar_saldo_suficiente($valor);

        if(!$saldo_suficiente){
            echo "\nSaldo Insuficiente!\n";
        }

        $this->saldo -= $valor;
        $this->adicionar_no_extrato("Saque", $valor);

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

    public function consultar_extrato(): array
    {
        return $this->extrato->consultar_extrato();
    }

    private function adicionar_no_extrato(string $tipo, float $valor): void
    {
        $this->extrato->adicionar_no_extrato($tipo, $valor);
    }

}