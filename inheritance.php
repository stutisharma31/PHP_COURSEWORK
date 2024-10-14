<?php
// Base Class: Student
class Student {
    protected $name;
    protected $rollNo;

    // Constructor for Student class
    public function __construct($name, $rollNo) {
        $this->name = $name;
        $this->rollNo = $rollNo;
    }

    // Method to display student details
    public function displayStudentDetails() {
        echo "Student Name: $this->name\n";
        echo "Roll Number: $this->rollNo\n";
    }
}

// Derived Class: Result (inherits from Student)
class Result extends Student {
    private $marks;
    private $age;
    private $grade;

    // Constructor for Result class (also initializes base class attributes)
    public function __construct($name, $rollNo, $marks, $age, $grade) {
        // Call the base class constructor
        parent::__construct($name, $rollNo);

        // Initialize Result class attributes
        $this->marks = $marks;
        $this->age = $age;
        $this->grade = $grade;
    }

    // Method to display result details
    public function displayResultDetails() {
        // Display the student details from the base class
        $this->displayStudentDetails();
        
        // Display the additional details from the derived class
        echo "Marks: $this->marks\n";
        echo "Age: $this->age\n";
        echo "Grade: $this->grade\n";
    }
}

// Example usage
$result = new Result("John Doe", 101, 85, 20, 'A');
$result->displayResultDetails();
?>


