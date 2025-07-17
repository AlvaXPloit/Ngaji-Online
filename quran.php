<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="dicoding:email" content="alvarobanyu@gmail.com">
  <title>📖 Al-Qur'an - Ngaji Online</title>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

  <!-- Bootstrap & Icons -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="assets/style.css">

  <style>
    body {
      background-color: #0f1a17;
      color: #e0f2f1;
      font-family: 'Courier New', monospace;
    }
    .header-quran {
      padding: 15px 20px;
      background: linear-gradient(to right, #065f46, #047857);
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
    .header-quran .ikon a {
      color: #bbf7d0;
      text-decoration: none;
    }
    .header-quran .ikon a:hover {
      color: #22c55e;
    }
    table {
      background-color: #14332c;
      border-radius: 8px;
      overflow: hidden;
    }
    .table thead {
      background-color: #064e3b;
      color: #d1fae5;
    }
    .table td, .table th {
      border: none;
      padding: 12px 16px;
      font-size: 15px;
    }
    .table tr:hover {
      background-color: #1e3a34;
    }
    .loading {
      margin-top: 40px;
      text-align: center;
    }
    .loading .spinner-border {
      width: 3rem;
      height: 3rem;
      color: #10b981;
    }
  </style>
</head>

<body>
  <header class="header-quran">
    <span class="judul"><i class="fas fa-quran"></i> Al - Qur'an</span>
    <span class="ikon"><a href="index.php" title="Kembali"><i class="fas fa-home fa-lg"></i></a></span>
  </header>

  <main class="container mt-4 mb-5">
    <div class="table-responsive">
      <table class="table text-light table-borderless">
        <thead>
          <tr>
            <th>#</th>
            <th>Surah</th>
            <th>Arti</th>
            <th>Ayat</th>
          </tr>
        </thead>
        <tbody id="list">
          <!-- Diisi otomatis oleh script.js -->
        </tbody>
      </table>
    </div>
  </main>

  <div class="loading d-none" id="loading-box">
    <div class="d-flex justify-content-center">
      <div class="spinner-border" role="status">
        <span class="sr-only">Memuat...</span>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="./assets/script.js"></script>
  <script>
    quranPage();
  </script>
</body>
</html>
