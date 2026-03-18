## 📚 SenaiStock - API de Controle de Estoque
Sobre o Projeto
API RESTful desenvolvida em Laravel para controle de estoque de livros didáticos do SENAI. O sistema gerencia entradas, saídas e alertas de baixo estoque, garantindo saldo sempre atualizado.

🛠 Tecnologias Utilizadas
Back-End: Laravel (PHP)

Banco de Dados: MySQL com Eloquent ORM

API: RESTful com respostas JSON

Testes: Insomnia/Postman

Versionamento: Git e GitHub

---

## ⚙️ Principais Funcionalidades
✅ Autenticação - Login/logout com token

✅ Cadastro de Livros - Título, ISBN, matéria (ISBN único)

✅ Listagem - Livros com saldo atual e filtros

✅ Entrada - Registrar abastecimento

✅ Saída - Registrar retirada com validação de saldo

✅ Consulta - Saldo por livro

✅ Alertas - Livros abaixo do nível mínimo

✅ Histórico - Movimentações com filtros

---

## 📌 Regras de Negócio
Estoque não pode ficar negativo

ISBN deve ser único no cadastro

Quantidade sempre positiva

Toda movimentação registra usuário e data

Operações em transação para consistência

---

## 🔗 Links do Projeto
**Código:** [GitHub](https://github.com/Furtunato/senaistock-api)

**Gestão:** [Trello](https://trello.com/invite/b/699f268b07de738132c049e8/ATTI29d0a4c4c35580343d8fadd22690eaa70C116F6A)

**Prototipagem:** [Figma](https://www.figma.com/design/9p1XpNNuL7FRum50qBvw4D)

---

## 📊 Metodologia
Desenvolvido em 6 Sprints utilizando Scrum:

Levantamento de requisitos e modelagem

Implementação da API

Funcionalidades de estoque

Alertas e históricos

Testes e validações

Implantação

---

## 👥 Equipe de Desenvolvimento
Diogo Scherrer

Gabriel Furtunato

Gabriel Xavier
