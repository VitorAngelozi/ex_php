<?php

# AULA 09 - INTERFACES E COMPOSIÇÃO

# EXERCÍCIO 01 - INTERFACE ANIMAL
#
# Crie uma interface chamada Animal.
#
# A interface deve declarar:
# - emitirSom(): string
#
# Crie duas classes que implementem Animal:
# - Cachorro
# - Gato
#
# Cachorro deve retornar "Au au".
# Gato deve retornar "Miau".
#
# Crie um objeto de cada classe.
# Chame emitirSom() e exiba os resultados.
#
# Não coloque echo dentro dos métodos.
interface Animal{
    public function emitirSom():string;
}
class Cachorro implements Animal{
    public function emitirSom():string{
        return "Au au";
    }
}
class Gato implements Animal{
    public function emitirSom():string{
        return "Miau";
    }
}
$c1 = new Cachorro();
echo $c1->emitirSom()."\n";
$g1 = new Gato();
echo $g1->emitirSom()."\n";
# EXERCÍCIO 02 - FORMAS GEOMÉTRICAS
#
# Crie uma interface chamada FormaGeometrica.
#
# Ela deve declarar:
# - calcularArea(): float
#
# Crie duas implementações:
#
# Quadrado:
# - Recebe lado pelo construtor.
# - Área = lado * lado.
#
# Retangulo:
# - Recebe largura e altura pelo construtor.
# - Área = largura * altura.
#
# Crie objetos das duas classes.
# Exiba as áreas calculadas.
#
# Utilize propriedades privadas.
interface FormaGeometrica{
    public function calcularArea():float;
}
class Quadrado implements FormaGeometrica{
    private float $lado;
    public function __construct(float $lado){
        $this->lado = $lado;
    }
    public function calcularArea():float{
        return $this->lado * $this->lado;
    }

}
class Retangulo implements FormaGeometrica{
    private float $largura;
    private float $altura;
    public function __construct(float $largura, float $altura){
        $this->largura = $largura;
        $this->altura = $altura;

    }
    public function calcularArea():float{
        return $this->largura * $this->altura;
    }
}
$q = new Quadrado(2);
$r = new Retangulo(3, 2);
echo $q->calcularArea() ."\n";
echo $r->calcularArea()."\n";
# EXERCÍCIO 03 - NOTIFICAÇÕES
#
# Crie uma interface chamada Notificador.
#
# Ela deve declarar:
# - enviar(string $mensagem): void
#
# Crie duas classes:
# - NotificadorEmail
# - NotificadorSms
#
# Ambas devem implementar Notificador.
#
# Cada implementação deverá exibir
# uma mensagem identificando o canal usado.
#
# Exemplo:
# "Email enviado: Pagamento recebido"
# "SMS enviado: Pagamento recebido"
#
# Crie uma função chamada enviarAviso().
#
# Ela deve receber:
# - Um objeto do tipo Notificador.
# - Uma mensagem.
#
# A função deve chamar o método enviar()
# do objeto recebido.
#
# Teste a função com email e SMS.
interface Notificador {
    public function enviar(string $mensagem): void;
}

class NotificadorEmail implements Notificador {
    public function enviar(string $mensagem): void {
        // A própria classe adiciona o texto do canal antes da mensagem!
        echo "Email " . $mensagem . "\n";
    }
}

class NotificadorSms implements Notificador {
    public function enviar(string $mensagem): void {
        // A mesma coisa aqui, mudando para SMS
        echo "SMS " . $mensagem . "\n";
    }
}

function enviarAviso(Notificador $notificador, string $mensagem){
    $notificador->enviar($mensagem);
}

$e = new NotificadorEmail();
$s = new NotificadorSms();
enviarAviso($s, "Pagamento recebido");
enviarAviso($e, "Pagamento recebido");

# DESAFIO 04 - PEDIDO E NOTIFICAÇÃO
#
# Crie uma classe chamada Pedido.
#
# Propriedades privadas:
# - numero (int)
# - valor (float)
# - notificador (Notificador)
#
# Receba as três dependências no construtor.
#
# Crie um método chamado confirmar(): bool
#
# Regras:
# - Pedidos com valor <= 0 não podem
#   ser confirmados.
# - Pedidos inválidos retornam false
#   e não enviam notificações.
# - Pedidos válidos enviam uma notificação
#   utilizando o objeto Notificador recebido.
# - Pedidos válidos retornam true.
#
# Teste:
# Pedido 1: valor 100, notificação por email.
# Pedido 2: valor 200, notificação por SMS.
# Pedido 3: valor -50, não deve notificar.
#
# Não utilize Laravel.
# Não utilize herança.
# Utilize composição e interfaces.

class Pedido{
    private int $numero;
    private float $valor;
    private Notificador $notificador;
    public function __construct(int $numero, float $valor, Notificador $notificador){
        $this->numero       =$numero;
        $this->valor        =$valor;
        $this->notificador  =$notificador;
    }
    public function confirmar():bool{
        if($this->valor<=0){
            return false;
        }
        $mensagem = "Pedido {$this->numero}, valor: {$this->valor}";

        $this->notificador->enviar($mensagem);
        return true;
    }
}
$p1 = new Pedido(1,100, $e);
var_dump($p1->confirmar());
$p2 = new Pedido(2,200,$s);
var_dump($p2->confirmar());
$p3 = new Pedido(3, -50, $e);
var_dump($p3->confirmar());

class Carteira2{
    private float $saldo;
    public function __construct(float $saldo){
        if($saldo < 0){
            throw new InvalidArgumentException("Saldo insuficiente\n");
        }
        $this->saldo = $saldo;
    }
    public function consultarSaldo():float{
        return $this->saldo;
    }
    public function depositar(float $valor):void{
        if ($valor <= 0){
            throw new InvalidArgumentException("Valor inválido\n");
        }
        $this->saldo += $valor;
    }
    public function sacar(float $valor):void{
        if ($valor <= 0){
            throw new InvalidArgumentException("Valor inválido\n");
        }
        if ($valor > $this->saldo){
            throw new Exception("Saldo Insuficiente\n");
        }
        $this->saldo -= $valor;
    }
}

function executarTeste(callable $operacao):void{
    try{
        $operacao();
    }catch(Exception $erro){
        echo "Erro: " . $erro->getMessage() . "\n";
    }
}

$c1 = new Carteira2(100);
executarTeste(function () use ($c1) {
    $c1->depositar(30);
});
executarTeste(function () use ($c1) {
    $c1->sacar(30);
});
executarTeste(function () use ($c1) {
    $c1->sacar(200);
});
executarTeste(function () use ($c1) {
    $c1->depositar(-10);
});
executarTeste(function () use ($c1) {
    $c1->sacar(-50);
});