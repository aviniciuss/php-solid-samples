# Single responsibility principle

#### Benefícios do exemplo:

- Nesse exemplo temos as regras de desconto em classes separadas assim 
evita-se ter uma classe de negócio com vários ifs decidindo qual desconto
será aplicado.

- Fácil de criar novas regras de desconto quando necessário.

- Com o uso de interfaces podemos calcular várias regras diferentes sem mecher 
no metódo que calcula o desconto do pedido.

- Cada classe com sua responsabilidade.

Exemplo minimalista para mostrar um pouco do poder de SOLID.