<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" crossorigin="anonymous">
  </head>
  <body>
      <div class="px-0 bg-light">
        <div class="d-flex flex-column flex-lg-row h-sm-full bg-surface-secondary">
          <nav class="navbar show navbar-vertical h-sm-screen navbar-expand-lg px-3 py-1 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
              <div class="container-fluid pt-5">
                  <img src="{{ ('/img/vektor.jpg') }}" alt="..."> </a>
                  <div class="collapse navbar-collapse" id="sidebarCollapse">
                      <ul class="navbar-nav pt-4">
                          <li class="nav-item"> <a class="nav-link" href="/admin-coba"> <i class="bi bi-house"></i> Dashboard </a> </li>
                          <li class="nav-item"> <a class="nav-link" href="/"> <i class="bi bi-box-arrow-left"></i> Logout </a> </li>
                      </ul>
                  </div>
              </div>
          </nav>
          <div class="h-screen flex-grow-1 overflow-y-lg-auto">
              <header class="bg-surface-primary border-bottom pt-6">
                  <div class="container-fluid">
                      <div class="mb-npx">
                        <div class="px-3">
                            <h3 class="h2 mb-4 ls-tight ">Data Pengguna</h3>
                        </div>    
                      </div>
                  </div>
              </header>
              <main class="py-6 bg-surface-secondary">
                  <div class="container-fluid">
                      <div class="row g-6 mb-6">
                          <div class="col-xl-3 col-sm-6 col-12">
                              <div class="card shadow border-0">
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Income</span> <span class="h3 font-bold mb-0">60</span> </div>
                                          <div class="col-auto">
                                              <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle"> <i class="bi bi-credit-card"></i> </div>
                                          </div>
                                      </div>
                                      <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>9% </span> <span class="text-nowrap text-xs text-muted">Updated</span> </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-sm-6 col-12">
                              <div class="card shadow border-0">
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Users</span> <span class="h3 font-bold mb-0">5</span> </div>
                                          <div class="col-auto">
                                              <div class="icon icon-shape bg-primary text-white text-lg rounded-circle"> <i class="bi bi-people"></i> </div>
                                          </div>
                                      </div>
                                      <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>3% </span> <span class="text-nowrap text-xs text-muted">Updated</span> </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-sm-6 col-12">
                              <div class="card shadow border-0">
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Capacity</span> <span class="h3 font-bold mb-0">50</span> </div>
                                          <div class="col-auto">
                                              <div class="icon icon-shape bg-info text-white text-lg rounded-circle"> <i class="bi bi-clock-history"></i> </div>
                                          </div>
                                      </div>
                                      <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-success text-success me-2"> <i class="bi bi-arrow-up me-1"></i>2% </span> <span class="text-nowrap text-xs text-muted">Updated</span> </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-xl-3 col-sm-6 col-12">
                              <div class="card shadow border-0">
                                  <div class="card-body">
                                      <div class="row">
                                          <div class="col"> <span class="h6 font-semibold text-muted text-sm d-block mb-2">Speed</span> <span class="h3 font-bold mb-0">30%</span> </div>
                                          <div class="col-auto">
                                              <div class="icon icon-shape bg-warning text-white text-lg rounded-circle"> <i class="bi bi-minecart-loaded"></i> </div>
                                          </div>
                                      </div>
                                      <div class="mt-2 mb-0 text-sm"> <span class="badge badge-pill bg-soft-danger text-danger me-2"> <i class="bi bi-arrow-down me-1"></i>-5% </span> <span class="text-nowrap text-xs text-muted">Updated</span> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @yield('content')
                  </div>
              </main>
          </div>
      </div>
      
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
      $(document).ready( function () {
        $('#usertable').DataTable();
      } );
    </script>
    {{-- <script>
        $(document).ready( function () {
          $('#itemtable').DataTable();
        } );
      </script> --}}
  </body>
</html>