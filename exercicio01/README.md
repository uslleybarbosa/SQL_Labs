# 🔓 Lab 01 — Login Vulnerável

Este laboratório simula uma página de login com falha de segurança, permitindo a exploração de **SQL Injection**. O objetivo é entender como consultas SQL mal protegidas podem ser manipuladas por um atacante para obter acesso não autorizado.

---

## 🧠 Objetivo do Lab

- Demonstrar como a falta de validação e uso de parâmetros seguros pode comprometer a autenticação.
- Permitir testes práticos de SQL Injection em um ambiente controlado.
- Servir como base para estudos em segurança ofensiva e análise de vulnerabilidades.

---

## 📁 Estrutura dos Arquivos

- `index.html`: Página de login simples com campos de usuário e senha.
- `login.php`: Script PHP vulnerável que executa uma consulta SQL diretamente com os dados fornecidos pelo usuário.
- `db.sqlite`: Banco de dados SQLite contendo a tabela `users`.

---

### 🔥 O seu desafio e conseguir logar sem precisar digitar a senha

---

## ⚠️ Vulnerabilidade

O código PHP utiliza a seguinte consulta:

`$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";`

Essa abordagem é vulnerável a SQL Injection, pois os dados do formulário são inseridos diretamente na query sem sanitização.

## 🧪 Exemplos de Exploração

`Usuário: '
Senha: qualquer coisa`

Observe a mensagem de erro SQLi, isso já mostra um vetor vulnerável.

## 🚀 Como executar

1. Tenha toda a estrutura de arquivos baixado no seu computador
2. Inicie um servidor local
3. Pratique e veja os resultado

Este laboratório foi desenvolvido para fins educacionais e prática ofensiva em segurança da informação. Bons estudos. 

