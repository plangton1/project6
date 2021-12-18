<?php
$sql = "SELECT COUNT(standard_number) as count_standard FROM standard_tb";
$query = sqlsrv_query($conn,$sql);
?>
 <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">สมอ. คืออะไร ?</h2>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-content section-title">
                        <div class="row">
                            <div class="">
                              <h3 class="wow fadeInUp " data-wow-delay=".4s">-</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-content">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <!-- Start Single List -->
                                <!-- <div class="single-list wow fadeInUp" data-wow-delay=".2s">
                                    <i class="lni lni-book"></i>
                                    <?php while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) : ?>
                                    <h4>จำนวนเอกสารทั้งหมด</h4>
                                    <p><?=$result['count_standard']?></p>
                                    <?php endwhile;?>
                                </div> -->
                                <!-- Start Single List -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp bt-1" data-wow-delay=".4s">ขั้นตอนการยื่นเอกสาร</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-content section-title">
                        <div class="row">
                            <div class="wow fadeInUp " data-wow-delay=".4s">
                              <h3 class="wow fadeInUp " data-wow-delay=".4s"></h3>
                              <img src="https://www.tisi.go.th/data/contact/info/info_6.jpg" width="700px" height="1000px" class="mr-img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /End Why Choose Area -->