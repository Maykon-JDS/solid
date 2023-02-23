<?php

namespace App\Interface;

    interface interface_extrato{
        public function adicionar_no_extrato(string $tipo, float $valor) : void;
        public function consultar_extrato() : array;
    }
?>