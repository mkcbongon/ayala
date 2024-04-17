<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <title>Requests - Ayala Land Premier</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    

    <!-- Favicon -->
    <link rel="icon" href="assets/img/favicon/MLogo.png" sizes="32x32">
    <link rel="icon" href="assets/img/favicon/MLogo.png" sizes="192x192">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">

        <!-- Menu -->
        @include('components/menu')
        <!-- / Menu -->

        <div class="layout-page">

          <!-- Navbar -->
          @include('components/user')
          <!-- / Navbar -->

          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"> PARTNERSHIP</h4>
              
              <hr class="my-5" />
              <div class="card">
                <div class="card-header flex-column flex-md-row">
                  <h5 class="card-header">REQUESTS FOR ADVERTISEMENT</h5>
                  
                </div>

                
                {{-- TABLE --}}
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Property</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($req as $request)
                        <tr>
                            <td>{{ $request->id }}</td>
                            <td>{{ $request->lname }}, {{ $request->fname }} {{ $request->mname }}</td>
                            <td>{{ $request->email }}</td>
                            <td>
                              <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#req{{ $request->id }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                </svg>&nbsp;
                                {{ $request->property }}
                                </button>
                              
                              
          
                                  <!-- Modal 1-->
                                  <div class="modal fade" id="req{{ $request->id }}" aria-labelledby="modalToggleLabel"
                                    tabindex="-1" style="display: none" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="modalToggleLabel">{{ $request->property }} by {{ $request->fname }} {{ $request->lname }}</h5>
                                          <button type="button" class="btn-close"
                                            data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        {{--  --}}
                                        <div class="modal-body" >
                                          <div>
                                            <img src="{{ $request->idcard }}" alt="Photo" style="width: 450px; height: 250px; object-fit: cover;">
                                          </div>
                                          Ticket #: {{ $request->id }} <br>
                                          First Name: {{ $request->fname }} <br>
                                          Middle Name: {{ $request->mname }} <br>
                                          Last Name: {{ $request->lname }} <br>
                                          Email: {{ $request->email }} <br>
                                          DOB: {{ $request->id }} <br>
                                          <hr class="m-0" /><br>
                                          Property: {{ $request->property }} <br>
                                          Category: {{ $request->category }} <br>
                                          Type: {{ $request->type }} <br>
                                          Location: {{ $request->location }} <br>
                                          Price: {{ $request->price }} <br>
                                          <div style="white-space: pre-line;">
                                            Description: {{ $request->description }} 
                                        </div>
                                        </div>
                                        {{--  --}}
                                        <div class="modal-footer">
                                          <button class="btn btn-primary" data-bs-target="#upload{{ $request->id }}"
                                            data-bs-toggle="modal" data-bs-dismiss="#upload">
                                            View Images
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- Uploads -->
                                  <div
                                    class="modal fade"
                                    id="upload{{ $request->id }}"
                                    aria-hidden="true"
                                    aria-labelledby="modalToggleLabel2"
                                    tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="modalToggleLabel2">{{ $request->property }} Images</h5>
                                          <button
                                            type="button"
                                            class="btn-close"
                                            data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            @php $images = explode(', ', $request->image); @endphp
                                                @foreach ($images as $image)
                                              <div class="col-md-4 text-center">
                                                <img src="{{ $image }}" alt="Image" class="img-fluid custom-img">
                                                
                                              </div>
                                              @endforeach
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button
                                            class="btn btn-primary"
                                            data-bs-target="#req{{ $request->id }}"
                                            data-bs-toggle="modal"
                                            data-bs-dismiss="modal">
                                            Back
                                          </button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                            </td>
                            <td>
                              @if ($request->status == "PENDING")
                                <form action="{{ route('accept', $request->id) }}" method="post"> @csrf
                                  <button type="submit" class="btn btn-xs btn-warning" data-bs-toggle="modal">Accept</button>
                                  <input type="hidden" name="property" value="{{ $request->property }}">
                                  <input type="hidden" name="category" value="{{ $request->category }}">
                                  <input type="hidden" name="type" value="{{ $request->type }}">
                                  <input type="hidden" name="location" value="{{ $request->location }}">
                                  <input type="hidden" name="price" value="{{ $request->price }}">
                                  <input type="hidden" name="description" value="{{ $request->description }}">
                                  <input type="hidden" name="image" value="{{ $request->image }}">
                                </form>
                                <form action="{{ route('decline', $request->id) }}" method="post"> @csrf
                                  <button type="submit" class="btn btn-xs btn-danger" data-bs-toggle="modal">Decline</button>
                                </form>

                                @elseif ($request->status == "ACCEPTED")
                                <i>ACCEPTED</i>
                                @elseif ($request->status == "DECLINED")
                                <i>DECLINED</i>
                              @endif
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
                {{--  --}}

              </div>
            </div>

            <!-- Footer -->
            @include('components/adminfooter')
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    


    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
