<?php

namespace AcmeCo;

class BonusService
{
    public function calculateBonus($employee)
    {
        $date = new \DateTime('now');
        $bonus = $employee->getSalary() - ($employee->getSalary()
                * (($employee->getSeniority() / 10) + 1)
                * ($date->diff($employee->getStartDate())->y > 5 ? 1.1 : 1)
        * (property_exists($employee, 'needsDrivingLicense')
                && $employee->needsDrivingLicense ? 1.1 : 1));

        return $bonus;
    }
}