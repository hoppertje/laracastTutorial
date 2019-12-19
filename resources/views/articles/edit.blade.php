@extends('layout')

@section('content')


    <!-- Header -->
    <header class="w3-container w3-green w3-center" style="padding:128px 16px">
        <h1 class="w3-margin w3-jumbo">Edit page</h1>
    </header>


    <div id = "w3-wrapper" >
        <div id = "page" class = "w3-container w3-center">
        <h1>Edit Article</h1>

        <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')

                <div class = "field">
                    <label class="label" for = "title">Title</label>
                    <div class = "control ">
                        <input class ="w3-input w3-border w3-round-large w3-light-grey" type="text" name="title" id = "title" value="{{$article->title}}">
                        @error('title')
                        <p class="w3-text-red">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>

                <div class = "field">
                    <label class="label" for = "excerpt">Excerpt</label>
                    <div class = "control ">
                        <textarea class ="w3-input w3-border w3-round-large w3-light-grey" type="text" name="excerpt" id = "excerpt" >{{$article->excerpt}}</textarea>
                        @error('excerpt')
                        <p class="w3-text-red">{{$errors->first('excerpt')}}</p>
                        @enderror
                    </div>
                </div>

                <div class = "field">
                    <label class="label" for = "excerpt">Body</label>
                    <div class = "control ">
                        <textarea class ="w3-input w3-border w3-round-large w3-light-grey " type="text" name="body" id = "body" >{{$article->body}}</textarea>
                        @error('excerpt')
                        <p class="w3-text-red">{{$errors->first('body')}}</p>
                        @enderror
                    </div>
                </div>

            <div class="">
                <div class="control">
                    <button class="w3-button w3-round">Submit</button>
                </div>
            </div>

        </form>


        </div>
    </div>


@endsection
