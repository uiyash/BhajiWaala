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
                    <h1><span>Orders</span></h1>
                    <p>“There is only one boss. The customer. And he can fire everybody in the company from the chairman
                        on down, simply by spending his money somewhere else.” -Sam Walton</p>
                </div>
            </div>
            <div id="main-content">
                <div class="row">
                    <div class="col-xl-12 m-b-30">

                        <ul class="team-tablist nav justify-content-center" role="tablist">
                            <li class="active">
                                <a class="active" href="#b-f-elements" role="tab" data-toggle="tab"
                                    aria-expanded="false">Total order</a>
                            </li>
                            <li class="">
                                <a href="#f-Uploads" role="tab" data-toggle="tab" aria-expanded="true">View Hotel Orders</a>
                            </li>
                        </ul>

                        <div class="team-tablist-content tab-content">
                            <div role="tabpanel" class="tab-pane active animated fadeInUp" id="b-f-elements">
                                <div class="row">
                                    <div class="col-lg-6 m-b-30">
                                        <div class="card-box">
                                            <div class="card-h">
                                                <h5 class="card-caption">Total order</h5>
                                            </div>
                                            <div style="padding: 20px;" class="card-b">
                                                <div class="row">
                                                   <form>
                                                   
    <label for="example-select">Select Date</label><br>
    <input class="form-control" id="date" type="date" name="date" onchange="showUser1(this.value)">
</form>
<br>


                                                </div>
                                                <div id="txtHint1">
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane animated fadeInUp" id="f-Uploads">
                                <div class="row">
                                    <div class="main-table-card col-sm-12 m-b-30">
                                        <div class="card-box">
                                            <div class="card-h">
                                                <h5 style="display:inline-block;" class="card-caption">View Hotel orders</h5>
                                            </div>
                                            <div class="card-b" style="padding: 20px;">
                                                <div class="main-t-table table-responsive">
                                                   <form>
        <label>Select Hotel</label>
<select name="users" onchange="showUser(this.value)">
  <?php while ($row= mysqli_fetch_array($result)) {
     echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
     } ?>
    </select>
</form>
<br>

                                                </div>
                                                <div id="txtHint">
</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- PLAY WITH THIS END -->
              <?php
include_once('footer.php');
?>