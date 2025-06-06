<?php
require 'Student.php';

class StudentManager
{
  private $students = [];

  public function add_student(string $name, int $grade)
  {
    if ($grade > 100 || $grade < 0) {
      $grade = -1; // Invalid grade
    }
    $this->students[$name] = new Student($name, $grade);
  }

  public function update_grade($name, $new_grade)
  {
    if (isset($this->students[$name])) {
      if ($new_grade > 100 || $new_grade < 0) {
        $new_grade = -1; // Invalid grade
      }
      $this->students[$name]->setGrade($new_grade);
    } else {
      echo "Student not found: " . $name . "\n";
    }
  }

  public function remove_student(string $name)
  {
    if (isset($this->students[$name])) {
      unset($this->students[$name]);
    } else {
      echo "Student not found: " . $name . "\n";
    }
  }

  public function display_students()
  {
    if (empty($this->students)) {
      echo "No students available.";
      return;
    }

    foreach ($this->students as $student) {
      echo "Student: " . $student->getName() . ", Grade: " . $student->getGrade() . "\n";
    }
  }
}