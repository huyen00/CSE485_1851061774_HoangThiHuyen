<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}
require '../config.php';
$sql1 = "Select * from thongtincanhan";
$thongtin = mysqli_fetch_array(mysqli_query($conn, $sql1));

$sql2 = "Select * from hocvan";
$hocvan = mysqli_fetch_all(mysqli_query($conn, $sql2));

$sql3 = "select * from kynang";
$kynang = mysqli_fetch_all(mysqli_query($conn, $sql3));

$sql4 = "select * from kinhnghiem";
$kinhnghiem = mysqli_fetch_all(mysqli_query($conn, $sql4));

$sql5 = "select * from duan";
$duan = mysqli_fetch_all(mysqli_query($conn, $sql5));

$sql6 = "select * from lienhe";
$lienhe = mysqli_fetch_all(mysqli_query($conn, $sql6));


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
    <link href="../assets/img/favicon.png" rel="icon">
    <link href="../assets/img/Letter-L-icon.png" rel="Letter-L-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/../assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">


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
                <img src="../assets/img/anhHuyn.jpg" alt="" class="img-fluid rounded-circle">
                <h1 class="text-light"><a href="index.php">Hoàng Thị Huyền</a></h1>

                <div class="social-links mt-3 text-center">
                    <a href="https://www.facebook.com/profile.php?id=100009547404692" class="facebook"><i class="bx bxl-facebook"></i></a>

                </div>
            </div>

            <nav class="nav-menu">
                <ul>
                    <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Trang Chủ</span></a></li>
                    <li><a href="#about"><i class="bx bx-user"></i> <span>Thông tin cá nhân</span></a></li>
                    <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Dấu mốc quan trọng</span></a></li>
                    <li><a href="#portfolio"><i class="bx bx-book-content"></i> Kinh nghiệm</a></li>
                    <li><a href="#services"><i class="bx bx-server"></i> Dự án tham gia</a></li>
                    <li><a href="#skills"><i class="bx bx-server"></i> Kỹ năng</a></li>
                    <li><a href="#contact"><i class="bx bx-envelope"></i> Xem tin nhắn </a></li>
                    <li><a href="process-logout.php" class="btn btn-primary">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->
            <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center bg-info">
        <div class="hero-container" data-aos="fade-in">

            <h1>Hoàng Huyền</h1>
            <p>Xin chào ^ . . ^</p>
            <p>Mình <span class="typed" data-typed-items="là sinh viên năm 3, học công nghệ thông tin tại Trường Đại học Thủy Lợi."></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Thông Tin Cá Nhân</h2>
                    <p>Xin chào !!!! Tôi là Huyền </p>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="../assets/img/anhHuyn.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3> Sinh Viên khoa CNTT.</h3>
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
                        <button id="editprofile" name="" class="btn btn-primary mb-5">Edit</button>
                    </div>
                    <div class="container editpro">
                        <div class="row mt-5">
                            <form action="" method="POST" role="form" id="formaboutme" class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tuổi: </label>
                                    <input type="text" name="" id="age" placeholder="Tuổi" class="w-75 ml-3" value="<?php echo $thongtin[6] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Số điện thoại: </label>
                                    <input type="text" name="" id="phone" placeholder="Số điện thoại" class="w-50 ml-3" value="<?php echo $thongtin[3] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Thành phố: </label>
                                    <input type="text" name="" id="city" placeholder="Thành phố" class="w-75 ml-2" value="<?php echo $thongtin[2] ?>">
                                </div>
                            </form>
                            <form action="" method="POST" role="form" id="formprofile" class="col-md-6">
                                <div class="form-group">
                                    <label for="">Email: </label>
                                    <input type="text" name="" id="email" placeholder="Email" class="w-75 ml-3" value="<?php echo $thongtin[4] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">Job: </label>
                                    <input type="text" name="" id="job" placeholder="Job" class="w-75 ml-2" value="<?php echo $thongtin[7] ?>">
                                </div>
                            </form>
                            <button id="btneditpro" name="" class="btn btn-primary mb-5 ml-5">Save</button>

                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts" class="facts">
            <div class="container">

                <div class="section-title">
                    <h2>Mục tiêu nghề nghiệp</h2>
                    <p>Áp dụng những kinh nghiệm về kỹ năng
                        và kiến thức về ngành công nghệ thông tin để trở thành một cộng tác viên giáo viên chuyên nghiệp , mang đến một tương lai tốt hơn cho các học sinh.Từ đó giúp Công ty tăng chất lượng đào tạo và tăng số lượng học viên
                        Muốn tìm một môi trường mới để thử thách bản thân mình nhiều hơn và cho bản thân nhiều cơ hội thăng tiến hơn</p>
                </div>
            </div>
        </section><!-- End Facts Section -->

        <!-- ======= Skills Section ======= -->
        <!-- --------------------------------    KỸ NĂNG   --------------------------------- -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Kỹ Năng</h2>
                </div>
                <div class="row skills-content">
                    <?php foreach ($kynang as $row) { ?>

                        <div class="col-lg-6 kynang" data-aos="fade-up" id="sk_<?php echo $row[0] ?>">

                            <div class="progress">
                                <span class="skill"> <?php echo $row[1] ?> <i class="val"><?php echo $row[2] . "%" ?></i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $row[2] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <button name="" class="btn btn-primary mb-5 editskill" id="editsk_<?php echo $row[0] ?>">Sửa</button>
                        </div>
                    <?php } ?>
                </div>
                <!-- -------THÊM KỸ NĂNG ---------- -->
                <button id="addskill" name="" class="btn btn-primary mb-5">Thêm</button>
                <div class="container addski">
                    <div class="row mt-5">
                        <form action="" method="POST" role="form" id="addski" class="col-md-6">
                            <div class="form-group">
                                <label for="">Tên kỹ năng : </label>
                                <input type="text" name="" id="nameskill" placeholder="Tên kỹ năng" class="w-75 ml-3">
                            </div>
                            <div class="form-group">
                                <label for="">Level: </label>
                                <input type="text" name="" id="level" placeholder="Level" class="w-50 ml-3">
                            </div>
                        </form>
                        <button id="btnaddski" name="" class="btn btn-primary mb-5 ml-5">Lưu</button>
                    </div>
                </div>

                <!-- ---   SỬA KỸ NĂNG --------->
                <form action="" method="POST" role="form" id="skski" class="col-md-6">
                    <div class="form-group">
                        <label for="">Tên kỹ năng : </label>
                        <input type="text" name="" id="ednameskill" placeholder="Tên kỹ năng" class="w-75 ml-3">
                    </div>
                    <div class="form-group">
                        <label for="">Level: </label>
                        <input type="text" name="" id="edlevel" placeholder="Level" class="w-50 ml-3">
                    </div>
                </form>
                <button id="btneditski" name="" class="btn btn-primary mb-5 ml-5">Lưu</button>


            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Resume Section ======= -->
        <!-- ------------------------------------------       HỌC VẤN   ----------------------------------  -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Dấu Mốc Quan Trọng</h2>
                    <p>Những năm tháng tuổi trẻ là những ký ức nhỏ trong tôi !!!.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 hocvan" data-aos="fade-up" id="edu_<?php echo $row[0] ?>">
                        <h3 class="resume-title">Học Vấn </h3>
                        <?php foreach ($hocvan as $row) { ?>
                            <div class="resume-item pb-0 divhv_<?php echo $row[0] ?>">
                                <h4 id="tenhocvan<?php echo $row[0] ?>"><?php echo $row[2] ?></h4>
                                <p><em id="thoigianhv<?php echo $row[0] ?>">><?php echo $row[1] ?></em></p>
                                <button name="" class="btn btn-primary mb-5 delhv" id="delhv_<?php echo $row[0] ?>">Xóa</button>
                                <button name="" class="btn btn-primary mb-5 editeducation" id="edited_<?php echo $row[0] ?>">Sửa</button>
                            </div>
                        <?php } ?>
                    </div>

                </div>

            </div>
            <!-- ----------------------- THÊM DỮ LIỆU VÀO BẢNG HỌC VẤN -------------- -->
            <!-- --------Thiết kế form ADD----------- -->
            <button id="addeducation" name="" class="btn btn-primary mb-5">Thêm</button>
            <div class="container">
                <div class="row mt-5">
                    <form action="" method="POST" role="form" id="addedu" class="col-md-6">
                        <div class="form-group">
                            <label for="">Thời gian: </label>
                            <input type="text" name="" id="date" placeholder="Thời gian" class="w-75 ml-3">
                        </div>
                        <div class="form-group">
                            <label for="">Học vấn: </label>
                            <input type="text" name="" id="text" placeholder="Học vấn" class="w-50 ml-3">
                        </div>
                    </form>
                    <button id="btnaddedu" name="" class="btn btn-primary mb-5 ml-5">Lưu</button>
                </div>
            </div>
            <!-- -----------------    SỬA DỮ LIỆU TRONG BẢNG HỌC VẤN  ----------------------------------- -->
            <form action="" method="POST" role="form" id="editedu" class="col-md-6">
                <div class="form-group">
                    <label for=""> Sửa Tên học vấn : </label>
                    <input type="text" name="" id="ededu" placeholder=" Sửa Tên học vấn " class="w-75 ml-3">
                </div>
                <div class="form-group">
                    <label for="">Sửa thời gian : </label>
                    <input type="text" name="" id="eddateedu" placeholder="Sửa thời gian " class="w-50 ml-3">
                </div>
            </form>
            <button id="btneditedu" name="" class="btn btn-primary mb-5 ml-5">Lưu</button>


        </section><!-- End Resume Section -->

        <!-- ======= Portfolio Section ======= -->
        <!-- ---------------------------------   KINH NGHIỆM------------------------------------------------ -->
       
        <section id="portfolio" class="portfolio section-bg">

            <div class="container">

                <div class="section-title">
                    <h2>Kinh nghiệm</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 kinhnghiem" data-aos="fade-up" id="ex_<?php echo $row[0] ?>">
                        <?php foreach ($kinhnghiem as $row) { ?>
                            <div class="resume-item pb-0 divkn_<?php echo $row[0] ?>">
                                <h4 id="tenkn<?php echo $row[0] ?>"><?php echo $row[2] ?></h4>
                                <p><em id="thoigiankn<?php echo $row[0] ?>">><?php echo $row[1] ?></em></p>
                                <button name="" class="btn btn-primary mb-5 delkn" id="delkn_<?php echo $row[0] ?>">Xóa</button>
                                <button name="" class="btn btn-primary mb-5 editexperience" id="editex_<?php echo $row[0] ?>">Sửa</button>

                            </div>

                        <?php } ?>

                    </div>

                </div>


            </div>

            </div>
            <!-- ------Thêm dữ liệu vào bảng kinh nghiệm ------- -->
            <button id="addexperience" name="" class="btn btn-primary mb-5">Thêm</button>
            <div class="container addexper">
                <div class="row mt-5">
                    <form action="" method="POST" role="form" id="addexper" class="col-md-6">
                        <div class="form-group">
                            <label for="">Thời gian: </label>
                            <input type="text" name="" id="dateex" placeholder="Thời gian" class="w-75 ml-3">
                        </div>
                        <div class="form-group">
                            <label for="">Kinh nghiệm : </label>
                            <input type="text" name="" id="experience" placeholder="Kinh nghiệm" class="w-50 ml-3">
                        </div>
                    </form>
                    <button id="btnaddexper" name="" class="btn btn-primary mb-5 ml-5">Lưu</button>
                </div>
            </div>

            <!-- -----------------SỬA DỮ LIỆU TRONG BẢNG KINH NGHIỆM ----------------------------------- -->
            <form action="" method="POST" role="form" id="editexper" class="col-md-6">
                <div class="form-group">
                    <label for=""> Sửa Tên kinh nghiệm : </label>
                    <input type="text" name="" class="edexper" id="edexper" placeholder=" Sửa Tên kinh nghiệm " class="w-75 ml-3">
                </div>
                <div class="form-group">
                    <label for="">Sửa thời gian : </label>
                    <input type="text" name="" class="eddate" id="eddate" placeholder="Sửa thời gian " class="w-50 ml-3">
                </div>
            </form>
            <button id="btneditexper" name="" class="btn btn-primary mb-5 ml-5">Lưu</button>


        </section><!-- End Portfolio Section -->

        <!-- ======= Services Section ======= -->
        <!-- ---------------------------- DỰ ÁN THAM GIA ------------------------------------- -->

        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Dự án tham gia</h2>

                    <div class="container-fluid duan">
                        <table class="table table-striped table-inverse table-responsive">
                            <thead class="thead-inverse">
                                <tr>
                                    <!-- <th>STT</th> -->
                                    <th>Tên dự án</th>
                                    <th>Mô tả</th>
                                    <th>Vị trí</th>
                                    <th>Vai trò</th>
                                </tr>
                            </thead>
                            <tbody id="listduan">
                                <?php
                                foreach ($duan as $row) {
                                    echo "<tr>";
                                    // echo "<td>" . $row[0] . "</td>";
                                    echo "<td>" . $row[1] . "</td>";
                                    echo "<td>" . $row[2] . "</td>";
                                    echo "<td>" . $row[3] . "</td>";
                                    echo "<td>" . $row[4] . "</td>";
                                    echo "<tr>";
                                } ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            <!-- ----------------- ----THÊM DỰ ÁN ------------------------------------ -->
            <button id="addproject" name="" class="btn btn-primary mb-5">Thêm</button>
            <div class="container addpro">
                <div class="row mt-5">
                    <form action="" method="POST" role="form" id="addpro" class="col-md-6">
                        <div class="form-group">
                            <label for="">Tên dự án : </label>
                            <input type="text" name="" id="nameproject" placeholder="Tên dự án" class="w-75 ml-3">
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả : </label>
                            <input type="text" name="" id="description" placeholder="Mô tả " class="w-50 ml-3">
                        </div>
                        <div class="form-group">
                            <label for="">Vị trí : </label>
                            <input type="text" name="" id="location" placeholder="Vị trí " class="w-50 ml-3">
                        </div>
                        <div class="form-group">
                            <label for="">Vai trò : </label>
                            <input type="text" name="" id="role" placeholder="Vai trò " class="w-50 ml-3">
                        </div>
                    </form>
                    <button id="btnaddpro" name="" class="btn btn-primary mb-5 ml-5">Lưu</button>
                </div>
            </div>
            

        </section>
        <!-- -------------------------------    XEM TIN NHẮN    --------------------- -->
       
        <section id="contact" class="contact">
        <div class="container">

        <div class="section-title">
        <h2>Xem Tin Nhắn</h2>

<div class="container-fluid">
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>Tên người liên hệ</th>
                <th>Email</th>
                <th>Tiêu đề</th>
                <th>Tin nhắn</th>
                <th>Thời gian</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lienhe as $row) {
                echo "<tr>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                echo "<td>" . $row[4] . "</td>";
                echo "<td>" . $row[5] . "</td>";
            } ?>

        </tbody>
    </table>

</div>
        </div> 

      </div>
        </section>f
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- <footer id="footer">
        <div class="container"> -->

    <!-- All the links in the footer should remain intact. -->
    <!-- You can delete the links only if you purchased the pro version. -->
    <!-- Licensing information: https://bootstrapmade.com/license/ -->
    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->

    <!-- </div>
        <div><a href="process-logout.php" class="btn btn-primary">Logout</a></div>
        </div> -->
    <!-- </footer>End  Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="../assets/vendor/counterup/counterup.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendor/typed.js/typed.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>
    <script src="js/script.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>