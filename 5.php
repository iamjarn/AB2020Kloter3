<?php 

$max_math = 100;

function PenjumlahanSisDgl($arr, $num) 
{ 
    global $max_math; 
    $ttl_dgl1 = 0; $ttl_dgl2 = 0;  
    for ($i = 0; $i < $num; $i++)  
    { 
        $ttl_dgl1 += $arr[$i][$i]; 
        $ttl_dgl2 += $arr[$i][$num - $i - 1];
		
    }
    
    $tot_ttldgl = $ttl_dgl1 + $ttl_dgl2;	
  
    echo "Total Diagonal 1: ".$ttl_dgl1."\n</BR>"; 
    echo "Total Diagonal 2: ".$ttl_dgl2."\n</BR>";
    echo "\n</BR>";
	echo "\n</BR>";	
	echo " Total Diagonal 1 & 2 : ".$tot_ttldgl."\n</BR>";
} 
  
/* isi matriks 3x3 */
$amt = array(array(3, 9, 12), 
           array(10, 37, 81),  
           array(91, 5, 44)); 
print_r($amt);
echo "</BR>";
echo "</BR>";
echo "</BR>";
PenjumlahanSisDgl($amt, 3); 
 