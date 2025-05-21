<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Satuan Polisi Pamong Praja Kabupaten Karawang</title>
    <link rel="icon" href="{{ asset('logo-sindraja.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Almendra&family=Asap+Condensed&family=Poppins:wght@700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('style/assets/css/landing.css') }}" />
  </head>
  <body>
    <main class="main-container min-vh-100 position-relative overflow-hidden">
      <header class="logo-section d-flex align-items-center position-relative">
        <img src="{{asset('style/assets/image/logo_img/logo_karawang.png') }}" alt="Logo 1" class="logo-img-1"/>
        <img src="{{asset('style/assets/image/logo_img/polisi_pamong_praja_logo.png') }}" alt="Logo 2" class="logo-img-2"/>
        <h1 class="logo-text m-0">Satuan Polisi Pamong Praja <br /> Kabupaten Karawang</h1>
      </header>

      <section class="content-section position-relative">
        <h2 class="title mb-4"> Sistem Informasi Digital<br /> Polisi Pamong Praja</h2>
        <h3 class="subtitle mb-4">Kabupaten Karawang</h3>

        <a href="login-form" class="login-button btn d-flex justify-content-center d-none d-lg-inline" type="button">LOGIN DISINI</a>
      </section>

      <img src="{{asset('style/assets/image/logo_img/hero_logo.png') }}" alt="SINDRAJA" class="sindraja-img"/>

      <div class="mobile-login-section text-center d-block d-lg-none">
        <p class="welcome-text">Selamat Datang di Sindraja<br>Silahkan Klik dibawah ini</p>
        <a href="login-form" class="login-button-mobile btn" type="button">LOGIN DISINI</a>
      </div>

      <div class="footer-overlay position-absolute w-100 d-none d-md-inline">
        <img src="{{asset('style/assets/image/hero_img/landing_background.png') }}" alt="Background" class="footer-bg w-100"/>
      </div>

      <footer class="footer-content position-absolute bottom-0 start-0 w-100">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-lg-6 text-white">
              <p class="footer-left">Satpol PP Profesional, Tangguh, dan Terdepan</p>
            </div>
            <nav class="col-lg-6">
              <div class="footer-right d-flex justify-content-lg-end">
                <a href="https://wa.me/082311101786" class="contact-item text-decoration-none" aria-label="WhatsApp">
                  <svg class="contact-icon" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19.8438 5.1148C18.8886 4.15033 17.7511 3.3856 16.4974 2.86518C15.2438 2.34476 13.8991 2.07906 12.5417 2.08355C6.85417 2.08355 2.21876 6.71897 2.21876 12.4065C2.21876 14.2294 2.69792 16.0002 3.59376 17.5627L2.13542 22.9169L7.60417 21.4794C9.11459 22.3023 10.8125 22.7398 12.5417 22.7398C18.2292 22.7398 22.8646 18.1044 22.8646 12.4169C22.8646 9.65647 21.7917 7.06272 19.8438 5.1148ZM12.5417 20.9898C11 20.9898 9.48959 20.5731 8.16667 19.7919L7.85417 19.6044L4.60417 20.4585L5.46876 17.2919L5.26042 16.969C4.4037 15.6013 3.94889 14.0203 3.94792 12.4065C3.94792 7.6773 7.80209 3.82314 12.5313 3.82314C14.8229 3.82314 16.9792 4.71897 18.5938 6.34397C19.3934 7.13966 20.027 8.0862 20.4579 9.12869C20.8889 10.1712 21.1085 11.2888 21.1042 12.4169C21.125 17.1461 17.2708 20.9898 12.5417 20.9898ZM17.25 14.5731C16.9896 14.4481 15.7188 13.8231 15.4896 13.7294C15.25 13.6461 15.0833 13.6044 14.9063 13.8544C14.7292 14.1148 14.2396 14.6981 14.0938 14.8648C13.9479 15.0419 13.7917 15.0627 13.5313 14.9273C13.2708 14.8023 12.4375 14.5211 11.4583 13.6461C10.6875 12.9586 10.1771 12.1148 10.0208 11.8544C9.875 11.594 10 11.4586 10.1354 11.3231C10.25 11.2086 10.3958 11.0211 10.5208 10.8752C10.6458 10.7294 10.6979 10.6148 10.7813 10.4481C10.8646 10.2711 10.8229 10.1252 10.7604 10.0002C10.6979 9.87522 10.1771 8.60439 9.96875 8.08355C9.76042 7.58355 9.54167 7.64605 9.38542 7.63564H8.88542C8.70834 7.63564 8.4375 7.69814 8.19792 7.95855C7.96875 8.21897 7.30209 8.84397 7.30209 10.1148C7.30209 11.3856 8.22917 12.6148 8.35417 12.7815C8.47917 12.9586 10.1771 15.5627 12.7604 16.6773C13.375 16.9481 13.8542 17.1044 14.2292 17.219C14.8438 17.4169 15.4063 17.3856 15.8542 17.3231C16.3542 17.2502 17.3854 16.6981 17.5938 16.094C17.8125 15.4898 17.8125 14.9794 17.7396 14.8648C17.6667 14.7502 17.5104 14.6981 17.25 14.5731Z" fill="white"/>
                  </svg>
                  <span class="d-none d-md-inline">SiPapol 0823-1110-1786</span>
                </a>
                <a href="https://instagram.com/satpolppkrwkab" class="contact-item text-decoration-none" aria-label="Instagram">
                  <svg class="contact-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.8 2H16.2C19.4 2 22 4.6 22 7.8V16.2C22 17.7383 21.3889 19.2135 20.3012 20.3012C19.2135 21.3889 17.7383 22 16.2 22H7.8C4.6 22 2 19.4 2 16.2V7.8C2 6.26174 2.61107 4.78649 3.69878 3.69878C4.78649 2.61107 6.26174 2 7.8 2ZM7.6 4C6.64522 4 5.72955 4.37928 5.05442 5.05442C4.37928 5.72955 4 6.64522 4 7.6V16.4C4 18.39 5.61 20 7.6 20H16.4C17.3548 20 18.2705 19.6207 18.9456 18.9456C19.6207 18.2705 20 17.3548 20 16.4V7.6C20 5.61 18.39 4 16.4 4H7.6ZM17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9Z" fill="white"/>
                  </svg>
                  <span class="d-none d-md-inline">@satpolppkrwkab</span>
                </a>
                <a href="https://satpolpp.karawangkab.go.id/" class="contact-item text-decoration-none" aria-label="Website">
                  <svg class="contact-icon" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.6783 13.4165C15.755 12.784 15.8125 12.1515 15.8125 11.4998C15.8125 10.8482 15.755 10.2157 15.6783 9.58317H18.9175C19.0708 10.1965 19.1667 10.8386 19.1667 11.4998C19.1667 12.1611 19.0708 12.8032 18.9175 13.4165M13.9821 18.7448C14.5571 17.6811 14.9979 16.5311 15.3046 15.3332H18.1317C17.2032 16.9319 15.7302 18.143 13.9821 18.7448ZM13.7425 13.4165H9.25749C9.16166 12.784 9.10416 12.1515 9.10416 11.4998C9.10416 10.8482 9.16166 10.2061 9.25749 9.58317H13.7425C13.8287 10.2061 13.8958 10.8482 13.8958 11.4998C13.8958 12.1515 13.8287 12.784 13.7425 13.4165ZM11.5 19.1282C10.7046 17.9782 10.0625 16.7036 9.66957 15.3332H13.3304C12.9375 16.7036 12.2954 17.9782 11.5 19.1282ZM7.66666 7.6665H4.86832C5.78702 6.06324 7.25904 4.85019 9.00832 4.25484C8.43332 5.31859 8.00207 6.46859 7.66666 7.6665ZM4.86832 15.3332H7.66666C8.00207 16.5311 8.43332 17.6811 9.00832 18.7448C7.2625 18.1433 5.79243 16.9319 4.86832 15.3332ZM4.08249 13.4165C3.92916 12.8032 3.83332 12.1611 3.83332 11.4998C3.83332 10.8386 3.92916 10.1965 4.08249 9.58317H7.32166C7.24499 10.2157 7.18749 10.8482 7.18749 11.4998C7.18749 12.1515 7.24499 12.784 7.32166 13.4165M11.5 3.86192C12.2954 5.01192 12.9375 6.29609 13.3304 7.6665H9.66957C10.0625 6.29609 10.7046 5.01192 11.5 3.86192ZM18.1317 7.6665H15.3046C15.0042 6.47971 14.5601 5.33402 13.9821 4.25484C15.7454 4.85859 17.2117 6.07567 18.1317 7.6665ZM11.5 1.9165C6.20041 1.9165 1.91666 6.229 1.91666 11.4998C1.91666 14.0415 2.92633 16.4791 4.72355 18.2763C5.61344 19.1662 6.6699 19.8721 7.83261 20.3537C8.99531 20.8353 10.2415 21.0832 11.5 21.0832C14.0416 21.0832 16.4792 20.0735 18.2764 18.2763C20.0737 16.4791 21.0833 14.0415 21.0833 11.4998C21.0833 10.2413 20.8354 8.99516 20.3538 7.83245C19.8722 6.66975 19.1663 5.61329 18.2764 4.7234C17.3865 3.8335 16.3301 3.1276 15.1674 2.64599C14.0047 2.16438 12.7585 1.9165 11.5 1.9165Z" fill="white"/>
                  </svg>
                  <span class="d-none d-md-inline">satpolpp.karawangkab.go.id</span>
                </a>
              </div>
            </nav>
          </div>
        </div>
      </footer>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
