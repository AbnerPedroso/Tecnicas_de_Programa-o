'''
8. Escreva um programa que solicite ao usuário a primeira letra de seu nome e ao final
apresente na tela a letra informada pelo usuário da seguinte forma: "Voce digitou w"
'''

while True:
    letra = input("Digite a primeira letra do seu nome: ")

    # Verifica se digitou apenas 1 caractere E se é letra
    if len(letra) == 1 and letra.isalpha():
        break  # saida do loop
    else:
        print("INVÁLIDO! Digite apenas UMA letra.\n")

# Verifica maiúscula ou minúscula
if letra.isupper():
    tipo = "maiúscula"
else:
    tipo = "minúscula"

print(f"Você digitou '{letra}', que é uma letra {tipo}.")
