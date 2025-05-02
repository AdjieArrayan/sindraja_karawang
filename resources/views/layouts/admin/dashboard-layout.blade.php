<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@700;800&family=Almarai:wght@400;700;800&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('style/assets/css/admin/dashboard.css') }}" />
  </head>
  <body>

    @yield('sidebar')
    <div class="dashboard-container">
      <nav class="sidebar bg-custom-primary">
        <div class="text-center p-4">
          <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/3ddce1866fb24ecacb2940636b67763a3c159757" alt="SIDRAJA Logo" class="logo img-fluid" />
        </div>

        <div class="text-center my-4">
          <h2 class="welcome-text mb-0">Welcome Back</h2>
          <h1 class="admin-text">{{ auth()->check() ? auth()->user()->username : 'NAMA' }}!</h1>
        </div>

        <ul class="nav flex-column gap-3 px-3">
          <li class="nav-item">
            <a href="admin-dashboard" class="nav-link d-flex align-items-center gap-3 p-3 rounded-4">
              <i class="ti ti-home fs-2"></i>
              <span class="nav-text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="user-management" class="nav-link d-flex align-items-center gap-3 p-3 rounded-4">
              <i class="ti ti-users fs-2"></i>
              <span class="nav-text">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="report" class="nav-link d-flex align-items-center gap-3 p-3 rounded-4">
              <i class="ti ti-file fs-2"></i>
              <span class="nav-text">Reports</span>
            </a>
          </li>
        </ul>

        <a class="btn btn-danger mt-auto mb-4 d-flex align-items-center justify-content-center gap-2 p-3 rounded-4 w-100" data-bs-toggle="modal" data-bs-target="#logoutModal" title="Logout">
            <i class="ti ti-logout fs-2"></i>
            <span class="fs-5">Logout</span>
         </a>
      </nav>

      @yield('content')

      @yield('footer')
        <footer class="d-flex align-items-center justify-content-center gap-2 mt-auto">
          <svg
            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 1.625C6.73915 1.625 5.50661 1.99889 4.45824 2.69938C3.40988 3.39988 2.59278 4.39551 2.11027 5.56039C1.62776 6.72527 1.50152 8.00707 1.7475 9.2437C1.99348 10.4803 2.60064 11.6162 3.4922 12.5078C4.38376 13.3994 5.51967 14.0065 6.7563 14.2525C7.99293 14.4985 9.27473 14.3722 10.4396 13.8897C11.6045 13.4072 12.6001 12.5901 13.3006 11.5418C14.0011 10.4934 14.375 9.26086 14.375 8C14.373 6.30985 13.7007 4.6895 12.5056 3.49439C11.3105 2.29927 9.69015 1.62698 8 1.625ZM8 13.625C6.88748 13.625 5.79995 13.2951 4.87492 12.677C3.94989 12.0589 3.22892 11.1804 2.80318 10.1526C2.37744 9.12476 2.26604 7.99376 2.48309 6.90262C2.70013 5.81147 3.23586 4.80919 4.02253 4.02252C4.8092 3.23585 5.81148 2.70012 6.90262 2.48308C7.99376 2.26604 9.12476 2.37743 10.1526 2.80318C11.1804 3.22892 12.0589 3.94989 12.677 4.87492C13.2951 5.79994 13.625 6.88748 13.625 8C13.6233 9.49133 13.0302 10.9211 11.9757 11.9756C10.9211 13.0302 9.49134 13.6233 8 13.625ZM5.875 8C5.875 8.446 6.01533 8.88069 6.27611 9.24251C6.53689 9.60432 6.90491 9.87491 7.32802 10.016C7.75113 10.157 8.2079 10.1613 8.63361 10.0283C9.05932 9.89536 9.4324 9.6318 9.7 9.275C9.75976 9.19543 9.84868 9.14287 9.94719 9.12886C10.0457 9.11485 10.1458 9.14056 10.2253 9.20031C10.3049 9.26007 10.3574 9.34899 10.3715 9.4475C10.3855 9.54602 10.3598 9.64606 10.3 9.72563C9.93786 10.2082 9.43308 10.5646 8.85714 10.7444C8.28121 10.9242 7.6633 10.9182 7.09095 10.7273C6.51859 10.5365 6.02079 10.1704 5.66804 9.68088C5.31529 9.1914 5.12547 8.60335 5.12547 8C5.12547 7.39665 5.31529 6.8086 5.66804 6.31912C6.02079 5.82963 6.51859 5.46353 7.09095 5.27266C7.6633 5.08179 8.28121 5.07582 8.85714 5.2556C9.43308 5.43538 9.93786 5.7918 10.3 6.27437C10.3598 6.35394 10.3855 6.45398 10.3715 6.5525C10.3574 6.65101 10.3049 6.73993 10.2253 6.79969C10.1458 6.85944 10.0457 6.88515 9.94719 6.87114C9.84868 6.85713 9.75976 6.80456 9.7 6.725C9.4324 6.3682 9.05932 6.10464 8.63361 5.97166C8.2079 5.83868 7.75113 5.84301 7.32802 5.98405C6.90491 6.12509 6.53689 6.39568 6.27611 6.75749C6.01533 7.1193 5.875 7.554 5.875 8Z" fill="#62652E"/>
          </svg>
          <span class="copyright-text">2025 Sindraja. All Rights Reserved.</span>
        </footer>
    </div>

    <!-- Modal untuk Logout -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center rounded-4 p-4">
            <div class="modal-body">
            <div class="mb-3">
                <i class="ti ti-alert-circle fs-1" style="color: #a08d37;"></i>
            </div>
            <h4 class="fw-bold">Peringatan!</h4>
            <p class="text-muted fw-semibold">Apakah Anda yakin ingin keluar?</p>
            <div class="d-flex justify-content-center gap-3 mt-4">
                <a href="login-form" type="button" class="btn btn-danger px-4">Ya, keluar!</a>
                <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batalkan</button>
            </div>
            </div>
        </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#user-management').DataTable({
                order: [[0, 'asc']] // Ini harus di dalam objek konfigurasi
            });

            $('#report').DataTable({
                order: [[0, 'asc']]
            });
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  </body>
</html>