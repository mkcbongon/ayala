<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <title>Properties - Ayala Land Premier</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


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

    <style>
      .custom-img {
          width: 100%;  
          height: 75%; 
      }

  </style>
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
              <h4 class="py-3 mb-4"> Ayala Land Premier Properties/Other Details</h4>
              
              
              <hr class="my-5" />
              <div class="card">
                <h5 class="card-header">Amenities/Video/Gallery</h5>
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Property</th>
                          <th>Nearby</th>
                          <th>Amenities</th>
                          <th>Video</th>
                          <th>Gallery</th>
                        </tr>
                      </thead>
                      
                      @foreach ($prop as $prop)
                      <tbody>
                        <tr>
                          <td>{{ $prop->name }}</td>
                          <td>
                            {{-- buttons --}}
                            <div class="ms-auto">
                              <button type="button" class="btn btn-xs" data-bs-toggle="modal" data-bs-target="#add{{ $prop->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                                <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                              </svg>add</button>
                              <button type="button" class="btn btn-xs" data-bs-toggle="modal" data-bs-target="#edit{{ $prop->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                              </svg>edit</button>
                            </div>
                        
                            {{-- add --}}
                            <form action="{{ route('addnearby')}}" method="POST"> @csrf
                              <div class="modal fade" id="add{{ $prop->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-sm" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <input type="hidden" name="property" value="{{ $prop->name }}">
                                      <h5 class="modal-title" id="exampleModalLabel2">{{ substr($prop->name, 0, 35) }}{{ strlen($prop->name) > 35 ? '...' : '' }}</h5>
                                      <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col mb-3">
                                          <label for="nameSmall" class="form-label">Establishment</label>
                                          <input type="text" id="nameSmall" class="form-control" name="establishment" placeholder="Enter Building Name" />
                                        </div>
                                      </div>

                                      <div class="row g-2">
                                        <div class="btn-group">
                                          <button type="button" class="btn btn-outline-secondary dropdown-toggle typeButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Type
                                          </button>
                                          <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="javascript:void(0);" data-type="Commercial Areas">Commercial Areas</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" data-type="Hotels / Resorts">Hotels / Resorts</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" data-type="Government Offices">Government Offices</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" data-type="Malls/Shopping Centers">Malls/Shopping Centers</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" data-type="Transportation Hubs">Transportation Hubs</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);" data-type="Schools">Schools</a></li>
                                          </ul>
                                          <input type="hidden" name="type" id="selectedType">
                                        </div>
                                      </div>
                                    </div>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                      </button>
                                      <button type="submit" class="btn btn-primary">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                            {{-- add --}}

                            {{-- edit --}}
                            @foreach ($near as $enear)
                              <form action="{{ route('editnearby', ['id' => $enear->id])}}" method="POST">
                                <input type="hidden" name="nearby_id" value="{{ $enear->id }}">
                                <div class="modal fade" id="edit{{ $prop->id }}" tabindex="-1" aria-hidden="true">
                                  <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel2">{{ substr($prop->name, 0, 35) }}{{ strlen($prop->name) > 35 ? '...' : '' }}</h5>
                                        <button
                                          type="button"
                                          class="btn-close"
                                          data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <div class="row">
                                          <div class="col mb-3">
                                              <label for="nameSmall" class="form-label">Establishment</label>
                                              <div class="col mb-3">
                                                  <input type="text" id="nameSmall" class="form-control" name="establishment" />
                                                  <input type="hidden" id="establishment_id" name="establishment_id" />
                                              </div>
                                          </div>
                                        </div>

                                        <div class="row g-2">
                                          <div class="btn-group"> 
                                            <button type="button" class="btn btn-outline-secondary dropdown-toggle typeButton"
                                              data-bs-toggle="dropdown" aria-expanded="false">
                                              Type
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="javascript:void(0);">Commercial Areas</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Hotels / Resorts</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Government Offices</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Malls/Shopping Centers</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Transportation Hubs</a></li>
                                              <li><a class="dropdown-item" href="javascript:void(0);">Schools</a></li>
                                            </ul>
                                          </div>
                                        </div>
                                      </div>
                                      @php
                                          $types = $near->where('property', $prop->name)->pluck('type')->unique();
                                      @endphp
                                      @if ($types->isNotEmpty())
                                          <div class="accordion mt-3" id="accordion{{ $prop->id }}">
                                              @foreach ($types as $type)
                                                  @php
                                                      $est = $near->where('property', $prop->name)->where('type', $type);
                                                  @endphp
                                                  <div class="card accordion-item">
                                                      <h2 class="accordion-header" id="heading{{ $type }}{{ $prop->id }}">
                                                          <button type="button" class="accordion-button collapsed"
                                                              data-bs-toggle="collapse" data-bs-target="#collapse{{ str_replace([' ', '/'], '_', $type) }}{{ $prop->id }}"
                                                              aria-expanded="false" aria-controls="collapse{{ str_replace([' ', '/'], '_', $type) }}{{ $prop->id }}">
                                                              {{ $type }}
                                                          </button>
                                                      </h2>
                                                      <div id="collapse{{ str_replace([' ', '/'], '_', $type) }}{{ $prop->id }}"
                                                          class="accordion-collapse collapse" data-bs-parent="#accordion{{ $prop->id }}">
                                                          <div class="accordion-body">
                                                              @foreach ($est as $estab)
                                                                  <span class="establishment" data-id="{{ $estab->id }}"
                                                                      style="cursor: pointer;">{{ $estab->establishment }}</span><br>
                                                              @endforeach
                                                          </div>
                                                      </div>
                                                  </div>
                                              @endforeach
                                          </div>
                                      @endif


                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                          Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            @endforeach
                            {{-- edit --}}
                          </td>

                          <td>
                            {{-- buttons --}}
                            <button type="button" class="btn btn-xs" data-bs-toggle="modal" 
                            data-bs-target="#modify{{ $prop->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>modify</button>
                            

                            {{-- modify --}}
                            @foreach ($amenity as $amenit)
                            <form action="{{ route('editamenity', ['id' => $amenit->id])}}" method="POST"> @csrf @method('PUT')
                              @if ($amenit->property == $prop->name)
                              <div class="modal fade" id="modify{{ $prop->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel2">{{ substr($prop->name, 0, 35) }}{{ strlen($prop->name) > 35 ? '...' : '' }}</h5>
                                      <button type="button" class="btn-close"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <input type="hidden" id="selectedAmenitiesInput" name="selected_amenities" />
                                    <div class="modal-body">
                                      <div class="row">
                                        @php $count = 0; @endphp
                                        @foreach ($amenities as $amen)
                                          @php $count++; @endphp
                                          @if ($count <= 14)
                                            <div class="col-lg-6">
                                              <div class="demo-inline-spacing mt-3">
                                                <div class="list-group" style="width: 330px;">
                                                  <label class="list-group-item">
                                                    <input class="form-check-input me-1 amen-checkbox" type="checkbox" value="{{ $amen->name }}" name="amenities[]" {{ strpos($amenit->amenities, $amen->name) !== false ? 'checked' : '' }}/>
                                                    {{ $amen->name }}
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          @else
                                            <div class="col-lg-6">
                                              <div class="demo-inline-spacing mt-3">
                                                <div class="list-group" style="width: 330px;">
                                                  <label class="list-group-item">
                                                    <input class="form-check-input me-1 amen-checkbox" type="checkbox" value="{{ $amen->name }}" name="amenities[]" {{ strpos($amenit->amenities, $amen->name) !== false ? 'checked' : '' }}/>
                                                    {{ $amen->name }}
                                                  </label>
                                                </div>
                                              </div>
                                            </div>
                                          @endif
                                        @endforeach
                                      </div>
                                    </div>
                                    
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                        Close
                                      </button>
                                      <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              @endif
                            </form>
                            @endforeach
                          </td>

                          <td>
                            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#video{{ $prop->id }}">{{ $prop->video }}</button>

                            <form action="{{ route('editvideo', ['id' => $prop->id])}}" method="POST"> @csrf @method('PUT')
                              <div class="modal fade" id="video{{ $prop->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel2">{{ substr($prop->name, 0, 35) }}{{ strlen($prop->name) > 35 ? '...' : '' }}</h5>
                                      <button
                                        type="button"
                                        class="btn-close"
                                        data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    </div>
                                    <input type="hidden" id="selectedAmenitiesInput" name="selected_amenities" />
                                    <div class="modal-body">
                                      <div class="input-group">
                                        <span class="input-group-text" id="basic-addon14">https://www.youtube.com/watch?v=</span>
                                        <input
                                          type="text"
                                          class="form-control"
                                          value="{{ $prop->video }}"
                                          placeholder="URL"
                                          id="basic-url1"
                                          name="video"
                                          aria-describedby="basic-addon14" />
                                      </div>
                                    
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                          Close
                                        </button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                      </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                            {{-- <span class="badge bg-label-primary me-1">Active</span> --}}
                          </td>

                          <td>
                            <button type="button" class="btn btn-xs" data-bs-toggle="modal" data-bs-target="#add_img{{ $prop->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-dotted" viewBox="0 0 16 16">
                              <path d="M8 0q-.264 0-.523.017l.064.998a7 7 0 0 1 .918 0l.064-.998A8 8 0 0 0 8 0M6.44.152q-.52.104-1.012.27l.321.948q.43-.147.884-.237L6.44.153zm4.132.271a8 8 0 0 0-1.011-.27l-.194.98q.453.09.884.237zm1.873.925a8 8 0 0 0-.906-.524l-.443.896q.413.205.793.459zM4.46.824q-.471.233-.905.524l.556.83a7 7 0 0 1 .793-.458zM2.725 1.985q-.394.346-.74.74l.752.66q.303-.345.648-.648zm11.29.74a8 8 0 0 0-.74-.74l-.66.752q.346.303.648.648zm1.161 1.735a8 8 0 0 0-.524-.905l-.83.556q.254.38.458.793l.896-.443zM1.348 3.555q-.292.433-.524.906l.896.443q.205-.413.459-.793zM.423 5.428a8 8 0 0 0-.27 1.011l.98.194q.09-.453.237-.884zM15.848 6.44a8 8 0 0 0-.27-1.012l-.948.321q.147.43.237.884zM.017 7.477a8 8 0 0 0 0 1.046l.998-.064a7 7 0 0 1 0-.918zM16 8a8 8 0 0 0-.017-.523l-.998.064a7 7 0 0 1 0 .918l.998.064A8 8 0 0 0 16 8M.152 9.56q.104.52.27 1.012l.948-.321a7 7 0 0 1-.237-.884l-.98.194zm15.425 1.012q.168-.493.27-1.011l-.98-.194q-.09.453-.237.884zM.824 11.54a8 8 0 0 0 .524.905l.83-.556a7 7 0 0 1-.458-.793zm13.828.905q.292-.434.524-.906l-.896-.443q-.205.413-.459.793zm-12.667.83q.346.394.74.74l.66-.752a7 7 0 0 1-.648-.648zm11.29.74q.394-.346.74-.74l-.752-.66q-.302.346-.648.648zm-1.735 1.161q.471-.233.905-.524l-.556-.83a7 7 0 0 1-.793.458zm-7.985-.524q.434.292.906.524l.443-.896a7 7 0 0 1-.793-.459zm1.873.925q.493.168 1.011.27l.194-.98a7 7 0 0 1-.884-.237zm4.132.271a8 8 0 0 0 1.012-.27l-.321-.948a7 7 0 0 1-.884.237l.194.98zm-2.083.135a8 8 0 0 0 1.046 0l-.064-.998a7 7 0 0 1-.918 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
                            </svg>add</button>
                            <button type="button" class="btn btn-xs" data-bs-toggle="modal" data-bs-target="#edit_img{{ $prop->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>edit</button>
                            
                            {{-- add --}}
                            @foreach ($gallery as $img)
                              @if ($img->img_property == $prop->name)
                                <form action="{{ route('add_img')}}" method="POST" enctype="multipart/form-data"> @csrf @method('PUT')
                                  <div class="modal fade" id="add_img{{ $prop->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-sm" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <input type="hidden" name="property" value="{{ $prop->name }}">
                                          <h5 class="modal-title" id="exampleModalLabel2">{{ substr($prop->name, 0, 35) }}{{ strlen($prop->name) > 35 ? '...' : '' }}</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            <div class="input-group">
                                              <input type="file" class="form-control" id="inputGroupFile02" name="url"/>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                            Close
                                          </button>
                                          <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              @endif
                            @endforeach
                            {{-- add --}}

                            {{-- edit img --}}
                            @foreach ($gallery->groupBy('img_property') as $imgProperty => $images)
                              @if ($imgProperty == $prop->name)
                                <form id="displayImageForm{{ $prop->id }}" action="" method="POST">  @csrf  @method('PUT')
                                  <div class="modal fade" id="edit_img{{ $prop->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title">{{ substr($prop->name, 0, 35) }}{{ strlen($prop->name) > 35 ? '...' : '' }}</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <div class="row">
                                            @foreach ($images as $image)
                                                <div class="col-md-4 text-center">
                                                    <img src="{{ $image->url }}" alt="Image" class="img-fluid custom-img">
                                                    <div class="mt-2">
                                                        <div class="form-check form-check-inline mt-3">
                                                            <input type="hidden" name="name" value="{{ $prop->name }}">
                                                            <input type="hidden" name="url" value="{{ $image->url }}">
                                                            <input class="form-check-input display-img-radio" type="radio" name="display_img" 
                                                                id="display_img{{ $image->id }}" value="{{ $image->id }}" data-prop-id="{{ $prop->id }}"
                                                                @if($image->url == $prop->display_img) checked @endif />
                                                            <label class="form-check-label" for="display_img{{ $image->id }}">Display</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </form>
                              @endif
                            @endforeach




                            {{-- edit img --}}


                          </td>
                          @endforeach
                      </table>
                  </div>
                </div>
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


    <script>
      document.addEventListener('DOMContentLoaded', function () {
          const radios = document.querySelectorAll('.display-img-radio');
          radios.forEach(radio => {
              radio.addEventListener('change', function() {
                  const propId = this.getAttribute('data-prop-id');
                  const form = document.getElementById(`displayImageForm${propId}`);
                  form.action = `/display/${this.value}`; 
              });
          });
      });
      </script>




    {{-- type getter --}}
    <script>
      document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('click', event => {
          const selectedType = event.target.getAttribute('data-type');
          document.getElementById('selectedType').value = selectedType; // Update the hidden input field value
          event.target.closest('.btn-group').querySelector('.typeButton').innerText = selectedType;
        });
      });
    </script>


    {{-- establishment getter --}}
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.dropdown-item').forEach(item => {
          item.addEventListener('click', function(e) {
            e.preventDefault(); 
            const type = this.getAttribute('data-type'); 
            this.closest('.modal-body').querySelector('.typeButton').textContent = type; 
            this.closest('.modal-body').querySelector('input[name="type"]').value = type; 
          });
        });
      });
    </script>


{{-- NOT OKAY --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
      const establishmentElements = document.querySelectorAll('.establishment');

      establishmentElements.forEach(function (element) {
          element.addEventListener('click', function () {
              // Get the establishment ID from the data-id attribute
              const establishmentId = this.getAttribute('data-id');

              // Get the establishment name
              const establishmentName = this.textContent;

              // Update the visible input field with the establishment name
              document.getElementById('nameSmall').value = establishmentName;

              // Update the hidden input field with the establishment ID
              document.getElementById('establishment_id').value = establishmentId;
          });
      });
  });
</script>



    
    
    {{-- amenities --}}
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.amen-checkbox').forEach(function(checkbox) {
          checkbox.addEventListener('change', function() {
            var selectedAmenities = [];
            document.querySelectorAll('.amen-checkbox:checked').forEach(function(checkedCheckbox) {
              selectedAmenities.push(checkedCheckbox.value);
            });
            document.getElementById('selectedAmenitiesInput').value = selectedAmenities.join(', ');
          });
        });
      });
    </script>
    
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
