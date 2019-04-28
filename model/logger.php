<?php

class logger
{
    private $logId;
    private $event;
    private $Time;
    private $conn;
    /**
     * logger constructor.
     * @param $logId
     * @param $event
     * @param $time
     * @param $OwnerId
     */
    public function __construct( $event, $time,$db)
    {
        $this->conn=$db;
        $this->event = $event;
        $this->Time = $time;

    }

    public function SaveLog()
    {

        // Create query
        $query = 'INSERT INTO logs' . ' SET  event = :event ,time = :time';
        // Prepare statement

        $stmt = $this->conn->prepare($query);
        // Bind data
        $stmt->bindParam(':event', $this->event);
        $stmt->bindParam(':time', $this->Time);

        // Execute query
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;
    }


}