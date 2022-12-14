@include('include.head')

<body class="page">
    @include('include.navbar')

    @yield('container.about')
    @yield('container.advisor')
    @yield('container.blog')
    @yield('container.contact')
    @yield('container.feature')
    @yield('container.index')
    @yield('container.review')
    @yield('container.service')
    @yield('container.single')


    @include('include.footer')
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    @include('include.script')
</body>

</html>
