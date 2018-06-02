 <?php 
function getNews ($limit)
{
	$db = mysqli_connect('localhost','root','','web');
	 mysqli_query($db,"SET NAMES utf8");
$sql = "SELECT * FROM articles ORDER BY id DESC LIMIT $limit";
    // execute query
   $res= mysqli_query($db, $sql);
return resultToArray ($res);
}
function  resultToArray ($res) {
$array=array ();
while (($row = $res->fetch_assoc()) != false) 
	$array[]=$row;
	return $array;


}
 ?>

