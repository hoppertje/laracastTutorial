@extends('/layout')


@section('content')


        <div class="w3-row-padding w3-padding-64 w3-container">
            <div class="w3-content">
                <div class="w3-twothird">
                    <h1>{{$article->title}}</h1>
                    <h5>{{$article->excerpt}}</h5>
                    <p class="w3-text-grey">{{$article->body}}</p>

                    <p>
                        @foreach($article->tags as $tag)
                            <a href="/articles?tag={{$tag->name}}"> {{$tag->name}}</a>
                        @endforeach
                    </p>

                        <a class= "w3-center" href="/articles/{{$article->id}}/edit" >
                            <div class="w3-round-large w3-button w3-btn w3-green w3-block"  style="width:33.3%" >
                                Edit
                            </div>
                        </a>

                </div>

                <div class="w3-third w3-center">
                    <img src="/images/Bentrotfest-foto.png" alt="Bentrotfest">
                </div>


            </div>


        </div>

@endsection
