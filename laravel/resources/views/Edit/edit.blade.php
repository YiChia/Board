
@extends('layouts.app')
@section('content')
<section class="container">

<form action="{{url('EditPhoto/'.$query->id)}}" method="post" enctype="multipart/form-data" >
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input type="hidden" name="_method" value="PUT">
<input type="text" name="picName" value="{{$query->picName}}">
<input type="text" name="hashtag" value="{{$query->hashtag}}">
<img src="" alt="">
<input type="submit" name="" value="送出" class="btn btn-primary">    
</form>
</section>
@stop

{{var_dump($errors)}}


