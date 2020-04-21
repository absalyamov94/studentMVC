<?php 
require '../Student.php';
$student = new Student;

if(isset($_POST['submit'])){
    $data = array();
    $data['name'] = $_POST['name'];
    $data['surname'] = $_POST['surname'];
    $data['sex'] = $_POST['sex'];
    $data['group_id'] = $_POST['group_id'];
    $data['email'] = $_POST['email'];
    $data['score'] = $_POST['score'];
    $data['birthYear'] = $_POST['birthYear'];
    $data['local'] = $_POST['local'];
}

if($student->create($data)){
		header('http://localhost:8080/studentMVC/public/list.php');
	} else {
        echo 'error';
	}
