@extends('layouts.app')
@section('content')
<section class="container">
 <h6>@lang('default.title')</h6>
 @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
<form action="/UploadI" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    Product name:
    <br />
    <input type="text" name="name" />
    <br /><br />
    Product photos (can attach more than one):
    <br />
    <input type="file" name="photos[]" multiple />
    <br /><br />
    <input type="submit" value="Upload" />
</form>
</td>
</tr>

</table>
</section>
@stop





