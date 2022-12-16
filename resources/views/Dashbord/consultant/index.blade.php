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

           <th scope="col">رقم الدفع</th>
           <th scope="col">الاسم</th>
           <th scope="col">الايميل</th>
           <th scope="col">السعر</th>
           <th scope="col">نوع الاستشارة</th>


         </tr>
       </thead>
       <tbody>
        @foreach ($constultant as $constultant)
         <tr>
           <th scope="row">{{ $constultant->id }}</th>
           <td> {{ $constultant->name }} </td>
           <td> {{ $constultant->email }} </td>
           <td> {{ $constultant->price }} </td>
           <td> @if($constultant->typeOfConstultant == 'fast')
             'استشارة سريعة'
            @elseif ($constultant->typeOfConstultant == 'phone')
             'استشارة بالهاتف'
            @elseif ($constultant->typeOfConstultant == 'email')
             'استشارة بالايميل'
           @endif </td>




                      {{-- ------------------------------UPDATE--------------- --}}
           {{--  @if($constultant->is_active == false && $constultant->reponse == '')
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
           --}}
        </tr>
           @endforeach


       </tbody>
     </table>
   </div>



@endsection
