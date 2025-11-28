'''9. Elabore um algoritmo que leia dois números inteiros e realize a adição; caso o resultado
seja maior que 10, imprima o quadrado do resultado, caso contrário, imprima a metade dele'''
num1=int(input("Informe um número: "))
num2=int(input("Informe outro número: "))
soma=num1+num2
if soma>10:
  print(f"O quadrado da adição dos dois números é: {soma*soma}")
else:
  print(f"O quadrado do resultado é: {soma/2}")