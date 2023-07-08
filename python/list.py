# lists are collection that are ordered and changebale and can have different type of data

#  initializing list[]
students = ['ahmad','eva','sarfaraz','misbah','sadia','shofiq','topu','arif','arif']
# finding the size of the list
size = len(students)
#  print the size
print(size)
# implementing fr loop to see student names
for student in students:
    print(student)



find = input("Enter the name that you want to find: ")
# to keep track of whether the name has been found or not.
# initially false
found= False
#  The enumerate() function is used to get both the index and the value of each element.
for index, student in enumerate(students):
    if find == student:
        print(f"{find} found at at index: {index}.")
        found=True
        break
    if not found:
        print(f"{find} is not found at this list.")
    
# append new name into the student list[]
new_name = input("enter the new student name: ")
students.append(new_name)
print(students)
