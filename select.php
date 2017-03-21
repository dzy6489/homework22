<?php
require_once '../connect.php';//避免重复加载connect文件
$sql="SELECT * FROM library";//定义sql
$temp=mysqli_query($con, $sql);//定义temp
while($row=mysqli_fetch_assoc($temp))
{
    $data[]=$row;
}
?>
<a href="add.php">add</a><br>
<?php 
foreach($data as $everyData)
{//输出姓名，价格，内容
    echo $everyData['name'].": ".$everyData['price'];
    echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        echo $everyData['content'];
?>
<a href="delete.handle.php?name=<?php  echo $everyData['name'];?>">delete</a>
<a href="modify.php?name=<?php  echo $everyData['name'];?>">modify</a>

<?php 
    echo "<br>";
}
?>