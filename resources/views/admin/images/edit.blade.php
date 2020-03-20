@extends('admin.app')

@section('content')
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Editing Image</h1>
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
            <form method="post" action="{{ route('images.update', $images->id) }}" enctype="multipart/form-data">
                @method('PATCH')
                {{ csrf_field() }}

                <div class="form-group">
                    <input type="file" name="image">     
                </div>

                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
        </div>
    </div>
@endsection