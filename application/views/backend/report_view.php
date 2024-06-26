<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        Report
        </h1>
    </section>
    <!-- Top menu -->
    <!-- Main content -->
    <section class="content">
        <!-- Your Page Content Here -->
        <div class="box">
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php
                            $data_case_type = array();
                            //chart data format
                            foreach ($queryreport as $k) {
                                $data_case_type[] = "['".$k->case_type."'".", ".$k->casetotal."]";
                            }
                            //cut last commar
                            $data_case_type = implode(",", $data_case_type);
                            ?>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Task', 'จำนวนงานแยกตามประเภท'],
                            <?php echo $data_case_type;?>
                            ]);
                            var options = {
                            title: 'จำนวนงานแยกตามประเภท'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
                            chart.draw(data, options);
                            }
                            </script>
                            
                            <div id="piechart1" style="width: 600px; height: 400px;"></div>
                            
                            <h3>::จำนวนงานแยกตามประเภท::</h3>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="info">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 75%;">ประเภทงานซ่อม</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($queryreport as $rsr) { ?>
                                    <tr role="row">
                                        <td align="center">#</td>
                                        <td><?= $rsr->case_type;?></td>
                                        <td align="center"><?= $rsr->casetotal;?></td>
                                        <td align="center"><a href="<?= site_url('jobs/bycasetype/');?>?case_type=<?= $rsr->case_type;?>" class="btn btn-info btn-xs"> view </a></td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            //echo $query;
                            $case_status = array();
                            foreach ($querystatus as $s) {
                            
                            //status name
                                if($s->case_status==1){
                                    $statusname = 'รอดำเนินการ';
                                }elseif($s->case_status==2){
                                    $statusname = 'กำลังดำเนินการ';
                                }elseif($s->case_status==3){
                                    $statusname = 'เสร็จสิ้น';
                                }else{
                                    $statusname = 'ยกเลิก';
                                }
                            
                            //chart data format
                            $case_status[] = "['".$statusname."'".", ".$s->statustotal."]";
                            }
                            //cut last commar
                            $case_status = implode(",", $case_status);
                            ?>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);
                            function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                            ['Task', 'จำนวนงานแยกตามสถานะ'],
                            <?php echo $case_status;?>
                            ]);
                            var options = {
                            title: 'จำนวนงานแยกตามสถานะ'
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                            chart.draw(data, options);
                            }
                            </script>
                            
                            <div id="piechart2" style="width: 600px; height: 400px;"></div>
                        
                            <h3>::จำนวนงานแยกตามสถานะ::</h3>
                            <table class="table table-bordered table-striped" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row" class="danger">
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">#</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 75%;">ประเภทงานซ่อม</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">จำนวน</th>
                                        <th  tabindex="0" rowspan="1" colspan="1" style="width: 10%;">view</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($querystatus as $rss) { ?>
                                    <tr role="row">
                                        <td align="center">#</td>
                                        <td>
                                            <?php
                                            if($rss->case_status==1){
                                            echo 'รอดำเนินการ';
                                            }elseif($rss->case_status==2){
                                            echo 'กำลังดำเนินการ';
                                            }elseif($rss->case_status==3){
                                            echo 'เสร็จสิ้น';
                                            }else{
                                            echo 'ยกเลิก';
                                            }
                                            ?>
                                        </td>
                                        <td align="center"><?= $rss->statustotal;?></td>
                                        <td align="center"><a href="<?= site_url('jobs/bystatus/'.$rss->case_status);?>" class="btn btn-info btn-xs"> view </a></td>
                                    </tr>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>  * view ให้ไปต่อยอดเอาเองนะครับ ดูตัวอย่างจากหน้าแสดงงานตามสถานะ (Controller/Jobs) </p>
                   // <div class="row">
                        <div class="col-sm-6">
                        <h3>::รายงานผู้รับ Case ::</h3>
                        <!-- datatable : id example & class display -->
                        <table id="example" class="table table-bordered table-striped table-hover  display">
                            <thead style="background-color: #c8cfca;">
                            <tr>
                                <th style="width: 5%;">No.</th>
                                <th style="width: 15%;">ชื่อผู้รับเคส</th>
                                <th style="width: 15%;">จำนวน Case ทั้งหมด</th>
                                <th style="width: 15%;">Case สำเร็จแล้ว</th>
                                <th style="width: 15%;">Case ดำเนินการอยู่</th>
                                <th style="width: 15%;">Case ที่ยกเลิก</th>
                                
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $querytoarraycaseuserit  = array();
                             foreach ($querycaseuserit as $rs) { ?>
                            <tr>
                                <?php echo print_r ($querycaseuserit);   ?>
                                <td align="center"><?= $rs->tech_id;?></td>
                                <td><?= $rs->tech_name;?></td>
                                <td>
                                <?= $rs->totolcase;?>
                                </td>
                                <td>

                                </td>
                                <td>

                                </td>
                                <td>
                            
                                </td>
                                <td></td>
                            </tr>
                            <?php  } ?>
                            </tbody>
                        </table>
                        </div>
                    //</div>
                </div>
                </div><!-- /.box-body -->
            </div>
            </section><!-- /.content -->
            </div><!-- /.content-wrapper -->