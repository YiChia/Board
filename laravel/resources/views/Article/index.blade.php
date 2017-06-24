@extends('layouts.app')
@section('content')
<section class="container">
<h3>目前忙線中，有事請留言 </h3>
<table class="table table-hover">
<tr>
<th>編號</th>
<th>留言者</th>
<th>內容</th>
<th>留言時間</th>
<th></th>
<th></th>


</tr>
@foreach($query as $var)
<tr>
<td>{{$var->id}}</td>
<td>{{$var->title}}</td>
<td>{{$var->content}}</td>
<td>{{$var->created_at}}</td>
<td><a href="{{url('Article/'.$var->id.'/edit')}}" role="btn"  class="btn btn-warning">編輯</a></td>
<td>
<form action="{{url('Article/'.$var->id)}}"  method="post">
 <input type="hidden" name="_token" value="{{csrf_token()}}">
 <input type="hidden" name="_method" value="delete">
 <input type="submit" role="btn" class="btn btn-danger" value="刪除">   
</form>
</td>
</tr>
@endforeach
</table>
</section>
<hr>

<center>
<div class="row"> <div class="col-xs-pull-4" > <form action="{{url('Article')}}" 
method="post"> <input type="hidden" name="_token" 
value="{{csrf_token()}}"> <lable>你是: </lable> <input type="text" 
name="title" value="訪客 "> <lable>請留言 </lable> <input type="text" 
name="content" value="" placeholder="至多20字" > <input type="submit" role="btn" 
value="送出" class="btn btn-primary"> </from>

@if(count($errors)>0)
    @foreach($errors->all() as $error)
     <li >{{ $error }}</li>
    @endforeach
   </ul>
@endif
</div>
</div>
</center>
@stop


