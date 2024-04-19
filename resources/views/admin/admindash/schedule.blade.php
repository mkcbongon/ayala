<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free">
  <head>
    <title>Appointment - Ayala Land Premier</title>
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

    CALENDAR
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="calendar/https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="calendar/https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="calendar/fonts/icomoon/style.css">
  
    <link href='calendar/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='calendar/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="calendar/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="calendar/css/style.css">
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
              <h4 class="py-3 mb-4"> CALENDAR</h4>
              
              <hr class="my-5" />
              <div class="card">
                <div class="card-header flex-column flex-md-row">
                  <h5 class="card-header">SCHEDULE OF APPOINTMENTS</h5>
                </div>

                {{--  --}}
                <div class="content" style="margin-top: -50px">
                    <div id='calendar'></div>
                </div>

                <div class="modal fade" id="eventModal" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="eventModalLabel">Appointment Details</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <p id="eventTitle"></p>
                              <p id="eventStart"></p>
                              {{-- <p id="eventEnd"></p> --}}
                              <p><strong>Name:</strong> <span id="eventName"></span></p>
                              <p><strong>Phone:</strong> <span id="eventPhone"></span></p>
                          </div>
                      </div>
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


    {{-- CALENDAR --}}

    <script src="calendar/js/jquery-3.3.1.min.js"></script>
    <script src="calendar/js/popper.min.js"></script>
    <script src="calendar/js/bootstrap.min.js"></script>

    <script src='calendar/fullcalendar/packages/core/main.js'></script>
    <script src='calendar/fullcalendar/packages/interaction/main.js'></script>
    <script src='calendar/fullcalendar/packages/daygrid/main.js'></script>

    <script>
      document.addEventListener('DOMContentLoaded', function () {
          var calendarEl = document.getElementById('calendar');

          var calendar = new FullCalendar.Calendar(calendarEl, {
              plugins: ['interaction', 'dayGrid'],
              defaultDate: '2024-04-19',
              editable: true,
              eventLimit: true,
              events: {!! $events !!},
              eventClick: function (info) {
                  var event = info.event;
                  $('#eventModal #eventTitle').text(event.title);
                  $('#eventModal #eventStart').text(event.start.toLocaleString());
                  // $('#eventModal #eventEnd').text(event.end ? event.end.toLocaleString() : '');
                  $('#eventModal #eventName').text(event.extendedProps.name || '');
                  $('#eventModal #eventPhone').text(event.extendedProps.phone || '');
                  $('#eventModal').modal('show');
              }
          });

          calendar.render();
      });
  </script>
    

    <script src="calendar/js/main.js"></script>
  </body>
</html>
