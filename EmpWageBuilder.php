<?php
include 'CompanyEmpWage.php';
include 'InterfaceEmpWage.php';
class EmpWageBuilder implements InterfaceEmpWage{
    //Constants
	const IS_FULL_TIME = 1;
    const IS_PART_TIME = 2;
    //variables
    public $numOfCompany = 0;
    public $companyEmpWageArray = array();

    function addCompanyEmpWage($company, $monthHours, $monthDays, $wageRate) {
        $this->companyEmpWageArray[$this->numOfCompany++] = new CompanyEmpWage($company, $monthHours, $monthDays, $wageRate);
    }

    public function computeEmpWage() {
        for ($i=0; $i<$this->numOfCompany; $i++) {
            $obj=$this->companyEmpWageArray[$i];
            $wage=self::computeWage($obj);
            echo "Company: '".$obj->company."' Total Employee Wage: ".$wage."\n";
        }
    }
    
    //calling instance values into child class
    public static function computeWage($obj) {
        $totalWorkHrs = 0;
        $daysCount = 0;
        //Calculating wage for Monthly
		while ($totalWorkHrs <= $obj->monthHours && $daysCount < $obj->monthDays) {
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
			$totalWorkHrs += $empWorkHrs;
            //Incremanting Month day Count
            $daysCount++;
        }
        //Calculating Employee Wage
        $empWage = $totalWorkHrs * $obj->wageRate;
        return $empWage;
    }
}
$empWageBuilder = new EmpWageBuilder();
$empWageBuilder->addCompanyEmpWage("JIO", 100, 25, 20);
$empWageBuilder->addCompanyEmpWage("AIRTEL", 80, 20, 25);
$empWageBuilder->addCompanyEmpWage("IDEA", 60, 18, 30);
$empWageBuilder->computeEmpWage();
?>