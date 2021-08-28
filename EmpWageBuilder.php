<?php
class EmpWageBuilder {
    //Constants
	const IS_FULL_TIME = 1;
    public static function computeWage() {
        //Displaying Welcome Message
        echo ("Welcome to Employee Wage Computation Problem\n");
		//Computation
		$empCheck = rand(0,1);
		if ($empCheck == self::IS_FULL_TIME) {
			echo ("Employee is Present");
		}
		else {
			echo ("Employee is Absent");
		}
    }
}
EmpWageBuilder::computeWage();
?>