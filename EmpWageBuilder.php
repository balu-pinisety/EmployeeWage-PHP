<?php
class EmpWageBuilder {
    //Constants
	const IS_FULL_TIME = 1;
    const IS_PART_TIME = 2;
    const WAGE_PER_HOUR = 20;
    const MONTH_DAYS = 25;
    const MONTH_HOURS = 100;
    public static function computeWage() {
        //Displaying Welcome Message
        echo ("Welcome to Employee Wage Computation Problem\n");
        $totalWorkHrs = 0;
        $daysCount = 0;
        //Calculating wage for Monthly
		while ($totalWorkHrs <= self::MONTH_HOURS && $daysCount < self::MONTH_DAYS) {
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
        $empWage = $totalWorkHrs*self::WAGE_PER_HOUR;
        echo ("Employee Wage: ".$empWage."\nWorking hours: ".$totalWorkHrs."\nMonth Days: ".$daysCount);
    }
}
EmpWageBuilder::computeWage();
?>