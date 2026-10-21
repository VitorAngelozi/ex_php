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