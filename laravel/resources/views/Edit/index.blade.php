@extends('layouts.app')
@section('content')
<section class="container">
 <h6>@lang('default.title')</h6>
<a href="{{url('EditPhoto/create')}}" role="btn"class="btn btn-primary pull-right">新增</a>
<table class="table table-hover">
@foreach($query as $var)
<tr>
<td>{{$var->id}}</td>
<td>{{$var->picName}}</td> 
<td>圖片</td>
<td><a href="{{url('EditPhoto/'.$var->id.'/edit')}}" role="btn"  class="btn btn-warning">編輯</a></td>
<td>
<form action="{{url('EditPhoto/'.$var->id)}}"  method="post">
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <input type="hidden" name="_method" value="delete">
 <input type="submit" role="btn" class="btn btn-danger" value="刪除">   
</form>
</td>
</tr>
@endforeach
</table>
</section>
@stop


