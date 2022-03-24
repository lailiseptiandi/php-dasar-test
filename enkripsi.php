<?php 

function enkripsi($test_input)
{

    $char = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];

    $test_input = strtoupper($test_input);
    $arr_test = str_split($test_input);
    $positive = true;
    $result = '';

    $i = 1;
    $debug = 0;
    for ($j=0; $j<count($arr_test); $j++)
    {
        $debug = array_search($arr_test[$j], $char);

        if($positive == true)
        {
            $result .= $char[$debug+$i];
            $positive = false;
        }else{
            $t = $debug-$i;
            if($t<0)
            {
                $t = count($char) +($t);
            }
            $result .= $char[$t];
            $positive = true;
        }
        $i++;


    }
    return $result;

}
echo enkripsi('DFHKNQ');

?>