@extends('Dashbord.layout.master')
@section('name')
 ادامن الموقع 
<i class="fa-solid fa-user"></i>
@endsection
@section('content')

@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
<style>
  input:valid
  {
    border:2px solid green;
  } 
 
</style>

    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
            <label for="name">الاسم</label>
            <input type="text" class="form-control" id="name" name="name" required {{ old('name') }}
            >
        </div>

        <div class="form-group">
          <label for="email">الاميل</label>
          <input type="email" class="form-control" id="email" name="email" required>
      </div>

      <div class="form-group">
        <label for="password">كلمه السر</label>
        <input type="password" class="form-control" id="password" name="password" minlength="8" required>
    </div>

    <div class="form-group">
      <label for="password_confirmation">كلمه المرور</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
  </div>

        <div class="form-group">
            <label for="img">االصوره</label>
            <input type="file" class="form-control" placeholder="Enter photo" 
            onchange="previewImage(event)" name="img" required>
          </div>

       
          {{-- ------------src-------- --}}
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

        
    function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>
 
@endsection
