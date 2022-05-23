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
            <div class="flirts">
                <form action="{{ route('cars.list') }}" method="get">
                    <div>
                        <label for="vin">Vin</label>
                        <input type="text" name="vin" id="vin">
                    </div>
                    <div>
                        <label for="color">Kolor</label>
                        <input type="text" name="color" id="color">
                    </div>
                    <div>
                        <label for="minPrice">minPrice</label>
                        <input type="text" name="minPrice" id="minPrice">
                    </div>
                    <div>
                        <label for="description">Opis</label>
                        <input type="text" name="description" id="description">
                    </div>
                    <div>
                        <button type="submit">Filtruj</button>
                    </div>


                </form>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>LP</th>
                        <th>vin</th>
                        <th>Opis</th>
                        <th>Kolor</th>
                        <th>Cena</th>
                        <th>Szczegóły</th>

                    </tr>
                </thead>
                <tbody>


                    @foreach ($cars as $car)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $car->vin }}</td>
                            <td>{{ $car->description }}</td>
                            <td>{{ $car->color }}</td>
                            <td> {{ $car->price }}</td>
                            <td>
                                <a href="{{ route('cars.show', ['id' => $car->id]) }}">Szczegóły</a>
                            </td>
                            <td>
                                <form action="{{ route('cars.destroy', ['id' => $car->id]) }}" method="delete">
                                    <button type="submit">Usuń</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</body>

</html>
