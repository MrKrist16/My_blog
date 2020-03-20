@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Editing Article</h1>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
            @endif
            <form method="post" action="{{ route('articles.update', $article->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" >
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" name="image" id="image" >
                </div>

                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <input type="text" class="form-control" name="short_description" id="short_description" > 
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" id="description" >
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
        </div>
    </div>
@endsection