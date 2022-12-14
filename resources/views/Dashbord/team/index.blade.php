@extends('Dashbord.layout.master')
@section('content')

<div class="table-responsive">
     <table class="table">
       <thead>
         <tr>
           <th scope="col">#</th>
           <th scope="col">العضو</th>
           <th scope="col">المؤهل</th>
           <th scope="col">الصوره</th>


           <th scope="col">معاينه</th>
           <th scope="col">تعديل</th>
           <th scope="col">حذف</th>

         </tr>
       </thead>
       <tbody>
         <tr>
           <th scope="row">1</th>
           <td>حسن</td>
           <td>نقاش خبير</td>
           <td><img src="{{ asset('Dashbord/dist/img/user2-160x160.jpg') }}"        style="width:100%;height:100px"alt="">
          </td>

           {{-- ------------------------------SHOW--------------- --}}
           <td>
               <form action="{{ route('blog.index') }}" method="get">
               <button class="btn btn-warning">عرض</button>
               </form>
           </td>
                      {{-- ------------------------------UPDATE--------------- --}}

           <td>
               <form action="{{ route('blog.index') }}" method="get">
               <button class="btn btn-primary">عرض</button>
               </form>
           </td>
                      {{-- ------------------------------DELETE--------------- --}}

                      <td>
                         <form action="{{ route('blog.index') }}" method="get">
                         <button class="btn btn-danger">عرض</button>
                         </form>
                     </td>

         </tr>


       </tbody>
     </table>
   </div>



@endsection
