<?php 	include 'inc/head.php'; ?>
  <body>
<?php 	include 'inc/header.php'; ?>
    <?php
// Include configuration file
include_once 'payment/config.php';

// Include database connection file
include_once 'payment/dbConnect.php';

// Start session
session_start();

// Get logged-in user ID from sesion
// Session name need to be changed as per your system
$loggedInUserID = !empty($_SESSION['userID'])?$_SESSION['userID']:6;
?>




<!-- Buy button -->

<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">תרקשו מנוי פה!</h2>

    <div class="form-group">
        <label>לכמה זמן המנוי:</label>
        <select name="validity" onchange="getSubsPrice(this);">
            <option value="1" selected="selected">1 חודש</option>
            <option value="3">3 חודש</option>
            <option value="6">6 חודש</option>
            <option value="9">9 חודש</option>
            <option value="12">12 חודש</option>
        </select>
    </div>
    <div class="form-group">
        <p><b>עלות:</b> <span id="subPrice"><?php echo '$'.$itemPrice.' USD'; ?></span></p>
    </div>
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
          <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
        </div>

        <div class="radio-input">
          <input id="card" type="radio" name="payment">
          <!-- Pay AU$20.99 with credit card -->
        </div>
      </label>

      <label for="paypal" class="method paypal">
        <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
        <div class="radio-input">
          <input id="paypal" type="radio" name="payment">
          <!-- Pay AU$20.99 with PayPal -->
        </div>
      </label>
    </div>

    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">שם בעל הכרטיס</label>
        <input type="text" id="cardholder" />

        <div class="small-inputs">
          <div>
            <label for="date">תוקף הכרטיס</label>
            <input type="text" id="date"/>
          </div>

          <div>
            <label for="verification">CVV / CVC *</label>
            <input type="password" id="verification"/>
          </div>
        </div>

      </div>
      <div class="column-2">
        <label for="cardnumber">מספר הכרטיס</label>
        <input type="password" id="cardnumber"/>

        <span class="info">* CVV או CVC מאחורי הכרטיס הקוד אבטחה שלכם</span>
      </div>
    </div>
  </div>
<form action="<?php echo PAYPAL_URL; ?>" method="post">
  <!-- Identify your business so that you can collect the payments -->
  <input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">
  <!-- Specify a subscriptions button. -->
  <input type="hidden" name="cmd" value="_xclick-subscriptions">
  <!-- Specify details about the subscription that buyers will purchase -->
  <input type="hidden" name="item_name" value="<?php echo $itemName; ?>">
  <input type="hidden" name="item_number" value="<?php echo $itemNumber; ?>">
  <input type="hidden" name="currency_code" value="<?php echo PAYPAL_CURRENCY; ?>">
  <input type="hidden" name="a3" id="paypalAmt" value="<?php echo $itemPrice; ?>">
  <input type="hidden" name="p3" id="paypalValid" value="1">
  <input type="hidden" name="t3" value="M">
  <!-- Custom variable user ID -->
  <input type="hidden" name="custom" value="<?php echo $loggedInUserID; ?>">
  <!-- Specify urls -->
  <input type="hidden" name="cancel_return" value="<?php echo PAYPAL_CANCEL_URL; ?>">
  <input type="hidden" name="return" value="<?php echo PAYPAL_RETURN_URL; ?>">
  <input type="hidden" name="notify_url" value="<?php echo PAYPAL_NOTIFY_URL; ?>">

    <div class="panel-footer">
      <button class="btn_buy  back-btn_buy ">חזור</button>
      <input class="btn_buy  next-btn_buy " type="submit" value="לרכוש">
    </div>
</form>

</div>

<script src="js/buy.js">

</script>

<script>
function getSubsPrice(obj){
  var month = obj.value;
  var price = (month * <?php echo $itemPrice; ?>);
  document.getElementById('subPrice').innerHTML = '$'+price+' USD';
  document.getElementById('paypalValid').value = month;
  document.getElementById('paypalAmt').value = price;
}
</script>
  </body>
</html>
