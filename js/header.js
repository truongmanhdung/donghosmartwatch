function header() {
    return `<nav class="navbar navbar-expand-lg navbar-light menu">
    <div class="container">
    <a class="navbar-brand" href="#">
    <img style="width: 60px;" src="./img/logosm-removebg-preview.png" alt="" class="logo1" />
  </a>
      <button
        class="navbar-toggler color"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span
          class="navbar-toggler-icon"
          style="color: white !important"
        ></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link nav-link_tt" href="index.php">Trang chủ</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-link_tinhnang" href="donghothongminh.php"
          >Đồng hồ thông minh</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link nav-link_manhinh" href="Donghonam.php"
          >Đồng hồ nam</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link nav-link_vct" href="donghorolex.php">Đồng hồ rolex</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" class="nav-link_tintuc" href="donghocasio.php"
          >Đồng hồ casio</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link nav-link_thongke" href="donghohublot.php"
          >Đồng hồ hublot</a
        >
      </li>
      <li class="nav-item">
        <a class="nav-link nav-link_thongke" href="blog.php"
          >Blog</a
        >
      </li>
    </div>
  </nav>`
};
const H1 = document.querySelector("#header");
H1.innerHTML = header();