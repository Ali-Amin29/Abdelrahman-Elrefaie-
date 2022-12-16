@extends('Dashbord.layout.master')
@section('content')

@if(session()->has('success'))

<div class="alert alert-success">
   {{ session()->get('success') }} </div>
 @endif

<div class="table-responsive">
     <table class="table">
       <thead>
         <tr>

           <th scope="col">العنوان</th>
           <th scope="col">الاسم صاحب الشكوي</th>
           <th scope="col">الايميل صاحب الشكوي</th>
           <th scope="col">المحتوي</th>
           <th scope="col">الرد</th>

         </tr>
       </thead>
       <tbody>
        @foreach ($complain as $complain)
        @if($complain->is_active == true)
         <tr>
           <th scope="row">{{ $complain->subject }}</th>
           <td> {{ $complain->name }} </td>
           <td> {{ $complain->email }} </td>
           <td>
            @php
            echo   $str=substr($complain->description, 0, 200);
            @endphp
           </td>
           <td>
            @php
            echo   $str=substr($complain->response, 0, 200);
            @endphp
           </td>
         </tr>
         @endif
         @endforeach


       </tbody>
     </table>
   </div>



@endsection
