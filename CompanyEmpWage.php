<?php
//Displaying Welcome Message
echo ("\nWelcome to Employee Wage Computation Problem\n");
class CompanyEmpWage {
    public $company;
    public $monthHours;
    public $monthDays;
    public $wageRate;
    //creating construct for class 
    public function __construct($company, $monthHours, $monthDays, $wageRate) {
        $this->company = $company;
        $this->monthHours = $monthHours;
        $this->monthDays = $monthDays;
        $this->wageRate = $wageRate;
    }
}
?>