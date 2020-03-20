@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Upload music</h1>
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
            <form method="post" action="{{ route('music.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name of song</label>
                    <input type="text" class="form-control" name="name" id="name" >
                </div>

                <div class="form-group">
                    <label for="name">Music</label>
                    <input type="file" class="form-control-file" name="music" id="music" >
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
        </div>
    </div>
@endsection