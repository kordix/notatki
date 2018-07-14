@extends('layouts.app')

@section('content')
<div class="container">

    @if($flash=session('message'))
   <div class="row"><div class="col-md-5"><div class="alert alert-success">
   {{$flash}}
@endif

@foreach($notes as $note)
<div class="col-md-10">
    <div class="panel panel-primary">
        <div class="panel-heading">{{$note->title}}
            <a href="{{route('edit', $note->id)}}"><button class="btn-sm btn-default" style="float:right; margin-right:10px; margin-bottom:5px">Edytuj</button></a>
            <a href="{{route('delete', $note->id)}})"><button class="btn-sm btn-default" style="float:right; margin-right:10px; margin-bottom:5px">Usuń</button></a>
        </div>
        <div class="panel-body">{!! nl2br($note->content) !!}</div>
    </div>
</div>


@endforeach


</div>
@endsection
