@extends('layout.master')
@section('container.contact')

    @if (isset($_SESSION['order']))
        <div style="margin-top: 100px">
            <i class="fas fa-shopping-cart position-relative"><span>{{ count($_SESSION['order']) }}</span></i>
        </div>
    @endif

    <div class="container shadow border" style="margin-top:100px ">
        <div id="con" class="row text-center" style="gap: 50px">
            <div class=" w-100 col-lg-12 col-md-6 col-sm-12 ">
                <h2 >الاستشارة بالهاتف</h2>
            </div>
            <div class="w-100" style="margin-top: -30px">
                <p>أوقات الرد والاتصال بعد التحويل والتأكد من الدفع .</p>
            </div>
            <div  id="loyarinfo" class="col-3 mx-4 mb-4">
                <h4>محامي</h4>
                <h1>200 <span> ر.س</span></h1>
                <h5>ربع ساعة فأقل</h5>
                <a href="#Form">
                    <button value1="محامي" value="200" id="loyar" class="btn btn-primary m-3" value1="محامي">اطلب استشارتك
                        الان</button></a>
            </div>
            <div id="loyarinfo"  class="col-3 mx-4 mb-4">
                <h4>مستشار</h4>
                <h1> 250 <span> ر.س</span></h1>
                <h5>ربع ساعة فأقل</h5>
                <a href="#Form"> <button value1="مستشار"  value="250" id="loyar" class="btn btn-primary m-3">اطلب استشارتك
                        الان</button></a>
            </div>
            <div  id="loyarinfo" class="col-3 mx-4 mb-4">
                <h4> محامي مستشار متمرس</h4>
                <h1> 300 <span> ر.س</span></h1>
                <h5>ربع ساعة فأقل</h5>
                <a href="#Form"> <button value1="محامي مستشار متمرس"  value="300" id="loyar" class="btn btn-primary m-3">اطلب استشارتك
                        الان</button></a>
            </div>
        </div>
    </div>

 
       

 
    <div class="container  mt-5 ">
        <div class="row text-center" id="info" style="gap: 15px;justify-content: space-around;">
            <div class=" col-lg-5 col-md-12 col-sm-12 shadow border " id="loyarinfo2" >
                <div class=" w-100" >
                    <h2 > الاستشارة بالبريد</h2>
                </div>
                <div class="w-100">
                    <p> الرد خلال 48 ساعة</p>
                </div>
                <h1>200 <span> ر.س</span></h1>
                <h5>الرد خلال 48 ساعة</h5>
                <br>
                <a href="#Form"> <button value1="الاستشاره بالبريد" value2="التواصل بالبريد" value="200" id="loyar2" class="btn btn-primary m-3">اطلب استشارتك
                        الان</button></a>

                    </div>

            <div class=" col-lg-5 col-md-12 col-sm-12 shadow border" id="loyarinfo2" >
                <div class=" w-100">
                    <h2>الاستشارة السريعة </h2>
                </div>
                <div class="w-100">
                    <p> أوقات الرد و الاتصال خلال ساعة بعد التحويل و التأكد من الدفع<br> وذلك من الساعة 9 صباحا حتى الساعة
                        10 مساءا</p>
                </div>
                <h1>50 <span> ر.س</span></h1>
                <h5>المدة 3 دقائق</h5>
                <a href="#Form">
                    <button value1="الاستشاره السريعه" value2="التواصل السريع" value="50" id="loyar2" class="btn btn-primary m-3">اطلب استشارتك
                        الان</button></a>
            </div>
        </div>
    </div>

    <!-- Contact Start -->
    <div class="contact mt-125" id="Form" style="display:none ">
        <div class="container" id="contact-5">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8  m-auto">
                    <div class="contact-form">
                        <div id="success"></div>
                        <form action="{{ route('session') }}" method="get" name="sentMessage" id="contactForm" novalidate>
                            @csrf
                            <div class="control-group">
                                <input type="text" pattern="[A-Za-z]+" style="width: 90%" class="form-control" name="name" id="name" placeholder="الاسم"
                                    required="required" data-validation-required-message="أدخل اسمك" />
                                <p class="help-block text-danger" style="direction: ltr"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="البريد الالكتروني" required="required"
                                    data-validation-required-message="ادخل البريد الالكتروني" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="number" class="form-control" name="phone" id="subject"
                                    placeholder="الهاتف" required="required"minlength="8"
                                    data-validation-required-message="ادخل رقم جوالك" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" name="consult" placeholder=" موضوع الاستشارة" required="required"
                                    data-validation-required-message="ادخل المشكله حول القضيه"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>



                             <div class="control-group mb-3" id="type_of_conect" style="display: none">
                                <select class="form-control" id="gala2" name="" aria-label="Default select example"
                                     data-validation-required-message="اختر نوع الاستشاره">
                                     
                                     <option value="الهاتف">الهاتف</option>
                                    
                                </select>
                                <p class="help-block text-danger"></p>
                            </div> 


                            <div class=" control-group mb-3 " id="type_conect" style="display: none">
                                <select class="form-control" id='gala' name="" aria-label="Default select example">
                                     <option id="goo" value></option>
                                   
                                </select>
                                <p class="help-block text-danger"></p>
                            </div> 
<br>


                    
 
{{-- ------------------------------------------------------------ --}}
                             {{-- <div class="control-group">
                                <input type="readonly"  class="form-control" name="type_conect" id="type_conect"  
                                    placeholder="نوع الاتصال"required="required"
                                    data-validation-required-message="ادخل البريد الالكتروني" readonly/>
                             </div> --}}







                                 <div class="control-group">
                                <select class="form-control" name="consult_loyar" aria-label="Default select example">
                                    <option id="go" value > </option>
                                
                                </select>
                                <p class="help-block text-danger"></p>
                            </div> 

                            <div class="control-group d-none mt-3" id="time">
                                <select class="form-control" name="time" aria-label="Default select example"
                                    id="timecount" required>
                                    <option selected>المده</option>
                                    <option value="15">15 دقيقه</option>
                                    <option value="30">30 دقيقه</option>
                                </select>

                                <p class="help-block text-danger"></p>
                            </div>





                         
                                <select class="form-control" name="calltime" aria-label="Default select example"
                                    id="calltime" required>

                                    <option>وقت الاتصال</option>
                                    @for ($i =8 ; $i >=6 ; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    <option value="{{ $i +0.30}}">{{ $i}}.30</option>

                                    @endfor
 

                                </select>

                           
                                
 


















                            <div class=" mt-4">

<input type="date" id="datepicker" name="date" min="2023-01-01">

                                {{-- <p> <input type="date" name="date" id="datepicker"        min="2018-01-01" max="2018-12-31"
                                required /></p> --}}
                            </div>
                            <div class="control-group">
                                <input type="text" hidden id="price2" name="price">
                                <p class="help-block" id="price" style="font-size: 20px"></p>
                            </div>
                            <div>
                                <button class="btn m-4" type="submit" id="sendMessageButton">التالي</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<script>
 
    $(document).ready(function(){
   $("button").click(function(){

$('#Form').css('display','block');

var type_lowyer=$(this).attr('value1');
 var type_conectt=$(this).attr('value2');
  
////////////////////////////////////////for LOYWER-----------------
 
$("#go").attr('value', type_lowyer);
$("#go").html(type_lowyer);
////////////////////////////////////////END LOYWER-----------------



// /////////////////////////
var type_phone=$(this).attr('value2');
 
if(type_phone == undefined)
{
    // input_test.innerHTML=15;

$('#type_of_conect').css('display','block');
$('#type_conect').css('display','none');
$('#gala2').attr('name','consult_type');
$('#gala').attr('name','agnj');


}else
{
$('#gala').attr('name','consult_type');
$('#gala2').attr('name','ahnj');
    $('#type_of_conect').css('display','none');
    $('#type_conect').css('display','block');
    // $('#type_conect').attr('value',type_conectt);
    // $('#type_conect').html(type_conectt);
   $("#goo").attr('value', type_phone);
   
    $("#goo").html(type_phone);

}

  });


});
</script>