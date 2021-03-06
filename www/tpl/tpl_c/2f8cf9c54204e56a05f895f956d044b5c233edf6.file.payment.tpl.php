<?php /* Smarty version Smarty-3.0.7, created on 2013-04-27 19:40:20
         compiled from "tpl/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1650001389517c0d849c29f0-97727649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f8cf9c54204e56a05f895f956d044b5c233edf6' => 
    array (
      0 => 'tpl/payment.tpl',
      1 => 1367084265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650001389517c0d849c29f0-97727649',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap.no-responsive.no-icons.min.css">
  <script type="text/javascript">
      var PAYMILL_PUBLIC_KEY = '20478461769c584991e032df864676a2';
  </script>
</head>
<body>
  <div class="container span8">
    <!-- START: Payment form -->
    <div class="controls">
      <div class="span4">
        <div class="payment-errors text-error"></div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="well span5">
      <div class="controls controls-row">
        <div class="btn-group span4">
          <button id="btn-paymenttype-cc"  class="paymenttype btn btn-primary disabled" value="cc">Credit card</button>
          <button id="btn-paymenttype-elv" class="paymenttype btn" value="elv">ELV</button>
        </div><br /><br />
      </div>
 
      <form id="payment-form" action="payment.php" method="POST">
        <div class="clearfix"></div>
        <div id="payment-form-cc">
          <input class="card-amount-int" type="hidden" value="15"/>
          <input class="card-currency" type="hidden" value="EUR"/>
          <div class="controls controls-row">
            <div class="span3"><label>Card number</label>
                <input class="card-number span3" type="text" size="20" value="4111111111111111"/>
            </div>
            <div class="span1"><label>CVC</label>
                <input class="card-cvc span1" type="text" size="4" value="111"/>
            </div>
          </div>
          <div class="controls">
            <div class="span4">
              <label>Card holder</label>
              <input class="card-holdername span4" type="text" size="20" value="Max Mustermann"/>
            </div>
          </div>
          <div class="controls">
            <div class="span3">
              <label>Valid until (MM/YYYY)</label>
              <input class="card-expiry-month span1" type="text" size="2" value="12"/>
              <span> / </span>
              <input class="card-expiry-year span1" type="text" size="4" value="2015"/>
            </div>
          </div>
        </div>
        <div id="payment-form-elv" style="display: none;">
          <div class="controls">
            <div class="span3">
              <label>Account holder</label>
              <input class="elv-holdername span3" type="text" size="20" value="Max Mustermann"/>
            </div>
          </div>
          <div class="controls controls-row">
            <div class="span3"><label>Account number</label>
                <input class="elv-account span3" type="text" size="20" value="1234567890"/>
            </div>
          </div>
          <div class="controls">
            <div class="span3">
              <label>Bank code</label>
              <input class="elv-bankcode span3" type="text" size="20" value="40050150"/>
            </div>
          </div>
        </div>
        <div class="controls">
          <div class="span3">
            <button class="submit-button btn btn-primary" type="submit">Buy now</button>
          </div>
        </div>
      </form>
    </div>
    <!-- END: Payment form -->
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
  <script src="https://bridge.paymill.com/"></script>
  <script language="javascript" type="text/javascript">
      $(document).ready(function () {
          function PaymillResponseHandler(error, result) {
              if (error) {
                  // Show the error message above the form
                  $(".payment-errors").text(error.apierror);
              } else {
                  $(".payment-errors").text("");
                  var form = $("#payment-form");
                  // Token
                  var token = result.token;
                  // Insert token into the payment form
                  form.append("<input type='hidden' name='paymillToken' value='" + token + "'/>");
                  form.get(0).submit();
              }
              $(".submit-button").removeAttr("disabled");
          }
 
          $("#payment-form").submit(function (event) {
              // Deactivate the submit button to avoid further clicks
              $('.submit-button').attr("disabled", "disabled");
              if (false == paymill.validateCardNumber($('.card-number').val())) {
                  $(".payment-errors").text("Invalid card number");
                  $(".submit-button").removeAttr("disabled");
                  return false;
              }
 
              if (false == paymill.validateExpiry($('.card-expiry-month').val(), $('.card-expiry-year').val())) {
                  $(".payment-errors").text("Invalid date of expiry");
                  $(".submit-button").removeAttr("disabled");
                  return false;
              }
 
              paymenttype = $('.paymenttype.disabled').length ? $('.paymenttype.disabled').val() : 'cc';
              switch (paymenttype) {
                  case "cc":
                      var params = {
                          amount_int:     $('.card-amount-int').val(),  // E.g. "15" for 0.15 Eur
                          //amount:         $('.card-amount').val(),    // deprecated!
                          currency:       $('.card-currency').val(),    // ISO 4217 e.g. "EUR"
                          number:         $('.card-number').val(),
                          exp_month:      $('.card-expiry-month').val(),
                          exp_year:       $('.card-expiry-year').val(),
                          cvc:            $('.card-cvc').val(),
                          cardholdername: $('.card-holdername').val()
                      };
                      break;
 
                  case "elv":
                      var params = {
                          number:         $('.elv-account').val(),
                          bank:           $('.elv-bankcode').val(),
                          accountholder:  $('.elv-holdername').val()
                      };
                      break;
              }
              paymill.createToken(params, PaymillResponseHandler);
 
              return false;
          });
 
          // Toggle buttons and forms
          $(".paymenttype").click(function (event) {
              $(this).addClass('btn-primary disabled');
              $('#payment-form-cc').toggle();
              $('#payment-form-elv').toggle();
              if($(this).val()=='cc') {
                  $('#btn-paymenttype-elv').removeClass('btn-primary disabled');
              }
              else {
                  $('#btn-paymenttype-cc').removeClass('btn-primary disabled');                  
              }
          });
      });
  </script>
</body>
</html>