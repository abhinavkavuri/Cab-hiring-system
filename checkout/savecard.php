<?php
require_once("../includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html >
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="demo">
		<form class="payment-card" method="POST" action="savecard.php">
			<div class="bank-card">
				<div class="bank-card__side bank-card__side_front">
					
                                        <div class="bank-card__inner">
						<label class="bank-card__label bank-card__label_holder">
							<span class="bank-card__hint">Holder of card</span>
							<input type="text" class="bank-card__field" placeholder="Holder of card" pattern="[A-Za-z, ]{2,}" name="cardholder" required>
						</label>
					</div>
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__label_number">
							<span class="bank-card__hint">Number of card</span>
							<input type="text" class="bank-card__field" placeholder="Number of card" pattern="[0-9]{16}" name="cardnumber" required>
						</label>
					</div>
					<div class="bank-card__inner">
						<span class="bank-card__caption">valid thru</span>
					</div>
					<div class="bank-card__inner bank-card__footer">
						<label class="bank-card__label bank-card__month">
							<span class="bank-card__hint">Month</span>
							<input type="text" class="bank-card__field" placeholder="MM" maxlength="2" pattern="[0-9]{2}" name="cardmonth" required>
						</label>
						<span class="bank-card__separator">/</span>
						<label class="bank-card__label bank-card__year">
							<span class="bank-card__hint">Year</span>
							<input type="text" class="bank-card__field" placeholder="YY" maxlength="2" pattern="[0-9]{2}" name="cardyear" required>
						</label>
					</div>
				</div>
				<div class="bank-card__side bank-card__side_back">
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__cvc">
							<span class="bank-card__hint">CVV</span>
							<input type="text" class="bank-card__field" placeholder="CVV" maxlength="3" pattern="[0-9]{3}" name="cvv" required>
						</label>
					</div>
				</div>
			</div>
                    <br><br>
			<div class="payment-card__footer">
                            <button  name="submitsavechanges" class="payment-card__button" type="submit" >Save</button>
			</div>
		</form>
	</div>
<footer class="footer">
  <a class="melnik909" rel="noopener noreferrer" target="_blank">Wallet card save Terminal</a>
</footer>

<?php
  if(isset($_POST['submitsavechanges'])){
    
    $cardholder=$_POST['cardholder'];
    $cardnumber=$_POST['cardnumber'];
    $month=$_POST['cardmonth'];
    $year=$_POST['cardyear'];
    $cvv=$_POST['cvv'];
    $sai=$_SESSION['email'];
   
    $query ="INSERT INTO `card`(`username`, `cardnumber`, `cardname`, `monthvalid`, `yearvalid`, `cvv`) VALUES ('" . $sai . "',$cardnumber,'" . $cardholder . "',$month,$year,$cvv)";
     $query_run = mysqli_query($con,$query);
     if ($query_run) {   
         echo '<script type="text/javascript"> alert("Card successfully updated....Log in Again for security reasons"); window.location.href = "/cabv2/logout_script.php"; </script>';
     }
     else{
         echo '<script type="text/javascript"> alert("Sorry updation failed please try again") </script>';
      }
  }
  ?>

</body>
</html>
