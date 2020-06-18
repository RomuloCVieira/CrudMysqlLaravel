<?php 

function datetimeformat(DateTime $date, $format)
{
    return $date->format($format);
}