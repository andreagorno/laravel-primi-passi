<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            div {
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
            h1 {
                font-size: 60px;
                color: red;
                margin-bottom: 0;
            }
            h2 {
                font-size: 32px;
                color: black;
            }

            ul {
                list-style: none;
                padding: 0;
                display: flex;
            }
            li {
                
                margin: 10px;
            }

            
        </style>
    </head>
    <body>
        <div>
            <h1>
                MyLaravel
            </h1>
            <h2>
                by Andrea
            </h2>
            <h3>
                Le mie competenze attuali:
            </h3>
            
                @if (count($skills) == 0)
                    <h4>Non so fare nulla!</h4>
                @elseif (count($skills) == 1)
                    <h4>Conosco solo {{ $skills[0] }}</h4>
                @else 
                    <ul>
                        @foreach ($skills as $skill)
                            <li>{{ $skill }}</li>
                        @endforeach
                    </ul>
                @endif
            
        </div>
    </body>
</html>
