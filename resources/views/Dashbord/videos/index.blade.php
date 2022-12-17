@extends('Dashbord.layout.master')
@section('name')
  الفديوهات  
<i class="fa-solid fa-video"></i>
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
           <th scope="col">العنوان</th>
            <th scope="col">الصوره</th>
           <th scope="col">معاينه</th>
           <th scope="col">تعديل</th>
           <th scope="col">حذف</th>
           
         </tr>
       </thead>
       <tbody>
        @foreach ($videos as $video )
          
    
         <tr>
           <th scope="row">{{$video->id  }}</th>
           <td> {{$video->title}} </td>
            
           <td><img src="{{ asset('videos/'.$video->img) }}"        style="width:150px;height:100px"alt="">
          </td>
         
           {{-- ------------------------------SHOW--------------- --}}
           <td>
               <form action="{{ route('video.show',$video->id) }}" method="get">
               <button class="btn btn-warning">عرض</button>
               </form>
           </td>
                      {{-- ------------------------------UPDATE--------------- --}}

           <td>
            <form action="{{ route('video.edit',$video->id) }}" method="get">
              <button class="btn btn-primary">تعديل</button>
               </form>
           </td>
                      {{-- ------------------------------DELETE--------------- --}}

                      <td>
                         <form action="{{ route('video.destroy',$video->id) }}" method="post">
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