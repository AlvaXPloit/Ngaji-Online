<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="dicoding:email" content="alvarobanyu@gmail.com" />
  <title>Ngaji Online - AlvaroMods</title>
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
    .menu {
      max-width: 400px;
      margin: 5vh auto;
      padding: 2rem;
      background-color: #162522;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,255,180,0.1);
    }
    .menu button {
      margin: 0.7rem 0;
    }
    .quote-box {
      max-width: 600px;
      margin: 2rem auto;
      padding: 1rem;
      background: #14332c;
      border-left: 5px solid #10b981;
      border-radius: 6px;
      font-style: italic;
      font-size: 16px;
    }
    .top-footer {
      text-align: center;
      padding: 10px 0;
      font-size: 14px;
      color: #a7f3d0;
    }
    .top-footer a {
      color: #81e6d9;
      margin: 0 8px;
      text-decoration: none;
      transition: 0.3s;
    }
    .top-footer a:hover {
      color: #22d3ee;
    }
  </style>
</head>

<body>

  <!-- Footer di atas -->
  <div class="top-footer">
    By <strong>AlvaroMods</strong> &copy; <?= date("Y") ?>
    &nbsp;•&nbsp;
    <a href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
  </div>

  <main>
    <div class="menu text-center">
      <h3 class="text-light mb-4">🌙 Ngaji Online</h3>
      <button id="quran" class="btn btn-outline-success btn-block font-weight-bold">📖 Al-Qur'an</button>
      <button id="doa" class="btn btn-outline-info btn-block font-weight-bold">🤲 Do'a Harian</button>
      <button id="about" class="btn btn-outline-warning btn-block font-weight-bold">ℹ️ Tentang</button>
    </div>

    <!-- Kutipan & Doa -->
    <div class="quote-box">
      <div><strong>Quote Islami Hari Ini:</strong> <span id="random-quote"></span></div>
      <hr style="background:#2d3e3a;">
      <div><strong>Doa Hari Ini:</strong> <span id="random-doa"></span></div>
    </div>

    <!-- Info Pengunjung -->
    <div class="card mx-auto mt-4 mb-5" style="max-width:600px; background: #14221f; border-left: 5px solid #10b981; box-shadow: 0 0 10px rgba(16,185,129,0.2);">
      <div class="card-body">
        <h5 class="card-title text-success"><i class="fas fa-user-secret"></i> Informasi Pengunjung</h5>
       <div class="table-responsive">
  <table class="table table-borderless table-sm text-light">
    <tbody>
      <div>
        <th scope="row" style="width: 30%;">📌 IP Address</th>
        <td class="text-info font-weight-bold"><?= $_SERVER['REMOTE_ADDR']; ?></td>
</div>
      <tr>
        <th scope="row">🌐 Browser</th>
        <td class="text-warning small"><?= $_SERVER['HTTP_USER_AGENT']; ?></td>
      </tr>
      <tr>
        <th scope="row">💻 Sistem Operasi</th>
        <td class="text-muted small"><?= php_uname(); ?></td>
      </tr>
    </tbody>
  </table>
</div>

      </div>
    </div>
  </main>

  <!-- Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="assets/quotes-doa.js"></script>
  <script>
    const quote = islamicData.quotes[Math.floor(Math.random() * islamicData.quotes.length)];
    const doa = islamicData.doa[Math.floor(Math.random() * islamicData.doa.length)];
    document.getElementById("random-quote").innerText = quote;
    document.getElementById("random-doa").innerText = doa;

    $('#quran').removeClass('disabled').click(() => window.location.href = 'quran.php');
    $('#doa').removeClass('disabled').click(() => alert('Fitur Doa akan segera hadir.'));
    $('#about').removeClass('disabled').click(() => alert('Ngaji Online dibuat oleh AlvaroMods untuk semua.'));
  </script>
</body>
</html>
