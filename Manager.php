<?php

namespace AcmeCo;

class Manager extends Receptionist
{
    const SENIORITY_SENIOR = 2;

    public function __construct()
    {
        parent::__construct();
        $this->seniority = self::SENIORITY_SENIOR;
    }
}