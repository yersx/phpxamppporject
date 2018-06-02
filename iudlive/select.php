<?php  
 $connect = mysqli_connect("localhost", "root", "", "web");  
 $output = '';  
  mysqli_query($connect,"SET NAMES utf8");
 $sql = "SELECT * FROM tasklist ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">Id</th>  
                     <th width="20%">usermail</th>  
                     <th width="15%">city</th>  
                     <th width="15%">date</th>  
                     <th width="9%">types</th>  
                     <th width="40%">desciption</th>  
                     <th width="10%">amount of pay</th>  
                     
                       <th width="10%">Delete</th>  
                </tr>';  
 $rows = mysqli_num_rows($result);
 if($rows > 0)  
 {  
	
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td  >'.$row["id"].'</td>  
                     <td class="usermail" data-id1="'.$row["id"].'" contenteditable>'.$row["usermail"].'</td>  
                     <td class="city" contenteditable>'.$row["city"].'</td>  
                     <td class="datet" contenteditable>'.$row["datet"].'</td>  
                     <td class="worktypes"contenteditable>'.$row["worktypes"].'</td>  
                     <td class="description" data-id1="'.$row["id"].'" contenteditable>'.$row["description"].'</td>  
                     <td class="moneyt" data-id2="'.$row["id"].'" contenteditable>'.$row["moneyt"].'</td>  
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="usermail" contenteditable></td>  
                <td id="city" contenteditable></td>  
                <td id="date" contenteditable></td>  
                <td id="worktypes" contenteditable></td>  
                <td id="description" contenteditable></td>  
                <td id="money" contenteditable></td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
				<tr>  
					<td></td>  
					    <td id="usermail" contenteditable></td>  
                <td id="city" contenteditable></td>  
                <td id="date" contenteditable></td>  
                <td id="worktypes" contenteditable></td>  
                <td id="description" contenteditable></td>  
                <td id="money" contenteditable></td> 
					<td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
			   </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>