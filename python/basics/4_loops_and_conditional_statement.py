# Conditional statement structure:
# if condition:
#     # Code to execute if condition is true
# elif another_condition:
#     # Code to execute if the first condition is false and this condition is true
# else:
#     # Code to execute if none of the above conditions are true

# User status
user_logged_in = True
is_admin = False

if user_logged_in and is_admin:
    print("Welcome, Admin! You have full access.")
elif user_logged_in:
    print("Welcome back! You have limited access.")
else:
    print("Please log in to access the system.")

# ----------------------------------------------------

# Match Case Statement
# Structure:
# match variable:
#     case pattern1:
#         # Code for pattern1
#     case pattern2:
#         # Code for pattern2
#     case _:
#         # Default case if no patterns match

http_method = "POST"

match http_method:
    case "GET":
        print("Fetching data...")
    case "POST":
        print("Saving data...")
    case "DELETE":
        print("Deleting data...")
    case _:
        print("Unsupported HTTP method.")
..................................................................
# for Loop
# A for loop is used to iterate over a sequence (like a list, tuple, or string).

# structure
# for item in sequence:
#     # Code to execute for each item

user_emails = ["user1@example.com", "user2@example.com", "user3@example.com"]

for email in user_emails:
    print(f"Sending welcome email to {email}...")

......................................................................
# while Loop
# A while loop is used to execute a block of code as long as a condition is true.
# structure:

# while condition:
#     # Code to execute

connection_attempts = 0
max_attempts = 3
connected = False

while connection_attempts < max_attempts and not connected:
    connection_attempts += 1
    print(f"Attempt {connection_attempts}: Trying to connect...")
    if connection_attempts == 2:  # Simulate a successful connection
        connected = True

if connected:
    print("Connected to the database!")
else:
    print("Failed to connect after 3 attempts.")

-------------------------------------------------------------------------------
# list of dictionalries here users is list and inside curly braces key based components are dictionaries
users = [
    {"name": "Alice", "role": "Admin"},
    {"name": "Bob", "role": "Editor"},
    {"name": "Charlie", "role": "Viewer"},
]

for user in users:
    print(f"User: {user['name']}")
    
    if user["role"] == "Admin":
        print("Access Level: Full")
    elif user["role"] == "Editor":
        print("Access Level: Moderate")
    else:
        print("Access Level: Read-only")
    print("-" * 30)

--------------------------------------------------------------------------------


# Nested loop
categories = ["Electronics", "Clothing", "Home Appliances"]
regions = ["North", "South", "East", "West"]

for category in categories:
    for region in regions:
        print(f"Category: {category}, Region: {region}")



------------------------------------------------------------------
# List Comprehensions 
users = [{"name": "Alice", "active": True}, {"name": "Bob", "active": False}, {"name": "Charlie", "active": True}]

active_users = [user["name"] for user in users if user["active"]]
print("Active Users:", active_users)

---------------------------------------------------------------------
#  Infinite Loop

import time

server_status = ["up", "up", "down", "up"]

while True:
    status = server_status.pop(0)
    print(f"Server is {status}.")
    if status == "down":
        print("Alert! Server is down. Exiting...")
        break
    if not server_status:
        print("All checks complete.")
        break
    time.sleep(1) 
-------------------------------------------------------
#  Looping Over Dictionaries
# Use .items(), .keys(), or .values() to iterate over dictionaries.
# Real-Life Example: Display User Details

user_details = {"name": "Alice", "email": "alice@example.com", "role": "Admin"}

for key, value in user_details.items():
    print(f"{key.capitalize()}: {value}")


----------------------------------------------------------------------------------
#  ranged For loop
total_pages = 5

for page in range(1, total_pages + 1):
    print(f"Page {page} link generated.")

---------------------------------------------------
# Loop with Else
# An else clause in a loop executes when the loop completes normally (i.e., no break occurred).
# Real-Life Example: Check Product Availability

products = ["Laptop", "Phone", "Tablet"]
searched_product = "Camera"

for product in products:
    if product == searched_product:
        print(f"{searched_product} is available!")
        break
else:
    print(f"{searched_product} is not available in stock.")
