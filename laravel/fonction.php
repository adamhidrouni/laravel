<?php
declare(strict_types=1);


function addition (float $x,float $y):float
{
    return $x+$y;
}
function multiplication (float $x,float $y):float
{
    return $x*$y;
}
function soustraire (float $x,float $y):float
{
    return $x-$y;
}
function diviser(float $a, float $b)
{ 
    // TODO : lancer InvalidArgumentException si $b == 0 
    if ($b==0){
        throw new InvalidArgumentException("\nDivision par zéro impossible");
    }else{
        return $a/$b;
    }
} 
function estpair (int $x)
{
    if ($x%2!=0){
        $a="false";
    }else{
        $a="true";
    }
    return $a;
}
function estPositif (float $x)
{
    if ($x<0){
        $a="false";
    }else{
        $a="true";
    }
    return $a;
}
function maximum (float $a,float $b,float $c)
{
    if ($a>$b and $a>$c){
        $x=$a;
    }elseif($b>$a and $b>$c){
        $x=$b;
    }else{
        $x=$c;
    }
    return $x;
}
function estPremier (int $n)
{
    for ($i=2;$i <= floor(sqrt($n));$i++){
        if( $n % $i ==0)
            {
                return "n'est pas premier";
            }
            }
                return "premier";
}