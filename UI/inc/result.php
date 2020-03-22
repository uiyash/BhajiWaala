<?php
include_once('../connect.php');
// include_once('../header.php');
session_start();
$cid= $_GET['id'];
$uid=$_SESSION['id'];
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
// include_once('../footer.php');
?>