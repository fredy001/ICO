<html>
<?php include "header.php"; ?>

<body>

<div id="header">
  <span>EVAs</span>
</div>
<div class="container-fluid">
  <h2>PRESALE WITH EVAs</h2>
  <h3>EVA™ Property</h3>

  <p>To pre-order the EVA™ Bonds using your EVAs, please complete and submit the following form.</p>

  <p>Pre-order with EVA to be eligible for a 10% discount off of the total price for the EVA™ Bonds. Shortly after completing Step 1, you will receive an email with details to complete step 2 (making your EVA deposit).</p>

  <p>Please note: your pre-order will not be finalized until you complete Step 2 (pay with EVA).</p>

  <p>For more details, please refer to our Terms & Conditions. For inquiries regarding the Pre-order with EVA Program, please contact us at info@evtechnologies.ca</p>
  <br />

  
  <form action="">
    <div class="form-group">
      <label>Personal Information</label>
       <div class="row">
        <div class="col-md-1 col-lg-1 row-padding">
          <select class="form-control">
            <option value="0">Mr.</option>
            <option value="1">Ms.</option>
            <option value="2">Mrs.</option>
            <option value="3">Dr.</option>
            <option value="4">Prof.</option>
          </select>
        </div>
        <div class="col-md-3 col-lg-3 row-padding">
          <input type="text" id="firstname" name="firstname" class="form-control" maxlength="40" size="20" placeholder="First name" aria-required="true"/>
        </div>
        <div class="col-md-3 col-lg-3 row-padding">
          <input type="text" id="lastname" name="lastname" class="form-control" maxlength="40" size="20" placeholder="Last name" aria-required="true"/>
        </div>
      </div>

      <div class="row">
         <div class="col-md-4 col-lg-4 row-padding">
            <input type="text" id="email" name="email" class="form-control" maxlength="40" size="20" placeholder="Email address" aria-required="true"/>
         </div>
         <div class="col-md-3 col-lg-3 row-padding">
            <input type="text" id="phone" name="phone" class="form-control" maxlength="40" size="20" placeholder="Phone number" aria-required="true"/>
         </div>
      </div>
      <div class="row">
         <div class="col-md-7 col-lg-7 row-padding">
            <input type="text" id="home" name="home" class="form-control" maxlength="40" size="20" placeholder="Home address" aria-required="true"/>
         </div>
      </div>

      <div class="row section-padding"></div>
      <label>Order Information</label>
      <div class="row">
        <div class="col-md-2 col-lg-2 row-padding">
          <input type="text" id="amount" name="amount" class="form-control" maxlength="40" size="20" placeholder="Amount of EVAs" aria-required="true"/>
        </div>
        <div class="col-md-5 col-lg-5 row-padding">
          <input type="text" id="wallet" name="wallet" class="form-control" maxlength="40" size="20" placeholder="Ethereum wallet address" aria-required="true"/>
        </div>
      </div>

      <div class="row section-bal">
        Your EVA Balance: <span id="balance"></span><br/>
        Note: 1 ETH = 1,000 EVA
      </div>

      <div id="curhash" class="row section-hash hidden">
        Your transaction has been confirmed.<br/>
        Transaction Hash: <a href="#" id="href-txhash" target="_blank"><span id="txhash"></span></a><br/>
      </div>

      <div class="row section-padding"></div>
      <input type="checkbox" id="terms" name="terms" checked />
      <span>By submitting this form I accept pre-order program Terms & Conditions</span>

      <div class="row section-padding"></div>
      <button type="button" id="buyButton" class="btn btn-primary">Submit</button>

      </div>
    </form>
  </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/clipboard.min.js"></script>
<script src="js/alertify.min.js"></script>
<script src="js/date.min.js"></script>
<script src="js/async.min.js"></script>
<script src="js/numeral.min.js"></script>
<script src="js/web3.min.js"></script>
<script src="js/ethereumjs-tx.js"></script>
<script src="js/ethereumjs-wallet.js"></script>
<script src="js/sha256.js"></script>
<script src="js/ethereum.js"></script>

</body>

</html>
