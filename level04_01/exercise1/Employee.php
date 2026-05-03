<?php

class Employee
{

    public $name;
    public $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function hasToPayTaxes()
    {
        return $this->salary > 6000; //simplified if St
    }

    public function printResult()
    {
        if ($this->hasToPayTaxes()) {
            echo $this->name . " is paying taxes.\n";
        } else {
            echo $this->name . " is not paying taxes.\n";
        }
    }

}

?>