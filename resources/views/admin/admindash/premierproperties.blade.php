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
              <h4 class="py-3 mb-4"> Ayala Land Premier Properties</h4>
              
              <hr class="my-5" />
              <div class="card">
                <div class="card-header flex-column flex-md-row">
                  <h5 class="card-header">Ayala Land Premier Properties</h5>
                  {{-- Add Property --}}
                  <div class="col-lg-4 col-md-6">
                    <div class="mt-3">
                      
                      <button
                        type="button"
                        class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#add">
                        Add Property
                      </button>

                      <!-- Modal -->
                      <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="label1">Add Property</h5>
                              <button type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            </div>

                            <form id="addPropertyForm" action="{{ route('addproperty')}}" method="POST">
                              @csrf
                            <div class="modal-body">
                              
                              {{-- property --}}
                              <div class="row">
                                <div class="col mb-3">
                                  <label for="name" class="form-label">Property</label>
                                  <input type="text" id="property" class="form-control" name="name" placeholder="Property Name" />
                                </div>
                              </div>
                              {{-- !! --}}

                              {{-- category --}}
                              <input type="hidden" id="categoryInput" name="category"/>
                              <div class="row">
                                <div class="col mb-3">
                                  <button id="categoryButton" type="button" class="btn btn-outline-danger dropdown-toggle"
                                          data-bs-toggle="dropdown" aria-expanded="false">
                                      Category
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectCategory('Pre-Selling', 'categoryButton')">Pre-Selling</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectCategory('RFO', 'categoryButton')">RFO</a></li>
                                </ul>
                                </div>
                              </div>
                              {{-- !! --}}

                              {{-- type --}}
                              <input type="hidden" id="typeInput" name="type"/>
                              <div class="row">
                                <div class="col mb-3">
                                  <button id="typeButton" type="button" class="btn btn-outline-danger dropdown-toggle"
                                          data-bs-toggle="dropdown" aria-expanded="false">
                                      Type
                                  </button>
                                  <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectType('Residential', 'typeButton')">Residential</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectType('Commercial', 'typeButton')">Commercial</a></li>
                                </ul>
                                </div>
                              </div>
                              {{-- !! --}}
                            
                              {{-- location --}}
                              <div class="row">
                                <div class="col mb-3">
                                  <label for="location" class="form-label">Location</label>
                                  <input type="text" id="location" class="form-control" name="location" placeholder="Location" />
                                </div>
                              </div>
                              {{-- !! --}}

                              {{-- price --}}
                              <div class="input-group input-group-merge">
                                <span class="input-group-text">₱</span>
                                <input type="number" class="form-control" name="price"
                                  placeholder="100" aria-label="Amount (to the nearest dollar)" />
                                <span class="input-group-text">.00</span>
                              </div>
                              {{--  --}}

                              {{-- size --}}
                              <input type="hidden" id="selectedSizesInput" name="selected_sizes" />
                              <div class="card-body">
                                <div class="row gy-3">
                                  <div class="col-md">
                                    <small class="text-light fw-medium d-block">Size</small>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="studioCheckbox" name="size[]" value="Studio" />
                                      <label class="form-check-label" for="studioCheckbox">Studio</label>
                                    </div>
                                    <div class="form-check form-check-inline mt-3">
                                      <input class="form-check-input" type="checkbox" id="1brCheckbox" name="size[]" value="1BR"/>
                                      <label class="form-check-label" for="1brCheckbox">1BR</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="2brCheckbox" name="size[]" value="2BR"/>
                                      <label class="form-check-label" for="2brCheckbox">2BR</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="3brCheckbox" name="size[]" value="3BR"/>
                                      <label class="form-check-label" for="3brCheckbox">3BR</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="3brdeluxeCheckbox" name="size[]" value="3BR Deluxe"/>
                                      <label class="form-check-label" for="3brdeluxeCheckbox">3BR Deluxe</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="3brpremierCheckbox" name="size[]" value="3BR Premier"/>
                                      <label class="form-check-label" for="3brpremierCheckbox">3BR Premier</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="executive1brCheckbox" name="size[]" value="Executive"/>
                                      <label class="form-check-label" for="executive1brCheckbox">Executive 1BR</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="houseandlotCheckbox" name="size[]" value="House and Lot"/>
                                      <label class="form-check-label" for="houseandlotCheckbox">House and Lot</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="lotonlyCheckbox" name="size[]" value="Lot Only"/>
                                      <label class="form-check-label" for="lotonlyCheckbox">Lot Only</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                      <input class="form-check-input" type="checkbox" id="penthouseCheckbox" name="size[]" value="Pent House"/>
                                      <label class="form-check-label" for="penthouseCheckbox">Pent House</label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              {{-- size --}}

                              {{-- description --}}
                              <div class="row">
                                <div class="col mb-3">
                                  <label for="description" class="form-label">Description</label>
                                  <textarea id="description" class="form-control" name="description" rows="3"></textarea>
                                </div>
                              </div>
                              {{--  --}}

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                              </button>
                              <button type="submit" class="btn btn-primary">Save data</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>

                
                {{-- TABLE --}}
                <div class="card-body">
                  <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Property</th>
                          <th>Category</th>
                          <th>Type</th>
                          <th>Location</th>
                          <th>Price</th>
                          <th>Size</th>
                          <th>Description</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($data as $prop)
                        <tr> 
                          <td>{{ substr($prop->name, 0, 15) }}{{ strlen($prop->name) > 15 ? '...' : '' }}</td>
                          <td><span class="badge bg-label-danger me-1">{{ $prop->category }}</span></td>
                          <td><span class="badge bg-label-danger me-1">{{ $prop->type }}</span></td>
                          <td><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                            class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6"/>
                          </svg>{{ substr($prop->location, 0, 11) }}{{ strlen($prop->location) > 11 ? '...' : '' }}</i></td>
                          <td>₱{{ number_format($prop->price, 2) }}</td>
                          <td>{{ substr($prop->size, 0, 15) }}{{ strlen($prop->size) > 15 ? '...' : '' }}</td>
                          <td>{{ substr($prop->description, 0, 20) }}{{ strlen($prop->description) > 20 ? '...' : '' }}</td>
                          <td>
                            <button type="button" class="btn btn-xs btn-primary" data-bs-toggle="modal" data-bs-target="#edit{{ $prop->id }}">Edit</button>
                            
                            
                            {{-- EDIT PROPERTY --}}
                            <!-- Modal -->
                            <div class="modal fade" id="edit{{ $prop->id }}" tabindex="-1" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="editProperty">Edit Property</h5>
                                    <button
                                      type="button"
                                      class="btn-close"
                                      data-bs-dismiss="modal"
                                      aria-label="Close"></button>
                                  </div>

                                  <form id="addPropertyForm" action="{{ route('editproperty', ['id' => $prop->id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                  <div class="modal-body">

                                    {{-- property --}}
                                    <div class="row">
                                      <div class="col mb-3">
                                        <label for="name" class="form-label">Property</label>
                                        <input type="text" id="property" class="form-control" name="name" value="{{ $prop->name }}" />
                                      </div>
                                    </div>
                                    {{-- !! --}}

                                    {{-- category --}}
                                    <input type="hidden" id="categoryInput" name="category" value="{{ $prop->category }}"/>
                                    <div class="row">
                                      <div class="col mb-3">
                                        <button id="categoryButton" type="button" class="btn btn-outline-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                          {{ $prop->category }}
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectCategory('Pre-Selling', 'categoryButton')">Pre-Selling</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectCategory('RFO', 'categoryButton')">RFO</a></li>
                                      </ul>
                                      </div>
                                    </div>
                                    {{-- !! --}}

                                    {{-- type --}}
                                    <input type="hidden" id="typeInput" name="type" value="{{ $prop->type }}"/>
                                    <div class="row">
                                      <div class="col mb-3">
                                        <button id="typeButton" type="button" class="btn btn-outline-danger dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false">
                                          {{ $prop->type }}
                                        </button>
                                        <ul class="dropdown-menu">
                                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectType('Residential')">Residential</a></li>
                                          <li><a class="dropdown-item" href="javascript:void(0);" onclick="selectType('Commercial')">Commercial</a></li>
                                      </ul>
                                      </div>
                                    </div>
                                    {{-- !! --}}
                                  
                                    {{-- location --}}
                                    <div class="row">
                                      <div class="col mb-3">
                                        <label for="location" class="form-label">Location</label>
                                        <input type="text" id="location" class="form-control" name="location" value="{{ $prop->location }}" />
                                      </div>
                                    </div>
                                    {{-- !! --}}

                                    {{-- price --}}
                                    <div class="input-group input-group-merge">
                                      <span class="input-group-text">₱</span>
                                      <input type="number" class="form-control" name="price"
                                        value="{{ $prop->price }}" aria-label="Amount (to the nearest dollar)" />
                                      <span class="input-group-text">.00</span>
                                    </div>
                                    {{--  --}}

                                    {{-- size --}}
                                    <input type="hidden" id="selectedSizesInput" name="selected_sizes" />
                                    <div class="card-body">
                                      <div class="row gy-3">
                                        <div class="col-md">
                                          <small class="text-light fw-medium d-block">Size</small>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="studioCheckbox" name="size[]" value="Studio" {{ strpos($prop->size, 'Studio') !== false ? 'checked' : '' }} />
                                            <label class="form-check-label" for="studioCheckbox">Studio</label>
                                          </div>
                                          <div class="form-check form-check-inline mt-3">
                                            <input class="form-check-input" type="checkbox" id="1brCheckbox" name="size[]" value="1BR" {{ strpos($prop->size, '1BR') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="1brCheckbox">1BR</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="2brCheckbox" name="size[]" value="2BR" {{ strpos($prop->size, '2BR') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="2brCheckbox">2BR</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="3brCheckbox" name="size[]" value="3BR" {{ strpos($prop->size, '3BR') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="3brCheckbox">3BR</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="3brdeluxeCheckbox" name="size[]" value="3BR Deluxe" {{ strpos($prop->size, '3BR Deluxe') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="3brdeluxeCheckbox">3BR Deluxe</label>
                                          </div>
                                        </div>
                                        <div class="col-md">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="3brpremierCheckbox" name="size[]" value="3BR Premier" {{ strpos($prop->size, '3BR Premier') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="3brpremierCheckbox">3BR Premier</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="executive1brCheckbox" name="size[]" value="Executive 1BR" {{ strpos($prop->size, 'Executive 1BR') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="executive1brCheckbox">Executive 1BR</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="houseandlotCheckbox" name="size[]" value="House and Lot" {{ strpos($prop->size, 'House and Lot') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="houseandlotCheckbox">House and Lot</label>
                                          </div>
                                        </div>
                                        <div class="col-md">
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="lotonlyCheckbox" name="size[]" value="Lot Only" {{ strpos($prop->size, 'Lot Only') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="lotonlyCheckbox">Lot Only</label>
                                          </div>
                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="penthouseCheckbox" name="size[]" value="Pent House" {{ strpos($prop->size, 'Pent House') !== false ? 'checked' : '' }}/>
                                            <label class="form-check-label" for="penthouseCheckbox">Pent House</label>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    {{-- size --}}

                                    {{-- description --}}
                                    <div class="row">
                                      <div class="col mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" class="form-control" name="description" rows="3">{{ $prop->description }}</textarea>
                                      </div>
                                    </div>
                                    {{--  --}}
                                  </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                      Close
                                    </button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                  </div>
                                  </form>
                                </div>
                              </div>
                            </div>

                            <form action="{{ route('deleteproperty', ['id' => $prop->id]) }}" method="POST" style="display: inline;">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                            </form>
                                
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


    {{-- category name getter --}}
    <script>
      function selectCategory(category, buttonId) {
          var button = document.getElementById(buttonId);
          button.textContent = category;
          button.setAttribute('name', category);
      
          document.getElementById('categoryInput').value = category;
      }
    </script>


    {{-- type name getter --}}
    <script>
      function selectType(type) {
        document.getElementById('typeButton').textContent = type;
        document.getElementById('typeButton').setAttribute('name', type);
        document.getElementById('typeInput').value = type;
      }
    </script>
  
  

  {{-- size reader --}}
    <script>
      document.querySelectorAll('input[name="size"]').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
          var selectedSizes = [];
          document.querySelectorAll('input[name="size"]:checked').forEach(function(checkedCheckbox) {
            selectedSizes.push(checkedCheckbox.value);
          });
          document.getElementById('selectedSizesInput').value = selectedSizes.join(', ');
        });
      });
    </script>
    


    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../assets/vendor/js/menu.js"></script>
    <script src="../assets/js/main.js"></script>

    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
