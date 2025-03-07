<?php

$employees = [
    new FullTimeEmployee("Angel Erica Uanang", 1205, "Manager", 50000),
    
];

foreach ($employees as $employee) {
    echo "Name: " . $employee->name . " ID: " . $employee->id . " Position: " . $employee->department;
    echo "<br>";
    echo " Salary: PHP " . $employee->calculateSalary();
    echo "<br>";
    echo " Health Insurance: " . $employee->getHealthInsurance();
    echo "<br>";
    echo " Leave Credits: " . $employee->getLeaveCredits() . "\n";
    echo "<br>";
}

?>
