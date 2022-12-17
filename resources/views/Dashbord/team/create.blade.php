@extends('Dashbord.layout.master')
@section('name')
فريق العمل 
<i class="fa-solid fa-users"></i>
@endsection
@section('content')

 

<form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
  @csrf
     <div class="form-group">
       <label for="name">:</label>الاسم
       <input type="text" class="form-control" id="name" name="name" required>
     </div>
     <div class="form-group">
       <label for="birth">الميلاد:</label>
       <input type="text" class="form-control" id="birth" name="birth" required>
     </div>
     <div class="form-group">
      <label for="title">نوع المحامي:</label>
      <input type="text" class="form-control" id="title" name="title" required>
    </div>


     <div class="form-outline mb-4">
          <label class="form-label" for="training_courses"> الموهلات العلميه
          </label>
          <textarea class="form-control" id="training_courses" name="work_qualifications" required >


          </textarea>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="experience"> الدورات التدربيه
          </label>
          <textarea class="form-control" id="experience" name="training_courses"></textarea>
        </div>

        <div class="form-outline mb-4">
          <label class="form-label" for="literature"> الخبرات</label>
          <textarea class="form-control" id="literature" name="experience"></textarea>
        </div>
        <div class="form-outline mb-4">
          <label class="form-label" for="literature"> المولفات</label>
          <textarea class="form-control" id="literature" name="literature"></textarea>
        </div>

        <div class="form-group">
          <label for="img">االصوره</label>
          <input type="file" class="form-control" placeholder="Enter photo" 
          onchange="previewImage(event)" name="img" required>
        </div>

        <img id="preview" alt="" width=150px height=150px style="display: none">
        <br>
                <button style="display: block;width:100%" type="submit" class="btn btn-success">Submit</button>
   </form>


   <script>
   const previewImage = e => {
          const preview = document.getElementById('preview');
          preview.src = URL.createObjectURL(e.target.files[0]);
          preview.onload = () => URL.revokeObjectURL(preview.src);
          const img=document.getElementById('preview');
          img.style.display='block';
      };
  </script>











   
    
    
  

  <script>
     ClassicEditor
         .create( document.querySelector( '#editor' ) )
         .catch( error => {
             console.error( error );
         } );
 </script>
 
@endsection