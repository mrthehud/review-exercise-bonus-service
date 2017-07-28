<?php

namespace AcmeCo;

class Receptionist extends Employee
{
    const SENIORITY_JUNIOR = 1;

    public function __construct()
    {
        $this->seniority = self::SENIORITY_JUNIOR;
    }

    /**
     * @return int
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @return int
     */
    public function getSeniority()
    {
        return $this->seniority;
    }

    /**
     * @return /DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }
}