<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'donutDB');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHAR', 'utf8');

class Database{

    // specify your own database credentials

    private static $conn;

    // get the database connection
    public static function getConnection(){

        if(static::$conn == null){
        		try{
        			$opt  = array(
        		        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        		        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        		        PDO::ATTR_EMULATE_PREPARES   => FALSE,
        		    );
        		    $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset='.DB_CHAR;
        		    static::$conn = new PDO($dsn, DB_USER, DB_PASS, $opt);
        		}catch(PDOException $exception){
        		    die("Connection error: " . $exception->getMessage());
        		}
  	    }
        return static::$conn;
    }
}
?>
