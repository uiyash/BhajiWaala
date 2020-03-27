<?php
include_once("../connect.php");
$stat=$_GET['stat'];
if ($stat=='h') {

$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['name'])) {
		$update_field.= "name='".$input['name']."'";
	} else if(isset($input['phone'])) {
		$update_field.= "phone='".$input['phone']."'";
	}else if(isset($input['email'])) {
		$update_field.= "email='".$input['email']."'";
	}else if(isset($input['address'])) {
		$update_field.= "address='".$input['address']."'";
	}else if(isset($input['gstin'])) {
		$update_field.= "gstin='".$input['gstin']."'";
	}	
	if($update_field && $input['id']) {
		$sql_query = "UPDATE customer SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}
if ($input['action'] == 'delete') {	
		
	if($input['id']) {
		$sql_query = "DELETE  FROM customer WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}
}else if ($stat=='p') {

$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {
	
	$update_field='';
	if(isset($input['name'])) {

		$update_field.= "name='".$input['name']."'";
	} else if(isset($input['marathi'])) {
		$update_field.= "marathi='".$input['marathi']."'";
	}else if(isset($input['hindi'])) {
		$update_field.= "hindi='".$input['hindi']."'";
	}else if(isset($input['weight'])) {
		$update_field.= "weight_type='".$input['weight']."'";
	}else if(isset($input['gst'])) {
		$update_field.= "gst='".$input['gst']."'";
	}
	if($update_field && $input['id']) {
		$sql_query = "UPDATE products SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}
if ($input['action'] == 'delete') {	
		
	if($input['id']) {
		$sql_query = "DELETE  FROM products WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}
}else if ($stat=='v') {

$input = filter_input_array(INPUT_POST);
if ($input['action'] == 'edit') {	
	$update_field='';
	if(isset($input['name'])) {
		$update_field.= "name='".$input['name']."'";
	} else if(isset($input['phone'])) {
		$update_field.= "phone='".$input['phone']."'";
	}else if(isset($input['email'])) {
		$update_field.= "email='".$input['email']."'";
	}else if(isset($input['address'])) {
		$update_field.= "address='".$input['address']."'";
	}else if(isset($input['gstin'])) {
		$update_field.= "gstin='".$input['gstin']."'";
	}	
	if($update_field && $input['id']) {
		$sql_query = "UPDATE seller SET $update_field WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}
if ($input['action'] == 'delete') {	
		
	if($input['id']) {
		$sql_query = "DELETE  FROM seller WHERE id='" . $input['id'] . "'";	
		mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));		
	}
}
}
else{

}
?>