//各関数を1つずつ自分で試してください。
<br>
//凝った内容にする必要はありません。
<br>

<?php
$fruits =['apple','orange','melon','banana','pineapple'];

$array_count = count($fruits);

echo 'count : ' .$array_count;
?>


<br>

<?php
$data =[23,16,8,42,15,4];
sort($data);
var_dump($data);
?>

<br>

<?php
$array =['apple','orange','grape'];
//値の存在チェック①
if(in_array('orange',$array)){
echo 'orangeは配列内に存在します';
}
//値の存在チェック②
if(in_array('peach',$array)){
echo 'peachは配列内に存在します';
}
?>

<br>

<?php
$data =["赤井一郎","伊藤　淳","上野信二"];
$glue ="さん、";
$nameList =implode($glue,$data);
$nameList .="さん";
print_r($nameList);
?>

<br>

<?php
$members = "井上萌，永洞幸代，小野幸子";
$delimiter = " , ";
$nameList = explode($delimiter,$members);
print_r($nameList);
?>
