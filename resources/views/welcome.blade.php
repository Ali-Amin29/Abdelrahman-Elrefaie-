@extends('layout.master')
@section('container.index')
<!-- Carousel Start -->
<!-- Slider -->


<div class="slider">
   <div class="slide"
      style="background-image: url({{ asset('img/first.jpg') }});">
   </div>
   <div class="slide"
      style="background-image: url({{ asset('img/second.jpg') }});">
   </div>
   <div class="slide"
      style="background-image: url({{ asset('img/third.jpg') }});">
   </div>
</div>

<!-- Carousel End -->

<!-- Video Modal Start-->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <!-- 16:9 aspect ratio -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Fact Start -->
<div class="fact mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6">
                <div class="fact-item">
                    <img src="img/icon-4.png" alt="Icon">
                    <h2>فريقنا</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fact-item">
                    <img src="img/icon-1.png" alt="Icon">
                    <h2>اخبارنا</h2>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="fact-item">
                    <img src="img/icon-8.png" alt="Icon">
                    <h2>خدماتنا</h2>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Fact Start -->


<!-- About Start -->
<div class="about mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="section-header">
                    <h2> الرفاعي للمحاماة </h2>
                </div>
                <div class="about-text" >
                    <div class="content text-right">
                        <p>بسم الله والحمد لله والصلاة والسلام على رسول الله وعلى آله وصحبه ومن والاه، أما بعد:
                        </p>
                        <p>فإن المتأمل في واقعنا الحالي من تعدد الأنظمة ومداخلاتها والأسس التي تنطلق منها والتي هي بالتأكيد قواعد وأسس قانونية، فإنه يجد تخبط شديد لدى كثير من الناس وأقصد بذلك غير المتخصصين من أهل القانون، حيث تجد هذا الشخص أو ذاك يبحث هنا وهناك عن فتوى أو استشارة أو مخرج قانوني من هذا المأزق أو ذاك ،وهذا كله بسبب مرحلة اللاوعي بالأسس القانونية التي يتم بناء التعاملات عليها، فتجد أنّ شخصين أو أكثر يقومون بعمل اتفاقيات معينة وعقود يدخلها من الشوائب القانونيّة لا يعلمها إلا الله والتي قد تكون سببا في ضياع كثير من الحقوق، وهذا يعود إلى عدم معرفتهم بالأسس القانونية أو عدم استشارتهم لأهل الإختصاص في ذلك.
                        </p>
                        <p>لذا ومن هذا المنطلق فقد أطلقت شعار ( القانون لغير القانونيين ) حتى يتم توضيح جانبا كبيرا من القواعد الأساسية التي يحتاجها كل شخص في يوم من الأيام، وذلك عبر تبسيطها وتقريبها للفهم وبعيدا عن المصطلحات القانونية المعقدة قدر المستطاع، دون إسهاب ممل أو اختصارٍ مخل بإذن الله تعالى.
                        </p>
                        <p>راجيا من الجميع سواء المتخصصين أو غيرهم ألاّ يبخلوا علينا بأي اقتراح يرونه مناسبا أو مشورة أو تعليقا عبر سجل الزوار مباشرة أو عبر الاتصال بنا.
                        </p>
                        </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="about-img">
                    <div class="about-img-1">
                        <img src={{ asset('img/logo.jpg') }} alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service blog mb-5">
    <div class="container">
        <div class="section-header">
            <h2>من أفضل خدمتنا</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="service-item">
                    <img src="img/icon-1.png" alt="Icon">

                    <p>
                        دراسة وتعديل العقود
                    </p>

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="service-item">
                    <img src="img/icon-1.png" alt="Icon">

                    <p>
                        دراسة وتعديل العقود
                    </p>

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="service-item">
                    <img src="img/icon-1.png" alt="Icon">

                    <p>
                        دراسة وتعديل العقود
                    </p>

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="service-item">
                    <img src="img/icon-1.png" alt="Icon">

                    <p>
                        دراسة وتعديل العقود
                    </p>

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="service-item">
                    <img src="img/icon-1.png" alt="Icon">

                    <p>
                        دراسة وتعديل العقود
                    </p>

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="service-item">
                    <img src="img/icon-1.png" alt="Icon">

                    <p>
                        دراسة وتعديل العقود
                    </p>

                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="service-item">
                    <img src="img/icon-1.png" alt="Icon">
                    <p>
                        دراسة وتعديل العقود
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="service-item">
                    <img src="img/icon-1.png" alt="Icon">
                    <p>
                        دراسة وتعديل العقود
                    </p>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="feature mb-5">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="section-header">
                    <h2>لماذا تختارنا؟</h2>
                </div>
                <p style="text-align:start">
                   الرفاعي للمحاماة
                </p>
                <div class="row counters" style="text-align:start ">
                    <div class="col-6 ">
                        <i class="fa fa-user"></i>
                        <div class="counters-text">
                            <h2 data-toggle="counter-up">100</h2>
                            <p>فريقنا</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-users"></i>
                        <div class="counters-text">
                            <h2 data-toggle="counter-up">200</h2>
                            <p>عملاؤئنا</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-check"></i>
                        <div class="counters-text">
                            <h2 data-toggle="counter-up">300</h2>
                            <p>القضايا المكتملة</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-running"></i>
                        <div class="counters-text">
                            <h2 data-toggle="counter-up">400</h2>
                            <p>القضايا الحالية</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-img">
                    <img src="img/business-man.png" alt="Image">
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Testimonial Start -->
<div class="testimonial blog mb-5">
    <div class="container ">
        <div class="section-header" style="text-align: center">
            <h2>عملاؤنا</h2>
        </div>
        <div class="owl-carousel  testimonials-carousel">
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/22.png" alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/21.jpg" alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/2.jpg" alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/5.png" alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/3.png" alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/07/شركة-طروق.png"   alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/rg4t3TX7_400x400.jpg"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/Master-2_0009_Boehringer.png"   alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/logo1.jpg"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/Master-2_0002_Janssen.png"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/565.jpg" alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/555.jpg"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/354.jpg"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/220.png"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/55.gif"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/67.png"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/31.jpg"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/34.jpg"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/22.png"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/5.png"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/21.jpg"  alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/2.jpg" alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/3.png" alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/07/شركة-طروق.png" alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/unnamed.jpg"alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/rg4t3TX7_400x400.jpg" alt="Image">
            </div>
            <div class="testimonial-item">
                <img src="https://alrefaielawyer.com/wp-content/uploads/2020/03/logo1.jpg" alt="Image">
            </div>
            <div class="testimonial-item">
                <img  src="https://alrefaielawyer.com/wp-content/uploads/2020/03/Master-2_0009_Boehringer.png" alt="Image">
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<!-- Team Start -->
<div class="team mb-5">
    <div class="container">
        <div class="section-header">

            <h2>فريق العمل</h2>
        </div>
        <div class="row">
            {{-- @foreach ($teams as $team )
            <div class="col-lg-3 col-md-6">
                <div class="team-item">
                    <div class="team-img">

                  
                      <img src={{ asset('app/'.$team->img) }} alt="Image" width="100px" height="180px" style="object-fit: contain">
                      @php
                         

                      @endphp
                    </div>
                    <div class="team-text">
                        <h2>{{ $team->name }}</h2>
                        <p>{{ $team->title }}</p>
                        <div class="team-social">
                            <a href="{{ url('team_show',$team->id) }}"><i class="fas fa-chevron-circle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}

        </div>
    </div>
</div>
<!-- Team End -->

<!-- Blog Start -->
<div class="blog mb-5">
    <div class="container">
        <div class="section-header">
            <h2>الاحدث من صفحة الاخبار </h2>
        </div>
        <div class="owl-carousel blog-carousel">
 @foreach ($blog   as $post )

            <div class="blog-item">
                <div class="blog-img">
                
                     <img src="{{ asset('BLog/'.$post->img) }}" alt="ali" />
                </div>
                <div class="blog-content">
                    <h2 class="blog-title">{{ $post->title }}</h2>
                    <div class="blog-meta p-2">
                        <i class="fa fa-list-alt"></i>
                        <a href="{{ url('blog') }}">الاخبار</a>
                        <i class="fa fa-calendar-alt"></i>
                   <?php
                        // $x=(explode(" ",$post->created_at));
                        // echo $x[0];
                        
                        ?>
                    </div>
                    <div class="blog-text" style="height:80px;overflow:hidden">
                        <p>
                            @php
                         echo   $str=substr($post->content, 0, 200);
                            @endphp
                            {{ $str."......"}}
                            </a>
                        </p>
<br>
</div>
   
           <a class="btn " href="{{ url('show_blog',$post->id) }}">المزيد</a>
                    
                </div>
            </div>
            @endforeach 


        </div>
    </div>
</div>
<!-- Blog End -->
 @stop 
