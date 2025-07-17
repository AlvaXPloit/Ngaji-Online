<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="dicoding:email" content="badruakfm@gmail.com" />
  <title>📖 Surah - Ngaji Online</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  <!-- Style & Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
  <link rel="stylesheet" href="assets/style.css" />

  <style>
    body {
      background-color: #0f1a17;
      color: #e0f2f1;
      font-family: 'Courier New', monospace;
    }
    .header-quran {
      padding: 15px 20px;
      background: linear-gradient(to right, #047857, #065f46);
      color: #d1fae5;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 5px rgba(0,0,0,0.3);
    }
    .header-quran .judul {
      font-size: 20px;
      font-weight: bold;
    }
    .header-quran .ikon {
      font-size: 20px;
    }
    .list-audio {
      padding: 1rem;
      display: none;
    }
    #list-ayah {
      list-style: none;
      padding: 0 1rem;
    }
    #list-ayah li {
      background-color: #14332c;
      border-left: 5px solid #10b981;
      margin: 0.5rem 0;
      padding: 1rem;
      border-radius: 6px;
    }
    .loading {
      margin: 40px auto;
      text-align: center;
    }
    .loading .spinner-border {
      color: #10b981;
      width: 3rem;
      height: 3rem;
    }
    .toast {
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #1f2937;
      border-left: 5px solid #22c55e;
      color: #e0f2f1;
    }
  </style>
</head>

<body>
  <header class="header-quran">
    <span class="judul"><i class="fas fa-book-open"></i> Surah</span>
    <span class="ikon text-light"><i class="fas fa-stop-circle fa-lg"></i></span>
  </header>

  <main class="container mt-3">
    <div class="list-audio"></div>
    <ul id="list-ayah"></ul>
  </main>

  <!-- Loading Spinner -->
  <div class="loading d-none" id="loading-box">
    <div class="d-flex justify-content-center">
      <div class="spinner-border" role="status">
        <span class="sr-only">Memuat...</span>
      </div>
    </div>
  </div>

  <!-- Toast Notifikasi -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="1500">
    <div class="toast-body">
      ✅ Bookmark Tersimpan
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="./assets/storage.js"></script>
  <script src="./assets/script.js"></script>

  <script>
    surahPage();

    // Aktifkan Toast saat simpan bookmark
    function showToast() {
      $('.toast').toast('show');
    }

    // Jika bookmark dipanggil dari script.js, panggil showToast()
    // Contoh: showToast();
  </script>
</body>
</html>
