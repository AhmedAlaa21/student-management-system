<?php

require './classes/StudentManager.php';

$student_manager = new StudentManager();

echo "Welcome to the Student Management System!\n";
while (true) {
  echo "1. Add Student" . "\n";
  echo "2. Remove Student" . "\n";
  echo "3. Update Student Grade" . "\n";
  echo "4. Display Students" . "\n";
  echo "Choose an option (1-4) or type 5 to quit: ";

  $choice = fgets(STDIN); // STDIN: standard input stream;

  switch ($choice) {
    case 1:
      echo "Enter student name: ";
      $name = trim(fgets(STDIN));
      echo "Enter student grade (0-100): ";
      $grade = (int) trim(fgets(STDIN));
      $student_manager->add_student($name, $grade);
      echo "Student added successfully!\n";
      break;

    case 2:
      echo "Enter student name to remove: ";
      $name = trim(fgets(STDIN));
      $student_manager->remove_student($name);
      break;

    case 3:
      echo "Enter student name to update grade: ";
      $name = trim(fgets(STDIN));
      echo "Enter new grade (0-100): ";
      $new_grade = (int) trim(fgets(STDIN));
      $student_manager->update_grade($name, $new_grade);
      break;

    case 4:
      $student_manager->display_students();
      break;

    case 5:
      echo "Exiting the Student Management System. Goodbye!\n";
      exit;

    default:
      echo "Invalid option. Please try again.\n";
  }
}