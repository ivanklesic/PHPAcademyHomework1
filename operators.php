<?php
require_once 'include/header.php';
include_once 'include/navbar.php';


$a = 5;
$b = 3;

$sum = $a + $b;
$sub = $a - $b;
$multi = $a * $b;
$div = (float)$a/(float)$b;
$mod = $a % $b;
$exp = $a ** $b;

$c = 4;
$d = '4';

$equal = $c == $d ? "true" : "false";
$identical = $c === $d ? "true" : "false";

$e = true;
$f = false;

$or = $e || $f ? "true" : "false";
$and = $e && $f ? "true" : "false";





echo '
<div class="uk-section">
    <div class="uk-container">
        <table class="uk-table">
            <caption>PHP operators</caption>
            <thead>
                <tr>
                    <th>Operator</th>
                    <th>Name</th>
                    <th>Example</th>   
                    <th>Result</th>         
                </tr>         
            </thead>            
            <tbody>
                <tr>
                    <td>+</td>
                    <td>Addition</td>
                    <td>5+3</td>      
                    <td>'.  $sum  .'</td>
                </tr>
                <tr>
                    <td>-</td>
                    <td>Subtraction</td>
                    <td>5-3</td>
                    <td>'.  $sub  .'</td>      
                </tr>
                <tr>
                    <td>*</td>
                    <td>Multiplication</td>
                    <td>5*3</td>   
                    <td>'.  $multi  .'</td>         
                </tr>
                <tr>
                    <td>/</td>
                    <td>Division</td>
                    <td>5/3</td>            
                    <td>'.  $div  .'</td>
                </tr>
                <tr>
                    <td>%</td>
                    <td>Modulus</td>
                    <td>5%3</td>            
                    <td>'.  $mod    .'</td>
                </tr>
                <tr>
                    <td>**</td>
                    <td>Exponentiation</td>
                    <td>5**3</td>           
                    <td>'.  $exp  .'</td> 
                </tr>
                <tr>
                    <td>==</td>
                    <td>Equal</td>
                    <td>4 == "4"</td>            
                    <td>'. $equal  .'</td>
                </tr>
                <tr>
                    <td>===</td>
                    <td>Identical</td>
                    <td>4 === "4"</td>     
                    <td>'.  $identical  .'</td>       
                </tr>
                <tr>
                    <td>&&</td>
                    <td>AND</td>
                    <td>true && false</td>     
                    <td>'.  $and  .'</td>       
                </tr>
                <tr>
                    <td>||</td>
                    <td>OR</td>
                    <td>true || false</td>           
                    <td>'.  $or  .'</td> 
                </tr>
            </tbody>			
        </table>        
    </div>
</div>

    ';


require_once 'include/footer.php';

