<?php 
/*
 *User.php
 this is a model
 gets name for first user.
 */
class User extends Model{
	public string $name;

	public function getName() {
		$stmt = $this->getDb()->query("SELECT name FROM customers WHERE id = 1");
		$row = $stmt->fetch();
		$this->name = $row['name'] ?? '';
		return $this->name;
	}

	public function create(string $name ) {
		$sql = "INSERT INTO customers (name) VALUES (?)";
		$stmt = $this->getDb()->prepare($sql);
		$stmt->execute([$name]);
	}
	
	/*
	 *model function names should be:
	 create($data): inserts a new record
	 getAll or findAll: fetches all recrods
	 getById($id) or find($id): fetch a single record
	 getByColumn($value): fetch by a specific column
	 update($id, $data): update an exisiting record
	 delete($id): delete an existing record
	 */
}
