<?php
require 'config.php';
$sql1 = "Select * from thongtincanhan";
$thongtin = mysqli_fetch_array(mysqli_query($conn, $sql1));

$sql2 = "Select * from hocvan";
$hocvan = mysqli_fetch_all(mysqli_query($conn, $sql2));

$sql3 = "Select * from duan";
$duan = mysqli_fetch_all(mysqli_query($conn, $sql3));

$sql4 = "select * from kinhnghiem";
$kinhnghiem = mysqli_fetch_all(mysqli_query($conn, $sql4));

$sql5 = "select * from kynang";
$kynang = mysqli_fetch_all(mysqli_query($conn, $sql5));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CV Online</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/Letter-L-icon.png" rel="Letter-L-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: iPortfolio - v1.5.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="assets/img/anhHuyn.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php">Hoàng Thị Huyền</a></h1>
        <div class="social-links mt-3 text-center">
          <a href="https://www.facebook.com/profile.php?id=100009547404692" class="facebook"><i class="bx bxl-facebook"></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Trang Chủ</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>Thông tin cá nhân</span></a></li>
          <li><a href="# facts "><i class=" bx bx-book-content"></i> <span>Mục tiêu nghề nghiệp</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Dấu mốc quan trọng</span></a></li>
          <li><a href="#portfolio"><i class="bx bx-book-content"></i> Kinh nghiệm</a></li>
          <li><a href="#services"><i class="bx bx-server"></i> Dự án tham gia</a></li>
          <li><a href="#skills"><i class="bx bx-server"></i> Kỹ năng</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Liên Hệ</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center bg-info">
    <div class="hero-container" data-aos="fade-in">

      <h1>Hoàng Huyền</h1>
      <p>Xin chào ^ . . ^ </p>
      <p>Mình <span class="typed" data-typed-items="là sinh viên năm 3, học công nghệ thông tin tại Trường Đại học Thủy Lợi."></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>Thông Tin Cá Nhân</h2>
          <p>Xin chào !!!! Tôi tên là Huyền </p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="assets/img/anhHuyn.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3> Sinh Viên khoa CNTT.</h3>
            <p class="font-italic">

            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> Điện thoại:<strong id="txtphone"> <?php echo $thongtin[3] ?></strong> </li>
                  <li><i class="icofont-rounded-right"></i> Thành phố:<strong id="txtcity"> <?php echo $thongtin[2] ?></strong> </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="icofont-rounded-right"></i> Tuổi:<strong id="txtage"><?php echo $thongtin[6] ?></strong> </li>
                  <li><i class="icofont-rounded-right"></i> Email:<strong id="txtemail"><?php echo $thongtin[4] ?></strong> </li>
                  <li><i class="icofont-rounded-right"></i> Job:<strong id="txtjob"><?php echo $thongtin[7] ?></strong> </li>
                </ul>
              </div>
            </div>
            <p>
              Thân thiện - Hòa đồng - Vui tính :))
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class="container">

        <div class="section-title">
          <h2>Mục tiêu nghề nghiệp</h2>
          <p>Áp dụng những kinh nghiệm về kỹ năng và kiến thức về ngành công nghệ thông tin để trở thành một cộng tác viên giáo viên chuyên nghiệp , mang đến một tương lai tốt hơn cho các học sinh.Từ đó giúp Công ty tăng chất lượng đào tạo và tăng số lượng học viên
            Muốn tìm một môi trường mới để thử thách bản thân mình nhiều hơn và cho bản thân nhiều cơ hội thăng tiến hơn</p>

        </div>

      </div>
    </section><!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kĩ Năng</h2>
        </div>
        <div class="row skills-content">
          <?php foreach ($kynang as $row) { ?>

            <div class="col-lg-6" data-aos="fade-up">

              <div class="progress">
                <span class="skill"> <?php echo $row[1] ?> <i class="val"><?php echo $row[2] . "%" ?></i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row[2] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Dấu Mốc Quan Trọng</h2>
          <p>Những năm tháng tuổi trẻ là những ký ức nhỏ trong tôi !!!.</p>
        </div>

        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <h3 class="resume-title">Học Vấn </h3>
            <?php foreach ($hocvan as $row) { ?>
              <div class="resume-item pb-0">
                <h4><?php echo $row[2] ?></h4>
                <p><em>><?php echo $row[1] ?></em></p>
              </div>
            <?php } ?>

          </div>

        </div>
      </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Kinh nghiệm</h2>
        </div>

        <div class="row">
          <div class="col-md-6" data-aos="fade-up">
            <!-- <h3 class="resume-title">Gia sư</h3> -->
            <?php foreach ($kinhnghiem as $row) { ?>
              <div class="resume-item pb-0">
                <h4><?php echo $row[2] ?></h4>
                <p><em>><?php echo $row[1] ?></em></p>
              </div>
            <?php } ?>

          </div>

        </div>


      </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Dự án tham gia</h2>

          <div class="container-fluid">
            <table class="table table-striped table-inverse table-responsive">
              <thead class="thead-inverse">
                <tr>
                  <th>STT</th>
                  <th>Tên dự án</th>
                  <th>Mô tả</th>
                  <th>Vị trí</th>
                  <th>Vai trò</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($duan as $row) {
                  echo "<tr>";
                  echo "<td>" . $row[0] . "</td>";
                  echo "<td>" . $row[1] . "</td>";
                  echo "<td>" . $row[2] . "</td>";
                  echo "<td>" . $row[3] . "</td>";
                  echo "<td>" . $row[4] . "</td>";
                } ?>

              </tbody>
            </table>

          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Liên hệ </h2>
          <p>Hãy để lại thông tin hoạc liên hệ với tôi nếu bạn cần !!</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Địa chỉ:</h4>
                <p><?php echo $thongtin[2] ?></p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $thongtin[4] ?></p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Điện thoại:</h4>
                <p><?php echo $thongtin[3] ?></p>
              </div>


            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input type="text" name="name" class="form-control" id="cname" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input type="email" class="form-control" name="email" id="cemail" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" name="subject" id="csubject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" rows="10" id="cmessage" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="button" id="btnsendm">Send Message</button></div>
              <div class="text-center" id="show_contact_msg"></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/js/script.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>