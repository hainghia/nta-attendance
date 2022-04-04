@extends('layouts.main')
@section('content')
  <div id="dashboard">
    @include('layouts.sidebar')
    <div id="main">
      @include('layouts.navbar')
      <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
          <i class="bi bi-justify fs-3"></i>
        </a>
      </header>

      <div class="page-heading">
        <h3>Profile Statistics</h3>
      </div>
      <div class="page-content">
        <section class="row">
          <div class="col-12 col-lg-9">
            <div class="row">
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon purple">
                          <i class="iconly-boldShow"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Profile Views</h6>
                        <h6 class="font-extrabold mb-0">112.000</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon blue">
                          <i class="iconly-boldProfile"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Followers</h6>
                        <h6 class="font-extrabold mb-0">183.000</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon green">
                          <i class="iconly-boldAdd-User"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Following</h6>
                        <h6 class="font-extrabold mb-0">80.000</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-lg-3 col-md-6">
                <div class="card">
                  <div class="card-body px-3 py-4-5">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="stats-icon red">
                          <i class="iconly-boldBookmark"></i>
                        </div>
                      </div>
                      <div class="col-md-8">
                        <h6 class="text-muted font-semibold">Saved Post</h6>
                        <h6 class="font-extrabold mb-0">112</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Profile Visit</h4>
                  </div>
                  <div class="card-body">
                    <div id="chart-profile-visit"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-xl-4">
                <div class="card">
                  <div class="card-header">
                    <h4>Profile Visit</h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-6">
                        <div class="d-flex align-items-center">
                          <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                            <use xlink:href="assets/test/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                          </svg>
                          <h5 class="mb-0 ms-3">Europe</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <h5 class="mb-0">862</h5>
                      </div>
                      <div class="col-12">
                        <div id="chart-europe"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="d-flex align-items-center">
                          <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                            <use xlink:href="assets/test/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                          </svg>
                          <h5 class="mb-0 ms-3">America</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <h5 class="mb-0">375</h5>
                      </div>
                      <div class="col-12">
                        <div id="chart-america"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="d-flex align-items-center">
                          <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                            <use xlink:href="assets/test/assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                          </svg>
                          <h5 class="mb-0 ms-3">Indonesia</h5>
                        </div>
                      </div>
                      <div class="col-6">
                        <h5 class="mb-0">1025</h5>
                      </div>
                      <div class="col-12">
                        <div id="chart-indonesia"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 col-xl-8">
                <div class="card">
                  <div class="card-header">
                    <h4>Latest Comments</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-hover table-lg">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Comment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="col-3">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                  <img src="assets/images/faces/5.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">Si Cantik</p>
                              </div>
                            </td>
                            <td class="col-auto">
                              <p class=" mb-0">Congratulations on your graduation!</p>
                            </td>
                          </tr>
                          <tr>
                            <td class="col-3">
                              <div class="d-flex align-items-center">
                                <div class="avatar avatar-md">
                                  <img src="assets/images/faces/2.jpg">
                                </div>
                                <p class="font-bold ms-3 mb-0">Si Ganteng</p>
                              </div>
                            </td>
                            <td class="col-auto">
                              <p class=" mb-0">Wow amazing design! Can you make another
                                tutorial for
                                this design?</p>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-3">
            <div class="card">
              <div class="card-body py-4 px-5">
                <div class="d-flex align-items-center">
                  <div class="avatar avatar-xl">
                    <img src="assets/images/faces/1.jpg" alt="Face 1">
                  </div>
                  <div class="ms-3 name">
                    <h5 class="font-bold">John Duck</h5>
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                      <!-- Teams Dropdown -->
                      @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <div class="ml-3 relative">
                          <x-jet-dropdown align="right" width="60">
                            <x-slot name="trigger">
                              <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition">
                                  {{ Auth::user()->currentTeam->name }}

                                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                                </button>
                              </span>
                            </x-slot>

                            <x-slot name="content">
                              <div class="w-60">
                                <!-- Team Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                  {{ __('Manage Team') }}
                                </div>

                                <!-- Team Settings -->
                                <x-jet-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                  {{ __('Team Settings') }}
                                </x-jet-dropdown-link>

                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                  <x-jet-dropdown-link href="{{ route('teams.create') }}">
                                    {{ __('Create New Team') }}
                                  </x-jet-dropdown-link>
                                @endcan

                                <div class="border-t border-gray-100"></div>

                                <!-- Team Switcher -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                  {{ __('Switch Teams') }}
                                </div>

                                @foreach (Auth::user()->allTeams() as $team)
                                  <x-jet-switchable-team :team="$team" />
                                @endforeach
                              </div>
                            </x-slot>
                          </x-jet-dropdown>
                        </div>
                      @endif

                      <!-- Settings Dropdown -->
                      <div class="ml-3 relative">
                        <x-jet-dropdown align="right" width="48">
                          <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                              <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                              </button>
                            @else
                              <span class="inline-flex rounded-md">
                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                  {{ Auth::user()->name }}

                                  <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                  </svg>
                                </button>
                              </span>
                            @endif
                          </x-slot>

                          <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                              {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                              {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                              <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                                {{ __('API Tokens') }}
                              </x-jet-dropdown-link>
                            @endif

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                              @csrf
                              <div class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                              this.closest('form').submit(); " role="button">
                                  <i class="fas fa-sign-out-alt"></i>

                                  {{ __('Log Out') }}
                                </a>
                              </div>
                            </form>
                          </x-slot>
                        </x-jet-dropdown>
                      </div>
                    </div>
                    <h6 class="text-muted mb-0">@johnducky</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4>Recent Messages</h4>
              </div>
              <div class="card-content pb-4">
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="assets/images/faces/4.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">Hank Schrader</h5>
                    <h6 class="text-muted mb-0">@johnducky</h6>
                  </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="assets/images/faces/5.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">Dean Winchester</h5>
                    <h6 class="text-muted mb-0">@imdean</h6>
                  </div>
                </div>
                <div class="recent-message d-flex px-4 py-3">
                  <div class="avatar avatar-lg">
                    <img src="assets/images/faces/1.jpg">
                  </div>
                  <div class="name ms-4">
                    <h5 class="mb-1">John Dodol</h5>
                    <h6 class="text-muted mb-0">@dodoljohn</h6>
                  </div>
                </div>
                <div class="px-4">
                  <button class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>Start
                    Conversation</button>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h4>Visitors Profile</h4>
              </div>
              <div class="card-body">
                <div id="chart-visitors-profile"></div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <footer>
        <div class="footer clearfix mb-0 text-muted">
          <div class="float-start">
            <p>2021 &copy; Mazer</p>
          </div>
          <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection
@section('footer')
  <script src="{{ asset('assets/js/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
