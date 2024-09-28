<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Abd. Rahman Siddik - UAS Digital Image Processing</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('nago') }}/assets/media/image/favicon.png" />

  <!-- Plugin styles -->
  <link rel="stylesheet" href="{{ asset('nago') }}/vendors/bundle.css" type="text/css">

  <!-- Slick -->
  <link rel="stylesheet" href="{{ asset('nago') }}/vendors/slick/slick.css" type="text/css">
  <link rel="stylesheet" href="{{ asset('nago') }}/vendors/slick/slick-theme.css" type="text/css">

  <!-- Daterangepicker -->
  <link rel="stylesheet" href="{{ asset('nago') }}/vendors/datepicker/daterangepicker.css" type="text/css">

  <!-- DataTable -->
  <link rel="stylesheet" href="{{ asset('nago') }}/vendors/dataTable/datatables.min.css" type="text/css">

  <!-- App styles -->
  <link rel="stylesheet" href="{{ asset('nago') }}/assets/css/app.min.css" type="text/css">
</head>

<body class="">

  <!-- begin::preloader-->
  <div class="preloader">
    <div class="preloader-icon"></div>
  </div>
  <!-- end::preloader -->

  <!-- BEGIN: Sidebar Group -->
  <div class="sidebar-group">

    <!-- BEGIN: User Menu -->
    <div class="sidebar" id="user-menu">
      <div class="py-4 text-center" data-backround-image="{{ asset('nago') }}/assets/media/image/image1.jpg">
        <figure class="avatar avatar-lg mb-3 border-0">
          <img src="{{ asset('nago') }}/assets/media/image/user/man_avatar1.jpg" class="rounded-circle"
            alt="image">
        </figure>
        <h5 class="d-flex align-items-center justify-content-center">Abd. Rahman S.</h5>
        <div>
          Balance: <strong>$500</strong>
        </div>
      </div>
      <div class="card mb-0 card-body shadow-none">
        <div class="mb-4">
          <div class="list-group list-group-flush">
            <a href="profile.html" class="list-group-item p-l-r-0">Profile</a>
            <a href="#" class="list-group-item p-l-r-0 d-flex">Followers</a>
            <a href="mail.html" class="list-group-item p-l-r-0 d-flex">
              Inbox <span class="badge badge-danger ml-auto">2</span>
            </a>
            <a href="#" class="list-group-item p-l-r-0">Billing</a>
            <a href="#" class="list-group-item p-l-r-0" data-sidebar-target="#settings">Settings</a>
            <a href="login.html" class="list-group-item p-l-r-0 text-danger" data-sidebar-target="#settings">Sign
              Out!</a>
          </div>
        </div>
        <div class="mb-4">
          <h6 class="d-flex justify-content-between">
            Completed Tasks
            <span class="float-right">%68</span>
          </h6>
          <div class="progress" style="height:5px;">
            <div class="progress-bar bg-secondary" role="progressbar" style="width: 68%;" aria-valuenow="68"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-4">
          <h6 class="d-flex justify-content-between">
            Storage
            <span>%25</span>
          </h6>
          <div class="progress" style="height: 5px;">
            <div class="progress-bar bg-info" role="progressbar" style="width: 40%;" aria-valuenow="40"
              aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <div class="mb-4">
          <h6>About</h6>
          <p class="text-muted mb-0">I love reading, traveling and discovering new things. You need to be happy in
            life.</p>
        </div>
        <div class="mb-4">
          <h6>City</h6>
          <p class="text-muted mb-0">Germany / Berlin</p>
        </div>
        <div class="mb-4">
          <h6>Social Links</h6>
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="#" class="btn btn-sm btn-floating btn-facebook">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-sm btn-floating btn-twitter">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-sm btn-floating btn-dribbble">
                <i class="fa fa-dribbble"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-sm btn-floating btn-whatsapp">
                <i class="fa fa-whatsapp"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" class="btn btn-sm btn-floating btn-linkedin">
                <i class="fa fa-linkedin"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END: User Menu -->

    <!-- BEGIN: Settings -->
    <div class="sidebar" id="settings">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title">Settings</h6>
          <ul class="list-group list-group-flush">
            <li class="list-group-item pl-0 pr-0">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
                <label class="custom-control-label" for="customSwitch1">Allow notifications.</label>
              </div>
            </li>
            <li class="list-group-item pl-0 pr-0">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch2">
                <label class="custom-control-label" for="customSwitch2">Hide user requests</label>
              </div>
            </li>
            <li class="list-group-item pl-0 pr-0">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch3" checked>
                <label class="custom-control-label" for="customSwitch3">Speed up demands</label>
              </div>
            </li>
            <li class="list-group-item pl-0 pr-0">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch4" checked>
                <label class="custom-control-label" for="customSwitch4">Hide menus</label>
              </div>
            </li>
            <li class="list-group-item pl-0 pr-0">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch5">
                <label class="custom-control-label" for="customSwitch5">Remember next visits</label>
              </div>
            </li>
            <li class="list-group-item pl-0 pr-0">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="customSwitch6">
                <label class="custom-control-label" for="customSwitch6">Enable report
                  generation.</label>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- END: Settings -->

  </div>
  <!-- END: Sidebar Group -->

  <!-- begin::main -->
  <div class="layout-wrapper">

    <!-- begin::header -->
    <div class="header d-print-none">

      <div class="header-left">
        <div class="navigation-toggler">
          <a href="#" data-action="navigation-toggler">
            <i data-feather="menu"></i>
          </a>
        </div>
        <div class="header-logo">
          <a href=index.html>
            <h1>Abd. Rahman S.</h1>
          </a>
        </div>
      </div>

      <div class="header-body">
        <div class="header-body-left">
          <div class="page-title">
            <h4>Digital Image Processing</h4>
          </div>
        </div>
        <div class="header-body-right">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a href="#" title="Language" class="nav-link" data-toggle="dropdown">
                <img width="18" src="{{ asset('nago') }}/assets/media/image/flags/262-united-kingdom.png"
                  alt="flag" class="mr-2 rounded" title="United Kingdom"> EN
              </a>
              <div class="dropdown-menu">
                <a href="#" class="dropdown-item">
                  <img width="18" src="{{ asset('nago') }}/assets/media/image/flags/003-tanzania.png"
                    class="mr-2 rounded" alt="flag">
                  Tanzania
                </a>
                <a href="#" class="dropdown-item">
                  <img width="18" src="{{ asset('nago') }}/assets/media/image/flags/261-china.png"
                    class="mr-2 rounded" alt="flag"> China
                </a>
                <a href="#" class="dropdown-item">
                  <img width="18" src="{{ asset('nago') }}/assets/media/image/flags/013-tunisia.png"
                    class="mr-2 rounded" alt="flag">
                  Tunisia
                </a>
                <a href="#" class="dropdown-item">
                  <img width="18" src="{{ asset('nago') }}/assets/media/image/flags/044-spain.png"
                    class="mr-2 rounded" alt="flag"> Spain
                </a>
              </div>
            </li>

            <!-- begin::header fullscreen -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                <i class="maximize" data-feather="maximize"></i>
                <i class="minimize" data-feather="minimize"></i>
              </a>
            </li>
            <!-- end::header fullscreen -->

            <!-- begin::header search -->
            <li class="nav-item">
              <a href="#" class="nav-link" title="Search" data-toggle="dropdown">
                <i data-feather="search"></i>
              </a>
              <div class="dropdown-menu p-2 dropdown-menu-right">
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <div class="input-group-prepend">
                      <button class="btn" type="button">
                        <i data-feather="search"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <!-- end::header search -->

            <!-- begin::apps -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" title="Apps" data-toggle="dropdown">
                <i data-feather="box"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                <div class="bg-dark p-4 text-center d-flex justify-content-between">
                  <h5 class="mb-0">Apps</h5>
                </div>
                <div class="p-3">
                  <div class="row row-xs">
                    <div class="col-6">
                      <a href="chat.html">
                        <div class="border-radius-1 text-center mb-3">
                          <figure class="avatar avatar-lg border-0">
                            <span class="avatar-title bg-primary text-white rounded-circle">
                              <i class="width-30 height-30" data-feather="message-circle"></i>
                            </span>
                          </figure>
                          <div class="mt-2">Chat</div>
                        </div>
                      </a>
                    </div>
                    <div class="col-6">
                      <a href="mail.html">
                        <div class="border-radius-1 text-center mb-3">
                          <figure class="avatar avatar-lg border-0">
                            <span class="avatar-title bg-secondary text-white rounded-circle">
                              <i class="width-30 height-30" data-feather="mail"></i>
                            </span>
                          </figure>
                          <div class="mt-2">Mail</div>
                        </div>
                      </a>
                    </div>
                    <div class="col-6">
                      <a href="todo-list.html">
                        <div class="border-radius-1 text-center">
                          <figure class="avatar avatar-lg border-0">
                            <span class="avatar-title bg-info text-white rounded-circle">
                              <i class="width-30 height-30" data-feather="check-circle"></i>
                            </span>
                          </figure>
                          <div class="mt-2">Todo List</div>
                        </div>
                      </a>
                    </div>
                    <div class="col-6">
                      <a href="file-manager.html">
                        <div class="border-radius-1 text-center">
                          <figure class="avatar avatar-lg border-0">
                            <span class="avatar-title bg-warning text-white rounded-circle">
                              <i class="width-30 height-30" data-feather="file"></i>
                            </span>
                          </figure>
                          <div class="mt-2">File Manager</div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <!-- end::apps -->

            <!-- begin::header messages dropdown -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link nav-link-notify" title="Chats" data-toggle="dropdown">
                <i data-feather="message-circle"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Chats</h5>
                  <small class="opacity-7">2 unread chats</small>
                </div>
                <div>
                  <ul class="list-group list-group-flush">
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <img src="{{ asset('nago') }}/assets/media/image/user/man_avatar1.jpg"
                              class="rounded-circle" alt="user">
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                            Herbie Pallatina
                            <i title="Mark as read" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                          </p>
                          <div class="small text-muted">
                            <span class="mr-2">02:30 PM</span>
                            <span>Have you madimage</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <img src="{{ asset('nago') }}/assets/media/image/user/women_avatar5.jpg"
                              class="rounded-circle" alt="user">
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                            Andrei Miners
                            <i title="Mark as read" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                          </p>
                          <div class="small text-muted">
                            <span class="mr-2">08:36 PM</span>
                            <span>I have a meetinimage</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li class="text-divider small pb-2 pl-3 pt-3">
                      <span>Old chats</span>
                    </li>
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <img src="{{ asset('nago') }}/assets/media/image/user/man_avatar3.jpg"
                              class="rounded-circle" alt="user">
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                            Kevin added
                            <i title="Mark as unread" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-check font-size-11"></i>
                          </p>
                          <div class="small text-muted">
                            <span class="mr-2">11:09 PM</span>
                            <span>Have you madimage</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <img src="{{ asset('nago') }}/assets/media/image/user/man_avatar2.jpg"
                              class="rounded-circle" alt="user">
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                            Eugenio Carnelley
                            <i title="Mark as unread" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-check font-size-11"></i>
                          </p>
                          <div class="small text-muted">
                            <span class="mr-2">Yesterday</span>
                            <span>I have a meetinimage</span>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <img src="{{ asset('nago') }}/assets/media/image/user/women_avatar1.jpg"
                              class="rounded-circle" alt="user">
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                            Neely Ferdinand
                            <i title="Mark as unread" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-check font-size-11"></i>
                          </p>
                          <div class="small text-muted">
                            <span class="mr-2">Yesterday</span>
                            <span>I have a meetinimage</span>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="p-2 text-right border-top">
                  <ul class="list-inline small">
                    <li class="list-inline-item mb-0">
                      <a href="#">Mark All Read</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- end::header messages dropdown -->

            <!-- begin::header notification dropdown -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link nav-link-notify" title="Notifications" data-toggle="dropdown">
                <i data-feather="bell"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Notifications</h5>
                  <small class="opacity-7">1 unread notifications</small>
                </div>
                <div>
                  <ul class="list-group list-group-flush">
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <span class="avatar-title bg-success-bright text-success rounded-circle">
                              <i class="ti-user"></i>
                            </span>
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                            New customer registered
                            <i title="Mark as read" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-circle-o font-size-11"></i>
                          </p>
                          <span class="text-muted small">20 min ago</span>
                        </div>
                      </a>
                    </li>
                    <li class="text-divider small pb-2 pl-3 pt-3">
                      <span>Old notifications</span>
                    </li>
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                              <i class="ti-package"></i>
                            </span>
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                            New Order Recieved
                            <i title="Mark as unread" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-check font-size-11"></i>
                          </p>
                          <span class="text-muted small">45 sec ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <span class="avatar-title bg-danger-bright text-danger rounded-circle">
                              <i class="ti-server"></i>
                            </span>
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex justify-content-between">
                            Server Limit Reached!
                            <i title="Mark as unread" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-check font-size-11"></i>
                          </p>
                          <span class="text-muted small">55 sec ago</span>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="list-group-item d-flex align-items-center hide-show-toggler">
                        <div>
                          <figure class="avatar mr-2">
                            <span class="avatar-title bg-info-bright text-info rounded-circle">
                              <i class="ti-layers"></i>
                            </span>
                          </figure>
                        </div>
                        <div class="flex-grow-1">
                          <p class="mb-0 line-height-20 d-flex align-items-center justify-content-between">
                            Apps are ready for update
                            <i title="Mark as unread" data-toggle="tooltip"
                              class="hide-show-toggler-item fa fa-check font-size-11"></i>
                          </p>
                          <span class="text-muted small">Yesterday</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="p-2 text-right border-top">
                  <ul class="list-inline small">
                    <li class="list-inline-item mb-0">
                      <a href="#">Mark All Read</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- end::header notification dropdown -->

            <!-- BEGIN: Cart -->
            <li class="nav-item">
              <a href="#" title="Cart" class="nav-link" data-toggle="dropdown">
                <i data-feather="shopping-bag"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-big">
                <div class="bg-dark p-4 text-center d-flex justify-content-between align-items-center">
                  <h5 class="mb-0">Cart</h5>
                  <small class="opacity-7">3 products</small>
                </div>
                <div>
                  <div class="list-group list-group-flush">
                    <a href="#" class="p-3 list-group-item d-flex">
                      <div>
                        <figure class="avatar mr-3">
                          <img src="{{ asset('nago') }}/assets/media/image/products/product6.png"
                            alt="Canon 4000D 18-55 MM">
                        </figure>
                      </div>
                      <div class="flex-grow-1">
                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                          Canon 4000D 18-55 MM
                          <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                        </p>
                        <span class="text-muted small">1 X $1,200</span>
                      </div>
                    </a>
                    <a href="#" class="p-3 list-group-item d-flex">
                      <div>
                        <figure class="avatar mr-3">
                          <img src="{{ asset('nago') }}/assets/media/image/products/product3.png" alt="pineapple">
                        </figure>
                      </div>
                      <div class="flex-grow-1">
                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                          Snopy SN-BT96 Pretty
                          <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                        </p>
                        <span class="text-muted small">1 X $250</span>
                      </div>
                    </a>
                    <a href="#" class="p-3 list-group-item d-flex">
                      <div>
                        <figure class="avatar mr-3">
                          <img src="{{ asset('nago') }}/assets/media/image/products/product7.png" class="rounded"
                            alt="pineapple">
                        </figure>
                      </div>
                      <div class="flex-grow-1">
                        <p class="mb-0 line-height-20 d-flex justify-content-between">
                          Lenovo Tab E10 TB-X104F 32GB
                          <i title="Close" data-toggle="tooltip" class="hide-show-toggler-item ti-close"></i>
                        </p>
                        <span class="text-muted small">2 X $100</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="p-3 border-top text-right">
                  <p class="d-flex justify-content-between align-items-center mb-2">
                    <span>Sub Total</span>
                    <span>$1,650</span>
                  </p>
                  <p class="d-flex justify-content-between align-items-center mb-2">
                    <span>Taxes</span>
                    <span>$15</span>
                  </p>
                  <p class="d-flex justify-content-between align-items-center mb-2 font-weight-bold">
                    <span>Total</span>
                    <span>$1,675</span>
                  </p>
                  <button class="btn btn-primary btn-block mt-2">
                    Order and Payment <i class="ti-arrow-right ml-2"></i>
                  </button>
                </div>
              </div>
            </li>
            <!-- END: Cart -->

            <!-- begin::settings -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" title="Settings" data-sidebar-target="#settings">
                <i data-feather="settings"></i>
              </a>
            </li>
            <!-- end::settings -->

            <!-- begin::user menu -->
            <li class="nav-item dropdown">
              <a href="#" class="nav-link" title="User menu" data-sidebar-target="#user-menu">
                <span class="mr-2 d-sm-inline d-none">Abd. Rahman S.</span>
                <figure class="avatar avatar-sm">
                  <img src="{{ asset('nago') }}/assets/media/image/user/man_avatar1.jpg" class="rounded-circle"
                    alt="avatar">
                </figure>
              </a>
            </li>
            <!-- end::user menu -->

          </ul>

          <!-- begin::mobile header toggler -->
          <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item header-toggler">
              <a href="#" class="nav-link">
                <i data-feather="arrow-down"></i>
              </a>
            </li>
          </ul>
          <!-- end::mobile header toggler -->
        </div>
      </div>

    </div>
    <!-- end::header -->

    <div class="content-wrapper">

      <!-- begin::navigation -->
      <div class="navigation">
        <div class="navigation-menu-tab">
          <ul>
            <li>
              <a href="#" data-toggle="tooltip" data-placement="right" title="RGB Histogram"
                data-nav-target="#ecommerce">
                <i data-feather="image"></i>
              </a>
            </li>
            <li>
              <a href="#" data-toggle="tooltip" data-placement="right" title="Grayscale Histogram"
                data-nav-target="#analytics">
                <i data-feather="activity"></i>
              </a>
            </li>
            <li>
              <a href="#" data-toggle="tooltip" data-placement="right" title="Another Image"
                data-nav-target="#home">
                <i data-feather="home"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="navigation-menu-body">
          <div class="navigation-menu-group">
            <div id="ecommerce">
              <ul>
                <li class="navigation-divider d-flex align-items-center">
                  <i class="mr-2" data-feather="image"></i> RGB-IMAGE
                </li>
                <li>
                  <a href="{{ route('histo.rgb') }}"
                    class="{{ set_active('histo.rgb') }}">Histogram RGB</a>
                </li>
                <li>
                  <a href="{{ route('hist.normalized') }}"
                    class="{{ set_active('hist.normalized') }}">Normalized Histogram RGB</a>
                </li>
              </ul>
            </div>
            <div id="analytics">
              <ul>
                <li class="navigation-divider d-flex align-items-center">
                  <i class="mr-2" data-feather="activity"></i> Grayscale Image
                </li>
                <li>
                  <a href="{{ route('hist.gray') }}"
                    class="{{ set_active('hist.gray') }}">Histogram Grayscale</a>
                </li>
                <li>
                  <a href="{{ route('hist.gray_normalized') }}"
                    class="{{ set_active('hist.gray_normalized') }}">Histogram Normalized</a>
                </li>
              </ul>
            </div>
            <div id="home">
              <ul>
                <li class="navigation-divider d-flex align-items-center">
                  <i class="mr-2" data-feather="home"></i> Go Home
                </li>
                <li>
                  <a href="{{ route('home') }}">Another Image</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- end::navigation -->

      <div class="content-body">

        <div class="content">


          <div class="page-header">
            <nav aria-label="breadcrumb">
              {{-- <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href=index.html></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol> --}}
            </nav>
          </div>

          @yield('content')


        </div>

        <!-- begin::footer -->
        <footer class="content-footer">
          <div>© 2024 Abd. Rahman Siddik - <a target="_blank">Digital Image Processing</a></div>
          <div>
            <nav class="nav">
              <a href="https://themeforest.net/licenses/standard" class="nav-link">Licenses</a>
              <a href="#" class="nav-link">Change Log</a>
              <a href="#" class="nav-link">Get Help</a>
            </nav>
          </div>
        </footer>
        <!-- end::footer -->

      </div>

    </div>

  </div>
  <!-- end::main -->

  <!-- Plugin scripts -->
  <script src="{{ asset('nago') }}/vendors/bundle.js"></script>


  <!-- Apex chart -->
  <script src="{{ asset('nago') }}/{{ asset('nago') }}/apexcharts.com/samples/assets/irregular-data-series.js"></script>
  <script src="{{ asset('nago') }}/vendors/charts/apex/apexcharts.min.js"></script>

  <!-- Daterangepicker -->
  <script src="{{ asset('nago') }}/vendors/datepicker/daterangepicker.js"></script>

  <!-- DataTable -->
  <script src="{{ asset('nago') }}/vendors/dataTable/datatables.min.js"></script>

  <!-- Dashboard scripts -->
  <script src="{{ asset('nago') }}/assets/js/examples/dashboard.js"></script>

  <!-- Vamp -->
  <script src="{{ asset('nago') }}/vendors/vmap/jquery.vmap.min.js"></script>
  <script src="{{ asset('nago') }}/vendors/vmap/maps/jquery.vmap.usa.js"></script>
  <script src="{{ asset('nago') }}/assets/js/examples/vmap.js"></script>

  <!-- To use theme colors with Javascript -->
  <div class="colors">
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
  </div>

  <script src="{{ asset('nago') }}/assets/js/examples/pages/ecommerce-dashboard.js"></script>


  <!-- App scripts -->
  <script src="{{ asset('nago') }}/assets/js/app.min.js"></script>

</body>

<!-- Mirrored from nago.laborasyon.com/demos/layouts/default/ecommerce-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Jul 2024 15:34:19 GMT -->

</html>
