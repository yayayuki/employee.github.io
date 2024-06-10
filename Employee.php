<?php

class Employee{
    private $name;
    private $c_status;
    private $position;
    private $e_status;
    private $regular_hrs;
    private $overtime_hrs;
    private $gross_inc;

    public function __construct($new_name, $new_c_status, $new_position, $new_e_status, $new_regular_hrs, $new_overtime_hrs){
        $this->name = $new_name;
        $this->c_status = $new_c_status;
        $this->position = $new_position;
        $this->e_status = $new_e_status;
        $this->regular_hrs = $new_regular_hrs;
        $this->overtime_hrs = $new_overtime_hrs;
    }

    public function calcGrossINC($position, $e_status, $regular_hrs, $overtime_hrs){
        $workday = $regular_hrs / 8;

        if($position == "admin"){
            if($e_status == "contractual"){
                $reg_pay = $workday * 350;
                $ot_pay = $overtime_hrs * 15;
            }elseif($e_status == "probationary"){
                $reg_pay == $workday * 400;
                $ot_pay = $overtime_hrs * 30;
            }elseif($e_status == "Regular"){
                $reg_pay = $workday * 500;
                $ot_pay = $overtime_hrs * 40;
            }
        }elseif($position == "staff"){
            if($e_status == "contractual"){
                $reg_pay = $workday * 300;
                $ot_pay = $overtime_hrs * 10;
            }elseif($e_status == "probationary"){
                $reg_pay == $workday * 350;
                $ot_pay = $overtime_hrs * 25;
            }elseif($e_status == "Regular"){
                $reg_pay = $workday * 400;
                $ot_pay = $overtime_hrs * 30;
            }
        }

        $gross_inc = $reg_pay + $ot_pay;
        $this->gross_inc = $gross_inc;

        return $gross_inc;
    }

    public function calcNetINC($c_status){
        $gross_inc = $this->gross_inc;

    }

    public function healthDeduction($c_status){
        if($c_status == "single"){
            $h_deduction = 200;
        }elseif($c_status == "married"){
            $h_deduction = 75;
        }
        return $h_deduction;
    }

    public function getName(){
        return $this->name;
    }

    public function getCivilStatus(){
        return $this->c_status;
    }

    public function getPosition(){
        return $this->position;
    }

    public function getEmplStatus(){
        return $this->e_status;
    }

}



?>