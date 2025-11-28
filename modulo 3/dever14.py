'''
14. Elabore um algoritmo que solicite N números reais e quando o usuário informar o valor
nulo 0 (zero) o programa ordene e mostre todos os números informados de forma crescente.
'''

numeros = []

print("Digite números reais. Digite 0 para encerrar e mostrar os números em ordem crescente.")

while True:
    numero = float(input("Digite um número: "))
    
    if numero == 0:
        break  
    numeros.append(numero)

# Ordena a lista em ordem crescente
numeros.sort()

print("\nNúmeros em ordem crescente:")
for num in numeros:
    print(num)
