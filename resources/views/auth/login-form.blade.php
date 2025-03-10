<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&family=Almarai:wght@700&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('style/assets/css/login-form.css') }}" />
  </head>
  <body>
    <main class="app-container min-vh-100 position-relative d-flex">
      <div class="container position-relative z-3 py-4">
        <div class="row justify-content-start">
          <div class="col-12 col-lg-8">
            <a href="/"class="back-button btn position-absolute border-0 p-0">
                <svg width="55" height="55" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg" class="back-icon">
                  <path d="M25.7812 0C28.1624 0 30.4452 0.304362 32.6294 0.913086C34.8136 1.52181 36.8726 2.38118 38.8062 3.49121C40.7397 4.60124 42.4764 5.94401 44.0161 7.51953C45.5558 9.09505 46.8986 10.8407 48.0444 12.7563C49.1903 14.672 50.0586 16.722 50.6494 18.9062C51.2402 21.0905 51.5446 23.3822 51.5625 25.7812C51.5625 28.1624 51.2581 30.4452 50.6494 32.6294C50.0407 34.8136 49.1813 36.8726 48.0713 38.8062C46.9613 40.7397 45.6185 42.4764 44.043 44.0161C42.4674 45.5558 40.7218 46.8986 38.8062 48.0444C36.8905 49.1903 34.8405 50.0586 32.6562 50.6494C30.472 51.2402 28.1803 51.5446 25.7812 51.5625C23.4001 51.5625 21.1173 51.2581 18.9331 50.6494C16.7489 50.0407 14.6899 49.1813 12.7563 48.0713C10.8228 46.9613 9.0861 45.6185 7.54639 44.043C6.00667 42.4674 4.6639 40.7218 3.51807 38.8062C2.37223 36.8905 1.50391 34.8405 0.913086 32.6562C0.322266 30.472 0.0179036 28.1803 0 25.7812C0 23.4001 0.304362 21.1173 0.913086 18.9331C1.52181 16.7489 2.38118 14.6899 3.49121 12.7563C4.60124 10.8228 5.94401 9.0861 7.51953 7.54639C9.09505 6.00667 10.8407 4.6639 12.7563 3.51807C14.672 2.37223 16.722 1.50391 18.9062 0.913086C21.0905 0.322266 23.3822 0.0179036 25.7812 0ZM25.7812 48.125C27.8402 48.125 29.8185 47.8564 31.7163 47.3193C33.6141 46.7822 35.3866 46.0303 37.0337 45.0635C38.6808 44.0967 40.1937 42.9329 41.5723 41.5723C42.9508 40.2116 44.1146 38.7077 45.0635 37.0605C46.0124 35.4134 46.7643 33.632 47.3193 31.7163C47.8743 29.8006 48.1429 27.8223 48.125 25.7812C48.125 23.7223 47.8564 21.744 47.3193 19.8462C46.7822 17.9484 46.0303 16.1759 45.0635 14.5288C44.0967 12.8817 42.9329 11.3688 41.5723 9.99023C40.2116 8.61165 38.7077 7.44792 37.0605 6.49902C35.4134 5.55013 33.632 4.79818 31.7163 4.24316C29.8006 3.68815 27.8223 3.4196 25.7812 3.4375C23.7223 3.4375 21.744 3.70605 19.8462 4.24316C17.9484 4.78027 16.1759 5.53223 14.5288 6.49902C12.8817 7.46582 11.3688 8.62956 9.99023 9.99023C8.61165 11.3509 7.44792 12.8548 6.49902 14.502C5.55013 16.1491 4.79818 17.9305 4.24316 19.8462C3.68815 21.7619 3.4196 23.7402 3.4375 25.7812C3.4375 27.8402 3.70605 29.8185 4.24316 31.7163C4.78027 33.6141 5.53223 35.3866 6.49902 37.0337C7.46582 38.6808 8.62956 40.1937 9.99023 41.5723C11.3509 42.9508 12.8548 44.1146 14.502 45.0635C16.1491 46.0124 17.9305 46.7643 19.8462 47.3193C21.7619 47.8743 23.7402 48.1429 25.7812 48.125ZM19.5239 24.0625H37.8125V27.5H19.5239L26.9897 34.8584L24.5728 37.3291L12.9175 25.7812L24.5728 14.2334L26.9897 16.7041L19.5239 24.0625Z" fill="white" fill-opacity="0.7">
                  </path>
                </svg>
            </a>

            <header class="text-center mb-4">
              <img src="{{asset('style/assets/image/hero_img/hero_logo.png') }}" alt="SINDRAJA Logo" class="logo img-fluid"/>
            </header>

            <section class="login-section text-center">
              <h1 class="login-title mb-4">Silahkan Login!</h1>

              <form class="mx-auto" style="max-width: 456px">
                <div class="mb-4">
                  <div class="position-relative">
                    <input type="text" placeholder="Masukkan Username" class="form-control custom-input" aria-label="Username"/>
                    <div class="position-absolute top-50 end-0 translate-middle-y pe-3">
                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 8.75L12.5 21.25L6.25 15" stroke="#1C992B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </div>
                  </div>
                </div>

                <div class="mb-4">
                  <div class="position-relative">
                    <input type="password" placeholder="Masukkan Password" class="form-control custom-input" aria-label="Password"/>
                    <div class="position-absolute top-50 end-0 translate-middle-y pe-3">
                      <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3.75 16.25C8.25 6.25 21.75 6.25 26.25 16.25" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15 21.25C14.5075 21.25 14.0199 21.153 13.5649 20.9645C13.11 20.7761 12.6966 20.4999 12.3483 20.1517C12.0001 19.8034 11.7239 19.39 11.5355 18.9351C11.347 18.4801 11.25 17.9925 11.25 17.5C11.25 17.0075 11.347 16.5199 11.5355 16.0649C11.7239 15.61 12.0001 15.1966 12.3483 14.8483C12.6966 14.5001 13.11 14.2239 13.5649 14.0355C14.0199 13.847 14.5075 13.75 15 13.75C15.9946 13.75 16.9484 14.1451 17.6517 14.8483C18.3549 15.5516 18.75 16.5054 18.75 17.5C18.75 18.4946 18.3549 19.4484 17.6517 20.1517C16.9484 20.8549 15.9946 21.25 15 21.25Z" stroke="#1E1E1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn login-button">Kirim</button>
                </div>
              </form>

              <div class="mt-5">
                <p class="guest-text mb-3">
                  Ingin melihat Data Trantibum?<br />
                  Silahkan Klik dibawah ini
                </p>
                <a href="user-main" class="btn guest-button">Guest</a>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="background-image" role="presentation"></div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

