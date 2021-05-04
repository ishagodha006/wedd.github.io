
<html>
<head>
 <title> DONATION </title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link ref ="stylesheet"  href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="dist/jquery.min.js"></script>
  <script src="dist/js/bootstrap.min.js"></script>
  <body>
      
<div >


<form action="donationinfo.php" method="post">

<div class="checkout-panel">
  <div class="panel-body">
    <h2 class="title">DONATE NOW !!</h2>
 
    <div class="progress-bar">
      <div class="step active"></div>
      <div class="step active"></div>
      <div class="step"></div>
      <div class="step"></div>
    </div>
    
		
 
    <div class="payment-method">
      <label for="card" class="method card">
        <div class="card-logos">
          <img src="https://designmodo.com/demo/checkout-panel/img/visa_logo.png"/>
          <img src="https://designmodo.com/demo/checkout-panel/img/mastercard_logo.png"/>
        </div>
 
        <div class="radio-input">
          <input id="card" type="radio" name="payment">
          Pay in rupees with credit card
        </div>
      </label>
 
      <label for="paypal" class="method paypal">
        <img src="https://designmodo.com/demo/checkout-panel/img/paypal_logo.png"/>
        <div class="radio-input">
          <input id="paypal" type="radio" name="payment">
          Pay in rupees with PayPal
        </div>
      </label>
    </div>
 
    <div class="input-fields">
      <div class="column-1">
        <label for="cardholder">Name</label>
        <input type="text" id="cardholder" />
        
        <div class="input-fields">
      <div class="column-1">
        <label for="add">Address</label>
        <input type="text" id="address" />

        <div class="input-fields">
      <div class="column-1">
        <label for="no">Mobile</label>
        <input type="text" id="no" />
        
 
        <div class="small-inputs">
          <div>
            <label for="date">Valid date</label>
            <input type="text" id="date"/>
          </div>
          <div class="small-inputs">
          <div>
            <label for="amount">Correct amount </label>
            <input type="text" id="amount"/>
          </div>

 
          <div>
            <label for="verification">CVV / CVC *</label>
            <input type="text" id="verification"/>
          </div>
        </div>
 
      </div>
      <div class="column-2">
        <label for="cardnumber">Card Number</label>
        <input type="text" id="cardnumber"/>
 
        <span class="info">* CVV or CVC is the card security code, unique three digits number on the back of your card separate from its number.</span>
      </div>
    </div>
  </div>
 
  <div class="panel-footer">
  </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
  </div>
</div>
</head>
</html>