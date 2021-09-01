<?php
interface InterfaceEmpWage {
	public function addCompanyEmpWage($companyName, $monthWorkingHours, $workingDays, $wagePerHr);
	public function computeEmpWage($userCompany);
}
?>