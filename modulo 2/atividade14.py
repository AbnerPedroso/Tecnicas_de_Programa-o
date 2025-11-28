'''
14. Escreva um programa em linguagem C que solicite ao usuário a média para aprovação
em um curso e em seguida solicite ao usuário o nome, sexo e as 03 notas do aluno e ao
final imprima a frase: "O aluno XXXXX foi aprovado com media YY" considerando o gênero
do(a) aluno(a) e se foi aprovado(a) ou reprovado(a)
'''

# Entrada de dados:
mediaAprov = float(input("Informe a média para aprovação: "))
nome = input("Informe o seu nome: ")
sexo = input("Informe seu sexo (M/F): ")

nota1 = float(input("Informe a primeira nota: "))
nota2 = float(input("Informe a segunda nota: "))
nota3 = float(input("Informe a terceira nota: "))

# Listas com possíveis respostas para sexo
sexoM = ["MASCULINO", "HOMEM", "M"]
sexoF = ["FEMININO", "MULHER", "F"]

# Cálculo da média
media = (nota1 + nota2 + nota3) / 3

sexoUpper = sexo.strip().upper()  # remove espaços e deixa tudo maiúsculo

# Verificação
if sexoUpper in sexoM:
    if media >= mediaAprov:
        print(f"O aluno {nome} foi APROVADO com média {media:.1f}")
    else:
        print(f"O aluno {nome} foi REPROVADO com média {media:.1f}")

elif sexoUpper in sexoF:
    if media >= mediaAprov:
        print(f"A aluna {nome} foi APROVADA com média {media:.1f}")
    else:
        print(f"A aluna {nome} foi REPROVADA com média {media:.1f}")

else:
    print("Sexo informado inválido!")
