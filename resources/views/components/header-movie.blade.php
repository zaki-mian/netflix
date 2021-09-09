<!-- Header movie -->
<div class="container-fluid">
    <div class="row p-5">
        <div class="col-12 col-md-6">
            <h1>{{$movie_title}}</h1>
            <p class="movie-description">{{$movie_description}}</p>
            <p><strong>Genres: </strong>{{$movie_genres}}</p>
            <p><strong>Tags: </strong>{{$movie_tags}}</p>
            <p><strong>Cast: </strong>{{$movie_cast}}</p>
            <p><strong>Year: </strong>{{$movie_year}}</p>

            {{$headermovie_calltoaction ?? ""}}
        </div>
        <div class="col-12 col-md-6 d-flex align-item-center justify-content-center">
            <img src="http://image.tmdb.org/t/p/w500/9FBwqcd9IRruEDUrTdcaafOMKUq.jpg" alt="movie poster" class="img-fluid">
        </div>
    </div>
</div>