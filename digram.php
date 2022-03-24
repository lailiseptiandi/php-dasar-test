<?php

function generateDigram($kata)
{
    // $kata = "Jakarta adalah ibukota negara Republik Indonesia";
    // echo $kata;
    $convert = explode(' ', $kata);
    // print_r($convert);

    // bikin unigram
    $unigram = '';
    foreach($convert as $arr)
    {
        $unigram .= $arr . ', ';
        // $test .= str_replace(" ", ", ", $unigram);
    }
    $unigram = substr($unigram, 0, -2);

    // bikin bigram
    $b = 0;
    $bigram  = ' ';
    foreach($convert as $big)
    {
        if($b < 1)
        {
            $bigram .= $big . ' ';
            $b++;
        }else{
            $bigram .= $big . ', ';
            $b=0;
        }
    }
    $bigram = substr($bigram, 0, -2);
    // echo "Bigram :" . $sub;


    // bikin trigam
    $t = 0;
    $trigam = 0;
    foreach($convert as $tri)
    {
        if($t < 2)
        {
            $trigam .=  $tri . ' ';
            $t++;
        }else{
            $trigam .= $tri . ', ';
            $t =0;
        }
        
    }
    $trigam = substr($trigam, 1, -2);


    // hasil
    $result = "Unigram : " . $unigram . '<br>';
    $result .= "Bigram : " . $bigram . '<br>';
    $result .= "Trigam : " . $trigam . '<br>';

    return $result;
}

echo generateDigram("Jakarta adalah ibukota negara Republik Indonesia");
