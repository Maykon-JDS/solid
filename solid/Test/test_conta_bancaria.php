<?php
    // depositar
    // sacar
    // consultar_saldo
    // consultar_transacoes
    // fazer_transacao

require "App/Autoload/autoload.php";

use App\Class\Conta_Corrente;
use App\Class\Conta_Poupanca;

//Preparação
$conta_corrente1 = new Conta_Corrente;
$conta_corrente2 = new Conta_Corrente;
$conta_corrente3 = new Conta_Corrente(150.00);

$conta_poupnaca = new Conta_Poupanca;

//Execução
$teste1_consultar_saldo = $conta_corrente1->consultar_saldo();

$conta_corrente2->depositar(100.00);
$test2_saldo_pos_deposito = $conta_corrente2->consultar_saldo();

$test3_verificar_saldo_suficiente = $conta_corrente3->verificar_saldo_suficiente(100.00);



//Testes
echo "\n";
if($teste1_consultar_saldo === 0.0){
    echo "1º Teste - Conasultar Saldo: ✔️\n";
}else{
    echo "1º Teste - Conasultar Saldo: ❌\n";
}

if($test2_saldo_pos_deposito === 100.0){
    echo "2º Teste - Depositar: ✔️\n";
}else{
    echo "2º Teste - Depositar: ❌\n";
}

if($test3_verificar_saldo_suficiente){
    echo "3º Teste - Verificar Saldo Suficiente: ✔️\n";
}else{
    echo "3º Teste - Verificar Saldo Suficiente: ❌\n";
}
echo "\n";
?>