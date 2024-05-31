@extends('layout.nav')
@section('title')
Heros | support
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/support.css') }}">
@endsection

@section('content')
    @if (session('cancel'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('cancel')  }}
        </div>
    @elseif (session('success'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('success')  }}
        </div>
    @elseif (session('tryDeposit'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('tryDeposit')  }}
        </div>
    @endif

    <div class="row">
        <div class="col-6">
            <table border="0" cellpadding="10" cellspacing="0" align="center">
                <tr>
                    <td align="center"></td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                            <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">
                        </a>
                    </td>
                    <td align="center">
                        <a href="https://paypal.me/salahELDinWael?country.x=EG&locale.x=en_US" target="_blank" class="btn btn-success">Support with Paypal</a>
                        <a href={{ route('payment') }} target="_blank" class="btn btn-success">Support with Paypal</a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                            <img src="data:image/jpeg;base64,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" border="0" alt="PayPal Logo">
                        </a>
                    </td>
                    <td align="center">
                        <a class="btn btn-primary " target="_blank" onclick="pay()">Support with Fawater</a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                            <img style="width: 200px; height: 120px" src="data:image/png;base64,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" border="0" alt="PayPal Logo">
                        </a>
                    </td>
                    <td align="center">
                        <form action="/post" method="POST">
                            @csrf
                            <button type="submit">Checkout</button>
                        </form>
                    </td>
                </tr>
            </table>
            
        </div>
        <div class="col-6">
            <div id="fawaterkDivId"></div>
        </div>
    </div>

    {{-- <div class="flex-center position-ref full-height">

        <div class="content">
            <table border="0" cellpadding="10" cellspacing="0" align="center">
                <tr>
                    <td align="center"></td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                            <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">
                        </a>
                    </td>
                    <td align="center">
                        <a href="https://paypal.me/salahELDinWael?country.x=EG&locale.x=en_US" target="_blank" class="btn btn-success">Support with Paypal</a>
                        <a href={{ route('payment') }} target="_blank" class="btn btn-success">Support with Paypal</a>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a href="https://www.paypal.com/in/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/in/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;">
                            <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">
                        </a>
                    </td>
                    <td align="center">
                        <a class="btn btn-primary " target="_blank" onclick="fawaterkCheckout(pluginConfig);">Support with Fawater</a>
                    </td>
                </tr>
            </table>
        </div>
    </div> --}}
@endsection

@section('script')
    <script src="https://app.fawaterk.com/fawaterkPlugin/fawaterkPlugin.min.js"></script>
    {{-- <script>
        var pluginConfig = {
            envType: "test",
            hashKey: {{ generateHashKey($data) }},
            requestBody: {
                "cartTotal": "50",
                "currency": "EGP",
                "customer": {
                    "first_name": "test",
                    "last_name": "fawaterk",
                },
                "redirectionUrls": {
                    "successUrl": "https://dev.fawaterk.com/success",
                    "failUrl": "https://dev.fawaterk.com/fail",
                    "pendingUrl": "https://dev.fawaterk.com/pending"
                },
                "cartItems": [{
                        "name": "this is test oop 112252",
                        "price": "25",
                        "quantity": "1"
                    },
                    {
                        "name": "this is test oop 112252",
                        "price": "25",
                        "quantity": "1"
                    }
                ],
                "sendEmail": true,
                "payLoad": {
                    "custom_field1":"xyz",
                    "custom_field2":"xyz2"
                }
            }
        };

        function pay(){
            fawaterkCheckout(pluginConfig);
        }
    </script> --}}
@endsection
