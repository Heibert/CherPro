<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ficha</title>
</head>
<body>
    <div>
        <div>
            <select name="asignarficha" id="asignarficha">Fichas
            @foreach ($ficha as $fi)
                        <option value="{{ $fi['id'] }}">
                            {{ $fi['numFicha'] }}
                        </option>
                    @endforeach
            </select>
        </div>
    </div>
</body>
</html>