@extends('layouts.admin.dashboard-layout')

@section('title', 'Dashboard')

@section('sidebar')

@section('content')
    <main class="main-content p-4">
        <header class="mb-4">
            <h1 class="page-title">Dashboard</h1>
        </header>

        <section class="summary-section text-center p-4 rounded-3 mb-4">
            <h2 class="summary-title mb-3">Ringkasan Data Terlampir</h2>
            <h3 class="summary-subtitle">SINDRAJA</h3>
        </section>

        <section class="row g-4 mb-4 pe-5">
            <div class="col-12 col-lg-6">
                <div class="stats-card d-flex">
                    <div class="stats-info rounded-4 d-flex flex-column align-items-center justify-content-center">
                        <div class="stats-number d-flex align-items-center justify-content-center">{{ $jumlahUser }}</div>
                        <span class="stats-label mt-3">Pengguna</span>
                    </div>
                    <div class="stats-icon rounded-4 d-flex align-items-center justify-content-center">
                        <svg width="110" height="110" viewBox="0 0 110 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M87.0833 77.9165V87.0832H32.0833V77.9165C32.0833 77.9165 32.0833 59.5832 59.5833 59.5832C87.0833 59.5832 87.0833 77.9165 87.0833 77.9165ZM73.3333 36.6665C73.3333 33.947 72.5269 31.2886 71.016 29.0274C69.5052 26.7662 67.3577 25.0039 64.8452 23.9632C62.3327 22.9225 59.5681 22.6502 56.9008 23.1807C54.2336 23.7113 51.7836 25.0208 49.8606 26.9438C47.9376 28.8668 46.6281 31.3168 46.0975 33.984C45.567 36.6513 45.8393 39.4159 46.88 41.9284C47.9207 44.4409 49.6831 46.5883 51.9442 48.0992C54.2054 49.6101 56.8638 50.4165 59.5833 50.4165C63.2301 50.4165 66.7274 48.9679 69.3061 46.3892C71.8847 43.8106 73.3333 40.3132 73.3333 36.6665ZM88 59.8582C90.5054 62.1696 92.5253 64.9569 93.9417 68.0574C95.3582 71.1579 96.1429 74.5095 96.25 77.9165V87.0832H110V77.9165C110 77.9165 110 62.104 88 59.8582ZM82.5 22.9165C81.1152 22.9166 79.7388 23.1331 78.4208 23.5582C81.1023 27.4035 82.54 31.9786 82.54 36.6665C82.54 41.3544 81.1023 45.9296 78.4208 49.7748C79.7388 50.1999 81.1152 50.4164 82.5 50.4165C86.1467 50.4165 89.6441 48.9679 92.2227 46.3892C94.8013 43.8106 96.25 40.3132 96.25 36.6665C96.25 33.0198 94.8013 29.5224 92.2227 26.9438C89.6441 24.3652 86.1467 22.9165 82.5 22.9165ZM36.6667 45.8332H22.9167V32.0832H13.75V45.8332H0V54.9998H13.75V68.7498H22.9167V54.9998H36.6667V45.8332Z" fill="#CDC79C"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="stats-card d-flex">
                    <div class="stats-info rounded-4 d-flex flex-column align-items-center justify-content-center">
                        <div class="stats-number d-flex align-items-center justify-content-center">{{ $jumlahLaporan }}</div>
                        <span class="stats-label mt-3">Laporan</span>
                    </div>
                    <div class="stats-icon rounded-4 d-flex align-items-center justify-content-center">
                        <svg width="110" height="110" viewBox="0 0 110 110" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.1875 7.18457C16.2758 7.18457 15.4015 7.54674 14.7568 8.19139C14.1122 8.83605 13.75 9.71039 13.75 10.6221V85.6283C13.75 86.54 14.1122 87.4143 14.7568 88.059C15.4015 88.7037 16.2758 89.0658 17.1875 89.0658H79.0625C79.9742 89.0658 80.8485 88.7037 81.4932 88.059C82.1378 87.4143 82.5 86.54 82.5 85.6283V36.8777C82.5009 36.4161 82.4088 35.9591 82.2293 35.5339C82.0498 35.1087 81.7864 34.7239 81.455 34.4027L54.3881 8.1677C53.7479 7.54351 52.8897 7.19333 51.9956 7.19145L17.1875 7.18457ZM70.5787 33.4402L55.4331 18.7483V33.4402H70.5787ZM41.25 37.8127H27.5V30.9377H41.25V37.8127ZM68.75 55.0002H27.5V48.1252H68.75V55.0002ZM27.5 72.1877H68.75V65.3127H27.5V72.1877Z" fill="#CDC79C"/>
                        <path d="M89.375 51.5625V96.25H30.9375V103.125H92.8125C93.7242 103.125 94.5985 102.763 95.2432 102.118C95.8878 101.474 96.25 100.599 96.25 99.6875V51.5625H89.375Z" fill="#CDC79C"/>
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
