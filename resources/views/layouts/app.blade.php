<html>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"
    />
    <link
      href="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.css"
      rel="stylesheet"
    />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.css" rel="stylesheet">
    

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- DataTables JS -->
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/bootstrap-table.min.js"></script>
    <script src="https://unpkg.com/bootstrap-table@1.22.1/dist/extensions/filter-control/bootstrap-table-filter-control.min.js"></script>
    
    
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

    
    
    <link rel="stylesheet" href="{{asset('css/sass.css')}}" />
    <link rel="stylesheet" href="{{asset('css/layers.css')}}" />
    <link rel="stylesheet" href="{{asset('css/product.css')}}" />
    <link rel="stylesheet" href="{{asset('css/pos.css')}}" />
    <link rel="stylesheet" href="{{asset('css/product-add.css')}}" />


        <title>App Name - @yield('title')</title>
    </head>
    <body>
    <div class="main-wrapper">
    @include('layouts.sidebar')           
    @yield('content')
    </div>
    <script src="{{asset('js/java.js')}}"></script>
    </body>
</html>