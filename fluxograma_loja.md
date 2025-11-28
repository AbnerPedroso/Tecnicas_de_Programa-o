# 💠 Fluxograma — Sistema da Loja  
CRUD de Produtos, Clientes e Vendas

---

# 🔶 INÍCIO
```
INICIAR SISTEMA
↓
CARREGAR index.php
↓
MOSTRAR MENU PRINCIPAL
```

---

# 🔷 MENU PRINCIPAL
```
┌───────────────────────┐
│ 1 — Produtos           │
│ 2 — Clientes           │
│ 3 — Vendas             │
│ 4 — Sobre              │
└───────────────────────┘
↓
USUÁRIO ESCOLHE UMA OPÇÃO
```

---

# 🟦 FLUXO: PRODUTOS

## 1️⃣ Listar Produtos
```
LISTAR_PRODUTOS →
↓ CONSULTA no banco
↓ EXIBIR TABELA
↓
┌──────────────┐
│ Cadastrar    │
│ Editar       │
│ Deletar      │
└──────────────┘
```

---

## 2️⃣ Cadastrar Produto
```
ABRIR FORMULÁRIO
↓
USUÁRIO PREENCHE
↓
VALIDAR CAMPOS
↓
INSERIR NO BANCO
↓
RETORNAR À LISTA
```

---

## 3️⃣ Editar Produto
```
BUSCAR PRODUTO PELO ID
↓
MOSTRAR FORMULÁRIO COM OS DADOS
↓
USUÁRIO ALTERA
↓
VALIDAR
↓
ATUALIZAR BANCO
↓
RETORNAR À LISTA
```

---

## 4️⃣ Deletar Produto
```
PEDIR CONFIRMAÇÃO
↓
SE CONFIRMAR:
   EXCLUIR PRODUTO
↓
ATUALIZAR LISTA
```

---

# 🟩 FLUXO: CLIENTES

## 1️⃣ Listar Clientes
```
LISTAR_CLIENTES →
↓ CONSULTAR banco
↓ EXIBIR tabela
↓
AÇÕES:
   Editar
   Deletar
   Cadastrar
```

---

## 2️⃣ Cadastrar Cliente
```
MOSTRAR FORMULÁRIO
↓
USUÁRIO PREENCHE
↓
VALIDAR
↓
SALVAR NO BANCO
↓
VOLTAR PARA LISTAGEM
```

---

## 3️⃣ Editar Cliente
```
PEGAR CLIENTE PELO ID
↓
FORMULÁRIO COM DADOS
↓
VALIDAR
↓
ATUALIZAR
↓
RETORNAR
```

---

## 4️⃣ Deletar Cliente
```
CONFIRMAR
↓
REMOVER CLIENTE
↓
ATUALIZAR LISTA
```

---

# 🟥 FLUXO: VENDAS

## 1️⃣ Listar Vendas
```
LISTAR_VENDAS →
↓ CONSULTAR BANCO
↓ EXIBIR TABELA
↓
AÇÕES:
  Registrar Venda
  Deletar Venda
```

---

## 2️⃣ Registrar Venda
```
MOSTRAR FORMULÁRIO
↓
SELECIONAR CLIENTE
↓
SELECIONAR PRODUTO
↓
INSERIR QUANTIDADE
↓
CALCULAR TOTAL
↓
SALVAR NO BANCO
↓
DIMINUIR ESTOQUE
↓
VOLTAR À LISTA
```

---

## 3️⃣ Deletar Venda
```
PEDIR CONFIRMAÇÃO
↓
EXCLUIR DO BANCO
↓
RETORNAR À LISTA
```

---

# 🟨 PÁGINA SOBRE
```
MOSTRAR:
- Descrição do sistema
- Objetivo do projeto
- Tecnologias usadas
- Nome do autor
```

---

# 🟪 FINAL
```
ENCERRAR CONEXÃO COM BANCO
↓
FIM
```

---

# ✔ FIM DO FLUXOGRAMA
