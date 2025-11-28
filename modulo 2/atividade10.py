'''10. O sistema de avaliação de determinada disciplina é composto por três provas. A primeira
prova tem peso 2, a segunda tem peso 3 e a terceira tem peso 5. Considerando que a
média para aprovação é 6.0, faça um algoritmo para calcular a média final de um aluno
desta disciplina e dizer se o aluno foi aprovado ou não'''
nota1=float(input("Informe a primeira nota: "))
nota2=float(input("Informe a segunda nota: "))
nota3=float(input("Informe a terceira nota: "))

media=((nota1*2)+(nota2*3)+(nota3*5))/(2+3+5)

if media>=6:
  print(f"O aluno(a) foi APROVADO(A) com média: {media:0.2f}")
else:
  print(f"O aluno(a) foi REPROVADO(A) com média: {media:0.2f}")