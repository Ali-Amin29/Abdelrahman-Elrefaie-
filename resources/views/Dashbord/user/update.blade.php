@extends('Dashbord.layout.master')
@section('name')
 ادامن الموقع 
<i class="fa-solid fa-user"></i>
@endsection
@section('content')


    <form action="{{ route('user.update',$User->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
        <div class="form-group">
            <label for="text">العنوان</label>
            <input type="text" class="form-control" id="text" name="name" required value="{{ $User->name }}">
        </div>

        <div class="form-group">
          <label for="email">العنوان</label>
          <input type="email" class="form-control" id="email" name="email" required value="{{ $User->email }}">
      </div>

      <div class="form-group">
          <label for="password">العنوان</label>
          <input type="password" class="form-control" id="password" name="password" required value="{{ $User->password }}">
      </div>
    

        <div class="form-group">
            <label for="img">االصوره</label>
            <input type="file" class="form-control" placeholder="Enter photo" 
            onchange="previewImage(event)" name="img"  value="{{ $User->img }}">
          </div>

          

          {{-- ------------src-------- --}}
          <img id="preview" src="{{ asset('User/'.$User->img) }}" alt="" width=150px height=150px>
<br><br>
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
@endsection
