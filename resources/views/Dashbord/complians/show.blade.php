@extends('Dashbord.layout.master')

@section('content')

     <div class="col-sm-12">

العنوان :
<br>
{{ $blog->title }}
<hr>
     </div>

     
     <div class="col-lg-12 col-sm-12" >
 المحتوي :
<br>
{{ $blog->content }}
<hr>
</div>
<div class="col-sm-12">

الصوره :
<br>
<img src="{{ asset('BLog/'.$blog->img) }}" alt="" style="height:250px;width:250px">
<hr>
</div>
<div class="col-sm-12">

اللينك :
<br>
{{ $blog->link }}
<hr>
</div>
<div class="col-sm-12">

وقت العرض :
<br>
{{ $blog->created_at }}
<hr>
 
</div>
{{-- </div> --}}

@endsection