<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        
        return view('frontend.donation');
    }

  

    public function index(Request $request)
    {
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

         $user = Auth::user();

   
        

        $post_data = array();
        $post_data['total_amount'] = $request->input('amount', 10);
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid();


        $post_data['user_id'] =$user->id ;
        $post_data['cus_name'] = $request->input('name', $user->name);
        $post_data['cus_email'] = $request->input('email', $user->email);
        $post_data['cus_add1'] = $user->address;
        $post_data['cus_phone'] = $user->phone_no;

        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Donation";
        $post_data['product_category'] = "Charity";
        $post_data['product_profile'] = "non-physical-goods";

       

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = DB::table('donations')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'admin_id' => 1,
                'user_id' =>  $post_data['user_id'],

            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function payViaAjax(Request $request)
    {

        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $user = Auth::user();

        $post_data = array();
        $post_data['total_amount'] = $request->input('amount', 10);
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid();

        $post_data['cus_name'] = $request->input('name', $user->name);
        $post_data['cus_email'] = $request->input('email', $user->email);
        $post_data['cus_add1'] = $user->address;
        $post_data['cus_phone'] = $user->phone_no;

        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Donation";
        $post_data['product_category'] = "Charity";
        $post_data['product_profile'] = "non-physical-goods";




        #Before  going to initiate the payment order status need to update as Pending.
        $update_product = DB::table('donations')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'admin_id' => 1,
                'user_id' => $user->id

            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }

    }

    public function success (Request $request)
    {


        $latestDonation = DB::table('donations')
        ->orderBy('id', 'desc')
        ->first();


        $user_id = $latestDonation->user_id;

        $user = DB::table('users')->where('id', $user_id)->first();

        if (Auth::loginUsingId($user_id)) {
            // Store the user_id in session
            $request->session()->put('user_id', $user_id);
    
            
        }

        
        

        $user_id = session('user_id');

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_details = DB::table('donations')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_details->status == 'pending') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

            if ($validation) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $update_product = DB::table('donations')
                    ->where('transaction_id', $tran_id)
                    ->update(['status' => 'Processing']);
                    

                    return view('frontend.success',compact('user_id','tran_id','amount','currency'));

            }

           
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            return view('frontend.success',compact('user_id','tran_id','amount','currency'));


        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            echo "Invalid Transaction";
        }


    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('donations')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_details->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Failed']);
            echo "Transaction is Falied";
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }

    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('donations')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'status', 'currency', 'amount')->first();

        if ($order_details->status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['status' => 'Canceled']);
            echo "Transaction is Cancel";
        } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {
            echo "Transaction is already Successful";
        } else {
            echo "Transaction is Invalid";
        }


    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('donations')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('donations')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    echo "Transaction is successfully Completed";
                }
            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }

}
