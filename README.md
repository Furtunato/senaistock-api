## 📚 Controle de Estoque de Livros Didáticos – SENAI

Este projeto consiste no desenvolvimento do **Back-End do SenaiStock**, uma API RESTful criada para controlar o estoque de livros didáticos do SENAI.

### 🎯 Objetivo

Garantir o controle e manter o saldo de livros sempre atualizado no estoque, evitando falhas no controle de saídas, ruptura de estoque e atrasos na distribuição para as turmas.

O sistema registra:

* 📥 Entradas de livros (abastecimento)
* 📤 Saídas de livros (retiradas para turmas)
* ⚠️ Alertas de baixo estoque
* 📊 Histórico completo de movimentações

---

## 🛠 Tecnologias Utilizadas

* **Laravel (PHP)** – Back-End
* **MySQL** – Banco de dados relacional
* **Eloquent ORM**
* API RESTful com respostas em JSON
* Testes via Insomnia/Postman
* Versionamento com Git e GitHub

---

## ⚙️ Principais Funcionalidades

* 🔐 Autenticação com token (login/logout)
* 📚 Cadastro e listagem de livros (ISBN único)
* ➕ Registro de entrada no estoque
* ➖ Registro de saída com validação de saldo
* 🚫 Bloqueio de estoque negativo
* 📉 Monitoramento de livros abaixo do nível mínimo
* 🕓 Histórico completo de movimentações com filtros

---

## 📌 Regras Importantes

* Estoque nunca pode ficar negativo.
* ISBN não pode ser duplicado.
* Toda movimentação registra usuário e data.
* Operações críticas são executadas com transação para garantir consistência.


---

## 🚀 Metodologia

O projeto foi desenvolvido utilizando **Scrum**, dividido em 6 Sprints, contemplando:

* Levantamento de requisitos
* Modelagem UML e Banco de Dados
* Implementação da API
* Testes e validações
* Implantação
* Apresentação final

Ferramentas utilizadas:

* Trello (gestão das Sprints)
Link: https://trello.com/invite/b/699f268b07de738132c049e8/ATTI29d0a4c4c35580343d8fadd22690eaa70C116F6A/controle-de-estoque-de-livros-didaticos-metodologia-scrum

* GitHub (versionamento)
Link: https://github.com/Furtunato/senaistock-api

* Figma (prototipação)
Link: https://www.figma.com/design/9p1XpNNuL7FRum50qBvw4D/Sem-t%C3%ADtulo?node-id=0-1&p=f


Este sistema visa modernizar o controle de estoque do SENAI, trazendo mais organização, segurança e confiabilidade na gestão dos livros didáticos.

