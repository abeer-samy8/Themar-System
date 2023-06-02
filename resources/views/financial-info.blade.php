@extends("layouts.themar-home")
@section("title","معلومات مالية")

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

                <div class="form-group">
                    <label class="mr-1" for="id">الدخل السنوي بالريال السعودي </label>
                    <input title="" type="text" class="form-control" name="income" id="income"
                           value="" required
                           placeholder="الدخل السنوي بالريال ">
                </div>

                <div class="form-group">
                    <label class="mr-1" for="id">عدد الموظفين </label>
                    <input title="" type="text" class="form-control" name="num-employee" id="num-employee"
                           value="" required
                           placeholder="عدد الموظفين ">
                </div>

                <div class="form-group">
                    <label class="mr-1" for="id">الأصول الحالية</label>
                    <input title="" type="text" class="form-control" name="current-ass" id="current-ass"
                           value="" required
                           placeholder="الأصول الحالية ">
                </div>

                <div class="form-group">
                    <label class="mr-1" for="id">المطالبات الحالية</label>
                    <input title="" type="text" class="form-control" name="current-claim" id="current-claim"
                           value="" required
                           placeholder="المطالبات الحالية ">
                </div>
                <div class="form-group">
                    <label class="mr-1" for="id">الموقع الإلكتروني (اختياري)</label>
                    <input title="" type="text" class="form-control" name="email" id="email"
                           value="" required
                           placeholder="email@example.com ">


                </div>
                <div class="form-foot">
                    <div class="d-flex checkbox-container">
                        <input type="checkbox" class="checkbox" name="terms_and_conditions" id="terms_checkbox">
                        <label class="text-sm" for="terms_checkbox">
                            أوافق على إصدار سند لأمر كضمان شخصي للتمويل
                        </label>
                    </div>
                    <!--                        </div>-->


                    <div class="d-flex">
                        <div class="toggle-container toggle custom-radio ">
                            <label style="padding-left: 48px">
                                هل تود رهن الأصل؟
                            </label>

                            <input type="radio" id="yes" name="property_pledge" value="yes">
                            <label for="yes">نعم</label>

                            <input type="radio" id="no" name="property_pledge" value="no" checked>
                            <label for="no">لا</label>


                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="toggle-container toggle  custom-radio">
                            <label style="padding-left: 21px">
                                هل يوجد ضمانات أخرى؟
                            </label>

                            <input type="radio" id="yes1" name="property" value="yes ">
                            <label for="yes1">نعم</label>

                            <input type="radio" id="no1" name="property" value="no" checked>
                            <label for="no1">لا</label>
                        </div>
                    </div>
                </div>


                <div class="button-container">
                    <button class="prev-btn"> < السابق</button>
                    <button class="next-btn"> التالي ></button>
                </div>


            </form>
        </div>

        <!--===============End form===================-->


    </div>
@endsection
