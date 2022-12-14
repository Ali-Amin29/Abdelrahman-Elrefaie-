@extends('layout.master')
@section('container.contact')

    <section class="blog-details-area  wow fadeInUp" style="margin-top:100px ;overflow: hidden; ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="blog-details-wrap">
                        <div class="blog-details-content wow fadeInUp" style="text-align: start;">
                            @foreach ($blogs as $blog)
                                <h3>{{ $blog->title }}</h3>
                                <p>{{ $blog->content }}</p>
                                <br>
                                <br>
                                <h3>اضغط من هنا لمشاهده 👇 </h3>
                                <a class="btn btn-success" href={{ $blog->link }}>
                                مصدر الخبر
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp">
                    <aside class="right-sidebar">
                        <div class="related-post mb-30 wow fadeInUp">
                            @foreach ($blogs as $blog)

                            @php
                            $name_img = $blog->img;
                            $name_img_res = Str::between($name_img, ':"', '","');
                            $res_date = Str::between($name_img_res, '\\' , '\\' );
                            $res_name_last = Str::afterLast($name_img_res, '\\');
                             @endphp
                            <img src={{ asset('storage/article/'.$res_date .'/'. $res_name_last) }} alt="ali" />
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- #End blog Us Area  -->
@stop
