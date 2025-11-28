'''6. Refazer o exercício anterior, solicitando antes o múltiplo a ser testado'''
num=float(input("Informe um número: "))
multi=int(input("Informe um `múltiplo a ser testado: "))
if num%multi==0:
  print(f"O número informado é múltiplo de {multi}")
else:
  print(f"O número informado não é múltiplo de {multi}")