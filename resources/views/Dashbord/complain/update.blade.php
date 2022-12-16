@extends('Dashbord.layout.master')
@section('content')
    <form action="{{ route('complain.update',$complain->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
        <div class="form-group">
            <label for="text">العنوان</label>
            <input type="text" class="form-control" id="text" name="title" disabled required value="{{ $complain->subject }}">
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example7"> المحتوي</label>
            <textarea class="form-control" id="form6Example7" rows="4" disabled name="content" required>
               {{ $complain->description }}
            </textarea>
        </div>
        <div class="form-outline mb-4">
            <label class="form-label" for="form6Example7"> الرد</label>
            <textarea class="form-control" id="form6Example8" rows="4" name="response" required>
            </textarea>
        </div>

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
