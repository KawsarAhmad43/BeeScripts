# 1. Integer and Float (Numbers)
user_year_of_birth = 1995  # Integer
current_year = 2025
user_age = current_year - user_year_of_birth  # Integer calculation
print(f"User's age: {user_age} (Type: {type(user_age)})")

# Type Casting: int to float
user_age_float = float(user_age)  # Casting int to float
print(f"User's age as float: {user_age_float} (Type: {type(user_age_float)})")

# 2. String (Text)
user_name = "John Doe"  # String
user_email = "johndoe@example.com"  # String
print(f"User's name: {user_name} (Type: {type(user_name)})")
print(f"User's email: {user_email} (Type: {type(user_email)})")

# Type Casting: String to int (using valid string representation of int)
user_year_of_birth_str = str(user_year_of_birth)  # Casting int to string
print(f"User's year of birth as string: {user_year_of_birth_str} (Type: {type(user_year_of_birth_str)})")

# 3. Boolean (True/False)
is_logged_in = True  # Boolean
is_email_verified = False  # Boolean
print(f"Is user logged in? {is_logged_in} (Type: {type(is_logged_in)})")
print(f"Is user's email verified? {is_email_verified} (Type: {type(is_email_verified)})")

# Type Casting: Boolean to int
is_logged_in_int = int(is_logged_in)  # Casting bool to int (True = 1)
print(f"Is user logged in (as int): {is_logged_in_int} (Type: {type(is_logged_in_int)})")

# 4. List (Sequence)
user_hobbies = ["reading", "traveling", "programming"]  # List
print(f"User's hobbies: {user_hobbies} (Type: {type(user_hobbies)})")

# Type Casting: List to Tuple
user_hobbies_tuple = tuple(user_hobbies)  # Casting list to tuple
print(f"User's hobbies as tuple: {user_hobbies_tuple} (Type: {type(user_hobbies_tuple)})")

# 5. Tuple (Immutable Sequence)
user_preferences = ("dark_mode", "notifications_enabled")  # Tuple
print(f"User's preferences: {user_preferences} (Type: {type(user_preferences)})")

# Type Casting: Tuple to List
user_preferences_list = list(user_preferences)  # Casting tuple to list
print(f"User's preferences as list: {user_preferences_list} (Type: {type(user_preferences_list)})")

# 6. Range (Sequence of Numbers)
user_hobby_count = len(user_hobbies)  # Number of hobbies
hobby_range = range(user_hobby_count)  # Range from 0 to len(user_hobbies)-1
print(f"Hobby range: {list(hobby_range)} (Type: {type(hobby_range)})")

# 7. Dictionary (Mapping)
user_info = {
    "name": user_name,
    "email": user_email,
    "age": user_age,
    "hobbies": user_hobbies,
    "preferences": user_preferences,
    "is_logged_in": is_logged_in,
}
print(f"User's info (dictionary): {user_info} (Type: {type(user_info)})")

# 8. Set (Unique Collection)
user_tags = set(["python", "developer", "traveler", "python"])  # Set (duplicates removed)
print(f"User's tags (set): {user_tags} (Type: {type(user_tags)})")

# 9. Frozenset (Immutable Set)
user_interests = frozenset(["coding", "gaming", "reading"])  # Frozenset (immutable)
print(f"User's interests (frozenset): {user_interests} (Type: {type(user_interests)})")

# 10. Bytes and Bytearray (Binary Data)
profile_picture = bytes("User's profile picture data", encoding="utf-8")  # Bytes
print(f"Profile picture in bytes: {profile_picture} (Type: {type(profile_picture)})")

profile_picture_bytes = bytearray(profile_picture)  # Bytearray (mutable)
profile_picture_bytes[0] = 85  # Modify the first byte
print(f"Modified profile picture in bytearray: {profile_picture_bytes} (Type: {type(profile_picture_bytes)})")

# 11. NoneType (None)
user_session = None  # NoneType
print(f"User session: {user_session} (Type: {type(user_session)})")

# Type Casting: None to bool
is_session_active = bool(user_session)  # Casting None to bool (None becomes False)
print(f"Is user session active? {is_session_active} (Type: {type(is_session_active)})")
