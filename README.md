# 🧑‍🎓 Student Management System (CLI in PHP)

This is a simple **command-line based Student Management System** written in PHP. It allows users to manage students by adding, removing, updating grades, and displaying all students using a text-based interface.

## 📂 Project Structure

student-management/
├── classes/
│ └── StudentManager.php
| └── Student.php
├── index.php


- `index.php`: The main entry point containing the CLI interface.
- `StudentManager.php`: Contains the `StudentManager` class with core logic for managing students.
- `Student.php`: Contains Student class

## 🚀 Features

- Add a new student with a name and grade
- Remove an existing student by name
- Update the grade of a student
- Display all students and their grades
- Simple and interactive terminal interface

## 🛠 Requirements

- PHP 7.0 or higher
- CLI access

## 🧪 How to Run

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/student-management.git
   cd student-management
   Ensure the classes/StudentManager.php file exists and contains the StudentManager class.

Run the program using terminal:
php index.php
Follow the prompts in the terminal to manage students.

✅ Example Usage

Welcome to the Student Management System!
1. Add Student
2. Remove Student
3. Update Student Grade
4. Display Students
Choose an option (1-4) or type 5 to quit:



