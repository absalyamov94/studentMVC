<?php

class StudentService
{
    private $students = [];

public function __construct()
{
    $this->students[] = $this->createStudent(
        'Waldemar',
        'Smith',
        'male',
        3,
        'w@gmail.com',
        50,
        1993,
        true
    );
}
private function createStudent($name,$surname,$sex, $group_id, $email, $score, $birthYear, $local){
    $s = new Student;
    $s->name = $name;
    $s->surname = $surname;
    $s->sex = $sex;
    $s->group_id = $group_id;
    $s->email = $email;
    $s->score = $score;
    $s->birthYear = $birthYear;
    $s->local = $local;
    
    return $s;
}

public function getAllStudents()
{
    return $this->students;
}

public function addStudent(Student $student)
    {
        
        if (null !== array_search($this->students, $student, true)) {
            throw new \Exception("Post already added");
        }

        
        $this->students[] = $student;
    }
}