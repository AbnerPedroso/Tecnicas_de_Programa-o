'''
15. Escreva um programa que vá solicitando as idades dos alunos da sala até que todos
sejam informados (perguntar ao usuário se deseja informar a idade do próximo aluno). Ao
final apresentar a idade do mais novo, a idade do mais velho, Quantos alunos têm mais de
18 anos, quantos alunos têm até 18 anos, a média aritmética e a mediana.
'''

import statistics 

idades = []

while True:
    idade = int(input("Digite a idade do aluno: "))
    idades.append(idade)
    
    continuar = input("Deseja informar a idade do próximo aluno? (S/N): ").strip().upper()
    if continuar != "S":
        break

# Calcula maior e menor idade
mais_novo = min(idades)
mais_velho = max(idades)

# Contagem de maiores e menores de 18
maiores_18 = sum(1 for i in idades if i > 18)
ate_18 = sum(1 for i in idades if i <= 18)

# Média e mediana
media = sum(idades) / len(idades)
mediana = statistics.median(idades)


print(f"\nIdade do mais novo: {mais_novo}")
print(f"Idade do mais velho: {mais_velho}")
print(f"Quantidade de alunos com mais de 18 anos: {maiores_18}")
print(f"Quantidade de alunos com até 18 anos: {ate_18}")
print(f"Média das idades: {media:.2f}")
print(f"Mediana das idades: {mediana}")
