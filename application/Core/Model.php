<?php

class Model
{

	public function get_data()
	{
		// todo
	}

	public function ConnectDB()
	{
		$dns = sprintf("mysql:host=%s;dbname=%s;charset=%s", DB_HOSTNAME, DB_DATABASE, DB_CHARSET);
		
		try {
		$conn = new PDO($dns, DB_USERNAME, DB_PASSWORD);  // настройки Базы данных
		} catch (Exception $e) {
			throw $e;
		}
		return $conn;
	}

	public function checkUserData($data)
	{
		$data = strip_tags($data);
		$data = htmlspecialchars($data);
		$data = addslashes($data);
		return $data;
	}

}
