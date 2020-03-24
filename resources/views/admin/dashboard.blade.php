@extends('admin.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <div class="jumbotron my_jumbotron_dashboard">
                    <div class="row my_row_dashboard">
                        <a href="articles" class="my_link_dashboard btn btn-info">Articles</a>
                        <p class="my_text_dashboard">{{$articles}}</p>
                    </div>
                    <a class="my_link_dashboard btn btn-info" href="articles/create">Create article</a>
                </div>
            </div>

            <div class="col-sm">
                <div class="jumbotron my_jumbotron_dashboard">
                    <div class="row my_row_dashboard">
                        <a href="images" class="my_link_dashboard btn btn-info">Images</a>
                        <p class="my_text_dashboard">{{$images}}</p>
                    </div>
                    <a class="my_link_dashboard btn btn-info" href="images/create">Upload image</a>
                </div>
            </div>
            
            <div class="col-sm">
                <div class="jumbotron my_jumbotron_dashboard">
                    <div class="row my_row_dashboard">
                        <a href="music" class="my_link_dashboard btn btn-info">Music</a>
                        <p class="my_text_dashboard">{{$music}}</p>
                    </div>
                    <a class="my_link_dashboard btn btn-info" href="music/create">Upload music</a>
                </div>
            </div>
            
            <div class="col-sm">
                <div class="jumbotron my_jumbotron_dashboard users_jumbotron_dashboard">
                    <div class="row">
                        <a class="my_link_dashboard btn btn-info" href="users">Users</a>
                        <p class="my_text_dashboard">{{$users}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection