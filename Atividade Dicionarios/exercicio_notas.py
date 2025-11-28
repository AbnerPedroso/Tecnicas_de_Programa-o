alunos = {
    "Alice": 8.5,
    "Bruno": 7.8,
    "Carla": 9.2,
    "Diego": 6.9,
    "Eva": 8.0,
    "Fernando": 7.5,
    "Gabriela": 9.0,
    "Henrique": 6.7,
    "Isabela": 8.3,
    "João": 7.2
}

quantidade = len(alunos)

tem_zero = 0 in alunos.values()

menor = min(alunos.values())

maior = max(alunos.values())

print("Quantidade de alunos:", quantidade)
print("Alguém tirou nota zero?", "Sim" if tem_zero else "Não")
print("Menor nota:", menor)
print("Maior nota:", maior)
