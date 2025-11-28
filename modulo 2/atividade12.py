'''12. Elabore um algoritmo que indique se um número digitado está compreendido entre 20 e
90, ou não'''
num=float(input("Informe um número: "))

if num>20 and num<90:
  print(f"O número {num:0.1f} está entre 20 e 90")
else:
  print(f"O número {num:0.1f} não está entre 20 e 90")