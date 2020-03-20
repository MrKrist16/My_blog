@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Uploading Image</h1>
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
            <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="file" name="image">     
                </div>

                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
        </div>
    </div>
@endsection