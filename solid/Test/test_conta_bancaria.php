<?php
    // depositar
    // sacar
    // consultar_saldo
    // fazer_transacao
    //adicionar_no_extrato
    //consultar_extrato
    // consultar_transacoes

require "App/Autoload/autoload.php";

use App\Class\Conta_Corrente;
use App\Class\Conta_Poupanca;

//Preparação
$conta_corrente1 = new Conta_Corrente;
$conta_corrente2 = new Conta_Corrente;
$conta_corrente3 = new Conta_Corrente(100.00);
$conta_corrente4 = new Conta_Corrente(200.00);
$conta_corrente5 = new Conta_Corrente;

$conta_poupnaca = new Conta_Poupanca;

//Execução
$teste1_consultar_saldo = $conta_corrente1->consultar_saldo();

$conta_corrente2->depositar(100.00);
$test2_saldo_pos_deposito = $conta_corrente2->consultar_saldo();

$test3_verificar_saldo_suficiente = $conta_corrente3->verificar_saldo_suficiente(100.00);

$conta_corrente4->sacar(150);
$test4_saldo_pos_saque = $conta_corrente4->consultar_saldo();

$conta_corrente5->depositar(100);
$conta_corrente5->sacar(50);
$valor_extrato_conta_corrente5 = $conta_corrente5->consultar_extrato();
$valor_extrato_conta_corrente5 = array_values($valor_extrato_conta_corrente5);



//Testes
echo "\n";
if($teste1_consultar_saldo === 0.0){
    echo "1º Teste - Consultar Saldo: ✔️\n";
}else{
    echo "1º Teste - Consultar Saldo: ❌\n";
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

if($test4_saldo_pos_saque === 50.00){
    echo "4º Teste - Sacar: ✔️\n";
}else{
    echo "4º Teste - Sacar: ❌\n";
}

$valor_teste_extrato = ["Deposito: 100","Saque: 50"];
if($valor_teste_extrato == $valor_extrato_conta_corrente5){
    echo "5º Teste - Extrato: ✔️\n";
}else{
    echo "5º Teste - Extrato: ❌\n";
}
echo "\n";
?>