@extends('Dashbord.layout.master')
@section('content')


<form action="/action_page.php">
     <div class="form-group">
       <label for="email">:</label>العنوان
       <input type="email" class="form-control" id="email">
     </div>
     <div class="form-group">
       <label for="pwd">الاميل:</label>
       <input type="password" class="form-control" id="pwd">
     </div>

     <div class="form-outline mb-4">
          <label class="form-label" for="form6Example7"> information</label>

          <textarea class="form-control" id="form6Example7" rows="4"></textarea>
        </div>
    
     <button type="submit" class="btn btn-default">Submit</button>

   </form>














   
    
    
  

  <script>
     ClassicEditor
         .create( document.querySelector( '#editor' ) )
         .catch( error => {
             console.error( error );
         } );
 </script>
 
@endsection