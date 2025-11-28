# 📦 Sistema Completo da Loja — Pseudocódigo
CRUD de Produtos, Clientes e Vendas

---

## 🟧 1. INICIAR SISTEMA
```
INICIAR servidor Apache + MySQL
CARREGAR página index.php
```

---

## 🟧 2. EXIBIR MENU PRINCIPAL
```
MOSTRAR navbar com opções:
  - Home
  - Produtos
  - Clientes
  - Vendas
  - Sobre
```

---

# 🟦 CRUD DE PRODUTOS

## 3. LISTAR PRODUTOS
```
CONECTAR ao banco
CONSULTAR todos os produtos
MOSTRAR tabela com:
    ID, Nome, Preço, Quantidade, Categoria
    Ações: Editar, Deletar
BOTÃO: Adicionar Produto
```

---

## 4. CADASTRAR PRODUTO
```
MOSTRAR formulário

SE enviar:
    VALIDAR campos
    INSERIR produto no banco
    REDIRECIONAR para listagem
```

---

## 5. EDITAR PRODUTO
```
BUSCAR produto pelo ID
MOSTRAR formulário preenchido

AO salvar:
    VALIDAR
    ATUALIZAR no banco
    VOLTAR para listagem
```

---

## 6. DELETAR PRODUTO
```
CONFIRMAR exclusão
SE confirmar:
    EXCLUIR pelo ID
    ATUALIZAR listagem
```

---

# 🟩 CRUD DE CLIENTES

## 7. LISTAR CLIENTES
```
CONSULTAR tabela clientes
MOSTRAR:
    ID, Nome, Telefone, Email
Ações: Editar, Deletar
BOTÃO: Cadastrar Cliente
```

---

## 8. CADASTRAR CLIENTE
```
MOSTRAR formulário
SE enviar:
    VALIDAR
    INSERIR no banco
    RECARREGAR lista
```

---

## 9. EDITAR CLIENTE
```
CARREGAR cliente pelo ID
MOSTRAR formulário

SE salvar:
    VALIDAR
    ATUALIZAR banco
    REDIRECIONAR
```

---

## 10. DELETAR CLIENTE
```
CONFIRMAR exclusão
SE confirmar:
    REMOVER cliente
    RECARREGAR lista
```

---

# 🟥 CRUD DE VENDAS

## 11. LISTAR VENDAS
```
CONSULTAR vendas
MOSTRAR:
    ID, Cliente, Produto, Quantidade, Total, Data
AÇÃO: Deletar
BOTÃO: Registrar Venda
```

---

## 12. REGISTRAR VENDA
```
MOSTRAR formulário com:
    selecione cliente
    selecione produto
    insira quantidade

SE enviar:
    VALIDAR
    CALCULAR total = quantidade * preço
    INSERIR venda
    DIMINUIR estoque
    VOLTAR
```

---

## 13. DELETAR VENDA
```
CONFIRMAR
SE confirmado:
    EXCLUIR venda
    RECARREGAR tela
```

---

# 🟨 14. PÁGINA SOBRE
```
MOSTRAR descrição do projeto
MOSTRAR tecnologias usadas
MOSTRAR autor
```

---

# 🟪 15. FINALIZAR
```
ENCERRAR conexão com o banco
FINALIZAR carregamento da página
```

---

# ✔ FIM DO PSEUDOCÓDIGO
Sistema completo funcionando!
