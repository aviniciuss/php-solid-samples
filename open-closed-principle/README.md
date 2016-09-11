# Open/closed principle

#### Benefícios do exemplo:

- A classe Calculadora de pedido esta fechada para alteração e aberta para
extenção. Pois pode passar outro tipo de serviço de entrega e utro tipo de 
tabela de desconto sem alterar a classe.

- Foi usado o mecanismo de inverção de controle (dependency inversion principle), a classe CalculadoreDePedido 
depende das interfaces e não das implementaçãoes de serviço de entrega e tabela de desconto. Assim temos classes mais
coesas e estáveis.