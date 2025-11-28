'''8. Elabore um algoritmo que leia um número, e se ele for maior do que 20, imprimir a metade
desse número, caso contrário, imprimir o dobro do número'''
num=float(input("Informe um número: "))
if num>20:
  print(f"A metade do número informado é: {num/2}")
else:
  print(f"O dobro do número informado é: {num*2}")