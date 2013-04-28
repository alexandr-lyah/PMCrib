<?php /* Smarty version Smarty-3.0.7, created on 2013-04-28 02:51:18
         compiled from "tpl/pitch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:696128091517c7286636c15-13856667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a58553bae7b171e4419e14be01fee847eac9231e' => 
    array (
      0 => 'tpl/pitch.tpl',
      1 => 1367108456,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '696128091517c7286636c15-13856667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>



<div style="margin-left:200px;">

<div class="container span8">
    <!-- START: Payment form -->
    
    <div class="well span5">
    <h2 class="span4">Crib Details</h2>
    
     <div class="controls">
            <div class="span4">
              <label><strong>Title</strong></label>
              <input class="card-holdername span4" type="text" size="20" value="Great Penthouse"/>
            </div>
     </div>
       <div class="controls">
            <div class="span4">
              <label><strong>Type</strong></label>
              <select class="span4">
              	<option>House Rent</option>
              	  <option>Bedroom Rental</option>
				  
				  <option>House Sell</option>
				</select>
            </div>
     </div>
      <div class="controls">
            <div class="span2">
              <label><strong>Price</strong></label>
              <input class="card-holdername span2" type="text" size="5" value="450"/>
            </div>
            <div class="span2">
              <label><strong>week/month</strong></label>
              <select class="span2">
				  <option>per week</option>
				  <option>per month</option>
				</select>
            </div>
     </div>
  
     <div class="controls">
            <div class="span4">
              <label><strong>Your Pitch URL</strong> (youtube, vimeo)</label>
              <input class="card-holdername span4" type="text" size="20" value="http://www.youtube.com/embed/y37aspxMa6M"/>
            </div>
              <div class="span4">
              <label><strong>Preview</strong></label>
              <iframe width="300" height="200" src="http://www.youtube.com/embed/y37aspxMa6M?modestbranding=1;autohide=1&amp;showinfo=0&amp;controls=0;" frameborder="0" allowfullscreen></iframe>
            </div>
     </div>   
     <div class="controls" >
            <div class="span4" style="margin-top:18px; ">
              <label><strong>Location</strong></label>
              <img src="<?php echo $_smarty_tpl->getVariable('baseUrl')->value;?>
web/img/smallmap.png" />
            </div>
     </div> 
      <div class="controls">
            <div class="span4" style="margin-top:18px;">
              <label><strong>Short/Long Let</strong></label>
                            <select class="span4">
              	  <option>Short Let</option>
				  <option>Long Let</option>
				</select>
            </div>
     </div>
      <div class="controls">
            <div class="span4">
              <label><strong>N. Bedrooms</strong></label>
              <input class="card-holdername span2" type="text" size="5" value=""/>
            </div>
      </div>
      <div class="controls">
            <div class="span2">
              <label><strong>Available from</strong></label>
              <input class="card-holdername span2" type="text" size="5" value=""/>
            </div>            
      </div>        
    </div>
    </div>


  <div class="container span8">
    <!-- START: Payment form -->
   
    <div class="well span5">
 	<h2 class="span4">Payment Details</h2>
     <form id="payment-form" action="payment.php" method="POST">

        <div class="clearfix"></div>

     
        <div id="payment-form-cc">
     <p  class="span4">
     You have no credits in your account. Check <a href="pricing.php">Pricing</a> for detailed info or quickly choose from below:
     
     <label class="radio">
  <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
  <em><strong>One-Off basic - &#163;7</strong> <br/> 30 sec video, 5 messages / month
</label>
<label class="radio">
  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked>
  <em><strong>One-Off extended - &#163;12</strong> <br/> 2 min video, unlimited messages, adv search / month
</label>
<label class="radio">
  <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
  <em><strong>Business - &#163;75</strong></em> <br/> unlim videos, unlim messages, adv search / month
</label>
     </p>
     
          <input class="card-amount-int" type="hidden" value="7"/>
          <input class="card-currency" type="hidden" value="EUR"/>
          <div class="controls controls-row">
            <div class="span3"><label><strong>Card number</strong></label>
                <input class="card-number span3" type="text" size="20" value="4111111111111111"/>
            </div>
            <div class="span1"><label><strong>CVC</strong></label>
                <input class="card-cvc span1" type="text" size="4" value="111"/>
            </div>
          </div>
          <div class="controls">
            <div class="span4">
              <label><strong>Card holder</strong></label>
              <input class="card-holdername span4" type="text" size="20" value="Max Mustermann"/>
            </div>
          </div>
          <div class="controls">
            <div class="span3">
              <label><strong>Valid until (MM/YYYY)</strong></label>
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
          <div class="span3 center">
            <button class="submit-button btn btn-primary center" type="submit">Pay and upload your pitch</button>
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
  
  </div> <!--  class="jumbotron" -->
  <div style="clear:both;"></div>