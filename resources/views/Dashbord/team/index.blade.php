@extends('Dashbord.layout.master')
@section('name')
فريق العمل 
<i class="fa-solid fa-users"></i>
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
           <th scope="col">النوع</th>
           <th scope="col">الميلاد</th>
           <th scope="col">الصوره</th>

           
           <th scope="col">معاينه</th>
           <th scope="col">تعديل</th>
           <th scope="col">حذف</th>
           
         </tr>
       </thead>
       <tbody>
        @foreach ($teams as $team)
          
      
         <tr>
           <th scope="row">{{ $team->id }}</th>
           <td> {{ $team->title }} </td>
          <td>{{ $team->title }}</td>
          <td>{{ $team->birth }}</td>
           <td><img src="{{ asset('Team/'.$team->img) }}"style="width:130px;height:120px;object-fit:containe; "alt="">
          </td>
         
           {{-- ------------------------------SHOW--------------- --}}
           <td>
               <form action="{{ route('team.show',$team->id) }}" method="get">
               <button class="btn btn-warning">معاينه</button>
               </form>
           </td>
                      {{-- ------------------------------UPDATE--------------- --}}

           <td>
               <form action="{{ route('team.edit',$team->id) }}" method="get">
               <button class="btn btn-primary">تعديل</button>
               </form>
           </td>
                      {{-- ------------------------------DELETE--------------- --}}

                      <td>
                         <form action="{{ route('team.destroy',$team->id) }}" method="post">
                          @csrf
                          {{ method_field('DELETE') }}
                         <button class="btn btn-danger">حذف</button>
                         </form>
                     </td>
                
         </tr>
         <div class="paginate mt-5 m-auto">
     
    </div>
         @endforeach
          
      
       </tbody>
     </table>

   </div>



@endsection