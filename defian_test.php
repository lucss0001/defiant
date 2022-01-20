<?php
$searchthis = "mystring";
$matches = array();

$handle = @fopen("path/to/inputfile.txt", "r");
if ($handle)
{
    while (!feof($handle))
    {
        $buffer = fgets($handle);
        if(strpos($buffer, $searchthis) !== FALSE)
            $matches[] = $buffer;
    }
    fclose($handle);
}

//show results:
print_r($matches);
?>