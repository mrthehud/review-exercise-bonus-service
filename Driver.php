<?php

namespace AcmeCo;

class Driver
{
    /** @var bool */
    public $needsDrivingLicense = true;

    /** @var int */
    protected $salary = 20000;

    /** @var /DateTime */
    protected $startDate;

    /** @var int */
    protected $seniority;

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