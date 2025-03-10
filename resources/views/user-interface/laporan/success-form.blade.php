<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('style/assets/css/success-form.css') }}" />
  </head>
  <body>
    <main class="success-screen min-vh-100 d-flex flex-column align-items-center">
      <header class="success-header w-100 text-center py-4 px-md-5 px-3">
        Laporan Telah Dibuat
      </header>

      <div class="position-relative d-inline-block container d-flex flex-column align-items-center">

        <img src="{{asset('style/assets/image/hero_img/hero_logo.png') }}" alt="Success Report Confirmation" class="success-main-image mt-5 img-fluid"/>
        <img src="https://cdn.builder.io/api/v1/image/assets/TEMP/6d4f7141c248aa94690c9bc4cf24a66cc712b16c" alt="Green checkmark icon" class="checkmark-icon"/>

        <button class="download-button" onclick="handleDownload()" aria-label="Download button">
        <div class="button-container">
          <div class="button-content">
            <svg class="download-svg" width="321" height="77" viewBox="0 0 321 77" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="30.6548" y="7.5" width="289.845" height="63" rx="19.5" fill="#24D467" stroke="#24D467"/>
              <text class="download-text" fill="white" stroke="#24D467" xml:space="preserve" style="white-space: pre" font-family="Inter" font-size="32" font-weight="bold" letter-spacing="0em">
                <tspan x="101" y="50.1364">DOWNLOAD</tspan>
              </text>
              <path d="M79.664 38.5012C79.664 59.4699 61.9617 76.5024 40.082 76.5024C18.2023 76.5024 0.5 59.4699 0.5 38.5012C0.5 17.5325 18.2023 0.5 40.082 0.5C61.9617 0.5 79.664 17.5325 79.664 38.5012Z" fill="white" stroke="#24D467"/>
              <path d="M73.4017 38.5014C73.4017 56.4859 58.2228 71.0989 39.4562 71.0989C20.6896 71.0989 5.51074 56.4859 5.51074 38.5014C5.51074 20.5168 20.6896 5.90381 39.4562 5.90381C58.2228 5.90381 73.4017 20.5168 73.4017 38.5014Z" fill="#24D467" stroke="#24D467"/>
              <path d="M69.6436 38.5007C69.6436 55.0071 56.1326 68.3964 39.4558 68.3964C22.7791 68.3964 9.26807 55.0071 9.26807 38.5007C9.26807 21.9942 22.7791 8.60498 39.4558 8.60498C56.1326 8.60498 69.6436 21.9942 69.6436 38.5007Z" fill="white" stroke="#24D467"/>
              <path d="M18.8511 53.9747V12.2212H58.8081V53.9747H18.8511Z" stroke="#24D467" stroke-width="0.125"/>
              <path d="M38.8291 49.9844L38.8291 24.3177" stroke="#24D467" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M27.5557 39.1768L38.8287 52.686L50.1018 39.1768" stroke="#24D467" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </div>
        </div>
      </button>

      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function handleDownload() {
        // Add download functionality here
        console.log("Download initiated");
        }
    </script>
  </body>
</html>



