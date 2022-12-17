@extends('Dashbord.layout.master')
@section('name')
فريق العمل 
<i class="fa-solid fa-users"></i>
@endsection

@section('content')
   

    <div class="col-sm-12">

        الاسم :
        <br>
        {{ $team->name }}
        <hr>
    </div>


    <div class="col-lg-12 col-sm-12">
        الميلاد :
        <br>
        {{ $team->birth }}
        <hr>
    </div>
    <div class="col-sm-12">

        الصوره :
        <br>
        <img src="{{ asset('Team/' . $team->img) }}" alt="" style="height:250px;width:250px">
        <hr>
    </div>
    <div class="col-sm-12">

        الدرجات العلميه :
        <br>
        {{ $team->work_qualifications }}
        <hr>
    </div>
    <div class="col-sm-12">

        الدورات التدربيه :
        <br>
        {{ $team->training_courses ?? 'لم يتم التسجيل حتي الان' }}
        <hr>
    </div>
    <div class="col-sm-12">

        الخبرات :
        <br>
        {{ $team->experience ?? 'لم يتم التسجيل حتي الان'}}
        <hr>
    </div>
    <div class="col-sm-12">

        المولفات :
        <br>
        {{ $team->literature  ?? 'لم يتم التسجيل حتي الان'}}
        <hr>
    </div>
    <div class="col-sm-12">

        وقت التسجيل :
        <br>
        {{ $team->created_at }}
        <hr>

    </div>
    {{-- </div> --}}
@endsection
