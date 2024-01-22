trait Loggable {
    public function log($message) {
        echo "Log: $message\n";
    }
}

trait Notifiable {
    public function notify($message) {
        echo "Notification: $message\n";
    }
}

class User {
    use Loggable, Notifiable;
    
    public function performUserAction() {
        // Additional user-specific logic
        $this->log("User action performed");
        $this->notify("User action notification");
    }
}

$user = new User();
$user->performUserAction();
