<?php
$type_id = (isset($_GET['type_id'])) ? $_GET['type_id'] : '';
$type_name = (isset($_GET['type_name'])) ? $_GET['type_name'] : '';
if (isset($_POST) && !empty($_POST)) {
    $type_id = $_POST['type_id'];
    $type_name = $_POST['type_name'];
    $sql = "INSERT INTO type_tb VALUES (?,?) ";
    $params = array($type_id, $type_name);
    if (sqlsrv_query($conn, $sql, $params)) {
        $alert = '<script type="text/javascript">';
        $alert .= 'alert("เพิ่มข้อมูลประเภทสำเร็จ !!");';
        $alert .= 'window.location.href = "?page=add_type";';
        $alert .= '</script>';
        echo $alert;
        exit();;
    } else {
        echo "Error: " . $sql0 . "<br>" . sqlsrv_errors($conn);
    }
    sqlsrv_close($conn);
}
?>
<form method="post" action="">
    <section class="items-grid section custom-padding">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">เพิ่มข้อมูลพื้นฐาน</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container card-regis font">

            <h3 class="font">เพิ่มข้อมูลประเภทผลิตภัณฑ์</h3>
            <hr>
            <br>
            <div class="">
                <div>
                    <label>หมายเลขผลิตภัณฑ์</label>
                    <input type="text" name="type_id" class="form-control" autocomplete="off">
                    <label>ประเภทผลิตภัณฑ์</label>
                    <input type="text" name="type_name" class="form-control" autocomplete="off">
                </div>
            </div>
            <hr>
            <center>
                <div class="bt">
                    <button type="submit" class="btn btn-info bt">เพิ่มข้อมูล</button>
                </div>
            </center>
</form>
</div>



</section>