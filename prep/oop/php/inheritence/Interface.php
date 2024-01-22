interface Logger {
    public function log($message);
}

interface Notifier {
    public function notify($message);
}

class NotificationService implements Logger, Notifier {
    public function log($message) {
        // Implementation of log method for NotificationService
        echo "Logging: $message\n";
    }

    public function notify($message) {
        // Implementation of notify method for NotificationService
        echo "Notifying: $message\n";
    }
}
