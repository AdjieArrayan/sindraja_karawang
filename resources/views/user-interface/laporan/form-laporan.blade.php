@extends('layouts.user.laporan-layouts')

@section('title', 'Form Laporan')

@section('content')
<main class="form-container">
    <header class="form-header">
      <div class="icon-container">
        <svg class="plus-icon" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M29 52.5625C24.3398 52.5625 19.7842 51.1806 15.9094 48.5915C12.0346 46.0024 9.01449 42.3225 7.2311 38.017C5.44771 33.7115 4.98109 28.9739 5.89026 24.4032C6.79942 19.8325 9.04353 15.6341 12.3388 12.3388C15.6341 9.04353 19.8325 6.79942 24.4032 5.89026C28.9739 4.98109 33.7115 5.44771 38.017 7.2311C42.3225 9.01449 46.0024 12.0346 48.5915 15.9094C51.1806 19.7842 52.5625 24.3398 52.5625 29C52.5625 35.2492 50.08 41.2424 45.6612 45.6612C41.2424 50.08 35.2492 52.5625 29 52.5625ZM29 9.06251C25.0567 9.06251 21.202 10.2318 17.9233 12.4226C14.6446 14.6133 12.0892 17.7272 10.5802 21.3703C9.07114 25.0134 8.67631 29.0221 9.4456 32.8896C10.2149 36.7571 12.1138 40.3096 14.9021 43.0979C17.6904 45.8863 21.2429 47.7851 25.1104 48.5544C28.9779 49.3237 32.9867 48.9289 36.6298 47.4199C40.2729 45.9108 43.3867 43.3554 45.5774 40.0767C47.7682 36.798 48.9375 32.9433 48.9375 29C48.9375 23.7123 46.837 18.6411 43.098 14.9021C39.3589 11.1631 34.2878 9.06251 29 9.06251Z" fill="#FFFDFD"/>
          <path d="M29 41.6875C28.5193 41.6875 28.0583 41.4965 27.7184 41.1566C27.3785 40.8167 27.1875 40.3557 27.1875 39.875V18.125C27.1875 17.6443 27.3785 17.1833 27.7184 16.8434C28.0583 16.5035 28.5193 16.3125 29 16.3125C29.4807 16.3125 29.9417 16.5035 30.2816 16.8434C30.6215 17.1833 30.8125 17.6443 30.8125 18.125V39.875C30.8125 40.3557 30.6215 40.8167 30.2816 41.1566C29.9417 41.4965 29.4807 41.6875 29 41.6875Z" fill="#FFFDFD"/>
          <path d="M39.875 30.8125H18.125C17.6443 30.8125 17.1833 30.6215 16.8434 30.2816C16.5035 29.9417 16.3125 29.4807 16.3125 29C16.3125 28.5193 16.5035 28.0583 16.8434 27.7184C17.1833 27.3785 17.6443 27.1875 18.125 27.1875H39.875C40.3557 27.1875 40.8167 27.3785 41.1566 27.7184C41.4965 28.0583 41.6875 28.5193 41.6875 29C41.6875 29.4807 41.4965 29.9417 41.1566 30.2816C40.8167 30.6215 40.3557 30.8125 39.875 30.8125Z" fill="#FFFDFD"/>
        </svg>
      </div>
      <h2 class="form-title">Tambah Data Penyelenggaraan Trantibum</h2>
    </header>

    <form method="POST" action="{{ route('laporan.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Step 1 -->
        <div class="form-step active" id="step-1">
            <div class="form-group">
                <label for="nama" class="label">Nama Pelapor</label>
                <input type="text" id="nama" name="nama_pelapor" class="input-field" placeholder="Masukkan Nama Lengkap Anda"/>
            </div>

            <div class="form-group">
                <label for="regu_pelapor" class="label">Regu Pelapor</label>
                <div class="select-wrapper">
                  <select id="regu" name="regu_pelapor" class="input-field" placeholder="Pilih Regu Pelapor">
                    <option value="Regu 1">Regu 1</option>
                    <option value="Regu 2">Regu 2</option>
                    <option value="Regu 3">Regu 3</option>
                  </select>
                </div>
            </div>

            <div class="form-group">
                <label for="kegiatan" class="label">Jenis Kegiatan</label>
                <div class="select-wrapper">
                  <select id="kegiatan" name="jenis_kegiatan" class="input-field" placeholder="Pilih Jenis Kegiatan">
                    <option value="Kegiatan 1">Kegiatan 1</option>
                    <option value="Kegiatan 2">Kegiatan 2</option>
                    <option value="Kegiatan 3">Kegiatan 3</option>
                  </select>
                </div>
            </div>

            <div class="form-group">
                <label for="tanggal" class="label">Tanggal Kegiatan</label>
                <div class="date-wrapper">
                  <input type="date" name="tanggal_kegiatan" id="tanggal" class="hidden-date-input" placeholder="Pilih Tanggal"/>
                  <div class="calendar-icon-wrapper" onclick="openDatePicker()">
                  </div>
                </div>
            </div>
        </div>

        <!-- Halaman Form Kedua -->
        <div class="form-step" id="step-2">
          <div class="form-group">
                <label for="waktu-kegiatan" class="label">Waktu Kegiatan</label>
                <div class="time-wrapper">
                  <input type="time" name="waktu_kegiatan" id="waktu-kegiatan" class="input-field" />
                  <div class="clock-icon-wrapper">
                    <i class="fas fa-clock"></i>
                  </div>
                </div>
          </div>

          <div class="form-group">
            <label for="lokasi-kegiatan" class="label">Lokasi Kegiatan</label>
            <input type="text" name="lokasi_kegiatan" id="lokasi-kegiatan" class="input-field" placeholder="Masukkan Lokasi Kegiatan"/>
          </div>

          <div class="form-group">
            <label for="anggota-terlibat" class="label">Anggota Terlibat</label>
            <div class="select-wrapper">
              <select id="anggota-terlibat" name="anggota_terlibat" class="input-field" placeholder="Pilih Anggota Terlibat">
                <option value="Anggota 1">Anggota 1</option>
                <option value="Anggota 2">Anggota 2</option>
                <option value="Anggota 3">Anggota 3</option>
                <option value="Anggota 4">Anggota 4</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="unsur-terlibat" class="label">Unsur Terlibat</label>
            <div class="select-wrapper">
              <select id="unsur-terlibat" name="unsur_terlibat" class="input-field" placeholder="Pilih Unsur Terlibat">
                <option value="Unsur 1">Unsur 1</option>
                <option value="Unsur 2">Unsur 2</option>
                <option value="Unsur 3">Unsur 3</option>
                <option value="Unsur 4">Unsur 4</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Halaman Form Ketiga -->
        <div class="form-step" id="step-3">
            <div class="form-group">
                <label for="nama" class="label">Laporan Singkat</label>
                <textarea id="laporan_singkat" name="laporan_singkat" class="input-field-laporan-singkat" placeholder="Tuliskan Laporan Anda Disini"></textarea>
            </div>

          <div class="form-group">
            <label for="unsur-terlibat" class="label">Situasi Kondisi</label>
            <div class="select-wrapper">
              <select id="situasi_kondisi" name="situasi_kondisi" class="input-field" placeholder="Pilih Unsur Terlibat">
                <option value="Sikon 1">Sikon 1</option>
                <option value="Sikon 2">Sikon 2</option>
                <option value="Sikon 3">Sikon 3</option>
                <option value="Sikon 4">Sikon 4</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Halaman Form Keempat -->
        <div class="form-step" id="step-4">
            <label for="gambar" class="label">Upload Gambar</label>
            <div class="upload-container">
              <label for="file-upload" class="upload-box">
                <div class="upload-inner">
                  <img src="{{asset('style/assets/image/logo_img/upload-dokumentasi-logo.png') }}" alt="Upload" class="upload-icon"/>
                  <p class="upload-text">Upload Foto Dokumentasi</p>
                </div>
                <div class="dashed-border"></div>
              </label>
              <input type="file" id="file-upload" name="dokumentasi_laporan" accept="image/*" style="display: none;">
            </div>
          <br>

        <div class="form-group">
            <label for="nama" class="label">Laporan Singkat</label>
            <textarea id="catatan_laporan" name="catatan_laporan" class="input-field-catatan" placeholder="Tuliskan Laporan Anda Disini"></textarea>
        </div>
        </div>

        <footer class="form-footer">
            <button type="button" class="btn-back" id="prevStep">Kembali</button>
            <button type="button" class="btn-next" id="nextStep">Selanjutnya</button>
            <button type="submit" class="btn-next" id="submitForm" style=" display: none; background-color:#40df68; ">
                Selanjutnya
            </a>
        </footer>
    </form>
</main>

<script>
        document.getElementById('file-upload').addEventListener('change', function(e) {
            const fileName = e.target.files[0]?.name;
            if (fileName) {
                document.querySelector('.upload-text').textContent = fileName;
            }
        });
        // Agar Form bisa dipecah menjadi 4 bagian
        let currentStep = 1;
        const totalSteps = 4;

        document.getElementById('nextStep').addEventListener('click', function() {
            if (currentStep < totalSteps) {
                document.getElementById(`step-${currentStep}`).classList.remove('active');
                currentStep++;
                document.getElementById(`step-${currentStep}`).classList.add('active');
            }
            toggleButtons();
        });

        document.getElementById('prevStep').addEventListener('click', function() {
            if (currentStep === 1) {
                window.location.href = "{{ url('user-main') }}"; // Kembali ke halaman utama
            } else {
                document.getElementById(`step-${currentStep}`).classList.remove('active');
                currentStep--;
                document.getElementById(`step-${currentStep}`).classList.add('active');
            }
            toggleButtons();
        });

        function toggleButtons() {
            document.getElementById('prevStep').style.display = (currentStep === 1) ? 'none' : 'block';
            document.getElementById('nextStep').style.display = (currentStep === totalSteps) ? 'none' : 'block';
            document.getElementById('submitForm').style.display = (currentStep === totalSteps) ? 'block' : 'none';

            // Tambahkan event listener ulang untuk mengatasi bug setelah tombol "Selanjutnya" ditekan
            if (currentStep === 1) {
                document.getElementById('prevStep').addEventListener('click', function() {
                    window.location.href = "{{ url('user-main') }}"; // Kembali ke halaman utama
                });
            }
        }
</script>

<style>
    .form-step { display: none; }
    .form-step.active { display: block; }
</style>


@endsection