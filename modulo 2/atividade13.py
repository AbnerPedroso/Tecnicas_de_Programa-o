'''13. Elabore um algoritmo que leia dois números e imprima qual é maior, qual é menor, ou se
são iguais'''
num1=float(input("informe um número: "))
num2=float(input("informe outro número: "))

if num1>num2:
  print(f"O número {num1:0.1f} é maior que o número {num2:0.1f}")
elif num2>num1:
  print(f"O número {num2:0.1f} é maior que o número {num1:0.1f}")
elif num1==num2:
  print(f"O número {num1:0.1f} é igual a {num2:0.1f}")