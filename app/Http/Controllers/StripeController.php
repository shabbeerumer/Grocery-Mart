<?php

namespace App\Http\Controllers;

use App\Models\StripePayment;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function stripe(Request $request)
    {
        $stripe = new \Stripe\StripeClient(
            config('stripe.stripe_sk')
        );

        $response = $stripe->checkout->sessions->create([
            'line_items' => [
                [
                    'price_data' => [
                        'currency' => 'usd',
                        'product_data' => [
                            'name' => $request->item_name,
                        ],
                        'unit_amount' => (float) $request->total_price * 100,
                    ],
                    'quantity' => $request->item_quantity,
                ],
            ],
            'mode' => 'payment',
            'success_url' => route('success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('cancel'),
            'metadata' => [
                'product_id' => $request->item_id,
            ],
        ]);

        if (isset($response->url) && $response->url != '') {
            session()->put('product_name', $request->item_name);
            session()->put('item_id', $request->item_id);
            session()->put('total_price', $request->total_price);
            session()->put('item_quantity', $request->item_quantity);

            return redirect($response->url);
        } else {
            return redirect()->route('cancel');
        }
    }

    public function success(Request $request)
    {
        if (isset($request->session_id)) {
            $stripe = new \Stripe\StripeClient(config('stripe.stripe_sk'));
            $response = $stripe->checkout->sessions->retrieve($request->session_id);

            // Check if customer details are available
            $customerDetails = $response->customer_details ?? null;
            $payerName = $customerDetails->name ?? 'Guest';
            $payerEmail = $customerDetails->email ?? 'No email provided';

            $payment = new StripePayment();
            $payment->payment_id = $response->id;
            $payment->product_name = session()->get('product_name');
            $payment->quantity = session()->get('item_id');
            $payment->amount = session()->get('total_price');
            $payment->currency = $response->currency;
            $payment->payer_name = $payerName;
            $payment->payer_email = $payerEmail;
            $payment->payment_status = $response->status;
            $payment->payment_method = 'stripe';
            $payment->save();

            // Clear session data
            session()->forget(['product_name', 'item_id', 'total_price', 'item_quantity']);

            return redirect()->back();
        } else {
            return redirect()->route('cancel');
        }
    }

    public function cancel()
    {
        return 'Payment canceled';
    }
}
