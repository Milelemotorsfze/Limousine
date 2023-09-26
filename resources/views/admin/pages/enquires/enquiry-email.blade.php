
{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" >--}}
{{--    <style>--}}
{{--        body{--}}
{{--            background-color: #d0d5d5;--}}
{{--        }--}}
{{--        .card {--}}
{{--            margin: 0 auto; /* Added */--}}
{{--            float: none; /* Added */--}}
{{--            margin-bottom: 10px; /* Added */--}}
{{--        }--}}
{{--    </style>--}}
{{--</head>--}}
{{--<body class="p-3 ">--}}
{{--<div class="container">--}}
    Hello ,

    <p>You have a new Car Rental Enquiry. Please refer the details below for further follow up.Have a nice day!</p>

    <div class="card p-4" style="width: 25rem;">
        <div class="card_body">
            <p>Customer Name: {{ $data['customer_name'] }}</p>
            <p >Contact Number: {{ $data['contact_number'] }}</p>
            <p>Customer Name: {{ $data['vehicle'] }}</p>
            <p>Date         : {{$data['start_date'] }} to {{ $data['end_date'] }} </p>
            <p>Location     : {{$data['location'] }} </p>

        </div>
    </div>
    <div class="footer">
        <p>Thank You!</p>
        <p>Milele Car Rental</p>
{{--        <p><img src="{{asset('images/car_rental_logo.png')}}" alt="Milele Logo" style="width: 75px;height: 50px"></p>--}}
    </div>


{{--</div>--}}
{{--</body>--}}
{{--</html>--}}
