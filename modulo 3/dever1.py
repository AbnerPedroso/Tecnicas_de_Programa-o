'''
1. Elabore um algoritmo que imprima na tela lado a lado o texto "Hello World!" 10 vezes.
'''

#para imprimir uma ao lado da outra
for i in range(10):
    print("Hello World!", end=" ")  

print()  

#usando multiplicação
print(("Hello World! " * 10).strip())

