<?php

namespace App\Interface;

    interface interface_conta_bancaria{
        public function consultar_saldo() : float;
        public function depositar(float $valor);
        public function sacar(float $valor);
        public function verificar_saldo_suficiente(float $valor) : bool;
        //consultar_extrato
        //adicionar_no_extrato
        //fazer_transacao
    }
?>