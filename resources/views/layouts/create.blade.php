@extends('layouts.app')

@section('content')
<div class="container">

    @if($flash=session('message'))
   <div class="row"><div class="col-md-5"><div class="alert alert-success">
   {{$flash}}

   </div></div></div>
   @endif
<h3>Dodaj notkę</h3>

<div class="form-group col-md-10">
    <form action="{{route('store')}}" method="post">
        {{csrf_field()}}
        <label for="title">Tytuł</label>
<input type="text" name="title" class="form-control" value="">
<label for="content">Content</label>
<textarea type="text" name="content" class="form-control" style="height:150px"></textarea>
<button class="btn btn-primary up-gap">Zatwierdź</button>
</form>
</div>



</div>
@endsection
