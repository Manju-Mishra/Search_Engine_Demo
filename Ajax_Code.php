<?php 
$conn=mysqli_connect("localhost","root","","search_engine");
if(isset($_POST['data']))
{
    $id=$_POST['data'];
    $sel=mysqli_query($conn,"select * from search where name like '$id%'");
    while($arr=mysqli_fetch_assoc($sel))
    {
        echo "<a href='$arr[link]'> $arr[name]</a> <br>";
    }
}
?>