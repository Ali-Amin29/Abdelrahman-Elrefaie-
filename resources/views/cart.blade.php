<div class="ser">
@extends('layout.master')
@section('container.contact')
    {{ session_start() }}

    @if (isset($_SESSION['order']))

    <div style="margin-top:100px;display:none">
            <i class="fas fa-shopping-cart position-relative"><span>{{ count($_SESSION['order']) }}</span></i>
        </div>
    @endif
    <style>
        td,th{
            text-align:center
        }
    </style>



    @if (isset($_SESSION['order']) && $_SESSION['order'] != [])
<br>
<br>
<br>
<div class="container-fulid mt-5" style="overflow: hidden;">
    <div class="row">
        <div class="col-lg-8">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>الاسم </th>
                    <th>الاستشاره</th>
                    <th>نوع المحامي</th>
                    <th> السعر</th>
                     <th> حذف</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($_SESSION['order'] as $key => $item)

                  <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['consult_type'] }}</td>
                    <td>{{ $item['consult_loyar'] }}</td>
                    <td>{{ $item['price'] }}</td>
                    <td> <a href="{{ route('delete', $key) }}"><button
                        class="btn btn-outline-danger ms-5">مسح</button></a></td>
                  </tr>
                  @endforeach

                </tbody>
              </table>
            </div>


            <div class="col-lg-3 ">
                <div class="card text-black">
                    <div class="card-body">
                        <h3 class="card-titel">
                            اجمالي سلة المشتريات
                            <hr>
                        </h3>
                        <div class="card-text">
                            <h5 style="float: right;" id="total"> </h5>
                            <p>
                                المجموع
                            </p>

                            <h5 style="float: right;"> 0.00ريال </h5>
                            <p>
                                vat
                            </p>
                            <hr>
                            <h5 style="float: right;" id="total"> </h5>
                            <h4>الاجمالي</h4>
                            <a href="{{ URL('session_done') }}" class="btn btn-lg p-2 shadow b2 w-100 mt-3 b2resbonsive">التقدم لاتمام
                                الطلب</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container mt-5">
            <div class="blog text-center" style="~margin-top:10% !important">
                <h2>لا يوجد قضايا</h2>
                <a href="{{ route('contact') }}"><button class="btn"> </button></a>
            </div>
        </div>
    @endif









    @if (isset($_SESSION['order']) && $_SESSION['order'] != [])
        <div class="d-flex" >
            <div class="container" style="display: none">
                <div id="cart-2" class=" d-flex" style="gap: 60px;margin-right: 12px;">
                    <h5>الاسم</h5>
                    <p>نوع الاستشاره</p>
                    <p>نوع المحامي</p>
                    <p>السعر</p>
                    <p style="margin-right: 20px;">التاريخ</p>
                </div>
                @foreach ($_SESSION['order'] as $key => $item)


                    <div class="card mb-3 cardres">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body d-flex" style="gap: 90px">
                                    <h5 class="card-title">{{ $item['name'] }}</h5>
                                    <p class="card-title">{{ $item['consult_type'] }}</p>
                                    <p class="card-title">{{ $item['consult_loyar'] }}</p>
                                    <input type="text" value="{{ $item['price'] }}" hidden id="price">
                                    <p class="card-title">{{ $item['price'] }}</p>
                                    <p class="card-title">{{ $item['date'] }}</p>
                                    <div class="number">
                                        <a href="{{ route('delete', $key) }}"><button
                                                class="btn btn-outline-danger ms-5">مسح</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>























            <div class="col-md-4 " style="display: none">
                <div class="card text-black">
                    <div class="card-body">
                        <h3 class="card-titel">
                            اجمالي سلة المشتريات
                            <hr>
                        </h3>
                        <div class="card-text">
                            <h5 style="float: right;" id="total"> </h5>
                            <p>
                                المجموع
                            </p>

                            <h5 style="float: right;"> 0.00ريال </h5>
                            <p>
                                vat
                            </p>
                            <hr>
                            <h5 style="float: right;" id="total"> </h5>
                            <h4>الاجمالي</h4>
                            <a href="{{ URL('session_done') }}" class="btn btn-lg p-2 shadow b2 w-100 mt-3 b2resbonsive">التقدم لاتمام
                                الطلب</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container mt-5" style="display: none">
            <div class="blog text-center" style="~margin-top:10% !important">
                <h2>لا يوجد قضايا</h2>
                <a href="{{ route('contact') }}"><button class="btn"> </button></a>
            </div>
        </div>
    @endif
    <script>
        var price = document.querySelectorAll('#price')
        var total = document.querySelectorAll('#total')
        let totalprice = 0

        price.forEach(function(i) {
            totalprice += parseInt(i.value);
            total.forEach(function(i) {
                i.innerHTML = totalprice + 'ريال'
            })
        })
    </script>


</div>
<br>
<br>
<br>
@stop
