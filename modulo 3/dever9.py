'''
9.Elabore um algoritmo que solicite ao usuário uma palavra e um número inteiro que
indicará a quantidade de vezes que a palavra digitada será impressa na tela, um em cada
linha.
'''

# Solicita a palavra e a quantidade de vezes
palavra = input("Digite uma palavra: ")
quantidade = int(input("Digite quantas vezes deseja imprimir a palavra: "))

# Imprime a palavra na quantidade informada
for i in range(quantidade):
    print(palavra)
