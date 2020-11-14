<?php


// class calculation
// {
//     public $a, $b, $c;


//     function sum()
//     {
//         $this->c = $this->a + $this->b;
//         return $this->c;
//     }

//     function substract()
//     {
//         $this->c = $this->a - $this->b;
//         return $this->c;
//     }
// }

// $c1 = new calculation();
// $c1->a = 20;
// $c1->b = 30;

// $c2 = new calculation();
// $c2->a = 50;
// $c2->b = 30;


// echo "sum value is C1: " . $c1->sum() . "\n";
// echo "substract value is C2: " . $c2->substract() . "\n";
// echo "substract value is C2: " . $c1->substract();


######################################################
# Construtor function

// class person
// {
//     public $name, $age;

//     function __construct($name = "no-name", $age = 0)
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function show()
//     {
//         echo $this->name . "-" . $this->age . "\n";
//     }
// }

// $p1 = new person();
// $p2 = new person("Shahroz Ahmed Kamal", 25);
// $p3 = new person("Asad Ahmed Kamal", 30);

// // $p1->name = "Shahroz Ahmed Kamal";
// // $p1->age = 25;

// $p1->show();
// $p2->show();
// $p3->show();

#################################################################endregion
# Inheritance in PHP

class employee
{
    public $name, $age, $salary;


    function __construct($name = "no-name", $age = 0, $salary = 0)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }


    function show()
    {
        echo $this->name . "-" . $this->age . "-" . $this->salary . "\n";
    }


    function info()
    {
        echo "<h3> Employee Profile</h3>";
        echo "Employee Name: " . $this->name . "<br>";
        echo "Employee Age: " . $this->age . "<br>";
        echo "Employee Salary: " . $this->salary . "<br>";
    }
}


// $e1 = new employee("Shahroz Ahmed kamal", 20, 25000);
// $e2 = new employee("Asad", 35, 35000);
// $e3 = new employee("Hahir Ahmed Kamal", 40, 55000);


// $e4 = new employee("Shahroz Ahmed kamal", 20, 25000);
// $e5 = new employee("Asad", 35, 35000);
// $e6 = new employee("Hahir Ahmed Kamal", 40, 55000);



// $e1->show();
// $e2->show();
// $e3->show();

// $e4->info();
// $e5->info();
// $e6->info();

// class manager extends employee
// {
//     public $tarvel_allowance = 5000, $phone = 1000, $total_salary;


//     function info()
//     {
//         $this->total_salary = $this->salary + $this->tarvel_allowance + $this->phone;

//         echo "<h3> Manager Profile</h3>";
//         echo "Manager Name: " . $this->name . "<br>";
//         echo "Manager Age: " . $this->age . "<br>";
//         echo "Manager Salary: " . $this->total_salary . "<br>";
//     }
// }
// $m1 = new manager("Samir", 30, 10000);
// $e1 = new employee("Aleena", 24, 3500);


// $m1->info();
// $e1->info();
#############################################################endregion
# Access modifier in php

// class base
// {
//     protected $name;

//     public function __construct($n)
//     {
//         $this->name = $n;
//     }

//     protected function show()
//     {
//         echo "Your Name: " . $this->name . "<br>";
//     }
// }

// class derived extends base
// {
//     public function get()
//     {
//         echo "Your Name: " . $this->name . "<br>";
//     }
// }



// $test = new derived("Shahroz Ahmed Kamal");
// //$test->name = "Kamal Ahmed Shahroz";  # set value from outside


// $test->get();
# private class for only for private class.
#################################################################endregion
# operator & properties  overridding  
// class base
// {
//     public $name = "parent class";

//     public function calc($a, $b)
//     {
//         return $a * $b;
//     }
// }

// class derived extends base
// {
//     public $name = "child class";
// }

// $test = new derived();
// echo $test->calc(5, 10);
###################################################endregion
#  abstract class  

// abstract class prentclass
// {
//     protected $name;

//     abstract protected function calc($a, $b);
// }

// class derived extends prentclass
// {
//     public function calc($a, $b)
//     {
//         echo $a + $b;
//     }
// }

// $test = new derived();
// $test->calc(3, 9);
####################################################endregion
#