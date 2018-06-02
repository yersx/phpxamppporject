 <?php 
function getNews ( $id)
{
	if($id)
		$where= "WHERE id=".$id;
	$db = mysqli_connect('localhost','root','','web');
	 mysqli_query($db,"SET NAMES utf8");
$sql = "SELECT * FROM articles $where";
    // execute query
   $res= mysqli_query($db, $sql);
   if(!$id)
return resultToArray ($res);
else return $res->fetch_assoc();
}
function  resultToArray ($res) {
$array=array ();
while (($row = $res->fetch_assoc()) != false) 
	$array[]=$row;
	return $array;


}

function getComment ( $id)
{
	if($id)
		$where= "WHERE articleid=".$id;
	$db = mysqli_connect('localhost','root','','web');
	 mysqli_query($db,"SET NAMES utf8");
$sql = "SELECT comments.id,comments.commentt,comments.datea,k.name,k.surname FROM comments, user k $where AND comments.user = k.email ORDER BY id DESC" ;
    // execute query
   $res= mysqli_query($db, $sql);
  
return resultToArrayQ ($res);
}
function  resultToArrayQ ($res) {
$array=array ();
while (($row = $res->fetch_assoc()) != false) 
	$array[]=$row;
	return $array;


}
 ?>

