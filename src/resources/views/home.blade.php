<!DOCTYPE html>
<html lang="fa_ir">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>زِگوا - قالب پاسخگوی مدیریت داشبورد | طراحی قالب</title>
    <meta content="Responsive admin theme build on top of Bootstrap 4" name="description"/>
    <meta content="Themesdesign" name="author"/>
    <link rel="shortcut icon" href={{asset("vendor/SanaLogs/assets/images/favicon.ico")}}>

    <link
        href={{asset("vendor/SanaLogs/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css")}} rel="stylesheet">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset("vendor/SanaLogs/assets/plugins/morris/morris.css")}}">

    <link href={{asset("vendor/SanaLogs/assets/css/bootstrap.min.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/SanaLogs/assets/css/metismenu.min.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/SanaLogs/assets/css/icons.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/SanaLogs/assets/css/style.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/SanaLogs/assets/css/persian-datepicker.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/SanaLogs/assets/css/persian-datepicker.min.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/SanaLogs/assets/css/bootstrap-datepicker.css")}} rel="stylesheet" type="text/css">
    <link href={{asset("vendor/SanaLogs/assets/css/persian-datepicker.min.css")}} rel="stylesheet" type="text/css">
</head>

<body>

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <a href="index.html" class="logo">
                <img src={{asset("vendor/SanaLogs/assets/images/logo-light.png")}} class="logo-lg" alt="" height="22">
                <img src={{asset("vendor/SanaLogs/assets/images/logo-sm.png")}} class="logo-sm" alt="" height="24">
            </a>
        </div>

        <!-- Search input -->
        <div class="search-wrap" id="search-wrap">
            <div class="search-bar">
                <input class="search-input" type="search" placeholder="جست و جو"/>
                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                    <i class="mdi mdi-close-circle"></i>
                </a>
            </div>
        </div>

        <nav class="navbar-custom">
            <ul class="navbar-right list-inline float-right mb-0">

                <li class="list-inline-item dropdown notification-list d-none d-md-inline-block">
                    <a class="nav-link waves-effect toggle-search" href="#" data-target="#search-wrap">
                        <i class="fas fa-search noti-icon"></i>
                    </a>
                </li>

                <!-- language-->
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                       role="button" aria-haspopup="false" aria-expanded="false">
                        <img src={{asset("vendor/SanaLogs/assets/images/flags/iran-flag.png")}} class="mr-2" height="12"
                             alt=""/> فارسی <span
                            class="mdi mdi-chevron-down"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated language-switch">
                        <a class="dropdown-item" href="#"><img
                                src={{asset("vendor/SanaLogs/assets/images/flags/french_flag.jpg")}} alt=""
                                height="16"/><span> فرانسوی </span></a>
                        <a class="dropdown-item" href="#"><img
                                src={{asset("vendor/SanaLogs/assets/images/flags/spain_flag.jpg")}} alt=""
                                height="16"/><span> اسپانیایی </span></a>
                        <a class="dropdown-item" href="#"><img
                                src={{asset("vendor/SanaLogs/assets/images/flags/russia_flag.jpg")}} alt=""
                                height="16"/><span> روسی</span></a>
                        <a class="dropdown-item" href="#"><img
                                src={{asset("vendor/SanaLogs/assets/images/flags/germany_flag.jpg")}} alt=""
                                height="16"/><span> آلمانی</span></a>
                        <a class="dropdown-item" href="#"><img
                                src={{asset("vendor/SanaLogs/assets/images/flags/italy_flag.jpg")}} alt=""
                                height="16"/><span> ایتالیایی</span></a>
                    </div>
                </li>

                <!-- full screen -->
                <li class="dropdown notification-list list-inline-item d-none d-md-inline-block">
                    <a class="nav-link waves-effect" href="#" id="btn-fullscreen">
                        <i class="fas fa-expand noti-icon"></i>
                    </a>
                </li>

                <!-- notification -->
                <li class="dropdown notification-list list-inline-item">
                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#"
                       role="button" aria-haspopup="false" aria-expanded="false">
                        <i class="fas fa-bell noti-icon"></i>
                        <span class="badge badge-pill badge-danger noti-icon-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg px-1">
                        <!-- item-->
                        <h6 class="dropdown-item-text">
                            اعلان ها
                        </h6>
                        <div class="slimscroll notification-item-list">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                <div class="notify-icon bg-success"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b> سفارش شما انجام شد </b><span class="text-muted"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم  </span>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-danger"><i class="mdi mdi-message-text-outline"></i></div>
                                <p class="notify-details"><b> پیام جدید دریافت شد </b><span class="text-muted">87 پیام خوانده نشده دارید</span>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-info"><i class="mdi mdi-filter-outline"></i></div>
                                <p class="notify-details"><b> کالای شما ارسال می شود </b><span class="text-muted"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم </span>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-success"><i class="mdi mdi-message-text-outline"></i></div>
                                <p class="notify-details"><b> پیام جدید دریافت شد </b><span class="text-muted">87 پیام خوانده نشده دارید</span>
                                </p>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <div class="notify-icon bg-warning"><i class="mdi mdi-cart-outline"></i></div>
                                <p class="notify-details"><b> سفارش شما انجام شد </b><span class="text-muted"> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم  </span>
                                </p>
                            </a>

                        </div>
                        <!-- All-->
                        <a href="javascript:void(0);" class="dropdown-item text-center notify-all text-primary">
                            مشاهده همه<i class="fi-arrow-right"></i>
                        </a>
                    </div>
                </li>

                <li class="dropdown notification-list list-inline-item">
                    <div class="dropdown notification-list nav-pro-img">
                        <a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown"
                           href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src={{asset("vendor/SanaLogs/assets/images/users/user-1.jpg")}} alt="user"
                                 class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle"></i> پروفایل</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-wallet"></i> کیف پول من </a>
                            <a class="dropdown-item d-block" href="#"><span
                                    class="badge badge-success float-right">11</span><i class="mdi mdi-settings"></i>تنظیمات</a>
                            <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline"></i> قفل صفحه </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i>خروج</a>
                        </div>
                    </div>
                </li>

            </ul>

            <ul class="list-inline menu-left mb-0">
                <li class="float-left">
                    <button class="button-menu-mobile open-left waves-effect">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </li>
            </ul>

        </nav>

    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="slimscroll-menu" id="remove-scroll">

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <!-- Left Menu Start -->
                <ul class="metismenu" id="side-menu">
                    <li class="menu-title">منو</li>
                    <li>
                        <a href="index.html" class="waves-effect">
                            <i class="dripicons-meter"></i><span
                                class="badge badge-info badge-pill float-right">9+</span> <span>داشبورد</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i
                                class="dripicons-mail"></i><span>ایمیل<span class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="email-inbox.html"> صندوق ورودی </a></li>
                            <li><a href="email-read.html">خواندن ایمیل </a></li>
                            <li><a href="email-compose.html">نوشتن ایمیل </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="calendar.html" class="waves-effect"><i
                                class="dripicons-calendar"></i><span>تقویم</span></a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i
                                class="dripicons-to-do"></i><span> صفحات<span class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="pages-pricing.html"> قیمت</a></li>
                            <li><a href="pages-invoice.html"> فاکتور</a></li>
                            <li><a href="pages-timeline.html"> تایم لاین</a></li>
                            <li><a href="pages-faqs.html">سوالات متداول</a></li>
                            <li><a href="pages-maintenance.html">تعمیر</a></li>
                            <li><a href="pages-comingsoon.html">به زودی</a></li>
                            <li><a href="pages-starter.html"> صفحه شروع </a></li>
                            <li><a href="pages-login.html">ورود</a></li>
                            <li><a href="pages-register.html">ثبت نام</a></li>
                            <li><a href="pages-recoverpw.html">بازیابی رمز</a></li>
                            <li><a href="pages-lock-screen.html">صفحه قفل</a></li>
                            <li><a href="pages-404.html">خطای 404</a></li>
                            <li><a href="pages-500.html">خطای 500</a></li>
                        </ul>
                    </li>

                    <li class="menu-title"> اجزا</li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-briefcase"></i> <span> عناصر UI  <span
                                    class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span>
                        </a>
                        <ul class="submenu">
                            <li><a href="ui-alerts.html"> هشدارها </a></li>
                            <li><a href="ui-badge.html"> نشان </a></li>
                            <li><a href="ui-buttons.html"> دکمه ها</a></li>
                            <li><a href="ui-cards.html"> کارت ها </a></li>
                            <li><a href="ui-dropdowns.html"> Dropdownها </a></li>
                            <li><a href="ui-navs.html">Navها </a></li>
                            <li><a href="ui-tabs-accordions.html">زبانه ها و آکاردئون ها </a></li>
                            <li><a href="ui-modals.html">مُدال ها</a></li>
                            <li><a href="ui-images.html">تصاویر</a></li>
                            <li><a href="ui-progressbars.html">نوار پیشرفت</a></li>
                            <li><a href="ui-pagination.html">صفحه بندی</a></li>
                            <li><a href="ui-popover-tooltips.html">پوپاور و راهنمای ابزار</a></li>
                            <li><a href="ui-spinner.html">اسپینر</a></li>
                            <li><a href="ui-carousel.html">کَروسِل</a></li>
                            <li><a href="ui-video.html">ویدیو</a></li>
                            <li><a href="ui-typography.html">تایپوگرافی</a></li>
                            <li><a href="ui-grid.html">گرید</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-broadcast"></i> <span> عناصر پیشرفته <span
                                    class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span>
                        </a>
                        <ul class="submenu">
                            <li><a href="advanced-alertify.html"> هشدار </a></li>
                            <li><a href="advanced-rating.html"> رتبه بندی </a></li>
                            <li><a href="advanced-nestable.html">نِستِبِل</a></li>
                            <li><a href="advanced-rangeslider.html">اسلایدر</a></li>
                            <li><a href="advanced-sweet-alert.html">هشدار-سوییت</a></li>
                            <li><a href="advanced-lightbox.html"> لایت باکس </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-document"></i><span>فرم ها<span
                                    class="badge badge-pill badge-danger float-right">8</span> </span></a>
                        <ul class="submenu">
                            <li><a href="form-elements.html"> عناصر فرم </a></li>
                            <li><a href="form-validation.html"> اعتبار سنجی فرم </a></li>
                            <li><a href="form-advanced.html"> فرم پیشرفته </a></li>
                            <li><a href="form-editors.html"> ویرایشگر فرم </a></li>
                            <li><a href="form-uploads.html">فرم آپلود فایل</a></li>
                            <li><a href="form-mask.html"> ماسک فرم</a></li>
                            <li><a href="form-summernote.html">سامر نوت</a></li>
                            <li><a href="form-xeditable.html"> فرم Xeditable </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-graph-bar"></i><span>نمودار ها<span
                                    class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="charts-morris.html">نمودار موریس</a></li>
                            <li><a href="charts-chartist.html">نمودار چارتیست</a></li>
                            <li><a href="charts-chartjs.html">نمودار Chartjs</a></li>
                            <li><a href="charts-flot.html">نمودار Flot </a></li>
                            <li><a href="charts-c3.html">نمودار C3 </a></li>
                            <li><a href="charts-other.html">نمودار Jquery Knob</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i
                                class="dripicons-list"></i><span>جداول<span class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="tables-basic.html">جداول اصلی</a></li>
                            <li><a href="tables-datatable.html">جدول داده</a></li>
                            <li><a href="tables-responsive.html">جدول ریسپانسیو</a></li>
                            <li><a href="tables-editable.html">جدول قابل ویرایش</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-brightness-max"></i>
                            <span> آیکون ها  <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                        </a>
                        <ul class="submenu">
                            <li><a href="icons-material.html">آیکون Material Design</a></li>
                            <li><a href="icons-ion.html">آیکون Ion </a></li>
                            <li><a href="icons-fontawesome.html">آیکون Font Awesome</a></li>
                            <li><a href="icons-themify.html">آیکون Themify </a></li>
                            <li><a href="icons-dripicons.html">آیکون Drip</a></li>
                            <li><a href="icons-typicons.html">آیکون Typicons </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-location"></i><span>نقشه ها<span
                                    class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="maps-google.html">نقشه گوگل</a></li>
                            <li><a href="maps-vector.html">نقشه برداری</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="waves-effect"><i
                                class="dripicons-link"></i><span>چند سطح <span class="float-right menu-arrow"><i
                                        class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="submenu">
                            <li><a href="javascript:void(0);"> منو 1</a></li>
                            <li>
                                <a href="javascript:void(0);">منو 2 <span class="float-right menu-arrow"><i
                                            class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="submenu">
                                    <li><a href="javascript:void(0);">منو 2.1</a></li>
                                    <li><a href="javascript:void(0);">منو 2.1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">


                <!-- start top-Contant -->
                <div class="row">

                </div>
                <!-- end top-Contant -->

                <div class="row">

                </div>
                <!-- end row -->

                <div class="row">

                </div>

                <div class="row">


                </div>

            </div>
            <!-- container-fluid -->

        </div>
        <!-- content -->

        <footer class="footer">
            © <span class="d-none d-sm-inline-block"> حق کپی رایت محفوظ است توسط - <i
                    class="mdi mdi-heart text-danger"></i> rtlthemedesign </span>.
        </footer>

    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- jQuery  -->
<script src={{asset("vendor/SanaLogs/assets/js/jquery.min.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/bootstrap.bundle.min.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/metismenu.min.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/jquery.slimscroll.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/waves.min.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/persian-datepicker.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/persian-datepicker.min.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/jquery.persiandatepicker.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/jquery.Bootstrap-PersianDateTimePicker.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/bootstrap-datepicker.min.js")}}></script>

<script src={{asset("vendor/SanaLogs/assets/js/persian-date.min.js")}}></script>

<script src={{asset("vendor/SanaLogs/assets/js/persian-datepicker.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/js/persian-date.min.js")}}></script>


<script src={{asset("vendor/SanaLogs/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js")}}></script>

<!--Morris Chart-->
<script src={{asset("vendor/SanaLogs/assets/plugins/morris/morris.min.js")}}></script>
<script src={{asset("vendor/SanaLogs/assets/plugins/raphael/raphael.min.js")}}></script>

<script src={{asset("vendor/SanaLogs/assets/pages/dashboard.init.js")}}></script>

<script src={{asset("vendor/SanaLogs/assets/plugins/apexchart/apexcharts.min.js")}}></script>
<!-- App js -->
<script src={{asset("vendor/SanaLogs/assets/js/app.js")}}></script>

<script src={{asset("vendor/SanaLogs/assets/pages/dashboard.init.js")}}></script>


</body>

</html>
