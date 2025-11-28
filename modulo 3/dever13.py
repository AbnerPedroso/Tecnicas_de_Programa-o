'''
13.Elabore um algoritmo que solicite ao usuário 10 números reais e ao final apresente o
maior e o menor deles
'''

numeros = []

for i in range(10):
    numero = float(input(f"Digite o {i+1}º número real: "))
    numeros.append(numero)

maior = max(numeros)
menor = min(numeros)

print(f"\nO maior número digitado foi: {maior}")
print(f"O menor número digitado foi: {menor}")
