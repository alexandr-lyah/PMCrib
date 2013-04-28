   <?php
 
   require_once('common.php');
   
        //
        // Please download the Paymill PHP Wrapper at
        // https://github.com/Paymill/Paymill-PHP
        // and put the containing "lib" folder into your project
        //
 
        define('PAYMILL_API_HOST', 'https://api.paymill.com/v2/'); 
        define('PAYMILL_API_KEY', 'e6f70d20773ee5e041833fd6e27a0027');
        set_include_path(
            implode(PATH_SEPARATOR, array( 
                realpath(realpath(dirname(__FILE__)).'/lib'),
                get_include_path())
            )
        );
 
        if ($token = $_POST['paymillToken']) {
            require "lib/Paymill/Transactions.php";
            $transactionsObject = new Services_Paymill_Transactions(PAYMILL_API_KEY, PAYMILL_API_HOST);
 
            $params = array(
            'amount'        => '1500',   // E.g. "15" for 0.15 EUR!
            'currency'      => 'EUR',  // ISO 4217
            'token'         => $token,
            'description'   => 'Pitch My Crib'
            );
 
            $transaction = $transactionsObject->create($params);
         }
         // php print_r($transaction);
         

         $s->assign('displayshare', true);
          
         $s->display('header.tpl');
         $s->display('paymentok.tpl');
         $s->display('footer.tpl');
         
        ?>


          