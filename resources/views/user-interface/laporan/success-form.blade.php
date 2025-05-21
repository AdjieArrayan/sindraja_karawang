<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Success Message</title>
        <link rel="icon" href="{{ asset('logo-sindraja.png') }}" type="image/png">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('style/assets/css/success-form.css') }}" />
    </head>
    <body>

        <div class="success-message-container d-flex flex-column align-items-center overflow-hidden">
            <header class="success-header w-100 text-white text-center">
                Laporan Telah Dibuat
            </header>
            <main class="container d-flex flex-column align-items-center">
                <a href="/user-main">
                    <img src="{{asset('style/assets/image/logo_img/hero_logo.png') }}" alt="Success Illustration" class="success-illustration img-fluid mt-5"/>
                </a>
                <a href="{{ route('laporan.pdf', ['id_laporan' => request()->route('id_laporan')]) }}" target="_blank">
                    <img src="{{ asset('style/assets/image/logo_img/download-logo.png') }}" alt="Additional Information" class="success-additional-image img-fluid mt-4"/>
                </a>
            </main>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
