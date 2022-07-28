<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Page</title>
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
                </tr>
            </thead>
            <tbody>
            @php
                $index = 0;
            @endphp
            @foreach($roomList as $item)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $item['id_room'] }}</td>
                                        <td>{{ $item['type'] }}</td>
                                        <td>{{ $item['floor'] }}</td>
                                        <td>{{ $item['price'] }}</td>

                                    </tr>
                                @endforeach
        </table>
            </tbody>
    </div>
</body>
</html>
