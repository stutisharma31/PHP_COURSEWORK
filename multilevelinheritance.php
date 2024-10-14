<?php
// Base Class: Vehicle
class Vehicle {
    protected $make;
    protected $model;

    // Constructor for Vehicle class
    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    // Method to display vehicle details
    public function displayVehicleDetails() {
        echo "Vehicle Make: $this->make\n";
        echo "Vehicle Model: $this->model\n";
    }
}

// Derived Class: Car (inherits from Vehicle)
class Car extends Vehicle {
    protected $seatingCapacity;
    protected $fuelType;

    // Constructor for Car class
    public function __construct($make, $model, $seatingCapacity, $fuelType) {
        // Call the base class constructor
        parent::__construct($make, $model);

        // Initialize Car class attributes
        $this->seatingCapacity = $seatingCapacity;
        $this->fuelType = $fuelType;
    }

    // Method to display car details
    public function displayCarDetails() {
        // Display the vehicle details from the base class
        $this->displayVehicleDetails();

        // Display the additional details for the car
        echo "Seating Capacity: $this->seatingCapacity\n";
        echo "Fuel Type: $this->fuelType\n";
    }
}

// Derived Class: SportsCar (inherits from Car)
class SportsCar extends Car {
    private $topSpeed;
    private $acceleration;

    // Constructor for SportsCar class
    public function __construct($make, $model, $seatingCapacity, $fuelType, $topSpeed, $acceleration) {
        // Call the Car class constructor
        parent::__construct($make, $model, $seatingCapacity, $fuelType);

        // Initialize SportsCar attributes
        $this->topSpeed = $topSpeed;
        $this->acceleration = $acceleration;
    }

    // Method to display sports car details
    public function displaySportsCarDetails() {
        // Display the car details from the Car class
        $this->displayCarDetails();

        // Display the additional details for the sports car
        echo "Top Speed: $this->topSpeed km/h\n";
        echo "Acceleration (0-100 km/h): $this->acceleration seconds\n";
    }
}

// Example usage
$sportsCar = new SportsCar("Ferrari", "F8 Tributo", 2, "Petrol", 340, 2.9);
$sportsCar->displaySportsCarDetails();
?>
