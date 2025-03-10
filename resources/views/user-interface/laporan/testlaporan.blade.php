<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entri Laporan Trantibum</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Montserrat:wght@600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{asset('style/assets/css/dokumentasi.css') }}" />
  </head>
  <body>
    <div class="page">
      <header class="header">
        <img
          src="https://cdn.builder.io/api/v1/image/assets/TEMP/8042b5a0c845ddd8c654ba5edd019c2e05cf4377"
          alt="SIDRAJA"
          class="logo"
        />
        <h1 class="header-title">Entri Laporan Trantibum</h1>
      </header>

      <main class="form-container">
        <header class="form-header">
          <div class="icon-container">
            <svg
              class="add-icon"
              width="58"
              height="58"
              viewBox="0 0 58 58"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M29 52.5625C24.3398 52.5625 19.7842 51.1806 15.9094 48.5915C12.0346 46.0024 9.01449 42.3225 7.2311 38.017C5.44771 33.7115 4.98109 28.9739 5.89026 24.4032C6.79942 19.8325 9.04353 15.6341 12.3388 12.3388C15.6341 9.04353 19.8325 6.79942 24.4032 5.89026C28.9739 4.98109 33.7115 5.44771 38.017 7.2311C42.3225 9.01449 46.0024 12.0346 48.5915 15.9094C51.1806 19.7842 52.5625 24.3398 52.5625 29C52.5625 35.2492 50.08 41.2424 45.6612 45.6612C41.2424 50.08 35.2492 52.5625 29 52.5625ZM29 9.06251C25.0567 9.06251 21.202 10.2318 17.9233 12.4226C14.6446 14.6133 12.0892 17.7272 10.5802 21.3703C9.07114 25.0134 8.67631 29.0221 9.4456 32.8896C10.2149 36.7571 12.1138 40.3096 14.9021 43.0979C17.6904 45.8863 21.2429 47.7851 25.1104 48.5544C28.9779 49.3237 32.9867 48.9289 36.6298 47.4199C40.2729 45.9108 43.3867 43.3554 45.5774 40.0767C47.7682 36.798 48.9375 32.9433 48.9375 29C48.9375 23.7123 46.837 18.6411 43.098 14.9021C39.3589 11.1631 34.2878 9.06251 29 9.06251Z"
                fill="#FFFDFD"
              />
              <path
                d="M29 41.6875C28.5193 41.6875 28.0583 41.4965 27.7184 41.1566C27.3785 40.8167 27.1875 40.3557 27.1875 39.875V18.125C27.1875 17.6443 27.3785 17.1833 27.7184 16.8434C28.0583 16.5035 28.5193 16.3125 29 16.3125C29.4807 16.3125 29.9417 16.5035 30.2816 16.8434C30.6215 17.1833 30.8125 17.6443 30.8125 18.125V39.875C30.8125 40.3557 30.6215 40.8167 30.2816 41.1566C29.9417 41.4965 29.4807 41.6875 29 41.6875Z"
                fill="#FFFDFD"
              />
              <path
                d="M39.875 30.8125H18.125C17.6443 30.8125 17.1833 30.6215 16.8434 30.2816C16.5035 29.9417 16.3125 29.4807 16.3125 29C16.3125 28.5193 16.5035 28.0583 16.8434 27.7184C17.1833 27.3785 17.6443 27.1875 18.125 27.1875H39.875C40.3557 27.1875 40.8167 27.3785 41.1566 27.7184C41.4965 28.0583 41.6875 28.5193 41.6875 29C41.6875 29.4807 41.4965 29.9417 41.1566 30.2816C40.8167 30.6215 40.3557 30.8125 39.875 30.8125Z"
                fill="#FFFDFD"
              />
            </svg>
          </div>
          <h2 class="form-title">Tambah Data Penyelenggaraan Trantibum</h2>
        </header>

        <div class="form-content">
          <section class="form-section">
            <h3 class="section-label">Dokumentasi</h3>
            <div class="upload-container">
              <div class="upload-box">
                <div class="upload-inner">
                  <img
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/63df5b7a65ea13fd983a0ff620c449cb6757f442"
                    alt="Upload"
                    class="upload-icon"
                  />
                  <p class="upload-text">Upload Foto Dokumentasi</p>
                </div>
                <div class="dashed-border"></div>
              </div>
            </div>
          </section>

          <section class="form-section">
            <h3 class="section-label">Catatan</h3>
            <div class="input-container">
              <input
                type="text"
                placeholder="Tambahkan Catatan Disini"
                class="input-field"
              />
            </div>
          </section>
        </div>

        <footer class="form-footer">
          <button type="button" class="back-button">Kembali</button>
          <button type="button" class="save-button">Simpan</button>
        </footer>
      </main>
    </div>

    <script>
      // TypeScript type definitions
      interface FormData {
          documentation: File | null;
          notes: string;
      }

      // Form handling
      const form: FormData = {
          documentation: null,
          notes: ''
      };

      // Initialize form handlers
      document.addEventListener('DOMContentLoaded', () => {
          const uploadContainer = document.querySelector('.upload-container');
          const notesInput = document.querySelector('.input-field') as HTMLInputElement;
          const backButton = document.querySelector('.back-button');
          const saveButton = document.querySelector('.save-button');

          if (uploadContainer) {
              uploadContainer.addEventListener('click', () => {
                  const input = document.createElement('input');
                  input.type = 'file';
                  input.accept = 'image/*';
                  input.onchange = (e: Event) => {
                      const target = e.target as HTMLInputElement;
                      if (target.files && target.files[0]) {
                          form.documentation = target.files[0];
                      }
                  };
                  input.click();
              });
          }

          if (notesInput) {
              notesInput.addEventListener('input', (e: Event) => {
                  const target = e.target as HTMLInputElement;
                  form.notes = target.value;
              });
          }

          if (backButton) {
              backButton.addEventListener('click', () => {
                  // Handle back navigation
                  history.back();
              });
          }

          if (saveButton) {
              saveButton.addEventListener('click', () => {
                  // Handle form submission
                  console.log('Form data:', form);
              });
          }
      });
    </script>
  </body>
</html>
