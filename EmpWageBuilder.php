<?php
class EmpWageBuilder {
    //Constants
	const IS_FULL_TIME = 1;
    const IS_PART_TIME = 1;
    const WAGE_PER_HOUR = 20;
    public static function computeWage() {
        //Displaying Welcome Message
        echo ("Welcome to Employee Wage Computation Problem\n");
		//Computation
		$empCheck = rand(0,1);
		if ($empCheck == self::IS_FULL_TIME) {
			echo ("Employee is Present\n");
            $empWorkHrs = 8;
		} else if ($empCheck == self::IS_PART_TIME) {
			echo ("Employee is Part-time Present\n");
            $empWorkHrs = 4;
		}
		else {
			echo ("Employee is Absent\n");
            $empWorkHrs = 0;
		}
        //Calculating Employee Wage
        $empWage = $empWorkHrs*self::WAGE_PER_HOUR;
        echo ("Employee Wage: ".$empWage."\n");
    }
}
EmpWageBuilder::computeWage();
?>