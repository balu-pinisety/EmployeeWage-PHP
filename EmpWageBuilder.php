<?php
//Displaying Welcome Message
echo ("\nWelcome to Employee Wage Computation Problem\n");
class EmpWageBuilder {
    //Constants
	const IS_FULL_TIME = 1;
    const IS_PART_TIME = 2;
    //Instant variables
    public function computeWage($company, $monthHours, $monthDays, $wageRate) {
        $totalWorkHrs = 0;
        $daysCount = 0;
        //Calculating wage for Monthly
		while ($totalWorkHrs <= $monthHours && $daysCount < $monthDays) {
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
        $empWage = $totalWorkHrs*$wageRate;
        echo ("Wage Details of Company '".$company."'\n-> Employee Wage: ".$empWage.
        "\n-> Working hours: ".$totalWorkHrs."\n-> Month Days: ".$daysCount."\n");
    }
}
$employeeWage = new EmpWageBuilder();
$employeeWage -> computeWage("JIO", 100, 25, 20);
$employeeWage -> computeWage("AIRTEL", 80, 20, 25);
$employeeWage -> computeWage("IDEA", 60, 15, 30);
?>