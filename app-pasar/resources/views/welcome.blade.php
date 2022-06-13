<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8" />
    <title>Sistem Informasi Pasar</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap");
      * {
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          text-decoration: none;
          scroll-behavior: smooth;
      }
      /* Custom Scroll Bar */
      ::-webkit-scrollbar {
          width: 10px;
      }
      ::-webkit-scrollbar-track {
          background: #f1f1f1;
      }
      ::-webkit-scrollbar-thumb {
          background: #6e93f7;
          border-radius: 12px;
          transition: all 0.3s ease;
      }
      ::-webkit-scrollbar-thumb:hover {
          background: #4070f4;
      }
      /* navbar */
      nav {
          position: fixed;
          width: 100%;
          padding: 20px 0;
          z-index: 998;
          transition: all 0.3s ease;
          font-family: "Ubuntu", sans-serif;
      }
      nav.sticky {
          box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 6px -1px,
              rgba(0, 0, 0, 0.06) 0px 2px 4px -1px;
          background-color: white;
      }
      nav .navbar {
          width: 90%;
          display: flex;
          justify-content: space-between;
          align-items: center;
          margin: auto;
      }
      nav .navbar .logo {
          font-weight: 500;
          font-size: 20px;
          color: #4070f4;
      }

      nav .navbar .menu {
          display: flex;
          position: relative;
      }
      nav .navbar .menu li {
          list-style: none;
          margin: 0 15px;
      }
      .navbar .menu a {
          font-size: 18px;
          font-weight: 500;
          color: #0e2431;
          padding: 6px 0;
          transition: all 0.4s ease;
      }
      .navbar .menu a:hover {
          color: #4070f4;
      }

      nav.sticky .menu a:hover {
          color: #0e2431;
      }
      .navbar .media-icons a {
          color: #4070f4;
          font-size: 18px;
          margin: 0 6px;
      }

      /* Halaman Beranda */
      .home {
          height: 100vh;
          width: 100%;
          font-family: "Ubuntu", sans-serif;
      }
      .home .home-content {
          width: 90%;
          height: 100%;
          margin: auto;
          display: flex;
          flex-direction: column;
          justify-content: center;
      }
      .home .text-one {
          font-size: 25px;
          color: #0e2431;
      }
      .home .text-two {
          color: #0e2431;
          font-size: 45px;
          font-weight: 600;
          margin-left: -3px;
      }
      .home .text-three {
          font-size: 25px;
          margin: 5px 0;
      }
      .home .text-four {
          font-size: 23px;
          margin: 5px 0;
          color: #0e2431;
      }
      .home .button {
          margin: 30px 0;
      }
      .home .button button {
          outline: none;
          padding: 8px 16px;
          border-radius: 20px;
          font-size: 25px;
          font-weight: 400;
          background: #4070f4;
          color: #fff;
          cursor: pointer;
          border: 2px solid transparent;
          transition: all 0.4s ease;
      }
      .home .button button:hover {
          border-color: #4070f4;
          background-color: #fff;
          color: #4070f4;
      }
      .home {
          display: flex;
      }
      .home .home-content {
          margin: 0 60px 0;
      }
      .home .my-image {
          margin-left: 100px;
          margin-top: 80px;
      }
      /* Tag Section */
      section {
          padding-top: 40px;
      }
      section .content {
          width: 80%;
          margin: 40px auto;
          font-family: "Poppins", sans-serif;
      }
      section .title {
          display: flex;
          justify-content: center;
          margin-bottom: 35px;
      }
      section .title span {
          color: #0e2431;
          font-size: 30px;
          font-weight: 600;
          position: relative;
          padding-bottom: 8px;
      }
      section .title span::before,
      section .title span::after {
          content: "";
          position: absolute;
          height: 3px;
          width: 100%;
          background: #4070f4;
          left: 0;
          bottom: 0;
      }
      section .title span::after {
          bottom: -7px;
          width: 70%;
          left: 50%;
          transform: translateX(-50%);
      }

      /* Halaman Tentang saya */
      .about .about-details {
          display: flex;
          justify-content: space-between;
          align-items: center;
      }
      .about .about-details .left {
          width: 45%;
      }
      .about .left img {
          height: 400px;
          width: 400px;
          object-fit: cover;
          border-radius: 12px;
      }
      .about-details .right {
          width: 55%;
      }
      section .topic {
          color: #0e2431;
          font-size: 25px;
          font-weight: 500;
          margin-bottom: 10px;
      }
      .about-details .right p {
          text-align: justify;
          color: #0e2431;
      }
      section .button {
          margin: 16px 0;
      }
      section .button button {
          outline: none;
          padding: 8px 16px;
          border-radius: 20px;
          font-size: 25px;
          font-weight: 400;
          background: #4070f4;
          color: #fff;
          border: 2px solid transparent;
          cursor: pointer;
          transition: all 0.4s ease;
      }
      section .button button:hover {
          border-color: #4070f4;
          background-color: #fff;
          color: #4070f4;
      }

      /* Halaman Pendidikan */
      .education .content table {
          width: 100%;
          padding: 40px;
      }

      .education table th {
          text-align: left;
          font-size: 20px;
      }

      /* Halaman portofolio */
      .portofolio .boxes {
          display: flex;
          flex-wrap: wrap;
          justify-content: space-between;
      }
      .portofolio .boxes .box {
          margin: 20px 0;
          width: calc(100% / 2 - 20px);
          text-align: center;
          border-radius: 12px;
          padding: 30px 10px;
          box-shadow: 0 5px 10px rgba(0, 0, 0, 0.12);
          cursor: default;
          transition: all 0.4s ease;
      }
      .portofolio .box img {
          width: 100%;
      }
      .portofolio .boxes .box:hover {
          background: #4070f4;
          color: #fff;
      }
      .portofolio .boxes .box:hover .topic,
      .portofolio .boxes .box:hover p {
          color: #0e2431;
          transition: all 0.4s ease;
      }
      .portofolio .boxes .box:hover .topic,
      .portofolio .boxes .box:hover p {
          color: #fff;
      }

      /* Halaman hubungi saya */
      .contact .content {
          padding: 0 100px;
      }
      .box .topic,
      .box p {
          width: 80%;
          text-align: center;
          margin: auto;
      }
      .box .input {
          display: flex;
          flex-direction: column;
          margin-bottom: 20px;
          font-size: 20px;
      }
      .box .input label {
          margin-bottom: 5px;
      }
      .box .input input {
          outline: none;
          font-size: 15px;
          padding: 8px;
          border: 1px solid #4070f4;
          transition: all 0.3s ease-in-out;
      }
      .box .input textarea {
          outline: none;
          font-size: 15px;
          padding: 8px;
          border: 1px solid #4070f4;
          transition: all 0.3s ease-in-out;
      }
      .input input:focus,
      .input textarea:focus {
          box-shadow: 0 0 8px #4070f4;
      }
      .box .button {
          text-align: center;
      }

      /* Footer */
      footer {
          background: #4070f4;
          padding: 15px 0;
          text-align: center;
          font-family: "Poppins", sans-serif;
      }
      footer .text span {
          font-size: 17px;
          font-weight: 400;
          color: #fff;
      }
      footer .text span a {
          font-weight: 500;
          color: #fff;
      }
      footer .text span a:hover {
          text-decoration: underline;
      }

      /* tombol scroll ke atas */
      .scroll-button a {
          position: fixed;
          bottom: 20px;
          right: 20px;
          color: #fff;
          background: #4070f4;
          padding: 7px 12px;
          font-size: 18px;
          border-radius: 6px;
          box-shadow: rgba(0, 0, 0, 0.15);
          display: none;
      }

    </style>
  </head>
  <body>
    <!-- tombol scroll ke atas -->
    <div class="scroll-button">
      <a href="#home"><i class="fas fa-arrow-up"></i></a>
    </div>
    <!-- navbar -->
    <nav>
      <div class="navbar">
        <div>
          <img src="{{ asset('/SINPAS_B.png') }}" alt="Logo" height="70px" width="70px">
        </div>
        <ul class="menu">
          <li><a href="#home">Beranda</a></li>
          <li><a href="#about">Tentang Aplikasi</a></li>
          <li><a href="#fitur">Fitur</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </nav>

    <!-- Halaman beranda -->
    <section class="home" id="home">
      <div class="home-container">
        <div class="home-content">
          <div class="text">
            <div class="text-one">SINPAS</div>
            <div class="text-two">Sistem Informasi Pasar</div>
            <div class="text-three">Lihat informasi pasar jadi lebih mudah</div>
          </div>
          <div class="button">
            <a href="admin"><button>Informasi Pasar</button></a>
          </div>
        </div>
      </div>
      <div class="my-image">
        <img src="/pasar-bg.jpg" height="500px" width="500px"/>
      </div>
    </section>

    <!-- Halaman tentang saya -->
    <section class="about" id="about">
      <div class="content">
        <div class="title"><span>Tentang Aplikasi</span></div>
        <div class="about-details">
          <div class="left">
            <img src="/tenant-bg.jpg" alt="" />
          </div>
          <div class="right">
            <div class="topic">Sistem Informasi Pasar Terkini</div>
            <p>
              Pasar Tradisional merupakan salah satu tempat transaksi masyarakat sejak dulu. Informasi pasar seperti jumlah kios, nama pedagang, dll. susah untuk didapat oleh pedagang dan masyarakat umum.
              Oleh karena itu, terdapat SINPAS yang memudahkan pedagang dan masyarakat untuk mengetahui sistem informasi pasar secara online.
              Dengan SINPAS yang terintegrasi dalam otomasi pelayanan pasar diharapkan dapat 
              memudahkan pengelola pasar melakukan perencanaan dan pengembangan pasar. 
              Informasi yang dihasilkan dari SINPAS dapat diperoleh dengan cepat sehingga dapat membantu pengambilan keputusan secara cepat dan akurat.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Halaman fitur -->
    <section class="portofolio" id="fitur">
      <div class="content">
        <div class="title"><span>Fitur</span></div>
        <div class="boxes">
          <div class="box">
            <img src="/pasar-bg.jpg"/>
            <div class="topic">Lihat Informasi Pasar</div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
              autem quam odio, qui voluptatem eligendi?
            </p>
          </div>
          <div class="box">
            <img src="/tenant-bg.jpg" />
            <div class="topic">Lihat Informasi Kios</div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
              autem quam odio, qui voluptatem eligendi?
            </p>
          </div>
          <div class="box">
            <img src="/pemilik-bg.jpg" />
            <div class="topic">Lihat Informasi Pemilik</div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
              autem quam odio, qui voluptatem eligendi?
            </p>
          </div>
          <div class="box">
            <img src="/riwayat-iuran-bg.jpg" />
            <div class="topic">Lihat Informasi Riwayat Kepemilikan dan Iuran</div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
              autem quam odio, qui voluptatem eligendi?
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Halaman hubungi saya -->
    <section class="contact" id="contact">
      <div class="content">
        <div class="title"><span>Hubungi Kami</span></div>
        <div class="box">
          <div class="topic">Jika ada pertanyaan silakan isi form di bawah ini!</div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia
            autem quam odio, qui voluptatem eligendi?
          </p>
          <form class="input-project" id="input-project">
            <div class="input">
              <label for="nama">Nama</label>
              <input id="nama" type="text" required />
            </div>
            <div class="input">
              <label for="email">Email</label>
              <input id="email" type="text" required />
            </div>
            <div class="input">
              <label for="pesan">Pesan</label>
              <textarea id="pesan"></textarea>
            </div>
            <div class="button">
              <button>Kirim</button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="text">
        <span>Created By <a href="#">Kelompok 1</a> </span>
      </div>
    </footer>

    <script>
      // Sticky Navigation Menu JS Code
      let nav = document.querySelector("nav");
      let scrollBtn = document.querySelector(".scroll-button a");
      console.log(scrollBtn);
      let val;
      window.onscroll = function () {
          if (document.documentElement.scrollTop > 20) {
              nav.classList.add("sticky");
              scrollBtn.style.display = "block";
          } else {
              nav.classList.remove("sticky");
              scrollBtn.style.display = "none";
          }
      };
    </script>
  </body>
</html>
