<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-danger" style="margin-bottom: 50px;">Show All</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Room</th>
                    <th>Type</th>
                    <th>Floor</th>
                    <th>Price</th>
                    <th>Hotel Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
            @php
                $index = 0;
            @endphp
            @foreach ($hotelList as $hotel)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $hotel['id_room'] }}</td>
                                        <td>{{ $hotel['type'] }}</td>
                                        <td>{{ $hotel['floor'] }}</td>
                                        <td>{{ $hotel['price'] }}</td>
                                        <td>{{ $hotel['hotel_name'] }}</td>
                                        <td>{{ $hotel['address'] }}</td>
                                    </tr>
                                @endforeach
        </table>
            </tbody>
    </div>
</body>
</html>
