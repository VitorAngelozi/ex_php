<?php
$contas = [
    ["id" => 1, "titular" => "Ana", "saldo" => 100.0],
    ["id" => 2, "titular" => "Carlos", "saldo" => 50.0],
    ["id" => 3, "titular" => "Maria", "saldo" => 200.0]
];
#funcao que vai receber array com contas, dois int de id identificadores de origem e destino e valor
function transferir(array &$contas, int $origemId, int $destinoId, float $valor): bool{
    $contaOrigem = null;
    $contaDestino = null;
    #validar e guardar origem e destino
    foreach($contas as &$conta){
        #primeiro, validando quem é a origem
        if($conta["id"] === $origemId){
            $contaOrigem = &$conta;
        }
        #verificando quem é destino
        if($conta["id"] === $destinoId){
            $contaDestino = &$conta;
        }
        }
        unset($conta);
        #verificar se existe conta origem e desitno
        if (!$contaOrigem || !$contaDestino){
            return false;
        }

        #verificar se origem = destino
        if($contaOrigem["id"] === $contaDestino["id"]){
            return false;
        } 
    

        #verificar saldo e valor transferencia
        if($contaOrigem["saldo"] < $valor || $contaOrigem["saldo"] <= 0 || $valor <= 0){
            return false;
        }

        
        $contaDestino["saldo"] += $valor;
        $contaOrigem["saldo"] -= $valor;
        return true;
}

print_r($contas);
if(transferir($contas, 1, 2, 50)){
    echo "Transferencia realizada!";
}else{
    "Erro!";
}
print_r($contas);