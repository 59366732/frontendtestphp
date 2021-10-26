<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<body>
    <div class="container" style="min-width: 996px;">
        <div class="grid-container">
            <div class="sidebar-item">
                <div class="col-md-1">
                    <br>
                    <p>สแกนเวลาเข้า - ออกงาน</p>
                    <input type="text" id="employeeid" name="employeeid" style="width: 100%">
                    <br><br>
                    <center><button type="submit" class="btn btn-info" onclick="insert();">ยืนยัน</button><br><br>
                        <button type="button" class="btn btn-success" onclick="location.href='report.php'">Report</button>
                    </center>
                    <!-- <script type="text/javascript">
                        function insert() {
                            var getid = document.getElementById("employeeid").value;
                            console.log(getid);
                            $.ajax({
                                type: "POST",
                                url: "insertemployeeid.php",
                                data: {
                                    "employeeid": getid
                                },
                                success: function(result) {
                                    /*array_data.push(barcode);
                                    console.log(id_show);
                                    document.getElementById(id_show).value = result;*/
                                    if (result == "success") {
                                        alert("บันทึกข้อมูลเรียบร้อย");
                                        location.reload();
                                    } else {
                                        alert("บันทึกข้อมูลไม่สำเร็จ");
                                        location.reload();
                                    }
                                }
                            });
                        }
                    </script> -->
                </div>
                <br><br>
                <div>
                    <table class="col-md-2">
                        <tr>
                            <th>รหัส</th>
                            <th>ชื่อเล่น</th>
                        </tr>
                        <tr>
                            <td>0000000001</td>
                            <td>วัชรกิจ</td>
                        </tr>
                        <tr>
                            <td>0000000002</td>
                            <td>ธนาทิพย์</td>
                        </tr>
                        <tr>
                            <td>0000000003</td>
                            <td>วิมลรัตน์</td>
                        </tr>

                        <tr>
                            <td>0000000005</td>
                            <td>วริศ</td>
                        </tr>

                        <tr>
                            <td>0000000006</td>
                            <td>สิรภพ</td>
                        </tr>

                        <tr>
                            <td>0000000008</td>
                            <td>พรพิมล</td>
                        </tr>

                        <tr>
                            <td>0000000009</td>
                            <td>ไตรทศ</td>
                        </tr>
                        <tr>
                            <td>0000000010</td>
                            <td>สุธิดา</td>
                        </tr>

                        <tr>
                            <td>0000000011</td>
                            <td>กมลภา</td>
                        </tr>
                        <tr>
                            <td>0000000012</td>
                            <td>ชรัณ</td>
                        </tr>
                        <tr>
                            <td>0000000013</td>
                            <td>คัทลียา</td>
                        </tr>

                        <tr>
                            <td>0000000014</td>
                            <td>ญภา</td>
                        </tr>
                        <tr>
                            <td>0000000015</td>
                            <td>ปฐมพร</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="content-item">
                <div class="col-md-12">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th style="text-align: center;">ลำดับ</th>
                                <th style="text-align: center;">วันที่</th>
                                <th style="text-align: center;">เวลา</th>
                                <th style="text-align: center;">รหัส</th>
                                <th style="text-align: center;">ชื่อ - นามสกุล</th>
                                <th style="text-align: center;">ชื่อเล่น</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < 30; $i++) {
                                echo "<tr>
                                    <td style='text-align:center'>1</td>
                                    <td style='text-align:center'>03/08/2021</td>
                                    <td style='text-align:center'>10:05:14</td>
                                    <td style='text-align:center'>0000000001</td>
                                    <td style='text-align:center'>วัชรกิจ</td>
                                    <td style='text-align:center'>กิต</td>
                                </tr>";
                            }
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="text-align: center;">ลำดับ</th>
                                <th style="text-align: center;">วันที่</th>
                                <th style="text-align: center;">เวลา</th>
                                <th style="text-align: center;">รหัส</th>
                                <th style="text-align: center;">ชื่อ - นามสกุล</th>
                                <th style="text-align: center;">ชื่อเล่น</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                    [0, 'desc'],
                    [1, 'desc']
                ]
            });
        });
    </script>
</body>