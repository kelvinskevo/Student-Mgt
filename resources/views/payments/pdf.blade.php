<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>

<body>
    <h2>Title:: {{ $title }}</h2>
    <h2>Date:: {{ $date }}</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Enrollment No</th>
                <th>Amount</th>
                <th>Paid Date</th>
            </tr>
        </thead>ph
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->enrollment_id }}</td>
                    <td>{{ $payment->paid_date }}</td>
                    <td>{{ $payment->amount }}</td>


                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
