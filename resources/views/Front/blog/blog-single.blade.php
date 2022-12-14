@extends('layout.master')
@section('container.contact')

    <section class="blog-details-area  wow fadeInUp" style="margin-top:100px ;overflow: hidden; ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12">
                    <div class="blog-details-wrap">
                        <div class="blog-details-content wow fadeInUp" style="text-align: start;">
                           
                                <h3>{{ $blog->title }}</h3>
                                <p>{{ $blog->content }}</p>
                                <br>
                                <br>
                                <h3>اضغط من هنا لمشاهده 👇 </h3>
                                <a class="btn btn-success" href={{ $blog->link }}>
                                مصدر الخبر
                                </a>
                         
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 col wow fadeInUp">
                    <aside class="right-sidebar">
                        <div class="related-post mb-30 wow fadeInUp">
                    
                            <img src="{{ asset('BLog/'.$blog->img) }}" alt="ali"  width="250px;height:250px"/>
                          
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- #End blog Us Area  -->
@stop
