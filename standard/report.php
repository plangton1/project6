<section class="items-grid section custom-padding">
    <div class="">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">กรุณาเลือกงานที่ต้องการ</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s"></p>



                </div>
            </div>
        </div>
    </div>

    <div class="  tab-content font">
        <div id="home" class="container-fluid tab-pane active m-2">
            <div class="container">
                <div class="pd-t">
                    <label> เลือกรูปแบบรายงานอัตโนมัติ </label>
                    <select name="type_com" class="form-control">
                        <option value="" selected disabled>-กรุณาเลือก-</option>
                        <option value="กิจการคนเดียว">รายงานรายศูนย์</option>
                        <option value="กิจการห้างหุ้นส่วน">รายงานรายช่วงเวลา </option>
                        <option value="บริษัทจำกัด">รายงานรายสถานะ </option>
                        <option value="บริษัทมหาชนจำกัด">รายงานตามเลขมอก. </option>
                        <option value="บริษัทมหาชนจำกัด">รายงานตามหน่วยงานคู่แข่งที่เลือก หรือจำนวนคู่แข่ง (มาก-น้อย)</option>
                    </select>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-danger bt mg-t-bt">พิมพ์รายงาน</button>
                </div>
                <hr>
                <div>
                    <label> เลือกรูปแบบรายงานแบบกำหนดเอง</label>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value=""><label for="vehicle1"> มาตรฐานเลขที่ *</label>

                    <input type="checkbox" id="vehicle2" name="vehicle2" value=""> <label for="vehicle2">ประเภทผลิตภัณฑ์ *</label>

                    <input type="checkbox" id="vehicle3" name="vehicle3" value=""><label for="vehicle3">กลุ่มผลิตภัณฑ์</label>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value=""><label for="vehicle3"> ศูนย์ที่เกี่ยวข้อง</label>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value=""><label for="vehicle3">แสดงวันที่ของสถานะทั้งหมด</label>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value=""><label for="vehicle3">แสดงเอกสารแนบทั้งหมด (สร้างเป็น link จากในระบบเพื่อให้กดดูได้)</label>

                </div>

                <div class="">
                    <button type="submit" class="btn btn-danger bt mg-t-bt">พิมพ์รายงาน</button>
                </div>


            </div>
        </div>

</section>