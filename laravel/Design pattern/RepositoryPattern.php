class Database
{
    public function query($sql)
    {
        return "Executing query: $sql";
    }
}

class UserRepository
{
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";
        return $this->database->query($sql);
    }

    public function getUserById($userId)
    {
        $sql = "SELECT * FROM users WHERE id = $userId";
        return $this->database->query($sql);
    }

}


$database = new Database();
$userRepository = new UserRepository($database);


echo $userRepository->getAllUsers(); // Outputs: Executing query: SELECT * FROM users


echo $userRepository->getUserById(1); // Outputs: Executing query: SELECT * FROM users WHERE id = 1
