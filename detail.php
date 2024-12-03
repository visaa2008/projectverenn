<!DOCTYPE html>
<html lang="en">
<head>
<script src="assets/js/color-modes.js"></script>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.122.0">
<title>detail barang</title>

<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">

<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">



<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<header data-bs-theme="light">
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Puma</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="detail.php">minuman</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="detail2.php">makanan</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
      <div class="nav-icon">
        <a href="keranjang.php"><i class='bx bx-cart'></i></a>
        <a href="#"><i class='bx bx-search'></i></a>
        <a href="login.php"><i class='bx bx-user'></i></a>
      </div>
      <div class="bx bx-menu" id="menu-icon"></div>
    </div>
  </nav>
</header>

<div class="container-fluid py-5">
        <div class="container">
            <div class="row">
            <?php
include 'koneksi.php';

// Periksa apakah 'id' ada di URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
    $tambah = mysqli_query($koneksi, "SELECT * from produk WHERE id='$id'");

    // Cek apakah produk ditemukan
    if (mysqli_num_rows($tambah) > 0) {
        while ($produk = mysqli_fetch_array($tambah)) {
            // Tampilkan detail produk
            ?>
            <div class="col-md-5">
                <img class="card-img-top w-50" src="image/<?= $produk['foto'] ?>" alt="<?= $produk['nama'] ?>" >
            </div>
            <div class="col-md-6 offset-md-1">
                <h1><b><?= $produk['nama'] ?></b></h1>
                <h3><?= $produk['deskripsi'] ?></h3><br>
                <h2 class="text-red"><b>Rp. <?= number_format($produk['harga']); ?></b></h2><br>
                <p class="review-rating">★★★★☆</p>
                <form method="post">
                    <div class="form-group col-md-3">
                        <div class="input-group">
                            <input type="number" min="1" value="<?= isset($_SESSION['keranjang'][$id]['jumlah']) ? $_SESSION['keranjang'][$id]['jumlah'] : 1 ?>" class="form-control" name="jumlah">
                        </div>   
                    </div>
                </form><br>
                <a class="btn btn-primary mt-auto" href="beli.php?id=<?= $produk['id'] ?>">TAMBAHKAN KERANJANG</a>
            </div>
            <?php
        }
    } 
} 
?>

            </div>
        </div>
      </div>


         <div class="container-fluid py-5 bg-light text-center  mb-5">
                <div class="container">
                    <h2 clas="text-center text-black mb-5">PRODUK TERKAIT</h2>
                </div>


         </div>
         <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    include 'koneksi.php';

                    $tambah = mysqli_query($koneksi, "SELECT * from produk");
                    while ($produk = mysqli_fetch_array($tambah)) {
                    ?>
                    <div class="col mb-5">
                        <div class="card h-100">
                           
                            <img class="card-img-top" src="image/<?= $produk['foto'] ?>" />
                         
                            <div class="card-body p-4">
                                <p class="text-center"><b><?= $produk['nama'] ?></b></p>
                            
                                <p><?= $produk['deskripsi'] ?></p>
                                <p><b>Rp. <?php echo number_format($produk['harga']); ?></b></p>
                                <p class="review-rating">★★★★☆</p>
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="detail.php?id=<?= $produk['id'] ?>">DETAIL</a></div>
                            </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
</body>
</html>