@extends('Dashbord.layout.master')
@section('name')
 ادامن الموقع 
<i class="fa-solid fa-user"></i>
@endsection
@section('content')

@if(session()->has('success')) 
 
<div class="alert alert-success">
   {{ session()->get('success') }} </div>
 @endif

<div class="table-responsive">
     <table class="table">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">الاسم</th>
           <th scope="col">الاميل</th>
           <th scope="col">الصوره</th>

           
           <th scope="col">معاينه</th>
           <th scope="col">تعديل</th>
           <th scope="col">حذف</th>
           
         </tr>
       </thead>
       <tbody>
        @foreach ($Users as $user)
          
      
         <tr>
           <th scope="row">{{ $user->id }}</th>
           <td> {{ $user->name }} </td>
           <td> {{ $user->email }} </td>
           
          
           <td><img src="{{ asset('User/'.$user->img) }}"style="width:130px;height:120px;object-fit:containe; "alt="">
          </td>
         
           {{-- ------------------------------SHOW--------------- --}}
           <td>
               <form action="{{ route('user.show',$user->id) }}" method="get">
               <button class="btn btn-warning">معاينه</button>
               </form>
           </td>
                      {{-- ------------------------------UPDATE--------------- --}}

           <td>
               <form action="{{ route('user.edit',$user->id) }}" method="get">
               <button class="btn btn-primary">تعديل</button>
               </form>
           </td>
                      {{-- ------------------------------DELETE--------------- --}}

                      <td>
                         <form action="{{ route('user.destroy',$user->id) }}" method="post">
                          @csrf
                          {{ method_field('DELETE') }}
                         <button class="btn btn-danger">حذف</button>
                         </form>
                     </td>
         
         </tr>
         @endforeach
          
      
       </tbody>
     </table>
     <div class="paginate mt-5 m-auto">
      
 
</div>
   </div>



@endsection