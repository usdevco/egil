<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} | {{ config('sximo.cnf_appname') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset('frontend/sportstravel/vendors/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" type="text/css" />

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <link href="{{ asset('frontend/sportstravel/vendors/perfect-scrollbar/css/tether.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/perfect-scrollbar/css/vendors/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/bootstrap-select/dist/css/bootstrap-select.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/select2/dist/css/select2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/nouislider/distribute/nouislider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/owl.carousel/dist/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/owl.carousel/dist/assets/owl.theme.default.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/ion-rangeslider/css/ion.rangeSlider.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/ion-rangeslider/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/summernote/dist/summernote.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/animate.css/animate.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/toastr/build/toastr.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/jstree/dist/themes/default/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/morris.js/morris.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/chartist/dist/chartist.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/socicon/css/socicon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/vendors/line-awesome/css/line-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/vendors/flaticon/css/flaticon.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/vendors/metronic/css/styles.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/sportstravel/vendors/vendors/fontawesome5/css/all.min.css') }}" rel="stylesheet" type="text/css" />

    <!--end:: Global Optional Vendors -->



    <!--begin::Global Theme Styles -->
    <link href="{{ asset('frontend/sportstravel/assets/demo/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ asset('frontend/sportstravel/assets/demo/base/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->

    <!--end::Global Theme Styles -->

    <!--begin::Page Vendors Styles -->
    <link href="{{ asset('frontend/sportstravel/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

    <!--RTL version:<link href="{{ asset('frontend/sportstravel/assets/vendors/custom/fullcalendar/fullcalendar.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />-->


    <!-- CSS Just for demo purpose, don't include it in your project --> 
     <script src="{{ asset('frontend/default/js/app.js') }}"></script>
      
  </head>
  <!-- end::Head -->





  <!-- begin::Body -->
  <body class="m-page--wide m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default index-page sidebar-collapse">

    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

      <!-- begin::Header -->
      <header id="m_header" class="m-grid__item m-header " m-minimize="minimize" m-minimize-offset="0" m-minimize-mobile-offset="0">
        <div class="m-header__top">
          <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
            <div class="m-stack m-stack--ver m-stack--desktop">

              <!-- begin::Brand -->
              <div class="m-stack__item m-brand">
                <div class="m-stack m-stack--ver m-stack--general m-stack--inline">
                  <div class="m-stack__item m-stack__item--middle m-brand__logo">
                    <a href="index.html" class="m-brand__logo-wrapper">
                      <img alt="" src="assets/demo/media/img/logo/logo.png" />
                    </a>
                  </div>
                  <div class="m-stack__item m-stack__item--middle m-brand__tools">
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-left m-dropdown--align-push" m-dropdown-toggle="click" aria-expanded="true">
                      <a href="#" class="dropdown-toggle m-dropdown__toggle btn btn-outline-metal m-btn  m-btn--icon m-btn--pill">
                        <span>Dashboard</span>
                      </a>
                      <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--left m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                          <div class="m-dropdown__body">
                            <div class="m-dropdown__content">
                              <ul class="m-nav">
                                <li class="m-nav__section m-nav__section--first m--hide">
                                  <span class="m-nav__section-text">Quick Menu</span>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-share"></i>
                                    <span class="m-nav__link-text">Human Resources</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Customer Relationship</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">Order Processing</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                    <span class="m-nav__link-text">Accounting</span>
                                  </a>
                                </li>
                                <li class="m-nav__separator m-nav__separator--fit">
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                    <span class="m-nav__link-text">Customer Relationship</span>
                                  </a>
                                </li>
                                <li class="m-nav__item">
                                  <a href="" class="m-nav__link">
                                    <i class="m-nav__link-icon flaticon-info"></i>
                                    <span class="m-nav__link-text">Order Processing</span>
                                  </a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- begin::Responsive Header Menu Toggler-->
                    <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                      <span></span>
                    </a>

                    <!-- end::Responsive Header Menu Toggler-->

                    <!-- begin::Topbar Toggler-->
                    <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                      <i class="flaticon-more"></i>
                    </a>

                    <!--end::Topbar Toggler-->
                  </div>
                </div>
              </div>

              <!-- end::Brand -->

              <!-- begin::Topbar -->
              <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                  <div class="m-stack__item m-topbar__nav-wrapper">
                    <ul class="m-topbar__nav m-nav m-nav--inline">
                      <li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light"
                       m-dropdown-toggle="click">
                        <a href="#" class="m-nav__link m-dropdown__toggle">
                          <span class="m-topbar__userpic m--hide">
                            <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt="" />
                          </span>
                          <span class="m-topbar__welcome">Hello,&nbsp;</span>
                          <span class="m-topbar__username">Nick</span>
                        </a>
                        <div class="m-dropdown__wrapper">
                          <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                          <div class="m-dropdown__inner">
                            <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/user_profile_bg.jpg); background-size: cover;">
                              <div class="m-card-user m-card-user--skin-dark">
                                <div class="m-card-user__pic">
                                  <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt="" />
                                </div>
                                <div class="m-card-user__details">
                                  <span class="m-card-user__name m--font-weight-500">Mark Andre</span>
                                  <a href="" class="m-card-user__email m--font-weight-300 m-link">mark.andre@gmail.com</a>
                                </div>
                              </div>
                            </div>
                            <div class="m-dropdown__body">
                              <div class="m-dropdown__content">
                                <ul class="m-nav m-nav--skin-light">
                                  <li class="m-nav__section m--hide">
                                    <span class="m-nav__section-text">Section</span>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="profile.html" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-profile-1"></i>
                                      <span class="m-nav__link-title">
                                        <span class="m-nav__link-wrap">
                                          <span class="m-nav__link-text">My Profile</span>
                                          <span class="m-nav__link-badge"><span class="m-badge m-badge--success">2</span></span>
                                        </span>
                                      </span>
                                    </a>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="profile.html" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-share"></i>
                                      <span class="m-nav__link-text">Activity</span>
                                    </a>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="profile.html" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-chat-1"></i>
                                      <span class="m-nav__link-text">Messages</span>
                                    </a>
                                  </li>
                                  <li class="m-nav__separator m-nav__separator--fit">
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="profile.html" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-info"></i>
                                      <span class="m-nav__link-text">FAQ</span>
                                    </a>
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="profile.html" class="m-nav__link">
                                      <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                      <span class="m-nav__link-text">Support</span>
                                    </a>
                                  </li>
                                  <li class="m-nav__separator m-nav__separator--fit">
                                  </li>
                                  <li class="m-nav__item">
                                    <a href="snippets/pages/user/login-1.html" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">Logout</a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="m-nav__item m-topbar__notifications m-topbar__notifications--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-center  m-dropdown--mobile-full-width" m-dropdown-toggle="click" m-dropdown-persistent="1">
                        <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                          <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                          <span class="m-nav__link-icon">
                            <span class="m-nav__link-icon-wrapper">
                              <i class="flaticon-alarm"></i>
                            </span>
                          </span>
                        </a>
                        <div class="m-dropdown__wrapper">
                          <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                          <div class="m-dropdown__inner">
                            <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/notification_bg.jpg); background-size: cover;">
                              <span class="m-dropdown__header-title">9 New</span>
                              <span class="m-dropdown__header-subtitle">User Notifications</span>
                            </div>
                            <div class="m-dropdown__body">
                              <div class="m-dropdown__content">
                                <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                  <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                      Alerts
                                    </a>
                                  </li>
                                  <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">Events</a>
                                  </li>
                                  <li class="nav-item m-tabs__item">
                                    <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">Logs</a>
                                  </li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                    <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                      <div class="m-list-timeline m-list-timeline--skin-light">
                                        <div class="m-list-timeline__items">
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                            <span class="m-list-timeline__text">12 new users registered</span>
                                            <span class="m-list-timeline__time">Just now</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge"></span>
                                            <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                            <span class="m-list-timeline__time">14 mins</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge"></span>
                                            <span class="m-list-timeline__text">New invoice received</span>
                                            <span class="m-list-timeline__time">20 mins</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge"></span>
                                            <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                            <span class="m-list-timeline__time">1 hr</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge"></span>
                                            <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                            <span class="m-list-timeline__time">2 hrs</span>
                                          </div>
                                          <div class="m-list-timeline__item m-list-timeline__item--read">
                                            <span class="m-list-timeline__badge"></span>
                                            <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                            <span class="m-list-timeline__time">7 hrs</span>
                                          </div>
                                          <div class="m-list-timeline__item m-list-timeline__item--read">
                                            <span class="m-list-timeline__badge"></span>
                                            <span class="m-list-timeline__text">Production server down</span>
                                            <span class="m-list-timeline__time">3 hrs</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge"></span>
                                            <span class="m-list-timeline__text">Production server up</span>
                                            <span class="m-list-timeline__time">5 hrs</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                    <div class="m-scrollable" data-scrollable="true" data-height="250" data-mobile-height="200">
                                      <div class="m-list-timeline m-list-timeline--skin-light">
                                        <div class="m-list-timeline__items">
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                            <a href="" class="m-list-timeline__text">New order received</a>
                                            <span class="m-list-timeline__time">Just now</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                            <a href="" class="m-list-timeline__text">New invoice received</a>
                                            <span class="m-list-timeline__time">20 mins</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                            <a href="" class="m-list-timeline__text">Production server up</a>
                                            <span class="m-list-timeline__time">5 hrs</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                            <a href="" class="m-list-timeline__text">New order received</a>
                                            <span class="m-list-timeline__time">7 hrs</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                            <a href="" class="m-list-timeline__text">System shutdown</a>
                                            <span class="m-list-timeline__time">11 mins</span>
                                          </div>
                                          <div class="m-list-timeline__item">
                                            <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                            <a href="" class="m-list-timeline__text">Production server down</a>
                                            <span class="m-list-timeline__time">3 hrs</span>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                    <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                      <div class="m-stack__item m-stack__item--center m-stack__item--middle">
                                        <span class="">All caught up!<br>No new logs.</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="m-nav__item m-topbar__quick-actions m-topbar__quick-actions--img m-dropdown m-dropdown--large m-dropdown--header-bg-fill m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"
                       m-dropdown-toggle="click">
                        <a href="#" class="m-nav__link m-dropdown__toggle">
                          <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                          <span class="m-nav__link-icon">
                            <span class="m-nav__link-icon-wrapper">
                              <i class="flaticon-share"></i>
                            </span>
                          </span>
                        </a>
                        <div class="m-dropdown__wrapper">
                          <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                          <div class="m-dropdown__inner">
                            <div class="m-dropdown__header m--align-center" style="background: url(assets/app/media/img/misc/quick_actions_bg.jpg); background-size: cover;">
                              <span class="m-dropdown__header-title">Quick Actions</span>
                              <span class="m-dropdown__header-subtitle">Shortcuts</span>
                            </div>
                            <div class="m-dropdown__body m-dropdown__body--paddingless">
                              <div class="m-dropdown__content">
                                <div class="m-scrollable" data-scrollable="false" data-height="380" data-mobile-height="200">
                                  <div class="m-nav-grid m-nav-grid--skin-light">
                                    <div class="m-nav-grid__row">
                                      <a href="#" class="m-nav-grid__item">
                                        <i class="m-nav-grid__icon flaticon-file"></i>
                                        <span class="m-nav-grid__text">Generate Report</span>
                                      </a>
                                      <a href="#" class="m-nav-grid__item">
                                        <i class="m-nav-grid__icon flaticon-time"></i>
                                        <span class="m-nav-grid__text">Add New Event</span>
                                      </a>
                                    </div>
                                    <div class="m-nav-grid__row">
                                      <a href="#" class="m-nav-grid__item">
                                        <i class="m-nav-grid__icon flaticon-folder"></i>
                                        <span class="m-nav-grid__text">Create New Task</span>
                                      </a>
                                      <a href="#" class="m-nav-grid__item">
                                        <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                        <span class="m-nav-grid__text">Completed Tasks</span>
                                      </a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li id="m_quick_sidebar_toggle" class="m-nav__item">
                        <a href="#" class="m-nav__link m-dropdown__toggle">
                          <span class="m-nav__link-icon m-nav__link-icon--aside-toggle">
                            <span class="m-nav__link-icon-wrapper"><i class="flaticon-grid-menu"></i></span>
                          </span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              <!-- end::Topbar -->
            </div>
          </div>
        </div>
        <div class="m-header__bottom">
          <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
            <div class="m-stack m-stack--ver m-stack--desktop">

              <!-- begin::Horizontal Menu -->
              <div class="m-stack__item m-stack__item--middle m-stack__item--fluid">
                <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn"><i class="la la-close"></i></button>
                <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light ">
                  <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                    <li class="m-menu__item  m-menu__item--active " aria-haspopup="true"><a href="index.html" class="m-menu__link "><span class="m-menu__item-here"></span><span class="m-menu__link-text">Dashboard</span></a></li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span
                         class="m-menu__link-text">Actions</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item " aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-diagram"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span class="m-menu__link-text">Generate
                                    Reports</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">2</span></span> </span></span></a></li>
                          <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-business"></i><span
                               class="m-menu__link-text">Manage Orders</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
                              <ul class="m-menu__subnav">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Latest Orders</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Pending Orders</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Processed Orders</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Delivery Reports</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Payments</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customers</span></a></li>
                              </ul>
                            </div>
                          </li>
                          <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-chat-1"></i><span
                               class="m-menu__link-text">Customer Feedbacks</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
                              <ul class="m-menu__subnav">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Customer Feedbacks</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Supplier Feedbacks</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reviewed Feedbacks</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Resolved Feedbacks</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Feedback Reports</span></a></li>
                              </ul>
                            </div>
                          </li>
                          <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Register Member</span></a></li>
                        </ul>
                      </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span
                         class="m-menu__item-here"></span><span class="m-menu__link-text">Reports</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                        <div class="m-menu__subnav">
                          <ul class="m-menu__content">
                            <li class="m-menu__item">
                              <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                              <ul class="m-menu__inner">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
                              </ul>
                            </li>
                            <li class="m-menu__item">
                              <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                              <ul class="m-menu__inner">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca Cola
                                      CRM</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
                                      Airlines Booking Site</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
                                      Accounting</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
                                      Website Rewamp</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
                                      Mobile App</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury CMS</span></a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><span class="m-menu__item-here"></span><span
                         class="m-menu__link-text">Orders</span><i class="m-menu__hor-arrow la la-angle-down"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                      <div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                        <div class="m-menu__subnav">
                          <ul class="m-menu__content">
                            <li class="m-menu__item">
                              <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Finance Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                              <ul class="m-menu__inner">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Annual Reports</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-user"></i><span class="m-menu__link-text">HR Reports</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-clipboard"></i><span class="m-menu__link-text">IPO Reports</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Finance Margins</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-text">Revenue Reports</span></a></li>
                              </ul>
                            </li>
                            <li class="m-menu__item">
                              <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Project Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                              <ul class="m-menu__inner">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Coca Cola
                                      CRM</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Delta
                                      Airlines Booking Site</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Malibu
                                      Accounting</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Vineseed
                                      Website Rewamp</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Zircon
                                      Mobile App</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--line"><span></span></i><span class="m-menu__link-text">Mercury CMS</span></a></li>
                              </ul>
                            </li>
                            <li class="m-menu__item">
                              <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">HR Reports</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                              <ul class="m-menu__inner">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
                                      Directory</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Client
                                      Directory</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Salary
                                      Reports</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Staff
                                      Payslips</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Corporate
                                      Expenses</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Project
                                      Expenses</span></a></li>
                              </ul>
                            </li>
                            <li class="m-menu__item">
                              <h3 class="m-menu__heading m-menu__toggle"><span class="m-menu__link-text">Reporting Apps</span><i class="m-menu__ver-arrow la la-angle-right"></i></h3>
                              <ul class="m-menu__inner">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Report Adjusments</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Sources & Mediums</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Reporting Settings</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Conversions</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Report Flows</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><span class="m-menu__link-text">Audit & Logs</span></a></li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </li>
                    <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--more m-menu__item--icon-only" m-menu-submenu-toggle="click" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle"
                       title="Non functional dummy link"><span class="m-menu__item-here"></span><i class="m-menu__link-icon flaticon-more-v3"></i><span class="m-menu__link-text"></span></a>
                      <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--pull"><span class="m-menu__arrow m-menu__arrow--adjust"></span>
                        <ul class="m-menu__subnav">
                          <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-business"></i><span class="m-menu__link-text">eCommerce</span></a></li>
                          <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="crud/datatable_v1.html" class="m-menu__link m-menu__toggle"><i class="m-menu__link-icon flaticon-computer"></i><span
                               class="m-menu__link-text">Audience</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right"><span class="m-menu__arrow "></span>
                              <ul class="m-menu__subnav">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text">Active Users</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-interface-1"></i><span class="m-menu__link-text">User Explorer</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-lifebuoy"></i><span class="m-menu__link-text">Users Flows</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-1"></i><span class="m-menu__link-text">Market Segments</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic"></i><span class="m-menu__link-text">User Reports</span></a></li>
                              </ul>
                            </div>
                          </li>
                          <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-map"></i><span class="m-menu__link-text">Marketing</span></a></li>
                          <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-graphic-2"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap">
                                  <span class="m-menu__link-text">Campaigns</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--success">3</span></span> </span></span></a></li>
                          <li class="m-menu__item  m-menu__item--submenu" m-menu-submenu-toggle="hover" m-menu-link-redirect="1" aria-haspopup="true"><a href="javascript:;" class="m-menu__link m-menu__toggle" title="Non functional dummy link"><i class="m-menu__link-icon flaticon-infinity"></i><span
                               class="m-menu__link-text">Cloud Manager</span><i class="m-menu__hor-arrow la la-angle-right"></i><i class="m-menu__ver-arrow la la-angle-right"></i></a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left"><span class="m-menu__arrow "></span>
                              <ul class="m-menu__subnav">
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-add"></i><span class="m-menu__link-title"> <span class="m-menu__link-wrap"> <span
                                         class="m-menu__link-text">File Upload</span> <span class="m-menu__link-badge"><span class="m-badge m-badge--danger">3</span></span> </span></span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-signs-1"></i><span class="m-menu__link-text">File Attributes</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-folder"></i><span class="m-menu__link-text">Folders</span></a></li>
                                <li class="m-menu__item " m-menu-link-redirect="1" aria-haspopup="true"><a href="inner.html" class="m-menu__link "><i class="m-menu__link-icon flaticon-cogwheel-2"></i><span class="m-menu__link-text">System Settings</span></a></li>
                              </ul>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- end::Horizontal Menu -->

              <!--begin::Search-->
              <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-" id="m_quicksearch"
               m-quicksearch-mode="default">

                <!--begin::Search Form -->
                <form class="m-header-search__form">
                  <div class="m-header-search__wrapper">
                    <span class="m-header-search__icon-search" id="m_quicksearch_search">
                      <i class="la la-search"></i>
                    </span>
                    <span class="m-header-search__input-wrapper">
                      <input autocomplete="off" type="text" name="q" class="m-header-search__input" value="" placeholder="Search..." id="m_quicksearch_input">
                    </span>
                    <span class="m-header-search__icon-close" id="m_quicksearch_close">
                      <i class="la la-remove"></i>
                    </span>
                    <span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
                      <i class="la la-remove"></i>
                    </span>
                  </div>
                </form>

                <!--end::Search Form -->

                <!--begin::Search Results -->
                <div class="m-dropdown__wrapper">
                  <div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
                  <div class="m-dropdown__inner">
                    <div class="m-dropdown__body">
                      <div class="m-dropdown__scrollable m-scrollable" data-scrollable="true" data-height="300" data-mobile-height="200">
                        <div class="m-dropdown__content m-list-search m-list-search--skin-light">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end::Search Results -->
              </div>

              <!--end::Search-->
            </div>
          </div>
        </div>
      </header>

      <!-- end::Header -->

      <!-- begin::Body -->
      <div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop  m-container m-container--responsive m-container--xxl m-page__container m-body">
        <div class="m-grid__item m-grid__item--fluid m-wrapper">

          <!-- BEGIN: Subheader -->
          <div class="m-subheader ">
            <div class="d-flex align-items-center">
              <div class="mr-auto">
                <h3 class="m-subheader__title ">Dashboard</h3>
              </div>
              <div>
                <span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
                  <span class="m-subheader__daterange-label">
                    <span class="m-subheader__daterange-title"></span>
                    <span class="m-subheader__daterange-date m--font-brand"></span>
                  </span>
                  <a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
                    <i class="la la-angle-down"></i>
                  </a>
                </span>
              </div>
            </div>
          </div>

          <!-- END: Subheader -->
          <div class="m-content">

            <!--begin:: Widgets/Stats-->
            <div class="m-portlet ">
              <div class="m-portlet__body  m-portlet__body--no-padding">
                <div class="row m-row--no-padding m-row--col-separator-xl">
                  <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::Total Profit-->
                    <div class="m-widget24">
                      <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                          Total Frofit
                        </h4><br>
                        <span class="m-widget24__desc">
                          All Customs Value
                        </span>
                        <span class="m-widget24__stats m--font-brand">
                          $18M
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                          <div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="m-widget24__change">
                          Change
                        </span>
                        <span class="m-widget24__number">
                          78%
                        </span>
                      </div>
                    </div>

                    <!--end::Total Profit-->
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Feedbacks-->
                    <div class="m-widget24">
                      <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                          New Feedbacks
                        </h4><br>
                        <span class="m-widget24__desc">
                          Customer Review
                        </span>
                        <span class="m-widget24__stats m--font-info">
                          1349
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                          <div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="m-widget24__change">
                          Change
                        </span>
                        <span class="m-widget24__number">
                          84%
                        </span>
                      </div>
                    </div>

                    <!--end::New Feedbacks-->
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Orders-->
                    <div class="m-widget24">
                      <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                          New Orders
                        </h4><br>
                        <span class="m-widget24__desc">
                          Fresh Order Amount
                        </span>
                        <span class="m-widget24__stats m--font-danger">
                          567
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                          <div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="m-widget24__change">
                          Change
                        </span>
                        <span class="m-widget24__number">
                          69%
                        </span>
                      </div>
                    </div>

                    <!--end::New Orders-->
                  </div>
                  <div class="col-md-12 col-lg-6 col-xl-3">

                    <!--begin::New Users-->
                    <div class="m-widget24">
                      <div class="m-widget24__item">
                        <h4 class="m-widget24__title">
                          New Users
                        </h4><br>
                        <span class="m-widget24__desc">
                          Joined New User
                        </span>
                        <span class="m-widget24__stats m--font-success">
                          276
                        </span>
                        <div class="m--space-10"></div>
                        <div class="progress m-progress--sm">
                          <div class="progress-bar m--bg-success" role="progressbar" style="width: 90%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <span class="m-widget24__change">
                          Change
                        </span>
                        <span class="m-widget24__number">
                          90%
                        </span>
                      </div>
                    </div>

                    <!--end::New Users-->
                  </div>
                </div>
              </div>
            </div>

            <!--end:: Widgets/Stats-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-4">

                <!--begin:: Widgets/New Users-->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          New Users
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                            Today
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                            Month
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="m_widget4_tab1_content">

                        <!--begin::Widget 14-->
                        <div class="m-widget4">

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_4.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Anna Strong
                              </span><br>
                              <span class="m-widget4__sub">
                                Visual Designer,Google Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_14.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Milano Esco
                              </span><br>
                              <span class="m-widget4__sub">
                                Product Designer, Apple Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_11.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Nick Bold
                              </span><br>
                              <span class="m-widget4__sub">
                                Web Developer, Facebook Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_1.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Wiltor Delton
                              </span><br>
                              <span class="m-widget4__sub">
                                Project Manager, Amazon Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_5.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Nick Stone
                              </span><br>
                              <span class="m-widget4__sub">
                                Visual Designer, Github Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->
                        </div>

                        <!--end::Widget 14-->
                      </div>
                      <div class="tab-pane" id="m_widget4_tab2_content">

                        <!--begin::Widget 14-->
                        <div class="m-widget4">

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_2.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Kristika Bold
                              </span><br>
                              <span class="m-widget4__sub">
                                Product Designer,Apple Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_13.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Ron Silk
                              </span><br>
                              <span class="m-widget4__sub">
                                Release Manager, Loop Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_9.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Nick Bold
                              </span><br>
                              <span class="m-widget4__sub">
                                Web Developer, Facebook Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_2.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Wiltor Delton
                              </span><br>
                              <span class="m-widget4__sub">
                                Project Manager, Amazon Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->

                          <!--end::Widget 14 Item-->

                          <!--begin::Widget 14 Item-->
                          <div class="m-widget4__item">
                            <div class="m-widget4__img m-widget4__img--pic">
                              <img src="assets/app/media/img/users/100_8.jpg" alt="">
                            </div>
                            <div class="m-widget4__info">
                              <span class="m-widget4__title">
                                Nick Bold
                              </span><br>
                              <span class="m-widget4__sub">
                                Web Developer, Facebook Inc
                              </span>
                            </div>
                            <div class="m-widget4__ext">
                              <a href="#" class="m-btn m-btn--pill m-btn--hover-brand btn btn-sm btn-secondary">Follow</a>
                            </div>
                          </div>

                          <!--end::Widget 14 Item-->
                        </div>

                        <!--end::Widget 14-->
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/New Users-->
              </div>
              <div class="col-xl-4">

                <!--begin:: Widgets/Inbound Bandwidth-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Inbound Bandwidth
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                          <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                            Today
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">

                    <!--begin::Widget5-->
                    <div class="m-widget20">
                      <div class="m-widget20__number m--font-success">670</div>
                      <div class="m-widget20__chart" style="height:160px;">
                        <canvas id="m_chart_bandwidth1"></canvas>
                      </div>
                    </div>

                    <!--end::Widget 5-->
                  </div>
                </div>

                <!--end:: Widgets/Inbound Bandwidth-->
                <div class="m--space-30"></div>

                <!--begin:: Widgets/Outbound Bandwidth-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--half-height m-portlet--fit " style="min-height: 300px">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Outbound Bandwidth
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                          <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                            Today
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">

                    <!--begin::Widget5-->
                    <div class="m-widget20">
                      <div class="m-widget20__number m--font-warning">340</div>
                      <div class="m-widget20__chart" style="height:160px;">
                        <canvas id="m_chart_bandwidth2"></canvas>
                      </div>
                    </div>

                    <!--end::Widget 5-->
                  </div>
                </div>

                <!--end:: Widgets/Outbound Bandwidth-->
              </div>
              <div class="col-xl-4">

                <!--begin:: Widgets/Top Products-->
                <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Top Products
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                          <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                            All
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 36.5px;"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">

                    <!--begin::Widget5-->
                    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 480px">
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img src="assets/app/media/img/client-logos/logo3.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            Phyton
                          </span><br>
                          <span class="m-widget4__sub">
                            A Programming Language
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-brand">+$17</span>
                        </span>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img src="assets/app/media/img/client-logos/logo1.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            FlyThemes
                          </span><br>
                          <span class="m-widget4__sub">
                            A Let's Fly Fast Again Language
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-brand">+$300</span>
                        </span>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--logo">
                          <img src="assets/app/media/img/client-logos/logo4.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__title">
                            Starbucks
                          </span><br>
                          <span class="m-widget4__sub">
                            Good Coffee & Snacks
                          </span>
                        </div>
                        <span class="m-widget4__ext">
                          <span class="m-widget4__number m--font-brand">+$300</span>
                        </span>
                      </div>
                      <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20" style="height:260px;">
                        <canvas id="m_chart_trends_stats_2"></canvas>
                      </div>
                    </div>

                    <!--end::Widget 5-->
                  </div>
                </div>

                <!--end:: Widgets/Top Products-->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-6">

                <!--begin:: Widgets/Support Cases-->
                <div class="m-portlet  m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Support Cases
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                          <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                            <i class="la la-ellipsis-h m--font-brand"></i>
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__section m-nav__section--first">
                                      <span class="m-nav__section-text">Quick Actions</span>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="m-widget16">
                      <div class="row">
                        <div class="col-md-5">
                          <div class="m-widget16__head">
                            <div class="m-widget16__item">
                              <span class="m-widget16__sceduled">
                                Type
                              </span>
                              <span class="m-widget16__amount m--align-right">
                                Amount
                              </span>
                            </div>
                          </div>
                          <div class="m-widget16__body">

                            <!--begin::widget item-->
                            <div class="m-widget16__item">
                              <span class="m-widget16__date">
                                EPS
                              </span>
                              <span class="m-widget16__price m--align-right m--font-brand">
                                +78,05%
                              </span>
                            </div>

                            <!--end::widget item-->

                            <!--begin::widget item-->
                            <div class="m-widget16__item">
                              <span class="m-widget16__date">
                                PDO
                              </span>
                              <span class="m-widget16__price m--align-right m--font-accent">
                                21,700
                              </span>
                            </div>

                            <!--end::widget item-->

                            <!--begin::widget item-->
                            <div class="m-widget16__item">
                              <span class="m-widget16__date">
                                OPL Status
                              </span>
                              <span class="m-widget16__price m--align-right m--font-danger">
                                Negative
                              </span>
                            </div>

                            <!--end::widget item-->

                            <!--begin::widget item-->
                            <div class="m-widget16__item">
                              <span class="m-widget16__date">
                                Priority
                              </span>
                              <span class="m-widget16__price m--align-right m--font-brand">
                                +500,200
                              </span>
                            </div>

                            <!--end::widget item-->

                            <!--begin::widget item-->
                            <div class="m-widget16__item">
                              <span class="m-widget16__date">
                                Net Prifit
                              </span>
                              <span class="m-widget16__price m--align-right m--font-brand">
                                $18,540,60
                              </span>
                            </div>

                            <!--end::widget item-->
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div class="m-widget16__stats">
                            <div class="m-widget16__visual">
                              <div id="m_chart_support_tickets" style="height: 180px">
                              </div>
                            </div>
                            <div class="m-widget16__legends">
                              <div class="m-widget16__legend">
                                <span class="m-widget16__legend-bullet m--bg-info"></span>
                                <span class="m-widget16__legend-text">20% Margins</span>
                              </div>
                              <div class="m-widget16__legend">
                                <span class="m-widget16__legend-bullet m--bg-accent"></span>
                                <span class="m-widget16__legend-text">80% Profit</span>
                              </div>
                              <div class="m-widget16__legend">
                                <span class="m-widget16__legend-bullet m--bg-danger"></span>
                                <span class="m-widget16__legend-text">10% Lost</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Support Stats-->
              </div>
              <div class="col-xl-6">

                <!--begin:: Finance Stats-->
                <div class="m-portlet  m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Finance Stats
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                          <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                            <i class="la la-ellipsis-h m--font-brand"></i>
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__section m-nav__section--first">
                                      <span class="m-nav__section-text">Quick Actions</span>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="m-widget1 m-widget1--paddingless">
                      <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                          <div class="col">
                            <h3 class="m-widget1__title">IPO Margin</h3>
                            <span class="m-widget1__desc">Awerage IPO Margin</span>
                          </div>
                          <div class="col m--align-right">
                            <span class="m-widget1__number m--font-accent">+24%</span>
                          </div>
                        </div>
                      </div>
                      <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                          <div class="col">
                            <h3 class="m-widget1__title">Payments</h3>
                            <span class="m-widget1__desc">Yearly Expenses</span>
                          </div>
                          <div class="col m--align-right">
                            <span class="m-widget1__number m--font-info">+$560,800</span>
                          </div>
                        </div>
                      </div>
                      <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                          <div class="col">
                            <h3 class="m-widget1__title">Logistics</h3>
                            <span class="m-widget1__desc">Overall Regional Logistics</span>
                          </div>
                          <div class="col m--align-right">
                            <span class="m-widget1__number m--font-warning">-10%</span>
                          </div>
                        </div>
                      </div>
                      <div class="m-widget1__item">
                        <div class="row m-row--no-padding align-items-center">
                          <div class="col">
                            <h3 class="m-widget1__title">Expenses</h3>
                            <span class="m-widget1__desc">Balance</span>
                          </div>
                          <div class="col m--align-right">
                            <span class="m-widget1__number m--font-danger">$345,000</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Finance Stats-->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-12">

                <!--begin::Portlet-->
                <div class="m-portlet " id="m_portlet">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <span class="m-portlet__head-icon">
                          <i class="flaticon-map-location"></i>
                        </span>
                        <h3 class="m-portlet__head-text">
                          Calendar
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                          <a href="#" class="btn btn-accent m-btn m-btn--custom m-btn--icon m-btn--pill m-btn--air">
                            <span>
                              <i class="la la-plus"></i>
                              <span>Add Event</span>
                            </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div id="m_calendar"></div>
                  </div>
                </div>

                <!--end::Portlet-->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-6 col-lg-12">

                <!--Begin::Portlet-->
                <div class="m-portlet  m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Recent Activities
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                          <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                            <i class="la la-ellipsis-h m--font-brand"></i>
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__section m-nav__section--first">
                                      <span class="m-nav__section-text">Quick Actions</span>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="m-scrollable" data-scrollable="true" data-height="380" data-mobile-height="300">

                      <!--Begin::Timeline 2 -->
                      <div class="m-timeline-2">
                        <div class="m-timeline-2__items  m--padding-top-25 m--padding-bottom-30">
                          <div class="m-timeline-2__item">
                            <span class="m-timeline-2__item-time">10:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-danger"></i>
                            </div>
                            <div class="m-timeline-2__item-text  m--padding-top-5">
                              Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                              incididunt ut labore et dolore magna
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">12:45</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-success"></i>
                            </div>
                            <div class="m-timeline-2__item-text m-timeline-2__item-text--bold">
                              AEOL Meeting With
                            </div>
                            <div class="m-list-pics m-list-pics--sm m--padding-left-20">
                              <a href="#"><img src="assets/app/media/img/users/100_4.jpg" title=""></a>
                              <a href="#"><img src="assets/app/media/img/users/100_13.jpg" title=""></a>
                              <a href="#"><img src="assets/app/media/img/users/100_11.jpg" title=""></a>
                              <a href="#"><img src="assets/app/media/img/users/100_14.jpg" title=""></a>
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">14:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-brand"></i>
                            </div>
                            <div class="m-timeline-2__item-text m--padding-top-5">
                              Make Deposit <a href="#" class="m-link m-link--brand m--font-bolder">USD 700</a> To ESL.
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">16:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-warning"></i>
                            </div>
                            <div class="m-timeline-2__item-text m--padding-top-5">
                              Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                              incididunt ut labore et dolore magna elit enim at minim<br>
                              veniam quis nostrud
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">17:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-info"></i>
                            </div>
                            <div class="m-timeline-2__item-text m--padding-top-5">
                              Placed a new order in <a href="#" class="m-link m-link--brand m--font-bolder">SIGNATURE MOBILE</a> marketplace.
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">16:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-brand"></i>
                            </div>
                            <div class="m-timeline-2__item-text m--padding-top-5">
                              Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
                              incididunt ut labore et dolore magna elit enim at minim<br>
                              veniam quis nostrud
                            </div>
                          </div>
                          <div class="m-timeline-2__item m--margin-top-30">
                            <span class="m-timeline-2__item-time">17:00</span>
                            <div class="m-timeline-2__item-cricle">
                              <i class="fa fa-genderless m--font-danger"></i>
                            </div>
                            <div class="m-timeline-2__item-text m--padding-top-5">
                              Received a new feedback on <a href="#" class="m-link m-link--brand m--font-bolder">FinancePro App</a> product.
                            </div>
                          </div>
                        </div>
                      </div>

                      <!--End::Timeline 2 -->
                    </div>
                  </div>
                </div>

                <!--End::Portlet-->
              </div>
              <div class="col-xl-6 col-lg-12">

                <!--Begin::Portlet-->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Recent Notifications
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget2_tab1_content" role="tab">
                            Today
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget2_tab2_content" role="tab">
                            Month
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="m_widget2_tab1_content">

                        <!--Begin::Timeline 3 -->
                        <div class="m-timeline-3">
                          <div class="m-timeline-3__items">
                            <div class="m-timeline-3__item m-timeline-3__item--info">
                              <span class="m-timeline-3__item-time">09:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit,consectetur eiusmdd tempor
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Bob
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--warning">
                              <span class="m-timeline-3__item-time">10:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Sean
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--brand">
                              <span class="m-timeline-3__item-time">11:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit eiusmdd tempor
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By James
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--success">
                              <span class="m-timeline-3__item-time">12:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By James
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--danger">
                              <span class="m-timeline-3__item-time">14:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit,consectetur eiusmdd
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Derrick
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--info">
                              <span class="m-timeline-3__item-time">15:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit amit,consectetur
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Iman
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--brand">
                              <span class="m-timeline-3__item-time">17:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem ipsum dolor sit consectetur eiusmdd tempor
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Aziko
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--End::Timeline 3 -->
                      </div>
                      <div class="tab-pane" id="m_widget2_tab2_content">

                        <!--Begin::Timeline 3 -->
                        <div class="m-timeline-3">
                          <div class="m-timeline-3__items">
                            <div class="m-timeline-3__item m-timeline-3__item--info">
                              <span class="m-timeline-3__item-time m--font-focus">09:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Contrary to popular belief, Lorem Ipsum is not simply random text.
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Bob
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--warning">
                              <span class="m-timeline-3__item-time m--font-warning">10:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  There are many variations of passages of Lorem Ipsum available.
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Sean
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--brand">
                              <span class="m-timeline-3__item-time m--font-primary">11:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Contrary to popular belief, Lorem Ipsum is not simply random text.
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By James
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--success">
                              <span class="m-timeline-3__item-time m--font-success">12:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  The standard chunk of Lorem Ipsum used since the 1500s is reproduced.
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By James
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--danger">
                              <span class="m-timeline-3__item-time m--font-warning">14:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Latin words, combined with a handful of model sentence structures.
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Derrick
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--info">
                              <span class="m-timeline-3__item-time m--font-info">15:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Contrary to popular belief, Lorem Ipsum is not simply random text.
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Iman
                                  </a>
                                </span>
                              </div>
                            </div>
                            <div class="m-timeline-3__item m-timeline-3__item--brand">
                              <span class="m-timeline-3__item-time m--font-danger">17:00</span>
                              <div class="m-timeline-3__item-desc">
                                <span class="m-timeline-3__item-text">
                                  Lorem Ipsum is therefore always free from repetition, injected humour.
                                </span><br>
                                <span class="m-timeline-3__item-user-name">
                                  <a href="#" class="m-link m-link--metal m-timeline-3__item-link">
                                    By Aziko
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!--End::Timeline 3 -->
                      </div>
                    </div>
                  </div>
                </div>

                <!--End::Portlet-->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-8">

                <!--begin:: Widgets/Application Sales-->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Application Sales
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget11_tab1_content" role="tab">
                            Last Month
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget11_tab2_content" role="tab">
                            All Time
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="m_widget11_tab1_content">

                        <!--begin::Widget 11-->
                        <div class="m-widget11">
                          <div class="table-responsive">

                            <!--begin::Table-->
                            <table class="table">

                              <!--begin::Thead-->
                              <thead>
                                <tr>
                                  <td class="m-widget11__label">#</td>
                                  <td class="m-widget11__app">Application</td>
                                  <td class="m-widget11__sales">Sales</td>
                                  <td class="m-widget11__change">Change</td>
                                  <td class="m-widget11__price">Avg Price</td>
                                  <td class="m-widget11__total m--align-right">Total</td>
                                </tr>
                              </thead>

                              <!--end::Thead-->

                              <!--begin::Tbody-->
                              <tbody>
                                <tr>
                                  <td>
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                      <input type="checkbox"><span></span>
                                    </label>
                                  </td>
                                  <td>
                                    <span class="m-widget11__title">Vertex 2.0</span>
                                    <span class="m-widget11__sub">Vertex To By Again</span>
                                  </td>
                                  <td>19,200</td>
                                  <td>
                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                      <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <canvas id="m_chart_sales_by_apps_1_1" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                    </div>
                                  </td>
                                  <td>$63</td>
                                  <td class="m--align-right m--font-brand">$14,740</td>
                                </tr>
                                <tr>
                                  <td>
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                  </td>
                                  <td>
                                    <span class="m-widget11__title">Metronic</span>
                                    <span class="m-widget11__sub">Powerful Admin Theme</span>
                                  </td>
                                  <td>24,310</td>
                                  <td>
                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                      <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <canvas id="m_chart_sales_by_apps_1_2" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                    </div>
                                  </td>
                                  <td>$39</td>
                                  <td class="m--align-right m--font-brand">$16,010</td>
                                </tr>
                                <tr>
                                  <td>
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                  </td>
                                  <td>
                                    <span class="m-widget11__title">Apex</span>
                                    <span class="m-widget11__sub">The Best Selling App</span>
                                  </td>
                                  <td>9,076</td>
                                  <td>
                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                      <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <canvas id="m_chart_sales_by_apps_1_3" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                    </div>
                                  </td>
                                  <td>$105</td>
                                  <td class="m--align-right m--font-brand">$37,200</td>
                                </tr>
                                <tr>
                                  <td>
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                  </td>
                                  <td>
                                    <span class="m-widget11__title">Cascades</span>
                                    <span class="m-widget11__sub">Design Tool</span>
                                  </td>
                                  <td>11,094</td>
                                  <td>
                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                      <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <canvas id="m_chart_sales_by_apps_1_4" style="display: block; width: 100px; height: 50px;" width="100" height="50"></canvas>
                                    </div>
                                  </td>
                                  <td>$16</td>
                                  <td class="m--align-right m--font-brand">$8,520</td>
                                </tr>
                              </tbody>

                              <!--end::Tbody-->
                            </table>

                            <!--end::Table-->
                          </div>
                          <div class="m-widget11__action m--align-right">
                            <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">Generate Report</button>
                          </div>
                        </div>

                        <!--end::Widget 11-->
                      </div>
                      <div class="tab-pane" id="m_widget11_tab2_content">

                        <!--begin::Widget 11-->
                        <div class="m-widget11">
                          <div class="table-responsive">

                            <!--begin::Table-->
                            <table class="table">

                              <!--begin::Thead-->
                              <thead>
                                <tr>
                                  <td class="m-widget11__label">#</td>
                                  <td class="m-widget11__app">Application</td>
                                  <td class="m-widget11__sales">Sales</td>
                                  <td class="m-widget11__change">Change</td>
                                  <td class="m-widget11__price">Avg Price</td>
                                  <td class="m-widget11__total m--align-right">Total</td>
                                </tr>
                              </thead>

                              <!--end::Thead-->

                              <!--begin::Tbody-->
                              <tbody>
                                <tr>
                                  <td>
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand">
                                      <input type="checkbox"><span></span>
                                    </label>
                                  </td>
                                  <td>
                                    <span class="m-widget11__title">Loop</span>
                                    <span class="m-widget11__sub">CRM System</span>
                                  </td>
                                  <td>19,200</td>
                                  <td>
                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                      <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <canvas id="m_chart_sales_by_apps_2_1" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                    </div>
                                  </td>
                                  <td>$63</td>
                                  <td class="m--align-right m--font-brand">$34,740</td>
                                </tr>
                                <tr>
                                  <td>
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                  </td>
                                  <td>
                                    <span class="m-widget11__title">Selto</span>
                                    <span class="m-widget11__sub">Powerful Website Builder</span>
                                  </td>
                                  <td>24,310</td>
                                  <td>
                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                      <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <canvas id="m_chart_sales_by_apps_2_2" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                    </div>
                                  </td>
                                  <td>$39</td>
                                  <td class="m--align-right m--font-brand">$46,010</td>
                                </tr>
                                <tr>
                                  <td>
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                  </td>
                                  <td>
                                    <span class="m-widget11__title">Jippo</span>
                                    <span class="m-widget11__sub">The Best Selling App</span>
                                  </td>
                                  <td>9,076</td>
                                  <td>
                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                      <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <canvas id="m_chart_sales_by_apps_2_3" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                    </div>
                                  </td>
                                  <td>$105</td>
                                  <td class="m--align-right m--font-brand">$67,800</td>
                                </tr>
                                <tr>
                                  <td>
                                    <label class="m-checkbox m-checkbox--solid m-checkbox--single m-checkbox--brand"><input type="checkbox"><span></span></label>
                                  </td>
                                  <td>
                                    <span class="m-widget11__title">Verto</span>
                                    <span class="m-widget11__sub">Web Development Tool</span>
                                  </td>
                                  <td>11,094</td>
                                  <td>
                                    <div class="m-widget11__chart" style="height:50px; width: 100px">
                                      <iframe class="chartjs-hidden-iframe" tabindex="-1" style="display: block; overflow: hidden; border: 0px; margin: 0px; top: 0px; left: 0px; bottom: 0px; right: 0px; height: 100%; width: 100%; position: absolute; pointer-events: none; z-index: -1;"></iframe>
                                      <canvas id="m_chart_sales_by_apps_2_4" style="display: block; width: 0px; height: 0px;" height="0" width="0"></canvas>
                                    </div>
                                  </td>
                                  <td>$16</td>
                                  <td class="m--align-right m--font-brand">$18,520</td>
                                </tr>
                              </tbody>

                              <!--end::Tbody-->
                            </table>

                            <!--end::Table-->
                          </div>
                          <div class="m-widget11__action m--align-right">
                            <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--custom m-btn--hover-brand">Generate Report</button>
                          </div>
                        </div>

                        <!--end::Widget 11-->
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Application Sales-->
              </div>
              <div class="col-xl-4">

                <!--begin:: Widgets/Latest Updates-->
                <div class="m-portlet m-portlet--full-height m-portlet--fit ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Latest Updates
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                          <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-brand">
                            Today
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="m-widget4 m-widget4--chart-bottom" style="min-height: 350px">
                      <div class="m-widget4__item">
                        <div class="m-widget4__ext">
                          <a href="#" class="m-widget4__icon m--font-brand">
                            <i class="flaticon-interface-3"></i>
                          </a>
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__text">
                            Make Metronic Great Again
                          </span>
                        </div>
                        <div class="m-widget4__ext">
                          <span class="m-widget4__number m--font-accent">+500</span>
                        </div>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__ext">
                          <a href="#" class="m-widget4__icon m--font-brand">
                            <i class="flaticon-folder-4"></i>
                          </a>
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__text">
                            Green Maker Team
                          </span>
                        </div>
                        <div class="m-widget4__ext">
                          <span class="m-widget4__stats m--font-info">
                            <span class="m-widget4__number m--font-accent">-64</span>
                          </span>
                        </div>
                      </div>
                      <div class="m-widget4__item">
                        <div class="m-widget4__ext">
                          <a href="#" class="m-widget4__icon m--font-brand">
                            <i class="flaticon-line-graph"></i>
                          </a>
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__text">
                            Make Apex Great Again
                          </span>
                        </div>
                        <div class="m-widget4__ext">
                          <span class="m-widget4__stats m--font-info">
                            <span class="m-widget4__number m--font-accent">+1080</span>
                          </span>
                        </div>
                      </div>
                      <div class="m-widget4__item m-widget4__item--last">
                        <div class="m-widget4__ext">
                          <a href="#" class="m-widget4__icon m--font-brand">
                            <i class="flaticon-diagram"></i>
                          </a>
                        </div>
                        <div class="m-widget4__info">
                          <span class="m-widget4__text">
                            A Programming Language
                          </span>
                        </div>
                        <div class="m-widget4__ext">
                          <span class="m-widget4__stats m--font-info">
                            <span class="m-widget4__number m--font-accent">+19</span>
                          </span>
                        </div>
                      </div>
                      <div class="m-widget4__chart m-portlet-fit--sides m--margin-top-20 m-portlet-fit--bottom1" style="height:120px;">
                        <canvas id="m_chart_latest_updates"></canvas>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Latest Updates-->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-8">
                <div class="m-portlet m-portlet--mobile ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Exclusive Datatable Plugin
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                          <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                            <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                              <i class="la la-ellipsis-h m--font-brand"></i>
                            </a>
                            <div class="m-dropdown__wrapper">
                              <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                              <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                  <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                      <li class="m-nav__section m-nav__section--first">
                                        <span class="m-nav__section-text">Quick Actions</span>
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i class="m-nav__link-icon flaticon-share"></i>
                                          <span class="m-nav__link-text">Create Post</span>
                                        </a>
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i class="m-nav__link-icon flaticon-chat-1"></i>
                                          <span class="m-nav__link-text">Send Messages</span>
                                        </a>
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                          <span class="m-nav__link-text">Upload File</span>
                                        </a>
                                      </li>
                                      <li class="m-nav__section">
                                        <span class="m-nav__section-text">Useful Links</span>
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i class="m-nav__link-icon flaticon-info"></i>
                                          <span class="m-nav__link-text">FAQ</span>
                                        </a>
                                      </li>
                                      <li class="m-nav__item">
                                        <a href="" class="m-nav__link">
                                          <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                          <span class="m-nav__link-text">Support</span>
                                        </a>
                                      </li>
                                      <li class="m-nav__separator m-nav__separator--fit m--hide">
                                      </li>
                                      <li class="m-nav__item m--hide">
                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">

                    <!--begin: Datatable -->
                    <div class="m_datatable" id="m_datatable_latest_orders"></div>

                    <!--end: Datatable -->
                  </div>
                </div>
              </div>
              <div class="col-xl-4">

                <!--begin:: Widgets/Audit Log-->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Audit Log
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                            Today
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                            Week
                          </a>
                        </li>
                        <li class="nav-item m-tabs__item">
                          <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                            Month
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="tab-content">
                      <div class="tab-pane active" id="m_widget4_tab1_content">
                        <div class="m-scrollable" data-scrollable="true" data-height="400" style="height: 400px; overflow: hidden;">
                          <div class="m-list-timeline m-list-timeline--skin-light">
                            <div class="m-list-timeline__items">
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                <span class="m-list-timeline__text">12 new users registered</span>
                                <span class="m-list-timeline__time">Just now</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                <span class="m-list-timeline__time">14 mins</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                <span class="m-list-timeline__text">New invoice received</span>
                                <span class="m-list-timeline__time">20 mins</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                <span class="m-list-timeline__time">1 hr</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                <span class="m-list-timeline__time">2 hrs</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                <span class="m-list-timeline__text">Production server down</span>
                                <span class="m-list-timeline__time">3 hrs</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                <span class="m-list-timeline__text">Production server up</span>
                                <span class="m-list-timeline__time">5 hrs</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                <span class="m-list-timeline__time">7 hrs</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                <span class="m-list-timeline__text">12 new users registered</span>
                                <span class="m-list-timeline__time">Just now</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                <span class="m-list-timeline__text">System shutdown <span class="m-badge m-badge--success m-badge--wide">pending</span></span>
                                <span class="m-list-timeline__time">14 mins</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                <span class="m-list-timeline__text">New invoice received</span>
                                <span class="m-list-timeline__time">20 mins</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                <span class="m-list-timeline__time">1 hr</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--danger"></span>
                                <span class="m-list-timeline__text">New invoice received</span>
                                <span class="m-list-timeline__time">20 mins</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--accent"></span>
                                <span class="m-list-timeline__text">DB overloaded 80% <span class="m-badge m-badge--info m-badge--wide">settled</span></span>
                                <span class="m-list-timeline__time">1 hr</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--warning"></span>
                                <span class="m-list-timeline__text">System error - <a href="#" class="m-link">Check</a></span>
                                <span class="m-list-timeline__time">2 hrs</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--brand"></span>
                                <span class="m-list-timeline__text">Production server down</span>
                                <span class="m-list-timeline__time">3 hrs</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--info"></span>
                                <span class="m-list-timeline__text">Production server up</span>
                                <span class="m-list-timeline__time">5 hrs</span>
                              </div>
                              <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                <span href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--danger m-badge--wide">urgent</span></span>
                                <span class="m-list-timeline__time">7 hrs</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane" id="m_widget4_tab2_content">
                      </div>
                      <div class="tab-pane" id="m_widget4_tab3_content">
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Audit Log-->
              </div>
            </div>

            <!--End::Section-->

            <!--Begin::Section-->
            <div class="row">
              <div class="col-xl-4">

                <!--begin:: Widgets/Announcements 1-->
                <div class="m-portlet m--bg-accent m-portlet--bordered-semi m-portlet--skin-dark m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Announcements
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover">
                          <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                            <i class="la la-ellipsis-h m--font-light"></i>
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__section m-nav__section--first">
                                      <span class="m-nav__section-text">Quick Actions</span>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__separator m-nav__separator--fit">
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Cancel</a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">

                    <!--begin::Widget 7-->
                    <div class="m-widget7 m-widget7--skin-dark">
                      <div class="m-widget7__desc">
                        Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy euismod tinciduntut laoreet doloremagna
                      </div>
                      <div class="m-widget7__user">
                        <div class="m-widget7__user-img">
                          <img class="m-widget7__img" src="assets/app/media/img//users/100_3.jpg" alt="">
                        </div>
                        <div class="m-widget7__info">
                          <span class="m-widget7__username">
                            Dan Bold
                          </span><br>
                          <span class="m-widget7__time">
                            3 days ago
                          </span>
                        </div>
                      </div>
                      <div class="m-widget7__button">
                        <a class="m-btn m-btn--pill btn btn-danger" href="#" role="button">All Feeds</a>
                      </div>
                    </div>

                    <!--end::Widget 7-->
                  </div>
                </div>

                <!--end:: Widgets/Announcements 1-->
              </div>
              <div class="col-xl-4">

                <!--begin:: Widgets/Blog-->
                <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height  m-portlet--rounded-force">
                  <div class="m-portlet__head m-portlet__head--fit">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-action">
                        <button type="button" class="btn btn-sm m-btn--pill  btn-brand">Blog</button>
                      </div>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="m-widget19">
                      <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height-: 286px">
                        <img src="assets/app/media/img//blog/blog1.jpg" alt="">
                        <h3 class="m-widget19__title m--font-light">
                          Introducing New Feature
                        </h3>
                        <div class="m-widget19__shadow"></div>
                      </div>
                      <div class="m-widget19__content">
                        <div class="m-widget19__header">
                          <div class="m-widget19__user-img">
                            <img class="m-widget19__img" src="assets/app/media/img//users/user1.jpg" alt="">
                          </div>
                          <div class="m-widget19__info">
                            <span class="m-widget19__username">
                              Anna Krox
                            </span><br>
                            <span class="m-widget19__time">
                              UX/UI Designer, Google
                            </span>
                          </div>
                          <div class="m-widget19__stats">
                            <span class="m-widget19__number m--font-brand">
                              18
                            </span>
                            <span class="m-widget19__comment">
                              Comments
                            </span>
                          </div>
                        </div>
                        <div class="m-widget19__body">
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry scrambled it to make text of the printing and typesetting industry scrambled a type specimen book text of the dummy text of the printing printing and typesetting
                          industry scrambled dummy text of the printing.
                        </div>
                      </div>
                      <div class="m-widget19__action">
                        <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">Read More</button>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Blog-->
              </div>
              <div class="col-xl-4">

                <!--begin:: Widgets/Sales States-->
                <div class="m-portlet m-portlet--full-height ">
                  <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                      <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                          Sales Stats
                        </h3>
                      </div>
                    </div>
                    <div class="m-portlet__head-tools">
                      <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                          <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl">
                            <i class="fa fa-genderless m--font-brand"></i>
                          </a>
                          <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 17px;"></span>
                            <div class="m-dropdown__inner">
                              <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                  <ul class="m-nav">
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">Activity</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">Messages</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-info"></i>
                                        <span class="m-nav__link-text">FAQ</span>
                                      </a>
                                    </li>
                                    <li class="m-nav__item">
                                      <a href="" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">Support</span>
                                      </a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="m-portlet__body">
                    <div class="m-widget6">
                      <div class="m-widget6__head">
                        <div class="m-widget6__item">
                          <span class="m-widget6__caption">
                            Sceduled
                          </span>
                          <span class="m-widget6__caption">
                            Count
                          </span>
                          <span class="m-widget6__caption m--align-right">
                            Amount
                          </span>
                        </div>
                      </div>
                      <div class="m-widget6__body">
                        <div class="m-widget6__item">
                          <span class="m-widget6__text">
                            16/13/17
                          </span>
                          <span class="m-widget6__text">
                            67
                          </span>
                          <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                            $14,740
                          </span>
                        </div>
                        <div class="m-widget6__item">
                          <span class="m-widget6__text">
                            02/28/17
                          </span>
                          <span class="m-widget6__text">
                            120
                          </span>
                          <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                            $11,002
                          </span>
                        </div>
                        <div class="m-widget6__item">
                          <span class="m-widget6__text">
                            03/06/17
                          </span>
                          <span class="m-widget6__text">
                            32
                          </span>
                          <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                            $10,900
                          </span>
                        </div>
                        <div class="m-widget6__item">
                          <span class="m-widget6__text">
                            10/21/17
                          </span>
                          <span class="m-widget6__text">
                            130
                          </span>
                          <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                            $14,740
                          </span>
                        </div>
                        <div class="m-widget6__item">
                          <span class="m-widget6__text">
                            01/02/17
                          </span>
                          <span class="m-widget6__text">
                            5
                          </span>
                          <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                            $18,540
                          </span>
                        </div>
                        <div class="m-widget6__item">
                          <span class="m-widget6__text">
                            03/06/17
                          </span>
                          <span class="m-widget6__text">
                            32
                          </span>
                          <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                            $10,900
                          </span>
                        </div>
                        <div class="m-widget6__item">
                          <span class="m-widget6__text">
                            12/31/17
                          </span>
                          <span class="m-widget6__text">
                            201
                          </span>
                          <span class="m-widget6__text m--align-right m--font-boldest m--font-brand">
                            $25,609
                          </span>
                        </div>
                      </div>
                      <div class="m-widget6__foot">
                        <div class="m-widget6__action m--align-right">
                          <button type="button" class="btn m-btn--pill btn-secondary m-btn m-btn--hover-brand m-btn--custom">Export</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--end:: Widgets/Sales States-->
              </div>
            </div>

            <!--End::Section-->
          </div>
        </div>

        <!--</div>-->
      </div>

      <!-- end::Body -->

      <!-- begin::Footer -->
      <footer class="m-grid__item m-footer ">
        <div class="m-container m-container--responsive m-container--xxl m-container--full-height m-page__container">
          <div class="m-footer__wrapper">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
              <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
                <span class="m-footer__copyright">
                   2019 &copy; Copyright <a href="http://13.92.240.159/demo/public/" class="m-link">Sports Travel HQ</a>
                </span>
              </div>
              <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                  <li class="m-nav__item">
                    <a href="#" class="m-nav__link">
                      <span class="m-nav__link-text">About</span>
                    </a>
                  </li>
                  <li class="m-nav__item">
                    <a href="#" class="m-nav__link">
                      <span class="m-nav__link-text">Privacy</span>
                    </a>
                  </li>
                  <li class="m-nav__item">
                    <a href="#" class="m-nav__link">
                      <span class="m-nav__link-text">T&C</span>
                    </a>
                  </li>
                  <li class="m-nav__item">
                    <a href="#" class="m-nav__link">
                      <span class="m-nav__link-text">Purchase</span>
                    </a>
                  </li>
                  <li class="m-nav__item m-nav__item--last">
                    <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                      <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>

      <!-- end::Footer -->
    </div>

    <!-- end:: Page -->

    <!-- begin::Quick Sidebar -->
    <div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
      <div class="m-quick-sidebar__content m--hide">
        <span id="m_quick_sidebar_close" class="m-quick-sidebar__close"><i class="la la-close"></i></span>
        <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
          <li class="nav-item m-tabs__item">
            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">Messages</a>
          </li>
          <li class="nav-item m-tabs__item">
            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">Settings</a>
          </li>
          <li class="nav-item m-tabs__item">
            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">Logs</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
            <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
              <div class="m-messenger__messages m-scrollable">
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-pic">
                      <img src="assets/app/media/img//users/user3.jpg" alt="" />
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Hi Bob. What time will be the meeting ?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Hi Megan. It's at 2.30PM
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-pic">
                      <img src="assets/app/media/img//users/user3.jpg" alt="" />
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Will the development team be joining ?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Yes sure. I invited them as well
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__datetime">2:30PM</div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-pic">
                      <img src="assets/app/media/img//users/user3.jpg" alt="" />
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Noted. For the Coca-Cola Mobile App project as well ?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Yes, sure.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Please also prepare the quotation for the Loop CRM project as well.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__datetime">3:15PM</div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-no-pic m--bg-fill-danger">
                      <span>M</span>
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Noted. I will prepare it.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--out">
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-text">
                          Thanks Megan. I will see you later.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="m-messenger__wrapper">
                  <div class="m-messenger__message m-messenger__message--in">
                    <div class="m-messenger__message-pic">
                      <img src="assets/app/media/img//users/user3.jpg" alt="" />
                    </div>
                    <div class="m-messenger__message-body">
                      <div class="m-messenger__message-arrow"></div>
                      <div class="m-messenger__message-content">
                        <div class="m-messenger__message-username">
                          Megan wrote
                        </div>
                        <div class="m-messenger__message-text">
                          Sure. See you in the meeting soon.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="m-messenger__seperator"></div>
              <div class="m-messenger__form">
                <div class="m-messenger__form-controls">
                  <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                </div>
                <div class="m-messenger__form-tools">
                  <a href="" class="m-messenger__form-attachment">
                    <i class="la la-paperclip"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="m_quick_sidebar_tabs_settings" role="tabpanel">
            <div class="m-list-settings m-scrollable">
              <div class="m-list-settings__group">
                <div class="m-list-settings__heading">General Settings</div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Email Notifications</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Site Tracking</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">SMS Alerts</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Backup Storage</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Audit Logs</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
              </div>
              <div class="m-list-settings__group">
                <div class="m-list-settings__heading">System Settings</div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">System Logs</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Error Reporting</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Applications Logs</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Backup Servers</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" checked="checked" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
                <div class="m-list-settings__item">
                  <span class="m-list-settings__item-label">Audit Logs</span>
                  <span class="m-list-settings__item-control">
                    <span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
                      <label>
                        <input type="checkbox" name="">
                        <span></span>
                      </label>
                    </span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="m_quick_sidebar_tabs_logs" role="tabpanel">
            <div class="m-list-timeline m-scrollable">
              <div class="m-list-timeline__group">
                <div class="m-list-timeline__heading">
                  System Logs
                </div>
                <div class="m-list-timeline__items">
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">12 new users registered <span class="m-badge m-badge--warning m-badge--wide">important</span></a>
                    <span class="m-list-timeline__time">Just now</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">System shutdown</a>
                    <span class="m-list-timeline__time">11 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                    <a href="" class="m-list-timeline__text">New invoice received</a>
                    <span class="m-list-timeline__time">20 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                    <a href="" class="m-list-timeline__text">Database overloaded 89% <span class="m-badge m-badge--success m-badge--wide">resolved</span></a>
                    <span class="m-list-timeline__time">1 hr</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">System error</a>
                    <span class="m-list-timeline__time">2 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">Production server down <span class="m-badge m-badge--danger m-badge--wide">pending</span></a>
                    <span class="m-list-timeline__time">3 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">Production server up</a>
                    <span class="m-list-timeline__time">5 hrs</span>
                  </div>
                </div>
              </div>
              <div class="m-list-timeline__group">
                <div class="m-list-timeline__heading">
                  Applications Logs
                </div>
                <div class="m-list-timeline__items">
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">New order received <span class="m-badge m-badge--info m-badge--wide">urgent</span></a>
                    <span class="m-list-timeline__time">7 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">12 new users registered</a>
                    <span class="m-list-timeline__time">Just now</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">System shutdown</a>
                    <span class="m-list-timeline__time">11 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                    <a href="" class="m-list-timeline__text">New invoices received</a>
                    <span class="m-list-timeline__time">20 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                    <a href="" class="m-list-timeline__text">Database overloaded 89%</a>
                    <span class="m-list-timeline__time">1 hr</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">System error <span class="m-badge m-badge--info m-badge--wide">pending</span></a>
                    <span class="m-list-timeline__time">2 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">Production server down</a>
                    <span class="m-list-timeline__time">3 hrs</span>
                  </div>
                </div>
              </div>
              <div class="m-list-timeline__group">
                <div class="m-list-timeline__heading">
                  Server Logs
                </div>
                <div class="m-list-timeline__items">
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">Production server up</a>
                    <span class="m-list-timeline__time">5 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">New order received</a>
                    <span class="m-list-timeline__time">7 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">12 new users registered</a>
                    <span class="m-list-timeline__time">Just now</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">System shutdown</a>
                    <span class="m-list-timeline__time">11 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-danger"></span>
                    <a href="" class="m-list-timeline__text">New invoice received</a>
                    <span class="m-list-timeline__time">20 mins</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-warning"></span>
                    <a href="" class="m-list-timeline__text">Database overloaded 89%</a>
                    <span class="m-list-timeline__time">1 hr</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">System error</a>
                    <span class="m-list-timeline__time">2 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">Production server down</a>
                    <span class="m-list-timeline__time">3 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                    <a href="" class="m-list-timeline__text">Production server up</a>
                    <span class="m-list-timeline__time">5 hrs</span>
                  </div>
                  <div class="m-list-timeline__item">
                    <span class="m-list-timeline__badge m-list-timeline__badge--state-info"></span>
                    <a href="" class="m-list-timeline__text">New order received</a>
                    <span class="m-list-timeline__time">1117 hrs</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end::Quick Sidebar -->

    <!-- begin::Scroll Top -->
    <div id="m_scroll_top" class="m-scroll-top">
      <i class="la la-arrow-up"></i>
    </div>

    <!-- end::Scroll Top -->

    <!-- begin::Quick Nav -->
    <ul class="m-nav-sticky" style="margin-top: 30px;">
      <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank"><i class="la la-cart-arrow-down"></i></a>
      </li>
      <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank"><i class="la la-code-fork"></i></a>
      </li>
      <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank"><i class="la la-life-ring"></i></a>
      </li>
    </ul>

    <!-- begin::Quick Nav -->

    <!--begin:: Global Mandatory Vendors -->
    <script src="{{ asset('frontend/sportstravel/vendors/jquery/dist/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/popper.js/dist/umd/popper.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap/dist/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js-cookie/src/js.cookie.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/moment/min/moment.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/tooltip.js/dist/umd/tooltip.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/perfect-scrollbar/dist/perfect-scrollbar.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/wnumb/wNumb.js') }}" type="text/javascript"></script>

    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="{{ asset('frontend/sportstravel/vendors/jquery.repeater/src/lib.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/jquery.repeater/src/jquery.input.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/jquery.repeater/src/repeater.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/jquery-form/dist/jquery.form.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/block-ui/jquery.blockUI.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/forms/bootstrap-datepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/forms/bootstrap-timepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/forms/bootstrap-daterangepicker.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-maxlength/src/bootstrap-maxlength.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-switch/dist/js/bootstrap-switch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/forms/bootstrap-switch.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-select/dist/js/bootstrap-select.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/select2/dist/js/select2.full.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/typeahead.js/dist/typeahead.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/handlebars/dist/handlebars.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/inputmask/dist/jquery.inputmask.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/inputmask/dist/inputmask/inputmask.date.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/inputmask/dist/inputmask/inputmask.numeric.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/inputmask/dist/inputmask/inputmask.phone.extensions.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/nouislider/distribute/nouislider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/owl.carousel/dist/owl.carousel.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/autosize/dist/autosize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/clipboard/dist/clipboard.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/ion-rangeslider/js/ion.rangeSlider.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/dropzone/dist/dropzone.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/summernote/dist/summernote.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/markdown/lib/markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/forms/bootstrap-markdown.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/jquery-validation/dist/jquery.validate.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/jquery-validation/dist/additional-methods.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/forms/jquery-validation.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/bootstrap-notify/bootstrap-notify.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/base/bootstrap-notify.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/toastr/build/toastr.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/jstree/dist/jstree.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/raphael/raphael.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/morris.js/morris.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/chartist/dist/chartist.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/chart.js/dist/Chart.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/charts/chart.init.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/vendors/jquery-idletimer/idle-timer.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/waypoints/lib/jquery.waypoints.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/counterup/jquery.counterup.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/es6-promise-polyfill/promise.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/sweetalert2/dist/sweetalert2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('frontend/sportstravel/vendors/js/framework/components/plugins/base/sweetalert2.init.js') }}" type="text/javascript"></script>

    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle -->
    <script src="{{ asset('frontend/sportstravel/assets/demo/base/scripts.bundle.js') }}" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Vendors -->
    <script src="{{ asset('frontend/sportstravel/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>

    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="{{ asset('frontend/sportstravel/assets/app/js/dashboard.js') }}" type="text/javascript"></script>

    <script src="{{ asset('frontend/default/js/script.js') }}"></script>
    <!--end::Page Scripts -->
  </body>

  <!-- end::Body -->
</html>
