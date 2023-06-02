@extends("layouts.themar-home")
@section("title","معلومات الشراء")
@section('css')
    <style>
        /* Style for the options */
        .custom-select select option {
            color: #979797; /* Set the desired color */
        }
    </style>
@endsection
@section('content')
    <div class="row">
        <!--===================Start Title Section================-->
        <div class="col-xl-12 col-lg-12 col-md-12 mx-auto">
            <div class="title-sec">
                <h2 class="main-title">المشتريات</h2>
                <a href="#" class="link">
                    <span>  المشتريات&gt; </span> إضافة مشروع</a>
            </div>
        </div>

        <div class="col-xl-10 col-lg-10 col-md-12 mx-auto">
            <div class="inst-title d-flex flex-column gap-1 justify-content-center align-items-center">
                <p class="font-weight-normal">الرجاء إكمال الخطوات التالية</p>
            </div>
        </div>
        <!--===================End Title Section================-->
    </div>
    <!-- ===========start stepper=========== -->
    <div class="col-xl-8 col-lg-10 col-md-10 mx-auto">
        <div class="my-stpper-container">

            <div class="stepper-container">
                <div class="step step-1 current-step">
                    <div class="step-num">1</div>
                    <div class="step-circle">
                        <svg
                            width="17"
                            height="17"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 6.99984L9 18.9998L3.5 13.4998L4.91 12.0898L9 16.1698L19.59 5.58984L21 6.99984Z"
                                fill="white"></path>
                        </svg>
                    </div>
                    <div class="step-title">معلومات الشراء</div>
                </div>
                <div class="step-line"></div>
                <div class="step step-2">
                    <div class="step-num">2</div>
                    <div class="step-circle">
                        <svg
                            width="17"
                            height="17"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 6.99984L9 18.9998L3.5 13.4998L4.91 12.0898L9 16.1698L19.59 5.58984L21 6.99984Z"
                                fill="white"></path>
                        </svg>
                    </div>
                    <div class="step-title">معلومات مالية</div>
                </div>
                <div class="step-line"></div>
                <div class="step step-3">
                    <div class="step-num">3</div>
                    <div class="step-circle">
                        <svg
                            width="17"
                            height="17"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 6.99984L9 18.9998L3.5 13.4998L4.91 12.0898L9 16.1698L19.59 5.58984L21 6.99984Z"
                                fill="white"></path>
                        </svg>
                    </div>
                    <div class="step-title"> المستندات</div>
                </div>

            </div>
        </div>
    </div>

    <!-- ==============end stepper=============== -->
    <!--===============start form================-->
    <div class="col-xl-12 col-lg-12 col-md-12 mx-auto">

        <form action="" method="POST" novalidate id="register_form"
              class="hold-form new-register-facility-form d-flex flex-column align-items-center justify-content-center inputs-50">
            <div class="form-head" >معلومات الشراء</div>
            <div class="form-group">
                <label class="mr-1" for="id">نوع المشتريات </label>
                <input title="" type="text" class="form-control" name="purch-type" id="purch-type"
                       value="" required
                       placeholder="نوع المشتريات ">
            </div>

            <div class="form-group">

                <label class="mr-1" for="id">عرض السعر </label>
                <input title="" type="text" class="form-control" name="num-employee" id="num-employee"
                       value="" required placeholder="اختر الملف ">


                <div class="pt-3">
                    <img src="{{asset('themar-front/assets/img/vector.svg')}}">
                    <span class="form-span">يجب أن يكون ملفك بصيغة pdf. ولا يزيد حجمه عن 10 ميغابايت</span>
                </div>
            </div>


            <div class="form-group">
                <label class="mr-1" for="id">مبلغ المشتريات بالريال السعودي</label>
                <input title="" type="text" class="form-control" name="current-claim" id="current-claim"
                       value="" required
                       placeholder=" مثال: 350,000 ">
            </div>

            <div class="form-group">
                <label class="mr-1" for="id">فترة السداد بالأشهر</label>
                <select class="form-control m-input m-input--solid" id="exampleSelect1">
                    <option class="custom-select" value="" disabled selected hidden style="color: white;">اختر فترة
                        السداد
                    </option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>

            <div class="box">
                <p>حاسبة القسط الشهري التقريبية</p>
                <div class="d-flex row2" >
                    <span style="padding-left: 36px">مبلغ المشتريات</span>
                    <span style="padding-left: 40px">المرابحة</span>
                    <span>المبلغ الكلي</span>
                </div>

                <div class="d-flex row3">
                    <label style="padding-left: 50px">0.00 <span class="unit">ر.س  </span></label>
                    <span class="plus">+</span>
                    <label>0.00 <span class="unit">ر.س  </span></label>
                    <span class="plus" style="padding-right: 10px">=</span>
                    <label>0.00 <span class="unit">ر.س  </span></label>
                </div>

                <div class="d-flex row4">
                    <span style="padding-left: 30px" >القسط الشهري</span>
                    <label class="condtions">تطبيق الشروط والأحكام</label>
                </div>

                <div class="row3">
                    <label>0.00 <span class="unit">ر.س  </span></label>
                </div>
                <div class="d-flex row4">
                    <span style="padding-left: 30px" >الرسوم الإدارية</span>
                    <label class="condtions">تطبيق الشروط والأحكام</label>
                </div>
                <div class="row3">
                    <label>0.00 <span class="unit">ر.س  </span></label>
                </div>



            </div>

            <div class="button-container pt-5">
                <button class="next-btn"> التالي ></button>
            </div>


        </form>
    </div>

    <!--===============End form===================-->
@endsection
