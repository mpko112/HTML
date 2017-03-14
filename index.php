<?php
header("Content-Type:text/plain; charset=Gpk");
$goods_list=array();
$file = fopen("APP.csv",'r');
while ($data = fgetcsv($file)) { 
$goods_list[] = $data;//读取整个CSV文件放入数组.访问时候用下标读出一个列。
}
$i=0;
$key=0;
foreach($goods_list as $val){
if($i>0){
$ShareUrl[$key]=$val[0]; // ShareUrl
$Title[$key]=$val[1]; // Title
$Desc[$key]=$val[2]; // Desc
$Pic[$key]=$val[3]; // Pic
$GoUrl[$key]=$val[4]; // GoUrl
$BackUrl[$key]=$val[5]; // BackUrl
$BackUrl2[$key]=$val[6]; // BackUrl2
$TimeLineLink[$key]=$val[7]; // TimeLineLink
$key++;
}
$i++;
}
$num=$key-1;


$keyfor="{\"ShareUrl\":\"".$ShareUrl[rand(0,$num)]."\",\"Title\":\"".$Title[rand(0,$num)]."\",\"Desc\":\"".$Desc[rand(0,$num)]."\",\"Pic\":\"".$Pic[rand(0,$num)]."\",\"GoUrl\":\"".$GoUrl[rand(0,$num)]."\",\"BackUrl\":\"".$BackUrl[rand(0,$num)]."\",\"BackUrl2\":".$BackUrl2[rand(0,$num)].",\"TimeLineLink\":\"".$TimeLineLink[rand(0,$num)]."\"}";

//echo $ShareUrl[rand(0,$num)];

echo $keyfor;

?>