<div style="margin:auto;text-align:center;width:100%;">
    <button id="get_function" style="display:none;" onclick="add_fractions()">Click Me</button>
</div>

<script src="all_js.js"></script>
<?php
$a=rand(0,20);
if($a == 0) $a+=1;
$b=rand(0,20);
if($b == 0) $b+=1;
$c=rand(0,20);
if($c == 0) $c+=1;
$d=rand(0,20);
if($d == 0) $d+=1;

$common_denominator = $b*$d;

$new_first_numerator = $a*$d;
$new_second_numerator = $b*$c;
$new_total_numerator = $new_first_numerator + $new_second_numerator;
echo '<div style="width:90%;margin:auto;text-align:center;direction:ltr;"><h1 style="margin-bottom:6px;direction:rtl;">תרגיל:</h1>';
echo '<table style="margin:auto;direction:ltr;">
        <tr>
            <td style="border-bottom:1px black solid;">('.$a.')</td>
            <td rowspan="2"> + </td>
            <td style="border-bottom:1px black solid;">('.$c.')</td>
            <td rowspan="2"> = </td>
            <td style="border-bottom:1px black solid;">('.$a.'&times'.$d.')</td>
            <td rowspan="2"> + </td>
            <td style="border-bottom:1px black solid;">('.$c.'&times'.$b.')</td>
            <td rowspan="2"> = </td>
            <td style="border-bottom:1px black solid;">('.$new_first_numerator.')</td>
            <td rowspan="2"> + </td>
            <td style="border-bottom:1px black solid;">('.$new_second_numerator.')</td>
            <td rowspan="2"> = </td>
            <td style="border-bottom:1px black solid;">('.$new_total_numerator.')</td>
            <td rowspan="2"> = </td>
            <td id="result_numerator" style="border-bottom:1px black solid;"></td>
        </tr>    
        <tr>
            <td>('.$b.')</td>
            <td>('.$d.')</td>
            <td style="text-align:center;">('.$common_denominator.')</td>
            <td style="text-align:center;">('.$common_denominator.')</td>
            <td style="text-align:center;">('.$common_denominator.')</td>
            <td style="text-align:center;">('.$common_denominator.')</td>
            <td style="text-align:center;">('.$common_denominator.')</td>
            <td id="result_denominator" style="text-align:center;"></td>
            
        </tr>    
        </table>
        ';
echo '</div>';

?>

<script>
    document.getElementById("get_function").click();
    function add_fractions() {
        var first_numerator = <?php echo $a?>;
        var first_denominator = <?php echo $b?>;
        var second_numerator = <?php echo $c?>;
        var second_denominator = <?php echo $d?>;
        var result = (new Fraction(first_numerator,first_denominator)).add(new Fraction(second_numerator,second_denominator));
        
        console.log(result);
        console.log(result.numerator);

        document.getElementById("result_numerator").innerHTML = result.numerator;
        document.getElementById("result_denominator").innerHTML = result.denominator;
        
    }
</script>


