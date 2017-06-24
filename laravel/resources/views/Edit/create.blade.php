
@extends('layouts.app')
@section('content')
<section class="container">

<form action="{{url('EditPhoto')}}"method="post" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}"> 
<label for="">圖片名稱
<input type="text" name="picName" value="">
</label>
<label for="">hashtag
<input type="text" name="hashtag" value="">
</label>
<input type="submit" name="" value="送出" class="btn btn-primary">    
</form>
</section>
@stop

{{var_dump($errors)}}


