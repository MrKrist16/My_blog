@extends('admin.app')

@section('content')
  <div class="row">
  <div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div>
    @endif

    @if(session()->get('failure'))
      <div class="alert alert-danger">
        {{ session()->get('failure') }}  
      </div>
    @endif
  </div>
  <div class="col-sm-12">
      <h1 class="display-3">Music</h1>    
    <table class="table table-striped">
      <thead>
          <tr>
            <td>ID</td>
            <td>NAME</td>
            <td></td>
          </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>
                  <form action="{{ route('user.destroy', $user->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </tbody>
    </table>
    <div style="display:flex;justify-content:center;">{{ $images->links() }}</div>
  <div>
  </div>
@endsection