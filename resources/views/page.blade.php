<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        @foreach ($responseArr as $fields)
    <div class="container panel panel-default">
            <h2 class="panel-heading">{{ $fields['data_pages'] }}.</h2>
    </div>
    @endforeach
    <div class="container panel panel-default">
        <a href="{{back()->getTargetUrl()}}">
            <button class="btn btn-success" id="submit">Назад</button>
        </a>
    </div>
   
    </body>
</html>
