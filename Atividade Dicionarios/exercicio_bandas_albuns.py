bandas = {
    "Gangrena Gasosa": [
        {"álbum": "Gente Ruim Só Manda Lembrança Pra Quem Não Presta", "ano": 2019},
        {"álbum": "Se Deus É 10, Satanás É 666", "ano": 1999},
        {"álbum": "Welcome to the Macumba", "ano": 1993}
    ],
    "Rogério Skylab": [
        {"álbum": "Nas Portas do Cu", "ano": 2023},
        {"álbum": "Crítica da Faculdade do Cu", "ano": 2021},
        {"álbum": "Cosmos", "ano": 2019}
    ],
    "Garotos Podres": [
        {"álbum": "Canções para Ninar", "ano": 2003},
        {"álbum": "Com a Corda Toda", "ano": 1997},
        {"álbum": "Rock de Subúrbio", "ano": 1995}
    ],
    "Massacration": [
        {"álbum": "Live Metal Espancation", "ano": 2017},
        {"álbum": "Good Blood Headbanguers", "ano": 2009},
        {"álbum": "Gates of Metal Fried Chicken of Death", "ano": 2005}
    ],
    "Raimundos": [
        {"álbum": "Cantigas de Roda", "ano": 2014},
        {"álbum": "Roda Viva", "ano": 2006},
        {"álbum": "Éramos 4", "ano": 2001}
    ]
}


# imprimi o mais antigo
mais_antigo = None
for banda, albuns in bandas.items():
    for album in albuns:
        if mais_antigo is None or album["ano"] < mais_antigo["ano"]:
            mais_antigo = {
                "banda": banda,
                "álbum": album["álbum"],
                "ano": album["ano"]
            }

print("Álbum mais antigo:")
print(f"{mais_antigo['álbum']} - {mais_antigo['banda']} ({mais_antigo['ano']})\n")


#imprimir bandas comm maiores intervalos
maior_intervalo = 0
banda_maior_intervalo = None

for banda, albuns in bandas.items():
    anos = [a["ano"] for a in albuns]
    intervalo = max(anos) - min(anos)

    if intervalo > maior_intervalo:
        maior_intervalo = intervalo
        banda_maior_intervalo = banda

print("Banda com maior intervalo entre álbuns:")
print(f"{banda_maior_intervalo} ({maior_intervalo} anos)\n")


# 3. imprimi tudo do mais no para o mais antigo
todos_albuns = []

for banda, albuns in bandas.items():
    for album in albuns:
        todos_albuns.append((album["ano"], banda, album["álbum"]))


# Ordenar do mais novo para o mais antigo
todos_albuns.sort(reverse=True)

print("Álbuns do mais novo para o mais antigo:\n")
for ano, banda, album in todos_albuns:
    print(f"{ano} - {album} ({banda})")
