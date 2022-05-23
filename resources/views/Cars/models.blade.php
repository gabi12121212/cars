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
        <h3>Modele</h3>
        <div class="models">
            <div class="flirts">
                <form action="{{ route('models.list') }}" method="get">
                    <div>
                        <label for="id">id</label>
                        <input type="text" name="id" id="id">
                    </div>
                    <div>
                        <label for="name">nazwa</label>
                        <input type="text" name="name" id="name">
                    </div>


                </form>
            </div>
            <table>
                <thead>
                    <tr>

                        <th>Id</th>
                        <th>nazwa</th>

                    </tr>
                </thead>
                <tbody>


                    @foreach ($models as $model)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $model->name }}</td>


                            <td>
                                <form action="{{ route('models.destroy', ['id' => $model->id]) }}" method="delete">
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
