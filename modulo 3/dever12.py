'''
12.. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
registros a serem lidos (N). Em seguida algoritmo deve solicitar o sexo (M/F) e idade de N
pessoas e ao final apresentar a média de idade de ambos os gêneros catalogados.
'''

N = int(input("Digite a quantidade de pessoas: "))

soma_idade_m = 0
cont_m = 0
soma_idade_f = 0
cont_f = 0

for i in range(N):
    while True:
        sexo = input(f"Digite o sexo da {i+1}ª pessoa (M/F): ").strip().upper()
        if sexo in ["M", "F"]:
            break
        else:
            print("Sexo inválido! Digite apenas M ou F.")

    idade = int(input(f"Digite a idade da {i+1}ª pessoa: "))

    # Acumula idade e contagem de acordo com o sexo
    if sexo == "M":
        soma_idade_m += idade
        cont_m += 1
    else:
        soma_idade_f += idade
        cont_f += 1

# Calcula médias
media_m = soma_idade_m / cont_m if cont_m != 0 else 0
media_f = soma_idade_f / cont_f if cont_f != 0 else 0

print(f"\nMédia de idade dos homens: {media_m:.2f} anos")
print(f"Média de idade das mulheres: {media_f:.2f} anos")
