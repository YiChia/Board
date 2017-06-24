
@extends('layouts.app')
@section('content')
<section class="container">

 @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

<form action="{{url('Article')}}"method="post">
 <!--{{ csrf_field() }} -->
<input type="hidden" name="_token" value="{{csrf_token()}}"> 
<input type="text" name="title" value="">
<input type="file" id="pic" name="pic" placeholder="上傳圖片" value="">
<textarea name="content"id="" rows="10" cols="30" class="form-control"></textarea>
<input type="submit" name="" value="送出" class="btn btn-primary">    
</form>
</section>
@stop

{{var_dump($errors)}}


