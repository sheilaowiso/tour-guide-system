<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$method=$_POST['method'];
$card_number=$_POST['number'];
$email=$_SESSION['login'];
$sql="INSERT INTO  tblpayments(UserEmail,method,number) VALUES(:email,:method,:number)";
$query = $dbh->prepare($sql);
$query->bindParam(':method',$method,PDO::PARAM_STR);
$query->bindParam(':number',$card_number,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Payment successfully submited ";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
}
?>	

	<div class="modal fade" id="myModa13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
							<form name="help" method="post">
								<div class="modal-body modal-spa">
									<div class="writ">
										<h4>MAKE YOUR PAYMENTS HERE</h4>
											<ul>
												
												<li class="na-me">
													<select id="country" name="issue" class="frm-field required sect" required="">
														<option value="">Select Payment Method</option> 		
														<option value="Booking Issues">Visa Card</option>
														<option value="Cancellation"> Master Card</option>
														<option value="Refund">M-Pesa</option>
																												
													</select>
												</li>
											
												<li class="descrip">
									<input class="special" type="text" placeholder="Card/PhoneNumber"  name="Number" required="">
												</li>
													<div class="clearfix"></div>
											</ul>
											<div class="sub-bn">
												<form>
													<button type="submit" name="submit" class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
								</form>
							</section>
					</div>
				</div>
			</div>