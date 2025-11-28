'''
6. Escreva um programa que solicite ao usuário a temperatura em graus Celsius e ao final
apresente a temperatura correspondente em graus Farenheit. F = Celsius * 1.8 + 32
'''

celsius = float(input("Digite a temperatura em graus Celsius: "))

fahrenheit = celsius * 1.8 + 32

print(f"A temperatura em Fahrenheit é: {fahrenheit:.2f}°F")
