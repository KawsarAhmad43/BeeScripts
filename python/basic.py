# Take input from the user
num1 = int(input("Enter the first number: "))
num2 = int(input("Enter the second number: "))

# Check if the first number is even or odd
if num1 % 2 == 0:
    print(num1, "is even")
else:
    print(num1, "is odd")

# Check if the second number is even or odd
if num2 % 2 == 0:
    print(num2, "is even")
else:
    print(num2, "is odd")

# Calculate the sum of the two numbers
sum = num1 + num2



# Print the result
print("The sum of", num1, "and", num2, "is", sum)
# check if the result is odd or even
if sum % 2 ==0:
      print(sum, "is even")
else:
    print(sum, "is odd")
