<!-- header start -->
<div class="header-classic">
    <!-- navigation start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <nav class="navbar navbar-expand-lg navbar-classic">
                    <a class="navbar-brand" href="{!! route('home') !!}"> <img src="{!! asset('assets/images/logo.png') !!}" alt="spacely realtor directory listing bootstrap template"></a>
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-classic" aria-controls="navbar-classic" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar top-bar mt-0"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar-classic">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-3">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Aide
                                </a>
                            </li>
                            @guest
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">
                                      Inscription
                                  </a>
                              </li>
                            @endguest
                        </ul>
                        <div class="header-btn d-xl-block d-lg-none">
                          @guest
                            <a href="{!! route('login') !!}" class="btn btn-outline-primary" data-toggle="modal" data-target="#loginmodal">Login</a>
                          @else
                            <a class="btn btn-outline-primary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                          @endguest
                            <a href="inquiry-form.html" class="btn btn-primary"><i class="fas fa-plus"></i>List a space</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- navigation close -->
</div>
<!-- header close -->
