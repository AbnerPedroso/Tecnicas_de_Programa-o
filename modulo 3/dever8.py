'''
8.Elabore um algoritmo que solicite ao usuário um número inteiro que indicará a quantidade
de vezes que o texto "Hello World!" será impresso na tela, um em cada linha
'''

quantidade = int(input("Digite a quantidade de vezes que deseja imprimir 'Hello World!': "))

for i in range(quantidade):
    print("Hello World!")
