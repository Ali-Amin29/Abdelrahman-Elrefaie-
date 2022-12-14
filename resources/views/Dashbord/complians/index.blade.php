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
           <th scope="col">#</th>
           <th scope="col">العنوان</th>
           <th scope="col">المحتوي</th>
           <th scope="col">الصوره</th>

           
           <th scope="col">معاينه</th>
           <th scope="col">تعديل</th>
           <th scope="col">حذف</th>
           
         </tr>
       </thead>
       <tbody>
        @foreach ($blogs as $blog)
          
      
         <tr>
           <th scope="row">{{ $blog->id }}</th>
           <td> {{ $blog->title }} </td>
           <td>  @php
            echo   $str=substr($blog->content, 0, 200);

@endphp
          </td>
           <td><img src="{{ asset('BLog/'.$blog->img) }}"style="width:130px;height:120px;object-fit:containe; "alt="">
          </td>
         
           {{-- ------------------------------SHOW--------------- --}}
           <td>
               <form action="{{ route('blog.show',$blog->id) }}" method="get">
               <button class="btn btn-warning">معاينه</button>
               </form>
           </td>
                      {{-- ------------------------------UPDATE--------------- --}}

           <td>
               <form action="{{ route('blog.edit',$blog->id) }}" method="get">
               <button class="btn btn-primary">تعديل</button>
               </form>
           </td>
                      {{-- ------------------------------DELETE--------------- --}}

                      <td>
                         <form action="{{ route('blog.destroy',$blog->id) }}" method="post">
                          @csrf
                          {{ method_field('DELETE') }}
                         <button class="btn btn-danger">حذف</button>
                         </form>
                     </td>
         
         </tr>
         @endforeach
          
      
       </tbody>
     </table>
   </div>



@endsection