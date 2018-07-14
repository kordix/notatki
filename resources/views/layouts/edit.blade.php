@extends('layouts.app')

@section('content')
<div class="container">

    @if($flash=session('message'))
   <div class="row"><div class="col-md-5"><div class="alert alert-success">
   {{$flash}}

   </div></div></div>
   @endif

<div class="form-group col-md-10">
    <form action="{{route('update', $note->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        {{method_field('PUT')}}
        <label for="title">Tytuł</label>
<input type="text" name="title" class="form-control" value="{{$note->title}}">
<label for="content">Content</label>
<textarea type="text" name="content" class="form-control" style="height:150px">{{$note->content}}</textarea>
<button class="btn btn-primary up-gap">Zatwierdź</button>
</form>
</div>



</div>
@endsection
