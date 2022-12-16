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
           <th scope="col">تعديل</th>


         </tr>
       </thead>
       <tbody>
        @foreach ($complains as $complain)
         <tr>
           <th scope="row">{{ $complain->subject }}</th>
           <td> {{ $complain->name }} </td>
           <td> {{ $complain->email }} </td>
           <td>
            @php
            echo   $str=substr($complain->description, 0, 200);
            @endphp
           </td>



                      {{-- ------------------------------UPDATE--------------- --}}
           @if($complain->is_active == false && $complain->reponse == '')
           <td>
               <form action="{{ route('complain.edit',$complain->id) }}" method="get">
               <button class="btn btn-primary">تعديل</button>
               </form>
           </td>
           @else
           <td>
                تم الرد علي الشكوي
           </td>
           @endif

         </tr>
         @endforeach


       </tbody>
     </table>
   </div>



@endsection
