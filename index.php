<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php include('./include/head.php'); ?>
<?php include('./css/css.php'); ?>
<?php include('./connection/connection.php'); ?>

<body class="font">
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- /End Preloader -->

    <?php include('./include/menu.php'); ?>
    <!-- Start Hero Area -->
    <section class="hero-area overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="hero-text text-center">
                        <!-- Start Hero Text -->
                        <div class="section-heading">
                            <h2 class="wow fadeInUp " data-wow-delay=".3s">ค้นหาเอกสารที่นี่</h2>
                            <p class="wow fadeInUp" data-wow-delay=".5s"></p>
                        </div>
                        <!-- End Search Form -->
                        <!-- Start Search Form -->
                        <div class="search-form wow fadeInUp " data-wow-delay=".3s">
                            <div class="row s-ct">
                                <div class="col-lg-4 col-md-4 col-12 p-0">
                                    <div class="search-input">
                                        <label for="keyword"><i class="lni lni-search-alt theme-color "></i></label>
                                        <input type="text" name="keyword" id="keyword" placeholder="Product keyword">
                                    </div>
                                </div>


                                <div class="col-lg-2 col-md-2 col-12 p-0">
                                    <div class="search-btn button">
                                        <button class="btn"><i class="lni lni-search-alt"></i> Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start Categories Area -->
    <section class="categories sticky">
        <div class="container ">
            <div class="cat-inner">
                <div class="row ">
                    <div class="col-12 p-0">
                        <div class="category-slider mg-l-menu">
                            <!-- Start Single Category -->
                            <a href="?page=dash" class="single-cat">
                                <div class="icon">
                                    <img src="https://th.seaicons.com/wp-content/uploads/2015/06/Home-icon.png" alt="#">
                                </div>
                                <h3>หน้าแรก</h3>
                            </a>
                            <a href="?page=status" class="single-cat">
                                <div class="icon">
                                    <img src="https://studyinter.com/wp-content/uploads/2019/08/3-icon-%E0%B8%A3%E0%B8%B2%E0%B8%A2%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B9%80%E0%B8%AD%E0%B8%81%E0%B8%AA%E0%B8%B2%E0%B8%A3.png" alt="#">
                                </div>
                                <h3>เอกสารทั้งหมด</h3>
                            </a>

                            <a href="?page=insert2" class="single-cat">
                                <div class="icon">
                                    <img src="https://th.seaicons.com/wp-content/uploads/2015/11/document-add-icon.png" alt="#">
                                </div>
                                <h3>เพิ่มเอกสาร</h3>

                            </a>
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <!-- <a href="?page=status" class="single-cat">
                                <div class="icon">
                                    <img src="https://lh3.googleusercontent.com/proxy/nZCwrZ7zWm0bfLlgziJbGh_CKnN4I2owml9GmimSMKeO_rS4z1yQNautOGg0PM9AjHCQ46uy7ZwvwnkPyH0RgZfx6EwD5Tfl3nPF3yhqc6prwHNnSxbKtVWA-oQe2lvhtw" alt="#">
                                </div>
                                <h3>แก้ไขสถานะ</h3>

                            </a> -->
                            <!-- End Single Category -->
                            <!-- Start Single Category -->
                            <a href="?page=report" class="single-cat">
                                <div class="icon">
                                    <img src="https://cdn.iconscout.com/icon/free/png-256/report-file-2014973-1700581.png" alt="#">
                                </div>
                                <h3>รายงานเอกสาร</h3>

                            </a>
                            <!-- End Single Category -->
                            <a href="?page=add" class="single-cat">
                                <div class="icon">
                                    <img src="https://image.flaticon.com/icons/png/512/1159/1159711.png" alt="#">
                                </div>
                                <h3>เพิ่มข้อมูลพื้นฐาน</h3>

                            </a>
                            <!-- End Single Category -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Categories Area -->

    <?php
    if (!isset($_GET['page']) && empty($_GET['page'])) {
        include('standard/status.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'insert2') {
        include('standard/insert2.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'status') {
        if (isset($_GET['function']) && $_GET['function'] == 'update') {
            include('standard/status_edit.php');
        } else {
            include('standard/status.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == 'report') {
        include('standard/report.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'statusedit') {
        include('standard/status_edit.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'dash') {
        include('dashboard/index.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'add') {
        include('standard/add.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'add_type') {
        if (isset($_GET['function']) && $_GET['function'] == 'update') {
            include('standard/add_update_type.php');
        }
        if (isset($_GET['function']) && $_GET['function'] == 'delete') {
            include('standard/add_delete_type.php');
        } else {
            include('standard/add_type.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == 'add_group') {
        if (isset($_GET['function']) && $_GET['function'] == 'update') {
            include('standard/add_update_group.php');
        }
        if (isset($_GET['function']) && $_GET['function'] == 'delete') {
            include('standard/add_delete_group.php');
        } else {
            include('standard/add_group.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == 'add_agency') {
        if (isset($_GET['function']) && $_GET['function'] == 'update') {
            include('standard/add_update_agency.php');
        }
        if (isset($_GET['function']) && $_GET['function'] == 'delete') {
            include('standard/add_delete_agency.php');
        } else {
            include('standard/add_agency.php');
        }
    } elseif (isset($_GET['page']) && $_GET['page'] == 'add_insert_type') {
        include('standard/add_insert_type.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'add_insert_group') {
        include('standard/add_insert_group.php');
    } elseif (isset($_GET['page']) && $_GET['page'] == 'add_insert_agency') {
        include('standard/add_insert_agency.php');
    }
    ?>


    <?php include('./include/footer.php'); ?>

    <!-- ========================= scroll-top ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <?php include('./include/script.php'); ?>
</body>

</html>

<script src="extend\jquery-3.6.0.min.js"></script>

<script>
        function add_element(mom,baby){
                var cloning = $("#" + baby).clone(true);

                cloning.css("display","");

                $("#" + mom).append(cloning);
        }
</script>