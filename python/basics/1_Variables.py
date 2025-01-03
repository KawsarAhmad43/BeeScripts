# python doesnt need to declare any data type before using or declaring any variables
# variable names are case sensitive
# Declaring a variable in python likes

x = 5   # number 
X = "Kawsar" # string
print(x)
print(X)

# note: why doesnt py need to declare any type  because its type gets assigned in run time according to the variable's value thats why doesnt required to set the type (dynamic)

# if we need to declare a variable that contains multi words we can named those in below cases

# Camel Case: shapes like camel head low rest parts starting at high, that means starting word must be small and other word's first character in capital
studenParmanetAddress = "9/i, Banani road:8, Dhaka"
print(studenParmanetAddress)

#Pascal Case(Each Words first character must be capital):
StudentPresentAddress = "somewhere in Mohammadpur"
print(StudentPresentAddress)

# snake case(each word separated by underscore):
first_name = "Kawsar Ahmad"
print(first_name)

# snake_case we use for declare variables,funtions which is best practice according to PEP8
# PascalCase used for Class
# Camel for extarnal API call


# Multiple values to multiple var in a single line(tuple unpaking)
db_host, db_user, db_password = "localhost", "admin", "secret" # values will be assined sequeancially
print(db_host,db_user,db_password)

# Assigning 1 value to multiple Variables
# when to use? when you need to assign same value for multiple obj/variables
connection_status = request_status = server_status = "Pending"
print(connection_status,request_status,server_status)

# Unpack Collection
# collection in python means  list or tuple etc
# unpack collection means if i have any list or tuple then distribute those lists indexes data into the variables
roles = ['admin', 'editor', 'subscriber'] # a simple list namely roles
admin, editor, subscriber = roles # here admin,editor,subscriber each are separate variable which will contain each value from list named roles
print(admin, editor, subscriber)

# output variables (separate variables print with string -comma/plus needed to be used to separate)
print("Roles in my systems are " , admin,",", editor,",",subscriber , " in future we'll add more")
print("Roles in my systems are " + admin + "," + editor + ","+ subscriber + " in future we'll add more")


# Global variable a varible created outside of a function is called global variable
# Global variable representing the application's current state
app_status = "online"

def enable_maintenance_mode():
    # Local variable with the same name as the global variable
    app_status = "offline"
    print("The app is now in maintenance mode:", app_status)

# Calling the function
enable_maintenance_mode()

# Checking the global status of the application
print("Global app status:", app_status)
