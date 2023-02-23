<?php

namespace App\Interface;

    interface interface_conta_bancaria{
        public function consultar_saldo() : float;
        public function depositar(float $valor) : void;
        public function sacar(float $valor) : void;
        public function verificar_saldo_suficiente(float $valor);
        public function consultar_extrato() : array;
    }
?>