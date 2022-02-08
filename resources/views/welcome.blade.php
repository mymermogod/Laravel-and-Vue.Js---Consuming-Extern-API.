<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>

    <body>

        <header>
            <form  id="form" action="/search" method="GET" >
                <input type="text" name="search"  placeholder="Search" id="search" class="search">
            </form>
        </header>

        <div id="app">
            <example-component></example-component>
        </div>


    <div id="tags">
            @foreach ($showgenres as $genre)

            <div class=tag onclick="window.location='/genres/{{$genre['id']}}'" name="genretag">
                {{$genre['name']}}
            </div>

            @endforeach
    </div>

     <div>
     @foreach ($movies as $movie)
            <img src ="https://image.tmdb.org/t/p/w500{{$movie['poster_path']}}">
            <div class="movie-info">
                <h3>{{$movie['title']}}</h3>
                <span class="green">{{$movie['vote_average']}}</span>
            </div>
            <div class="overview">
                <h3>Overview</h3>
                {{$movie['overview']}}
                <br/>
                <button class="know-more" id="{{$movie['id']}}">Know More</button>
            </div>
        </div>
        @endforeach
    </div>
        <script src="{{asset('js/app.js')}}"></script>

        <div class="pagination">
            <div class="page" id="prev">Previous Page</div>
            <div class="current" id="current">1</div>
            <div class="page" id="next">Next Page</div>
    </body>
</html>
