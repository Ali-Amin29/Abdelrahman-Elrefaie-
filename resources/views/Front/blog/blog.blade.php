@extends('layout.master')
@section('container.blog')

    <style>
        svg {}

        .paginate {

            margin-right: 543px;
        }
    </style>


    <!-- Blog Start -->
    <div class="blog blog-page mt-125">

        <div class="container mb-5">
            <div>
                <p style="display:hidden">aligamalali</p>
            </div>
            <div class="section-header mt-5">
                <h2>الأخبار والمقالات</h2>
            </div>
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-sm-6 col-xs-12 col">
                        <div class="blog-wrap mb-30">
                            <div class="blog-img">
                                 {{-- @php
                                    $name_img = $blog->img;
                                    $name_img_res = Str::between($name_img, ':"', '","');
                                    $res_date = Str::between($name_img_res, '\\' , '\\' );
                                    $res_name_last = Str::afterLast($name_img_res, '\\');
                                @endphp --}}
                                <img src="{{ asset('BLog/'.$blog->img) }}" alt="ali" />
                            </div>
                            <div class="blog-content wow fadeInUp">

                                <h3>
                                    <a href="">
                                    @php
                                  echo  $str=substr($blog->content, 0, 200);
                                    @endphp
                                    {{ $str."......"}}
                                    </a>
                                </h3>
                                <form action="{{ route('show_blog',$blog->id) }}" method="get">
                                    <button class="btn btn-default btn_font_16" type="submit">المزيد</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            <div class="paginate mt-5 mx-auto">
                {{ $blog->link }}
            </div>
            <div class="blog">
                <div class="container ">
                    <div class="section-header">
                        <h2>المركز الإعلامي</h2>
                    </div>

                    <div class="owl-carousel blog-carousel">
                        @foreach ($videos as $video)
                            <div class="blog-item blog-wrap m-3">
                                <button type="button" class="video-btn" data-toggle="modal" data-src="{{ $video->linke }}"
                                    data-target="#myModal">
                                    <div class="blog-img">
                                        <img src="https://i3.ytimg.com/vi/lQKi1Z4kyGA/hqdefault.jpg" alt="Blog">
                                </button>
                                <div class="blog-content">
                                    <h2 class="blog-title">{{ $video->title }}</h2>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">

                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <!-- 16:9 aspect ratio -->
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="" id="video"
                                            allowscriptaccess="always" allow="autoplay"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Blog End -->
    @stop
