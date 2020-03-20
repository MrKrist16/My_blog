@extends('admin.app')

@section('content')
    <div class="my_row_articles_show">
        <div class="my_text_for_title_article">{{$article->title}}</div>
        <div>
            <img class="my_photo_for_article" src="{{asset("storage/$article->image")}}">
        </div>
        <div class="my_short_description">{{$article->short_description}}</div>
        <div class="my_description">{{$article->description}}</div>
    </div>
@endsection