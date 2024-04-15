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


          <div class="card-body">
            <table id="saleTable" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Birth</th>
                        <th>Property</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Location</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($uploads as $upload)
                    <tr>
                        <td><img src="{{ asset($upload->image) }}" alt="Mid Image" width="100"></td>
                        <td>{{ $upload->firstname }}</td>
                        <td>{{ $upload->midlename }}</td>
                        <td>{{ $upload->lastname }}</td>
                        <td>{{ $upload->email }}</td>
                        <td>{{ $upload->birth }}</td>
                        <td>{{ $upload->property }}</td>
                        <td>{{ $upload->category }}</td>
                        <td>{{ $upload->type }}</td>
                        <td>{{ $upload->location }}</td>
                        <td>{{ $upload->price }}</td>
                        <td>{{ $upload->description }}</td>
                        <td>{{ $upload->status }}</td>
                        <td>
                            <form action="{{ route('upload.accept', $upload->id) }}" method="post">
                                @csrf
                                <button type="submit" class="accept-button">Accept</button>
                            </form>
                            <form action="{{ route('upload.decline', $upload->id) }}" method="post">
                                @csrf
                                <button type="submit" class="decline-button">Decline</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
<style>
    .accept-button,
.decline-button {
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    font-size: 16px;
    margin-right: 10px; /* Adjust margin as needed */
}

.accept-button {
    background-color: #28a745; /* Green color */
    color: #fff; /* White text color */
}

.decline-button {
    background-color: #dc3545; /* Red color */
    color: #fff; /* White text color */
}

</style>


          <script src="../assets/vendor/libs/jquery/jquery.js"></script>
          <script src="../assets/vendor/libs/popper/popper.js"></script>
          <script src="../assets/vendor/js/bootstrap.js"></script>
          <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
          <script src="../assets/vendor/js/menu.js"></script>
          <script src="../assets/js/main.js"></script>

          <script async defer src="https://buttons.github.io/buttons.js"></script>
