<?php

/**
 * Created by PhpStorm.
 * User: Dev
 * Date: 01/03/2016
 * Time: 23:07
 */
class DB extends Framework
{
    protected $dbhandle;

    public function __construct()
    {
        $this->dbhandle = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    }

    public function GetStats()
    {
        print_r(mysqli_get_connection_stats($this->dbhandle));
    }

    public function All($database)
    {
        $query = "SELECT * FROM " . cleanInput($database);
        $result = $this->dbhandle->query($query);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo json_encode($row);
            }
        } else {
            echo "0 results";
        }
    }
}