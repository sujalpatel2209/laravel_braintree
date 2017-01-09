<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Braintree_Customer;

class BraintreeController extends Controller
{

    public function pay()
    {
/*        $result = \Braintree_Transaction::sale([
           'amount' => '50.00',
            'customerId' => 'sujal2209',
            'options' => [
                'storeInVaultOnSuccess' => True
            ]
        ]);
        echo "<pre>";
        print_r($result);
*/


       /* $result = \Braintree_Customer::create([
            'firstName' => 'Mike',
            'lastName' => 'Jones',
            'company' => 'Jones Co.',
            'paymentMethodNonce' => '1d7ecddb-1df6-401e-bbc9-fbf43e1da2dc'
        ]);*/
/*
        $result = \Braintree_Transaction::refund('70mv3h33');
*/


        //$result = Braintree_Customer::PaymentMethodNonce.create();


     /*   $token_result = Braintree_PaymentMethod::create([
            'customerId' => 'sujal2209',
            'paymentMethodNonce' => '1d7ecddb-1df6-401e-bbc9-fbf43e1da2dc'
        ]);
*/



        $result = \Braintree_Subscription::create([
            'paymentMethodToken' => '1d7ecddb-1df6-401e-bbc9-fbf43e1da2dc',
            'planId' => 'silver'
        ]);

     //   $customer = \Braintree_Customer::find('25173617');
        echo "<pre>";
        print_r($result);


    }
}
