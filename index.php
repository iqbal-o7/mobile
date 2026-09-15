<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kredit Mobil</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-gradient sticky-top shadow py-3">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-2 fs-4" href="#beranda">
      <img src="assets/logo1.jpg" width="45" height="45" class="rounded-circle object-fit-cover border border-white">
      <span class="fw-bold">Kredit Mobil</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto fs-5">
        <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
        <li class="nav-item"><a class="nav-link" href="#tentang">Tentang Perusahaan</a></li>
        <li class="nav-item"><a class="nav-link" href="#kredit">Kredit Mobil</a></li>
        <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- SLIDER FULL LAYAR -->
<section id="beranda">
  <div id="carouselMobil" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner bg-dark" style="height:90vh">
      <div class="carousel-item active h-100">
        <img src="assets/gambar3.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Mobil">
        <div class="carousel-caption bg-dark bg-opacity-50 rounded-4 p-4">
          <h1 class="fw-bold display-5">Kalkulator Kredit Mobil</h1>
          <p class="mb-0 fs-5">Hitung estimasi angsuran mobil impianmu dengan mudah, cepat, dan akurat.</p>
          <a href="#kredit" class="btn btn-primary btn-lg px-4">
            Hitung Kredit Sekarang
          </a>
        </div>
      </div>
      <div class="carousel-item h-100">
        <img src="assets/gambar1.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Mobil">
        <div class="carousel-caption bg-dark bg-opacity-50 rounded-4 p-4">
          <h1 class="fw-bold display-5">Simulasi Kredit Instan</h1>
          <p class="mb-0 fs-5">Masukkan harga mobil, DP, dan tenor untuk melihat estimasi cicilan per bulan.</p>
          <a href="#kredit" class="btn btn-primary btn-lg px-4">
            Hitung Kredit Sekarang
          </a>
        </div>
      </div>
      <div class="carousel-item h-100">
        <img src="assets/gambar2.jpg" class="d-block w-100 h-100 object-fit-cover" alt="Mobil">
        <div class="carousel-caption bg-dark bg-opacity-50 rounded-4 p-4">
          <h1 class="fw-bold display-5">Solusi Pembiayaan Terpercaya</h1>
          <p class="mb-0 fs-5">Kalkulator kredit mobil untuk membantu perencanaan keuangan sebelum membeli mobil.</p>
           <a href="#kredit" class="btn btn-primary btn-lg px-4">
            Hitung Kredit Sekarang
          </a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMobil" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselMobil" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
</section>

<!-- TENTANG PERUSAHAAN -->
<section id="tentang" class="bg-info-subtle">
  <div class="container py-5">
    <div class="row align-items-center g-4">
      <div class="col-md-6">
        <h2 class="text-primary fw-bold">Tentang Perusahaan</h2>
        <p>Kami menyediakan berbagai pilihan mobil dari berbagai merk dengan sistem pembayaran kredit yang mudah, aman, dan transparan.</p>
        <p>Silakan masukkan harga mobil, DP, dan tenor untuk mengetahui estimasi angsuran setiap bulan.</p>
      </div>
      <div class="col-md-6">
        <img src="assets/tentang.jpg" class="img-fluid rounded-4 shadow">
      </div>
    </div>
  </div>
</section>

<!-- FORM KREDIT -->
<section id="kredit">
  <div class="container py-5">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
      <div class="card-header bg-primary bg-gradient text-white py-3">
        <h3 class="mb-0">Perhitungan Kredit Mobil</h3>
      </div>
      <div class="card-body bg-white p-4">
        <form id="formKredit">
          <div class="mb-3">
            <label class="form-label fw-semibold">Harga Mobil</label>
            <input type="number" name="harga" id="harga" class="form-control" placeholder="Contoh: 250000000" required>
            <small id="hargaFormat" class="text-success fw-semibold"></small>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold">DP</label>
            <select name="dp" id="dp" class="form-select" required>
              <option value="">-- Pilih DP --</option>
              <option value="10">10%</option>
              <option value="20">20%</option>
              <option value="30">30%</option>
              <option value="40">40%</option>
              <option value="50">50%</option>
              <option value="60">60%</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label fw-semibold d-block">Tenor</label>
            <?php foreach ([1,2,3,4,5] as $t): ?>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="tenor" value="<?= $t ?>" <?= $t==1?'required':'' ?>>
              <label class="form-check-label"><?= $t ?> Tahun</label>
            </div>
            <?php endforeach; ?>
          </div>
          <div>
            <h6>Bunga selalu 20%</h6>
          </div>
          <button type="submit" class="btn btn-primary bg-gradient px-4">Hitung Kredit</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- HASIL (tersembunyi, tampil setelah klik Hitung Kredit) -->
<section id="hasilSection" class="container pb-5 d-none">
  <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
    <div class="card-header bg-success bg-gradient text-white py-3">
      <h4 class="mb-0">Hasil Perhitungan Kredit</h4>
    </div>
    <div class="card-body bg-white">
      <table class="table table-striped">
        <tr><th>Harga Mobil</th><td id="outHarga"></td></tr>
        <tr><th>DP</th><td id="outDp"></td></tr>
        <tr><th>Tenor</th><td id="outTenor"></td></tr>
        <tr><th>Bunga</th><td id="outBunga"></td></tr>
      </table>
      <div class="alert alert-success bg-gradient text-center border-0 rounded-4">
        <h5>Angsuran Per Bulan</h5>
        <h2 class="fw-bold" id="outAngsuran"></h2>
      </div>
      <div class="text-center mt-3">
      <button type="button" id="refreshBtn" class="btn btn-outline-primary px-4">
         ↻ Hitung Ulang
      </button>
     </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer id="kontak" class="bg-dark bg-gradient text-white text-center py-4 mt-3">
  <div class="container">
    <h5>Kredit Mobil</h5>
    <p class="mb-1">Solusi pembiayaan mobil terpercaya.</p>
    <p class="mb-0">Email: info@kreditmobil.com</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
const hargaInput = document.getElementById("harga");
const hargaFormat = document.getElementById("hargaFormat");
const formKredit = document.getElementById("formKredit");
const hasilSection = document.getElementById("hasilSection");

hargaInput.addEventListener("input", function () {
  hasilSection.classList.add("d-none");
  hargaFormat.textContent = this.value ? "Rp " + Number(this.value).toLocaleString("id-ID") : "";
});

formKredit.addEventListener("submit", function (e) {
  e.preventDefault();
  const harga = parseFloat(hargaInput.value);
  const dpPersen = parseFloat(document.getElementById("dp").value);
  const tenorRadio = document.querySelector('input[name="tenor"]:checked');
  if (!harga || !dpPersen || !tenorRadio) return;

  const tenorTahun = parseFloat(tenorRadio.value);
  const bunga = harga * 20 / 100;
  const dp = harga * dpPersen / 100;
  const tenorBulan = tenorTahun * 12;
  const angsuran = ((harga + bunga) - dp) / tenorBulan;
  const rupiah = (n) => "Rp " + Math.round(n).toLocaleString("id-ID");

  document.getElementById("outHarga").textContent = rupiah(harga);
  document.getElementById("outDp").textContent = dpPersen + "% (" + rupiah(dp) + ")";
  document.getElementById("outTenor").textContent = tenorTahun + " Tahun (" + tenorBulan + " Bulan)";
  document.getElementById("outBunga").textContent = "20% (" + rupiah(bunga) + ")";
  document.getElementById("outAngsuran").textContent = rupiah(angsuran);

  hasilSection.classList.remove("d-none");
  hasilSection.scrollIntoView({ behavior: "smooth" });
  document.getElementById("refreshBtn").addEventListener("click", function () {
  formKredit.reset();
  hargaFormat.textContent = "";
  hasilSection.classList.add("d-none");

  document.getElementById("kredit").scrollIntoView({
    behavior: "smooth"
  });

  hargaInput.focus();
});
});
</script>
</body>
</html>
