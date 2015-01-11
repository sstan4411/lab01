<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Stefan
 */
class Student {
    // constructor for making new students
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //adding email to a student
    function add_email($which, $address){
        $this->emails[$which] = $address;
    }
    
    // adding a grade to a student
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    //computing the average of the student's grades
    function average(){
        $total = 0;
        foreach($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    // provide a readable display of a student
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
    
}
