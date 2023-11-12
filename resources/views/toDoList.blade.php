{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDo</title>

    </head>
    <body class="antialiased ">
        <div class="justify-center items-center min-h-screen">
            <h1>ToDo list</h1>
        </div>
    </body>
</html> --}}

<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="h-screen w-screen flex flex-col justify-center items-center">
    <div id="app" class="border-2 shadow-xl p-8 rounded-xl w-9/12">
        <h1 class="text-xl font-bold underline mb-12">
            To Do List
        </h1>
        @php
            $todos = ["hello", "world"];
            $completed = ["hello"];
        @endphp
        @if(count($todos)>= 1)
            <div>
                <h1>to be done</h1>
                @foreach ($todos as $todo)
                    <h1>{{$todo}}</h1>
                @endforeach
            </div>
        @endif
        @if(count($completed)>=1)
            
            <div>
                <h1>completed</h1>
                @foreach ($completed as $complete)
                    <h1>{{$complete}}</h1>
                @endforeach
            </div>
        @endif
    </div>
  
</body>
</html>