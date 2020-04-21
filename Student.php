<?php

require 'Database.php';

class Student{
    public $name;
    public $surname;
    public $sex;
    public $group_id;
    public $email;
    public $score;
    public $birthYear;
    public $local;
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }
    
    // Get All Students
		public function getAllStudents(){
			$this->db->query("SELECT * FROM students");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}
    
    //Create a Student
    public function create($data){
			//Insert Query
			$this->db->query("INSERT INTO students (name, surname, sex, group_id, email, score, birth_year, local)
			VALUES (:name,:surname, :sex, :group_id, :email, :score, :birth_year, :local)");
            // Bind Data
			$this->db->bind(':name', $data['name']);
			$this->db->bind(':surname', $data['surname']);
			$this->db->bind(':sex', $data['sex']);
			$this->db->bind(':group_id', $data['group_id']);
			$this->db->bind(':email', $data['email']);
			$this->db->bind(':score', $data['score']);
			$this->db->bind(':birth_year', $data['birthYear']);
			$this->db->bind(':local', $data['local']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	}
