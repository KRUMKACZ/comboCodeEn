<?php header('Access-Control-Allow-Origin: *'); //for all ?>
<?php
$a = array();
$a[] = ($_POST['code_a']);
$a[] = ($_POST['code_b']);
$a[] = ($_POST['code_c']);
$a[] = ($_POST['code_d']);
$a[] = ($_POST['code_e']);

$i = 0;
foreach($a as $item){
    if(!empty($item)){
        $i++;
    }
}

$n = $i;

function  generate($l, $r)
{
    global $n, $a;
    if ($l == $r) {
        for ($i = 0; $i < $n; $i++) {
            echo $a[$i] . '';
        }
        echo '<br>';
    } else {
        for ($i = $l; $i < $r; $i++) {

            $v = $a[$l];
            $a[$l] = $a[$i];
            $a[$i] = $v; //{обмен a[i],a[l]}
            generate($l + 1, $r); //{вызов новой генерации}
            $v = $a[$l];
            $a[$l] = $a[$i];
            $a[$i] = $v; //{обмен a[i],a[l]}
        }
    }
}

generate(0,$n);
echo '<br>';

?>
