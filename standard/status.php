<?php
if (isset($_POST) && !empty($_POST)) {
    $standard_idtb = $_POST['standard_idtb'];
    $standard_number = $_POST['standard_number'];
    $standard_meet = $_POST['standard_meet'];
    $standard_detail = $_POST['standard_detail'];
    $standard_mandatory = $_POST['standard_mandatory'];
    $standard_tacking = $_POST['standard_tacking'];
    $standard_note = $_POST['standard_note'];
}
$sql = ("SELECT * FROM main_std "); 
$query = sqlsrv_query($conn, $sql);
?>


<section class="items-grid section custom-padding">
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">เอกสารทั้งหมด</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="  tab-content font">
        <div id="home" class="container-fluid tab-pane active m-2">
            <form method="post">
                <table class="table table-bordered table-responsive-xl table-striped  text-center pt-5" style="width: 100%;" id="tableall">
                    <thead>
                        <tr>
                            <th>ลำดับที่</th>
                            <th>วาระจากในที่ประชุมสมอ.</th>
                            <th>เลขที่มอก.</th>
                            <th>ชื่อมาตรฐาน</th>                    
                            <th>มาตรฐานบังคับ</th>
                            <th>วันที่แต่งตั้ง</th>
                            <th>สถานะ</th>
                            <th>เลขเอกสารที่เกี่ยวข้อง</th>
                            <th>เมนูจัดการ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php while ($data = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) :?>
                            <tr class="text-center">
                                <td class="align-middle"><?= $i++; ?></td>
                                <td class="align-middle"><?= $data['standard_meet'] ?></td>
                                <td class="align-middle"><?= $data['standard_number'] ?></td>
                                <td class="align-middle"><?= $data['standard_detail'] ?></td>
                                <td class="align-middle"><?= $data['standard_mandatory'] ?></td>
                                <td class="align-middle">
                                    <!-- <input type="date" class="form-control" name="progess_date" required> -->
                                    -
                                </td>
                                <td class="align-middle">
                                   -
                                </td>
                                <td class="align-middle">
                                    <!-- <input type="text" class="form-control" name="name_real" required> -->
                                    -
                                </td>
                                <td class="align-middle">
                                    <div class="mb-4">
                                        <!--กดรายงานสถานะแล้วไปหน้าไหนต่อ แล้วในหน้านั้นเป็นประมาณไหน จะได้สร้างถูก -->
                                        <a href="?page=<?= $_GET['page'] ?>&function=update&standard_idtb=<?= $data['standard_idtb'] ?>" class="btn btn-sm btn-warning">แก้ไขสถานะ</a>
                    
                                    </div>
                                    </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </form>

        </div>
    </div>
</section>