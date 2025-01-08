# 1. List: Store product names (may have duplicates)
products = ["apple", "banana", "apple", "orange", "mango", "banana"]

# Operations on List:
# Add a product to the list
products.append("grape")
print("Updated products list:", products)

# Remove a product from the list
products.remove("orange")
print("After removing 'orange':", products)

# Find the index of a product
index_of_banana = products.index("banana")
print(f"Index of 'banana': {index_of_banana}")

# Count occurrences of a product
apple_count = products.count("apple")
print(f"Count of 'apple': {apple_count}")

# 2. Set: Store unique product categories (no duplicates allowed)
product_categories = {"fruit", "vegetable", "dairy"}

# Operations on Set:
# Add a new category
product_categories.add("beverage")
print("After adding 'beverage':", product_categories)

# Remove a category
product_categories.remove("vegetable")
print("After removing 'vegetable':", product_categories)

# Check if a category exists
is_fruit_present = "fruit" in product_categories
print(f"Is 'fruit' present in categories? {is_fruit_present}")

# 3. Tuple: Store product and quantity as pairs (immutable)
inventory = [("apple", 50), ("banana", 30), ("orange", 20)]

# Operations on Tuple:
# Print product and quantity
for product, quantity in inventory:
    print(f"Product: {product}, Quantity: {quantity}")

# Note: You cannot modify a tuple, but you can replace it in a list
inventory[1] = ("banana", 35)  # Updating banana quantity
print("Updated inventory:", inventory)

# 4. Dictionary: Store product details (name, price, category)
product_details = {
    "apple": {"price": 1.2, "category": "fruit"},
    "banana": {"price": 0.5, "category": "fruit"},
    "orange": {"price": 0.8, "category": "fruit"},
}

# Operations on Dictionary:
# Add a new product detail
product_details["mango"] = {"price": 1.5, "category": "fruit"}
print("After adding 'mango':", product_details)

# Update product price
product_details["apple"]["price"] = 1.3
print("After updating 'apple' price:", product_details)

# Remove a product from dictionary
del product_details["orange"]
print("After removing 'orange':", product_details)

# Access specific product information
banana_price = product_details["banana"]["price"]
print(f"Price of banana: {banana_price}")

# Check if a product exists in the dictionary
is_grape_present = "grape" in product_details
print(f"Is 'grape' present in product details? {is_grape_present}")

# 5. Mixed Operations: Using all the above data types
# Check if product is in the list and if its category exists in set
product_to_check = "apple"
if product_to_check in products and "fruit" in product_categories:
    print(f"'{product_to_check}' exists in products list and has category 'fruit'.")
    
# Find product and its details using the inventory and dictionary
for product, quantity in inventory:
    if product in product_details:
        price = product_details[product]["price"]
        print(f"Product: {product}, Quantity: {quantity}, Price: {price}")
