<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva excusa</title>
</head>
<body>
    <section>
        <div>
            <form action="{{ url('/excusa') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('excusa.form',['modo'=>'Crear'])

            
            </form>
        </div>
    </section>
    
</body>
</html>