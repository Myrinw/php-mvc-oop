<?php
/*
  * PDO Database Class
  * Connect to database 
  * Created prepared statements
  * Bind values 
  * Return rows and results 
  */

class Database
{
	private $host = DB_NAME;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;

	private $dbh;
	private $stmt;
	private $error;

	public function __construct()
	{
		// Set DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		$options = [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

		// Create PDO instanceof
		try {
			$this->dbh = new PDO($dsn, $this->user, $this->pass . $options);
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
			echo $this->error;
		}
	}
}
