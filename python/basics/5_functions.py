#  1. Function Without Parameters and Without Return Value
def show_notification():
    print("You have a new message!")

# Call the function
show_notification()


------------------------------------------

# 2. Function Without Parameters But With a Return Value

from datetime import date

def get_current_date():
    return date.today()

# Call the function and use the returned value
current_date = get_current_date()
print("Today's date is:", current_date)

--------------------------------------------

# 3. Function With Parameters But Without Return Value

def greet_user(name):
    print(f"Hello, {name}! Welcome back.")

# Call the function with a parameter
greet_user("Kawsar")

--------------------------------------------------

# 4. Function With Parameters and a Return Value 
def calculate_total(price, quantity):
    total = price * quantity
    return total

# Call the function and store the returned value
total_price = calculate_total(20, 3)
print("Total Price:", total_price)
-----------------------------------------------
#  Variable Number of Arguments
# Python functions can handle an arbitrary number of arguments using *args and **kwargs.

# a. Using *args for Multiple Positional Arguments
# Example: Add Multiple Numbers (Real-Life: Calculate Cart Total)

def add_numbers(*args):
    return sum(args)

# Call the function with multiple arguments
total = add_numbers(10, 20, 30, 40)
print("Total Sum:", total)



# b. Using **kwargs for Multiple Keyword Arguments
# Example: Store User Details (Real-Life: Storing Form Data)


def store_user_details(**kwargs):
    for key, value in kwargs.items():
        print(f"{key}: {value}")

# Call the function with multiple keyword arguments
store_user_details(name="Kawsar", age=25, role="Developer")
--------------------------------------------------


# Lambda Functions
# Lambda functions are anonymous, one-line functions often used for short tasks.
# often used for sorting

users = [{"name": "Alice", "age": 30}, {"name": "Bob", "age": 25}, {"name": "Charlie", "age": 35}]

sorted_users = sorted(users, key=lambda user: user["age"])
print(sorted_users) 

---------------------------------------------------------
