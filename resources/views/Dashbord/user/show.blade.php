@extends('Dashbord.layout.master')
@section('name')
 ادامن الموقع 
<i class="fa-solid fa-user"></i>
@endsection

@section('content')

     <div class="col-sm-12">

العنوان :
<br>
{{ $user->name }}
<hr>
     </div>

     
     <div class="col-lg-12 col-sm-12" >
 الاميل :
<br>
{{ $user->email }}
<hr>
</div>
<div class="col-sm-12">

الصوره :
<br>
<img src="{{ asset('User/'.$user->img) }}" alt="" style="height:250px;width:250px">
<hr>
</div>
<div class="col-sm-12">

البسورد :
<br>
{{ $user->password }}
<hr>
</div>
<div class="col-sm-12">

وقت العرض :
<br>
{{ $user->created_at }}
<hr>
 
</div>
{{-- </div> --}}

@endsection