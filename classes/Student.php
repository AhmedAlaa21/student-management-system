<?php

class Student
{
  private string $name;
  private int $grade;

  public function __construct(string $name, int $grade)
  {
    $this->name = $name;
    $this->grade = $grade;
  }

  // getters.
  public function getName(): string
  {
    return $this->name;
  }

  public function getGrade(): int
  {
    return $this->grade;
  }

  // setters.
  public function setGrade($grade)
  {
    if ($grade < 0) {
      return "Grade must be a positive number.";
    } else
      $this->grade = $grade;
  }
}