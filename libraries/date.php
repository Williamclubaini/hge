<?php 
declare(strict_types = 1);

namespace Libraries;

class Date{

    // Month, Date, Year 
    public function mDY($date)
    {
        return date('n/j/Y', strtotime($date));
    }

    // Day, Month Date Year
    public function dMDY($date)
    {
        return date('l, F d, Y', strtotime($date));
    }
}