<?php
namespace App\Class;

use App\Interface\interface_extrato;
use DateTime;

class Extrato implements interface_extrato{

    private $extrato;

    public function adicionar_no_extrato(string $tipo, float $valor): void
    {
        $data_atual = $this->gerador_data_atual();
        $this->extrato[$data_atual] = "{$tipo}: {$valor}";
    }

    private function gerador_data_atual() : string
    { 
        $DateTime = new DateTime();
        $data_atual = $DateTime->format('d/m/Y H:i:s v:u');
        return (string) $data_atual;
    }

    public function consultar_extrato(): array
    {
        return $this->extrato;
    }
}


?>