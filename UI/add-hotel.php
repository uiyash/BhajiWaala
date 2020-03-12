<?php
include_once('header.php');
include_once('navbar.php');
?>
<div class="section" style="marging-top:50px;">
<form action="inc/add-hotel.inc.php" method="POST">
		                                                    <div class="form-group m-b-15">
		                                                        <label for="simpleinput">Name</label>
		                                                        <input name="name" type="text" id="simpleinput" class="form-control">
		                                                    </div>
		                                                    <div class="form-group m-b-15">
		                                                        <label for="example-email">Email</label>
		                                                        <input name="email" type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
		                                                    </div>
		                                                
		                                                    <div class="form-group m-b-15">
		                                                        <label for="example-palaceholder">Phone No</label>
		                                                        <input name="phone" type="number" id="example-palaceholder" class="form-control" placeholder="placeholder">
		                                                    </div>
		                                                    <div class="form-group m-b-15">
		                                                        <label for="example-textarea">Address</label>
		                                                        <textarea name="address" class="form-control" id="example-textarea" rows="5"></textarea>
		                                                    </div>
		                                                    <div class="form-group m-b-15">
		                                                        <label for="example-readonly">Gstin</label>
		                                                        <input name="gstin" type="text" id="example-readonly" class="form-control" value="Readonly value">
															</div>
															<button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                                        </form>
                                                        </div>
<?php
include_once('footer.php');
?>