
@extends('layouts.app')
@section('content')
<section class="container">

<form action="{{url('Article/'.$query->id)}}"method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="_method" value="PUT">
<input type="text" name="title" value="{{$query->title}}">
<textarea name="content"id="" rows="10" cols="30" class="form-control"> {{$query->content}}</textarea>
<input type="submit" name="" value="送出" class="btn btn-primary">    
</form>
</section>
@stop

{{var_dump($errors)}}


