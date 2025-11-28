'''
10.. Elabore um algoritmo que leia um número de entrada que indicará a quantidade de
números a serem lidos. Em seguida, leia n números (conforme o valor informado
anteriormente) e imprima a soma e a média aritmética dos números informados.
'''

n = int(input("Digite a quantidade de números que serão informados: "))

soma = 0

# Lê os n números e calcula a soma
for i in range(n):
    numero = float(input(f"Digite o {i+1}º número: "))
    soma += numero

# Calculo da média
media = soma / n if n != 0 else 0

print(f"Soma dos números: {soma}")
print(f"Média aritmética: {media}")
