<?php

function convertToNumeric(&$arr, $input)
{
	$input=strtolower($input);
    $output = "";
    $length = strlen($input);
    for ($i = 0; $i < $length; $i++)
    {
        if ($input[$i] == ' ')
            $output = $output . "0" . ",";
 
        else
        {
            $position = ord($input[$i]) - ord('a');
            $output = $output . $arr[$position] . ",";
			
        }
    }
 
    return $output ."<br>";
}

 $str = array("2","22","222", "3","33","333",
             "4","44","444", "5","55","555",
             "6","66","666", "7","77","777","7777",
             "8","88","888", "9","99","999","9999");
 
$input = $_POST["text"];
echo convertToNumeric($str,$input);

function convertToString($str1)
    {
       $nums = array("", "", "ABC", "DEF", "GHI", "JKL", "MNO", "PQRS", "TUV", "WXYZ");
       $str = str_split($str1);
    $arrayLength = count($str);
      
        $i = 0;
        while ($i < $arrayLength)
        {
      
            if ($str1[$i] == ',')
            {
                $i++;
                continue;
            }
           
            $count = 0;
            
            while ($i + 1 < $arrayLength && $str1[$i] == $str1[$i + 1])
            {
                // 2, 3, 4, 5, 6 and 8 keys will
                // have maximum of 3 letters
                if ($count == 2 && (($str1[$i] >= '2' && $str1[$i] <= '6') || ($str1[$i] == '8')))
                {
                    break;
                }
                else if ($count == 3 && ($str1[$i] == '7' || $str1[$i] == '9'))
                {
                    break;
                }
                $count++;
                $i++;
              
                if ($i == $arrayLength)
                {
                    break;
                }
            }
           
            if ($str1[$i] == '7' || $str1[$i] == '9')
            {
                
					echo $nums[ord($str[$i]) - 48][$count % 4];
            }
            else 
            {
                
					echo $nums[ord($str[$i]) - 48][$count % 3];
            }
			$i++;
        }
}	   
$input = $_POST["number"];
echo convertToString($input);
?>