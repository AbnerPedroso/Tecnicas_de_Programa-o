'''5.2 Refazer o exercício anterior, solicitando antes o múltiplo a ser testado'''
print ("escolha o numero multiplicado")
num=int (input())
print ("escolha teu numero para saber se ele é multiplo")
nume=int (input())

if num%nume==0:
  print("seus numeros são multiplos")
elif nume%num==0:
  print("seus numeros são multiplos")
else:
  print ("seus números não são multiplos")