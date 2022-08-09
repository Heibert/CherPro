<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>
</head>
<body>
<select name="instructor" id="instructor">
                    <option value="">Elija un Instructor</option>
                    @foreach($instructores as $instructor)
                        <option value="{{$instructor->id}}">
                            {{$instructor->nombreInst}}
                        </option>
                    @endforeach
                </select>
</body>
</html>