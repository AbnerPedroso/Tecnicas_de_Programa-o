'''
15. Refazer o programa 14 realizando as quatro operações aritméticas básicas
'''

# Entrada de dados
mediaAprov = float(input("Informe a média para aprovação: "))
nome = input("Informe o seu nome: ")
sexo = input("Informe seu sexo (M/F): ")

nota1 = float(input("Informe a primeira nota: "))
nota2 = float(input("Informe a segunda nota: "))
nota3 = float(input("Informe a terceira nota: "))

# Listas com possíveis respostas de sexo
sexoM = ["MASCULINO", "HOMEM", "M"]
sexoF = ["FEMININO", "MULHER", "F"]

# Cálculo da média
media = (nota1 + nota2 + nota3) / 3

# Operações aritméticas básicas
soma = nota1 + nota2 + nota3
subtracao = nota1 - nota2 - nota3
multiplicacao = nota1 * nota2 * nota3
divisao = nota1 / nota2 / nota3  

sexoUpper = sexo.strip().upper()

# Resultado
if sexoUpper in sexoM:
    if media >= mediaAprov:
        print(f"\nO aluno {nome} foi APROVADO com média {media:.1f}")
    else:
        print(f"\nO aluno {nome} foi REPROVADO com média {media:.1f}")
elif sexoUpper in sexoF:
    if media >= mediaAprov:
        print(f"\nA aluna {nome} foi APROVADA com média {media:.1f}")
    else:
        print(f"\nA aluna {nome} foi REPROVADA com média {media:.1f}")
else:
    print("\nSexo informado inválido!")

# printando tudo
print("\nOperações entre as notas:")
print(f"Soma: {soma}")
print(f"Subtração: {subtracao}")
print(f"Multiplicação: {multiplicacao}")
print(f"Divisão: {divisao:.2f}")
