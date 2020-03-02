@extends('admin.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm">
            <div class="jumbotron my_jumbotron">
                <div class="row my_row">
                    <a href="#" class="my_link btn btn-info">Articles</a>
                    <p class="my_text">{{$articles}}</p>
                </div>
                <a class="my_link btn btn-info" href="#">Create article</a>
            </div>
        </div>

        <div class="col-sm">
            <div class="jumbotron my_jumbotron">
                <div class="row my_row">
                    <a href="#" class="my_link btn btn-info">Images</a>
                    <p class="my_text">{{$images}}</p>
                </div>
                <a class="my_link btn btn-info" href="#">Upload image</a>
            </div>
        </div>
        
        <div class="col-sm">
            <div class="jumbotron my_jumbotron">
                <div class="row my_row">
                    <a href="#" class="my_link btn btn-info">Music</a>
                    <p class="my_text">{{$music}}</p>
                </div>
                <a class="my_link btn btn-info" href="#">Upload music</a>
            </div>
        </div>
        
        <div class="col-sm">
            <div class="jumbotron my_jumbotron users_jumbotron">
                <div class="row">
                    <a class="my_link btn btn-info" href="#">Users</a>
                    <p class="my_text">{{$users}}</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection