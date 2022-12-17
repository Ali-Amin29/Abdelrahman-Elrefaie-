@extends('Dashbord.layout.master')
@section('name')
المقالات 
<i class="fa-solid fa-book-medical"></i>
@endsection
@section('content')


    <form action="{{ route('blog.update',$blog->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
        <div class="form-group">
            <label for="text">العنوان</label>
            <input type="text" class="form-control" id="text" name="title" required value="{{ $blog->title }}">
        </div>


        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example7"> المحتوي</label>
            <textarea class="form-control" id="form6Example7" rows="4" name="content" required>
               {{ $blog->content }}
            </textarea>
        </div>

        <div class="form-group">
            <label for="img">االصوره</label>
            <input type="file" class="form-control" placeholder="Enter photo" 
            onchange="previewImage(event)" name="img"  value="{{ $blog->img }}">
          </div>

          <div class="form-group">
            <label for="link">اللينك</label>
            <input type="text" class="form-control" id="link" name="link" required value="{{ $blog->link }}">
        </div>

          {{-- ------------src-------- --}}
          <img id="preview" src="{{ asset('BLog/'.$blog->img) }}" alt="" width=150px height=150px>
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
@endsection
