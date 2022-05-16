<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="conteiner">
        <h3>Samochody</h3>
        <div class="cars">
            <table>
                <thead>
                    <tr>
                        <th>LP</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Cecha</th>
                        <th>Szczegóły</th>

                    </tr>
                </thead>
                <tbody>


                    @foreach ($cars as $car)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car[0] }}</td>
                            <td>{{ $car[1] }}</td>
                            <td> {{ $car[2] }}</td>
                            <td>
                                <a href="/cars/show/{{ $loop->iteration }}">Zobacz</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</body>

</html>
