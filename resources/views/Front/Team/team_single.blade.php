@extends('layout.master')
@section('container.contact')


    <div class="mt-125">
        <div class="container">
            <aside class="right-sidebar">
                <div class="related-post mb-30 wow fadeInUp">
                    @foreach ($teams as $teams)
                        @php
                            $name_img = $teams->img;
                            $name_img_res = Str::between($name_img, ':"', '","');
                            $res_date = Str::between($name_img_res, '\\' . '\\', '\\' . '\\');
                            $res_name_last = Str::afterLast($name_img_res, '\\');
                        @endphp
                        <div class="row">
                            <div class="col-md-5  w-50 wow fadeInUp">
                                <img class="w-100" src={{ asset('storage/teams/' . $res_date . '/' . $res_name_last) }}
                                    alt="ali" />
                            </div>
                            <div class="col-md-7  w-50 position-relative">
                                <div class="position-absolute mt-4" style="text-align: start">
                                    <h1>{{ $teams->name }}</h1>
                                    <h4>{{ $teams->title }}</h4>
                                </div>
                            </div>
                        </div>
                        @php
                        $res_Work_qualifications= preg_split("/[.]/",$teams->Work_qualifications);
                        $res_training_courses= preg_split("/[.]/",$teams->training_courses);
                        $res_experience= preg_split("/[.]/",$teams->experience);
                        $res_literature= preg_split("/[.]/",$teams->literature);
                        @endphp
                        <div class="m-5" style="text-align: start">
                            @if(count($res_Work_qualifications)>1)
                            <p style="font-size: large">
                                <h2>المؤهلات العلمية :</h2>
                                <ul>
                                @foreach ($res_Work_qualifications as $value )
                                    @if(count($res_Work_qualifications)>$loop->iteration)
                                    <li>{{ $value}}</li>
                                    @endif
                                @endforeach
                                </ul>
                                </p>
                            @endif
                            @if(count($res_training_courses)>1)

                            <p style="font-size: large">
                            <h2>الدورات التدريبية :</h2>

                                <ul>
                                    @foreach ($res_training_courses as $value )
                                        @if(count($res_training_courses)>$loop->iteration)
                                        <li>{{ $value}}</li>
                                        @endif
                                    @endforeach
                                    </ul>
                            </p>
                            @endif
                            @if(count($res_experience)>1)
                            <p style="font-size: large">
                            <h2>الخبرات العملية:</h2>

                                <ul>
                                    @foreach ($res_experience as $value )
                                        @if(count($res_experience)>$loop->iteration)
                                        <li>{{ $value}}</li>
                                        @endif
                                    @endforeach
                                    </ul>
                            </p>
                            @endif
                            @if(count($res_literature)>1)
                            <p style="font-size: large">
                                <h2>المؤلفات:</h2>
                                <ul>
                                    @foreach ($res_literature as $value )
                                        @if(count($res_literature)>$loop->iteration)
                                        <li>{{$value}}</li>
                                        @endif
                                    @endforeach
                                    </ul>
                            </p>
                            @endif
                        </div>
                    @endforeach

                    <div class="mx-5 nav-previous" style="text-align: start">
                        <a href="{{ route('index') }}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" stroke="#444" stroke-width="2"
                                x="0px" y="0px" viewBox="0 0 24 24" xml:space="preserve" width="24"
                                height="24">
                                <g>
                                    <line stroke-miterlimit="10" x1="22" y1="12" x2="2" y2="12"
                                        stroke-linejoin="miter" stroke-linecap="butt"></line>
                                    <polyline stroke-linecap="square" stroke-miterlimit="10" points="9,19 2,12 9,5 "
                                        stroke-linejoin="miter"></polyline>
                                </g>
                            </svg>
                            <span>العودة الى الصفحة الرئيسية</span>
                        </a>
                    </div>
                </div>
            </aside>
        </div>
    </div>

@stop
