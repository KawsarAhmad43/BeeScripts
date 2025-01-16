# Best Practices in Web Development:
# List: Use when you need dynamic, ordered collections. For example, an e-commerce cart where products can be added or removed.
# Tuple: Use for immutable data that shouldn't change after creation. For example, using tuples for geographical locations in an application.
# Dictionary: Use for associative arrays or key-value pairs. Ideal for scenarios like storing user profile data or form input fields.
# Set: Use when the uniqueness of elements is critical (e.g., ensuring there are no duplicate user IDs or checking if a user has already participated in a survey).
# Array: Use when working with large amounts of numerical data for processing, such as data analysis or when performance is important, such as with image processing or machine learning models.


# 1. Basic Array Operations
# Code Example:



import array

# Creating an array of integers (user scores in an online test)
user_scores = array.array('i', [85, 92, 78, 95, 88, 76, 85])  # This is the constructor for creating an array using the array module in PythonThe array module provides space-efficient storage for basic data types, like integers, floating point numbers, etc., especially when dealing with large datasets

# 1. Accessing elements
print("The first user's score is:", user_scores[0])  # Access the first score

# 2. Modifying elements
user_scores[2] = 80  # Updating the third user's score to 80
print("Updated scores:", user_scores)

# 3. Appending a new score
user_scores.append(91)
print("Scores after appending:", user_scores)

# 4. Inserting a score at a specific position
user_scores.insert(3, 90)  # Inserting 90 at the 4th position
print("Scores after inserting:", user_scores)

# 5. Removing an element
user_scores.remove(85)  # Removes the first occurrence of 85
print("Scores after removing 85:", user_scores)

# 6. Finding the length of the array
print("Number of users who took the test:", len(user_scores))

# 7. Slicing the array (getting a range of elements)
print("First 3 user scores:", user_scores[:3])

# 8. Checking if a score exists
if 95 in user_scores:
    print("A user scored 95!")

# 9. Reversing the array
user_scores.reverse()
print("Scores after reversing:", user_scores)

# 10. Sorting the array
user_scores = array.array('i', sorted(user_scores))
print("Scores after sorting:", user_scores)


--------------------------------------
# 2. Advanced Array Operations
# You can also perform mathematical operations on arrays. For these, libraries like NumPy are typically used in Python, but here’s a basic example using arrays:



import array

# Creating arrays for user scores and their corresponding weights
user_scores = array.array('i', [85, 92, 78, 95, 88, 76, 85])
weights = array.array('i', [1, 1, 2, 1, 3, 2, 1])

# 1. Calculating weighted average score
weighted_sum = 0
total_weight = 0
for score, weight in zip(user_scores, weights):
    weighted_sum += score * weight
    total_weight += weight

weighted_avg = weighted_sum / total_weight
print(f"Weighted average score: {weighted_avg:.2f}")
Explanation:
Weighted Average Calculation: We calculate the weighted average by multiplying each score by its respective weight and dividing by the total weight.

-----------------------------------------------------------  
#   3. Using NumPy for Advanced Array Operations
# In more complex scenarios (like numerical analysis), NumPy is a more efficient library for handling large arrays and performing mathematical operations on them. Here's an example:


import numpy as np

# Creating an array of test scores using NumPy
user_scores = np.array([85, 92, 78, 95, 88, 76, 85])

# 1. Calculating mean score
mean_score = np.mean(user_scores)
print(f"Mean Score: {mean_score}")

# 2. Performing element-wise addition (e.g., adding bonus points)
bonus_scores = user_scores + 5
print(f"Scores after adding bonus: {bonus_scores}")

# 3. Performing element-wise multiplication (e.g., applying a weight factor)
weighted_scores = user_scores * 1.1
print(f"Weighted Scores (after 10% increase): {weighted_scores}")

# 4. Sorting the scores
sorted_scores = np.sort(user_scores)
print(f"Sorted Scores: {sorted_scores}")
------------------------------------------------------------------------------------------------
