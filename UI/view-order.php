<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","inc/result.php?id="+str,true);
        xmlhttp.send();
    }
}
</script>

<?php
include_once('connect.php');
include_once('header.php');
// include_once('navbar.php');
// session_start();
$uid=$_SESSION['id'];
$sql="SELECT * From customer where cid=".$uid;
$result= mysqli_query($conn,$sql);
$sql2="SELECT * From C_order where user_id=".$uid;
$result2= mysqli_query($conn,$sql2);
?>
<!-- PLAY WITH THIS BEGIN-->
<div id="content-header">
	<div class="header-name animated">
		<h1><span>Create Order</span></h1>
		<p>“There is only one boss. The customer. And he can fire everybody in the company from the chairman
			on down, simply by spending his money somewhere else.” -Sam Walton</p>
	</div>
</div>
<div id="main-content">
	<div class="row">
		<div class="main-table-card col-sm-12 m-b-30">
			<div class="card-box">
			<form>
		<label>Select Hotel</label>
<select name="users" onchange="showUser(this.value)">
  <?php while ($row= mysqli_fetch_array($result)) {
     echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
     } ?>
    </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
			</div>
		</div>
	</div>
  <?php
include_once('footer.php');
?>