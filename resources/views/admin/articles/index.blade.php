@extends('admin.app')

@section('content')
  <div class="row">
  <div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif
  </div>
  <div class="col-sm-12">
      <h1 class="display-3">Articles</h1>    
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>TITLE</td>
            <td>PATH TO IMAGE</td>
            <td>VIEWS</td>
            <td>LIKES</td>
            <td>COMENTS</td>
            <td>DATE</td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
      </thead>
      <tbody>
          @foreach($articles as $article)
          <tr>
              <td>{{$article->id}}</td>
              <td>{{$article->title}}</td>
              <td>{{$article->image}}</td>
              <td>{{$article->views}}</td>
              <td>{{$article->likes}}</td>
              <td>{{$article->coments}}</td>
              <td>{{$article->updated_at}}</td>
              <td>
                  <a href="{{ route('articles.edit', $article->id)}}" class="btn btn-primary">Edit</a>
              </td>
              <td>
                <a href="{{ route('articles.show', $article->id)}}" class="btn btn-primary">Show</a>
              </td>
              <td>
                  <form action="{{ route('articles.destroy', $article->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
  <div>
  </div>
@endsection