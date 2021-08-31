<?php
//Displaying Welcome Message
echo ("\nWelcome to Employee Wage Computation Problem\n");
class EmpWageBuilder {
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

class computeEmpWage extends EmpWageBuilder{
    //Constants
	const IS_FULL_TIME = 1;
    const IS_PART_TIME = 2;
    //calling instance values into child class
    public function computeWage() {
        $totalWorkHrs = 0;
        $daysCount = 0;
        //Calculating wage for Monthly
		while ($totalWorkHrs <= $this->monthHours && $daysCount < $this->monthDays) {
            //Computation
            $empCheck = rand(0,2);
            switch ($empCheck) {
                case  self::IS_FULL_TIME:
                   // echo ("Employee is Present\n");
                    $empWorkHrs = 8;
                    break;
                case self::IS_PART_TIME:
                    //echo ("Employee is Part-time Present\n");
                    $empWorkHrs = 4;
                    break;
                default:
                    //echo ("Employee is Absent\n");
                    $empWorkHrs = 0;
            }
            //Calculating Employee Total Working Hrs
			$totalWorkHrs+=$empWorkHrs;
            //Incremanting Month day Count
            $daysCount++;
        }
        //Calculating Employee Wage
        $empWage = $totalWorkHrs*$this->wageRate;
        echo ("Wage Details of Company '".$this->company."'\n-> Employee Wage: ".$empWage.
        "\n-> Working hours: ".$totalWorkHrs."\n-> Month Days: ".$daysCount."\n");
    }
}
$jioWage = new computeEmpWage("JIO", 100, 25, 20);
$jioWage -> computeWage();
$airtelWage = new computeEmpWage("AIRTEL", 80, 20, 25);
$airtelWage -> computeWage();
?>