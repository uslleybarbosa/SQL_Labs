
## 🧪 Exercício 03 — Explorando SQL Injection com UNION SELECT 

Este laboratório tem como objetivo demonstrar, de forma prática, como uma aplicação vulnerável pode ser explorada por meio de SQL Injection, 
especificamente utilizando a técnica de UNION SELECT para acessar dados de outras tabelas do banco.

## 🧠 Conceito 

Quando uma aplicação constrói consultas SQL diretamente com dados fornecidos pelo usuário, sem validação ou proteção, ela se torna vulnerável a ataques. Neste exercício, o campo de busca por categoria está vulnerável, permitindo que um atacante injete comandos SQL maliciosos.

A consulta original é:

`SELECT nome, descricao FROM produtos WHERE categoria = '$categoria' `

Se o usuário inserir uma string manipulada, como:

`' UNION SELECT nome, senha FROM usuarios-- `

A consulta se transforma em:

```
SELECT nome, descricao FROM produtos WHERE categoria = ''
UNION SELECT nome, senha FROM usuarios
```

Com isso, o sistema retorna dados da tabela usuarios, mesmo que ela não tenha relação com a funcionalidade original.

## ⚠️ Como a vulnerabilidade é exposta

O valor digitado no campo `categoria` é inserido diretamente na consulta SQL, **sem nenhum tipo de sanitização**.

O banco de dados utilizado é **SQLite**, que permite o uso de `UNION SELECT` desde que:

- O número de colunas seja igual nas duas consultas.
- Os tipos de dados sejam compatíveis.

## 🎯 Desafio do usuário

Seu objetivo neste exercício é explorar uma aplicação vulnerável a SQL Injection usando a técnica de `UNION SELECT`. Mas atenção: **você não receberá todas as respostas de imediato** — parte do desafio é descobrir por conta própria.

### 🧩 Etapas sugeridas:

1. **Baixe os arquivos deste exercício** e rode localmente em um servidor PHP com suporte a SQLite.

2. **Interaja com o campo de busca por categoria** e observe como a aplicação responde.

3. **Descubra quantas colunas existem** na consulta original usando:

   ```
   ' ORDER BY 1--
   ' ORDER BY 2--
   ' ORDER BY 3--  -- (até gerar erro)
   ```
4. Descubra quais tabelas existem no banco de dados
5. Monte uma injeção que retorne dados sensíveis de outra tabela

## ⚠️ Este exercício é apenas para fins educacionais. Nunca execute testes de segurança em sistemas reais sem permissão explícita.


