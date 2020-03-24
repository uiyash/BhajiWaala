<?php
include_once('../connect.php');
// include_once('../header.php');
session_start();

$stat= $_GET['stat'];
$uid=$_SESSION['id'];
if ($stat=='o') {
	$cid= $_GET['id'];
$sql="SELECT * From C_order where customer_id=".$cid." AND user_id=".$uid;
$result= mysqli_query($conn,$sql);
// echo $sql;  
?>
<div class="card-h">
							<h5 class="card-caption">Products & Quantities</h5>
						</div>
						<div class="card-b" style="padding: 20px;">
							<div class="main-t-table table-responsive">
								<table class="table display" id="data-table">
									<thead>
										<tr>
											<th scope="col"><i class="fas fa-sort"></i> SR #</th>
											<th scope="col"><i class="fas fa-sort"></i> Name </th>
											<th scope="col"><i class="fas fa-sort"></i>Marathi Name </th>
											<th scope="col">Quantity</th>
											<th scope="col">Price</th>
                                            <th scope="col">weight</th>

											 
										</tr>
									</thead>
									<tbody>
										<?php
                                        $c = 1;
                                        $row = mysqli_fetch_assoc($result);
                                        $arr = json_decode($row['products'],true);
                                        // print_r($arr);
                                        foreach($arr as $value) {

                                            $p= $value['id'];
                                            $sql2="SELECT * From products where id=".$p." AND user_id=".$uid;
                                            $result2= mysqli_query($conn,$sql2);
                                            $row2 = mysqli_fetch_assoc($result2);
                                           

                                            echo '
															<tr>
																<td>' . $c . '</td>
                                <td class="table-amount">' . $row2['name'] .'</td>
                                <td class="table-amount">' . $row2['marathi'] .'</td>';
                                print '
                                <td class="table-amount">' . $value['q'] .'</td>
                                <td class="table-amount">' . $value['price'] .'</td>';
                                echo '
                                <td class="table-amount">' . $row2['weight_type'] .'</td>
                                															
															</tr>';
											$c++;



                                          }
										
										?>
									</tbody>
								</table>
							</div>
						</div>
            <input name="stat" type="text" id="example-readonly" class="form-control" value="order" hidden>

            <input type="hidden" name="count" value="<?php   echo $rowcount=mysqli_num_rows($result2);?>"></td>

						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
    <?php
}elseif ($stat=='t') {
$date= $_GET['date'];
// echo $date;
$sql="SELECT * From C_order where user_id=".$uid." AND date='".$date."'";
$result= mysqli_query($conn,$sql);
// echo $sql;
$count=mysqli_num_rows($result);
if ($count>0) {
$c = 1;
//make a while loop fetch each row and sum the products quantity then display it
$narr=array();
                                       while ($row= mysqli_fetch_array($result)) {
                                        $arr = json_decode($row['products'],true);
                                        // print_r($arr);
                                        $narr=array_merge($narr,$arr);
                                        
                                    }
                                     // print_r($narr);
                                    $marr=array();
                                    foreach($narr as $value) {

                                            $p= $value['id'];
                                            $q=$value['q'];
                                            if (array_key_exists($p,$marr)) {
                                            	$arr[$p] = $arr[$p]+$q;
                                            }else{
                                            $temp=array($p=>$q);
                                            array_push($marr, $temp);
                                            }
                                        }
                                            // print_r($marr);
$product = array_reduce($marr, function($carry, $item) {
    foreach($item as $k => $v)
        $carry[$k] = isset($carry[$k]) ? $carry[$k] + $v : $v;

    return $carry;
}, []);


                                            $sql2="SELECT * From products where id=".$p." AND user_id=".$uid;
                                            $result2= mysqli_query($conn,$sql2);
                                            $row2 = mysqli_fetch_assoc($result2);
?>


<div class="card-h">
							<h5 class="card-caption">Products & Quantities</h5>
						</div>
						<div class="card-b" style="padding: 20px;">
							<div class="main-t-table table-responsive">
								<table class="table display" id="data-table">
									<thead>
										<tr>
											<th scope="col"><i class="fas fa-sort"></i> SR #</th>
											<th scope="col"><i class="fas fa-sort"></i> Name </th>
											<th scope="col"><i class="fas fa-sort"></i>Marathi Name </th>
											<th scope="col">Quantity</th>
											
                                            <th scope="col">weight in</th>

											 
										</tr>
									</thead>
									<tbody>
										<?php

                                        $c = 1;
                                     
                                        // print_r($arr);
                                        foreach($product as $key => $value) {

                                            
                                            $sql2="SELECT * From products where id=".$key." AND user_id=".$uid;
                                            $result2= mysqli_query($conn,$sql2);
                                            $row2 = mysqli_fetch_assoc($result2);
                                           

                                            echo '
															<tr>
																<td>' . $c . '</td>
                                <td class="table-amount">' . $row2['name'] .'</td>
                                <td class="table-amount">' . $row2['marathi'] .'</td>';
                                print '
                                <td class="table-amount">' . $value.'</td>
                                ';
                                echo '
                                <td class="table-amount">' . $row2['weight_type'] .'</td>
                                															
															</tr>';
											$c++;



                                          }
										
										?>
									</tbody>
								</table>
							</div>
						</div>
            <input name="stat" type="text" id="example-readonly" class="form-control" value="order" hidden>

            <input type="hidden" name="count" value="<?php   echo $rowcount=mysqli_num_rows($result2);?>"></td>

						<button name="submit" type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>                                            
<?php

}else{
	echo "No data found";
}
}
// include_once('../footer.php');
?>