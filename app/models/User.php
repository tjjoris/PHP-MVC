<?php 
/*
 *User.php
 this is a model
 gets name for first user.
 */
class User extends Model{
	public string $name;

	public function getName() {
		$stmt = $this->getDb()->query("SELECT name FROM customer WHERE id = 1");
		$row = $stmt->fetch();
		$this->name = $row['name'] ?? '';
		return $this->name;
	}
}
