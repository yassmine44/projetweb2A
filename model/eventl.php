<?php
class Event
{
    // Properties
    private $db; // Database connection

    // Constructor
    public function __construct($host = 'localhost', $dbname = 'sundandfun', $username = 'root', $password = '')
    {
        try {
            // Create a new PDO instance
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle the error gracefully
            echo "Error: " . $e->getMessage();
            die();
        }
    }

    // Get all events
    public function getAllevents()
    {
        try {
            // Prepare the SQL statement
            $stmt = $this->db->prepare("SELECT * FROM offer ORDER BY datelimi DESC");

            // Execute the query
            $stmt->execute();

            // Fetch all events
            $events = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $events;
        } catch (PDOException $e) {
            // Handle the error gracefully
            echo "Error: " . $e->getMessage();
            return [];
        }
    }
}
?>