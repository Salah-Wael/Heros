@extends('layout.nav')
@section('title')
Heros | support
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ assets('assets/css/support.css') }}">
@endsection



@section('content')
    <div class="flex-center position-ref full-height">

            <div class="content">
                <h1>PayPal</h1>

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
                    </tr>
                </table>

                <a href="{{ route('deposit') }}" class="btn btn-success">Support with $100 from Paypal</a>

            </div>
    </div>
@endsection
    <body>

    </body>
</html>
