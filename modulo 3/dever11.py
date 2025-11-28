'''
11. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
registros a serem lidos (N). Em seguida algoritmo deve solicitar o nome e idade de N
pessoas e ao final apresentar o nome da pessoa mais velha
'''


N = int(input("Digite a quantidade de pessoas: "))


nome_mais_velho = ""
idade_mais_velho = -1 

# Loop
for i in range(N):
    nome = input(f"Digite o nome da {i+1}ª pessoa: ")
    idade = int(input(f"Digite a idade de {nome}: "))
    
    
    if idade > idade_mais_velho:
        idade_mais_velho = idade
        nome_mais_velho = nome

print(f"\nA pessoa mais velha é {nome_mais_velho} com {idade_mais_velho} anos.")
