animes = {
    "Naruto": 220,
    "Jujutsu Kaisen": 47,
    "Dragon Ball Z": 291,
    "Death Note": 37,
    "Fullmetal Alchemist": 64,
    "Evangelion": 26,
    "Berserk": 25,
    "Code Geass": 50,
    "Akame ga Kill!": 24,
    "Elfen Lied": 13
}

# 1. Calcular o total de episódios
total_episodios = sum(animes.values())
print("Total de episódios:", total_episodios)

# 2. Substituir a quantidade pela porcentagem
for nome in animes:
    percentual = animes[nome] / total_episodios
    animes[nome] = percentual

# 3. Imprimir nome e percentual em ordem decrescente
print("\nPercentual de episódios por anime (ordem decrescente):")

# Ordena por valor (percentual), do maior para o menor
animes_ordenados = sorted(animes.items(), key=lambda x: x[1], reverse=True)

for nome, perc in animes_ordenados:
    print(f"{nome}: {perc:.2%}")  # :.2% = formatação percentual com 2 casas decimais
