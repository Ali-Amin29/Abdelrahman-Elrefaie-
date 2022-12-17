@include('include.barIcon')
<!-- Nav Bar Start -->
<div class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto size-edit">
                <a href={{ URL::route('index') }} class="nav-item nav-link">الرئيسية</a>
                <a href={{ URL::route('about') }} class="nav-item nav-link">نبذة عن المكتب</a>
                {{--  <a href={{ URL::route('service') }} class="nav-item nav-link">خدمتنا</a>  --}}
                <a href={{ URL::route('blogs') }} class="nav-item nav-link">المدونة</a>
                <a href={{ URL::route('contact') }} class="nav-item nav-link">الاستشارات</a>
            </div>
        </div>
            <a href={{ URL::route('index') }} class="navbar-brand">
                <img src={{ asset('img/logo.png') }} alt="الرفاعي "/>
            </a>
    </div>
</div>
<!-- Nav Bar End -->
