<?php
require_once '../connect.php';//�����ظ�����connect�ļ�
$sql="SELECT * FROM library";//����sql
$temp=mysqli_query($con, $sql);//����temp
while($row=mysqli_fetch_assoc($temp))
{
    $data[]=$row;
}
?>
<a href="add.php">add</a><br>
<?php 
foreach($data as $everyData)
{//����������۸�����
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