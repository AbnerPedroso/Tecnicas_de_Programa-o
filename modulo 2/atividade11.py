'''11. Elabore um algoritmo que leia o nome e o peso de duas pessoas e imprima o nome da
pessoa mais pesada'''
nome1=(input("Informe o nome da primeira pessoa: "))
peso1=float(input("Informe o peso da primeira pessoa: "))
nome2=(input("Informe o nome da segunda pessoa: "))
peso2=float(input("Informe o peso da segunda pessoa: "))

if peso1>peso2:
  print(f"A pessoa mais pesada é {nome1}")
elif peso2>peso1:
  print(f"A pessoa mais pesada é {nome2}")
else:
  print("As pessoas tem o mesmo peso.")