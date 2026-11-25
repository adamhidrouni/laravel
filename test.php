<?php
require_once __DIR__ . "/fonction.php";
echo "12+8= ".addition(12,8);
echo "\n 12/8= ".diviser(12,8);
 try { echo " 12/8= ".diviser(12,0); }
catch (InvalidArgumentException $e) { 
echo $e->getMessage(); }
echo" \n is it pair : ".estpair(2);
echo" \n is it positif : ".estPositif(-2);
echo" \n le max est : ".maximum(311,20,31)."\n and with max it is :".max(30,20,31);
echo "\n c'est".estpremier(7);