@extends('layouts.layout')

@section('content')
@endsection
@section('script')
<script src="https://js.paystack.co/v1/inline.js"></script>
<script>

    document.addEventListener('DOMContentLoaded', function(){
        payWithPaystack();
    });

    function payWithPaystack() {

        let handler = PaystackPop.setup({
            key: '{{config('paystack.public_key')}}', // Replace with your public key
            email: 'user@gmail.com',
            amount: 40*100,
            currency: 'NGN',
            
            onClose: function(){
                alert('Window closed.');
            },

            callback: function(response){
                // let message = 'Payment complete! Reference: ' + response.reference;
                // alert(message);

                // console.log(response);
                // window.location.href = response.redirecturl


                redirecturl = response.redirecturl.replace('https:','http:');
                // console.log(response.redirecturl);
                // console.log(redirecturl);
                window.location.href = redirecturl

            }
        });
        handler.openIframe();
    }

</script>
@endsection
