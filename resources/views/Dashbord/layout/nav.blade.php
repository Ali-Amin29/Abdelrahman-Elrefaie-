<li class="nav-item ">
  <a href="{{ URL('admin/') }}" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
       <p>
         الصفحه الرئيسيه
         <i class="right fas fa-angle-left"></i>
       </p>
     </a>

   </li>


   <li class="nav-item ">
    <a href="#" class="nav-link bg-success">
      <i class="fa-solid fa-folder-open"></i>
         <p>
        المقالات
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/blog') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل المقالات </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/blog/create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> اضافه مقال جديد</p>
        </a>
      </li>

    </ul>
  </li>


  <li class="nav-item ">
    <a href="#" class="nav-link bg-info">
      <i class="fa-solid fa-video"></i>
         <p>
الفديوهات
      <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/video') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل الفديوهات </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/video/create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> اضافه فديو جديد</p>
        </a>
      </li>

    </ul>
  </li>

  <li class="nav-item ">
    <a href="#" class="nav-link bg-success">
      <i class="fa-solid fa-user"></i>
         <p>
الاعضاء
      <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/user') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل الاعضاء </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/user/create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> اضافه عضو جديد</p>
        </a>
      </li>

    </ul>
  </li>



  <li class="nav-item ">
    <a href="#" class="nav-link bg-danger">
      <i class="fa-solid fa-user"></i>
         <p>
فريق العمل
      <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/team') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل فريق العمل </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/team/create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> اضافه فريق العمل جديد</p>
        </a>
      </li>

    </ul>
  </li>

  {{--   المقالات  --}}
  <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="fa-solid fa-folder-open"></i>
         <p>
        المقالات
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/blog') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل المقالات </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/blog/create') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> اضافه مقال جديد</p>
        </a>
      </li>
    </ul>
  </li>




  {{--  الشكوي  --}}
     <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="fa-solid fa-folder-open"></i>
         <p>
        الشكوي
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
    <ul class="nav nav-treeview">
      <li class="nav-item">
        <a href="{{ URL('admin/complain') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل الشكوي </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ URL('admin/complain/done') }}" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p> الشكوي التي تم الرد عليها </p>
        </a>
      </li>
    </ul>
  </li>

