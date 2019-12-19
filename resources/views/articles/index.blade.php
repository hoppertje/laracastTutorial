@extends('layout')


@section('content')
    <!-- Header -->
    <header class="w3-container w3-green w3-center" style="padding:128px 16px">
        <h1 class="w3-margin w3-jumbo">Nieuws</h1>
        <p class="w3-xlarge">Famiglia di Bentrotti</p>
    </header>


    <!-- First Grid -->

    @forelse($articles as $article)
            <div class="w3-row-padding w3-padding-32  w3-container">
                <div class="w3-content">
                    <div class="w3-twothird  ">
                        <h1>
                            <a href="/articles/{{$article->id}}">{{$article->title}}</a>
                        </h1>
                        <p class="w3-text-grey">{{$article->excerpt}}</p>
                    </div>

                    <div class="w3-third w3-center w3-card-4">
                        <img class="w3-round  w3-image" src="images/Bentrotfest-foto.png" alt="Bentrotfest">
                    </div>
                </div>
            </div>
            @empty
        <p>No relevant articles yet.</p>
    @endforelse
@endsection
