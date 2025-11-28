'''
16.screva um programa que solicite o valor fixo do salário de um vendedor, o total vendido
no mês e o percentual de comissão do vendedor. Ao final apresentar o salário bruto.
'''

salario_fixo = float(input("Digite o valor fixo do salário do vendedor: R$ "))
total_vendas = float(input("Digite o total vendido no mês: R$ "))
percentual_comissao = float(input("Digite o percentual de comissão (%): "))

# Calcula valor da comissão
comissao = total_vendas * (percentual_comissao / 100)

# Calcula salário bruto
salario_bruto = salario_fixo + comissao

# Exibe resultado
print(f"O salário bruto do vendedor é: R$ {salario_bruto:.2f}")
