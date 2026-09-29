# Criação de API REST (GET,POST,PUT,DELETE) com SQL 

## Passo a passo

### 1- Passo: <br>
>Crie um banco de dados chamado manutencao e uma tabela chamada chamados. 

*MOBA*

![alt text](<Captura de tela 2026-09-29 083228.png>)

*TABELA NO VSC*
> A tabela deverá possuir os campos id, equipamento, setor, descricao, prioridade e status. O campo id deverá ser a chave primária e possuir incremento automático.

![alt text](<Captura de tela 2026-09-29 083212.png>)

![alt text](<Captura de tela 2026-09-29 083321.png>)
----

### 2- Passo:
>A API deverá utilizar PDO, receber e devolver os dados no formato JSON e implementar as quatro operações básicas de um CRUD

Para isso usamos os arquivos "conexao.php" e "chamados.php".

---

### 3- Passo:
>A prioridade deverá aceitar os valores baixa, media ou alta, enquanto o status deverá aceitar aberto, em andamento ou concluido

Para isso, modifiquei algumas coisas no arquivo "chamados.php" :

![alt text](image.png)

![alt text](image-1.png)

----

### 4- Passo:
>Antes de executar uma operação, o sistema deverá verificar se os dados obrigatórios foram informados. Quando uma operação for concluída, a API deverá retornar uma mensagem em JSON informando seu resultado.

---

*GET*

![alt text](<Captura de tela 2026-09-29 101905.png>)

![alt text](image-2.png)

----

*POST*

![alt text](<Captura de tela 2026-09-29 095339.png>)

![alt text](<Captura de tela 2026-09-29 095346.png>)

---

*PUT*

![alt text](<Captura de tela 2026-09-29 095505.png>)

![alt text](<Captura de tela 2026-09-29 095511.png>)

----

*DELETE*

![alt text](<Captura de tela 2026-09-29 095527.png>)

![alt text](<Captura de tela 2026-09-29 095533.png>)