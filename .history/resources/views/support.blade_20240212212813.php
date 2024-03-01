@extends('layout.nav')
@section('title')
Heros | support
@endsection
@section('css')
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/css/support.css') }}">
@endsection

@section('content')
    @if (session('cancel'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('cancel')  }}
        </div>
    @elseif (session('success'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('successDeposit')  }}
        </div>
    @elseif (session('tryDeposit'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('tryDeposit')  }}
        </div>
    @endif

    <div class="flex-center position-ref full-height">

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
                        <a href={{ route('deposit') }} target="_blank" class="btn btn-success">Support with Paypal</a>
                    </td>
                </tr>
            </table>



        </div>
    </div>
@endsection
