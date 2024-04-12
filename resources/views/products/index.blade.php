<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Product Table
  </title>
  @include('fragments.css.header')
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Tables</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="/dashboard">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="/profile">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">logout</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </ul>
    </div>

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Search here...</label>
              <input type="text" id="customSearchInput" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="{{route('product.create')}}" class="nav-link text-body font-weight-bold px-0">
                <i class="fa-regular fa-square-plus"></i>
                <span class="d-sm-inline d-none">Add Product</span>
              </a>
            </li>
          </ul>
        </div>
        <li class="nav-item d-flex align-items-center">
            <a href="" class="nav-link text-body font-weight-bold px-0" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fa-regular fa-square-plus"></i>
                <span class="d-sm-inline d-none">Add Category</span>
              </a>
            </li>
      </div>
    </nav>
    <!-- End Navbar -->

    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3">Product table</h6>
          </div>
        </div>
        <table class="table table-striped dt-responsive cell-border nowrap" id="productTable">
          <thead>
            <tr>
              <th class="text-uppercase text-secondary text-center">Id</th>
              <th class="text-uppercase text-secondary text-center">Name</th>
              <th class="text-uppercase text-secondary text-center">Qty</th>
              <th class="text-uppercase text-secondary text-center">Price</th>
              <th class="text-uppercase text-secondary text-center">Description</th>
              <th class="text-uppercase text-secondary text-center">Action</th>
            </tr>
          <tbody></tbody>
          </thead>
        </table>


      </div>
    </div>

    <footer class="footer py-4  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    </div>
  </main>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="input-group input-group-outline mb-3">
              <label class="form-label">Name</label>
              <input type="text" name="category_name" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Add</button>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('fragments.js.js')
  <script>
    $(document).ready(function() {
      $('#productTable').DataTable({
        "dom": '<"form-control"f>lrtip',
        "dom": 'lrtip',
        destroy: true,
        searching: true,
        paging: true,
        select: true,
        responsive: true,
        lengthChange: false,
        autoWidth: true,
        processing: true,
        serverSide: true,
        autoWidth: true,
        ajax: '{{ route("product.datatables") }}',
        columns: [{
            data: 'id',
            name: 'id'
          },
          {
            data: 'name',
            name: 'name'
          },
          {
            data: 'qty',
            name: 'qty'
          },
          {
            data: 'price',
            name: 'price'
          },
          {
            data: 'description',
            name: 'description'
          },
          {
            data: 'action',
            name: 'action'
          },
        ],
        columnDefs: [{
            "targets": 0,
            "createdCell": function(td, cellData, rowData, row, col) {
              $(td).css({
                'width': '5%',
                'vertical-align': 'middle',
                'text-align': 'center'
              });
            }
          },
          {
            "targets": 1,
            "createdCell": function(td, cellData, rowData, row, col) {
              $(td).css({
                'width': '20%',
                'vertical-align': 'middle',
                'text-align': 'center'
              });
            }
          },
          {
            "targets": 2,
            "createdCell": function(td, cellData, rowData, row, col) {
              $(td).css({
                'width': '20%',
                'vertical-align': 'middle',
                'text-align': 'center'
              });
            }
          },
          {
            "targets": 3,
            "createdCell": function(td, cellData, rowData, row, col) {
              $(td).css({
                'width': '20%',
                'vertical-align': 'middle',
                'text-align': 'center'
              });
            }
          },
          {
            "targets": 4,
            "createdCell": function(td, cellData, rowData, row, col) {
              $(td).css({
                'width': '40%',
                'vertical-align': 'middle',
                'text-align': 'center'
              });
            }
          },
          {
            "targets": 5,
            "createdCell": function(td, cellData, rowData, row, col) {
              $(td).css({
                'text-align': 'center',
                'vertical-align': 'middle',
                'display': 'flex',
                'justify-content': 'center',
                'align-items': 'center'
              });

            }
          },
        ],


      });
      var table = $('#productTable').DataTable();
      $('#customSearchInput').on('keyup', function() {
        table.search(this.value).draw();
      });
    });

    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    function add_category() {


    }
  </script>
</body>

</html>