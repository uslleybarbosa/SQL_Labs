
# 🧪 Lab 02 — SQL Injection por Categoria

Este laboratório simula uma aplicação web que permite buscar produtos por categoria. A consulta SQL utilizada é vulnerável, permitindo que usuários maliciosos manipulem a query para acessar dados ocultos ou não autorizados.

## 🎯 Objetivo do Lab

- Explorar SQL Injection via parâmetros GET
- Acessar produtos ocultos no banco (`released = 0`)
- Treinar manipulação de filtros e enumeração de dados

## 📁 Arquivos

- `index.html`: Formulário de busca por categoria
- `produtos.php`: Script vulnerável
- `db.sqlite`: Banco de dados com produtos

## 🧪 Exemplos de ataque

- `'--` isso permite ignorar a regra de ocultar o que não foi lançado ainda.
  ` ' OR+1=1 ` isso vai fazer aparecer todos os produtos, até mesmo os ocultos

## 🚀 Como executar


 1. Suba o seu servidor local
 2. Tenha baixado todos os arquivos

## ⚠️ Aviso 

Este projeto é educacional. Não use essas técnicas fora de ambientes autorizados. Bons estudos!
