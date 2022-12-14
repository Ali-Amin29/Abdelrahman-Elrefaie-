<li class="nav-item menu-open">
     <a href="#" class="nav-link active">
       <i class="nav-icon fas fa-tachometer-alt"></i>
       <p>
         الصفحه الرئيسيه
         <i class="right fas fa-angle-left"></i>
       </p>
     </a>
     <ul class="nav nav-treeview">
       <li class="nav-item">
         <a href="{{ URL('admin/') }}" class="nav-link active">
           <i class="far fa-circle nav-icon"></i>
           <p>الصفحه الرئيسيه</p>
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
        <a href="{{ URL('admin/blog') }}" class="nav-link active">
          <i class="far fa-circle nav-icon"></i>
          <p>  كل الشكوي </p>
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



