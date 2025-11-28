'''
7. Escreva um programa que solicite ao usuário um número inteiro e um número real e ao final
apresente na tela os dois números informados formatando com duas casas decimais
somente o número real da seguinte forma: "Voce informou os numeros N e X.YY
'''

inteiro = int(input("Digite um número inteiro: "))
real = float(input("Digite um número real: "))

print(f"Você informou os números {inteiro} e {real:.2f}")
