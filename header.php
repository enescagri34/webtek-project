<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-black border-bottom border-success sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-success" href="index.html">Enes Çağrı</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.html">Hakkımda</a></li>
        <li class="nav-item"><a class="nav-link" href="cv.html">CV</a></li>
        <li class="nav-item"><a class="nav-link" href="sehir.html">Şehrim</a></li>
        <li class="nav-item"><a class="nav-link" href="iletisim.html">İletişim</a></li>

        <?php if (isset($_SESSION['username'])): ?>
          <li class="nav-item">
            <a class="nav-link disabled text-success">Merhaba, <?php echo htmlspecialchars($_SESSION['fullname']); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Çıkış Yap</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Giriş</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
