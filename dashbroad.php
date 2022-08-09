<?php 
date_default_timezone_set("Asia/Bangkok");
include './function.php';

if(isset($_GET['datePicker'])){
    $datelogToload = $_GET['datePicker'];
}else{
    $datelogToload = date("Y-m-d H:i:s");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TVS Station Report : Daily Report</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./custom/six.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./custom/aos/aos.css">
</head>

<body>
    <!-- navbart -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm" data-aos="fade-down">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TVS Station Report<sup>ALPHA</sup></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ข้อมูลเมื่อ : <?php echo $datelogToload;?> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Version : 0.1</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <button type="button" class="btn btn-secondary mx-1 " data-bs-toggle="modal" data-bs-target="#fact"><i
                        class="bi bi-calendar3"></i></button>
                <button type="button" class="btn btn-primary" onclick="location.reload();">
                    <i class="bi bi-arrow-repeat"></i></button>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <div class="container-fluid">
        <div class="row mt-1">
            <div class="col-lg-4">
                <div class="card w-100 h-100 shadow-sm" data-aos="fade-right">
                    <div class="card-body text-center inCommingCard">
                        <h3>INCOMMING</h3>
                        <div class="row">
                            <div class="col-6 d-grid gap-4">
                                <?php incomeingStatusLeftOne('Int.<br>Provider','0','2');
                                      incomeingStatusLeftTwo('Local<br>Provicer','0','0');
                                ?>

                            </div>
                            <div class="col-6 mt-2">
                                
                                <?php
                                incomeingStatusRightSide('Satellite','0','1');
                                incomeingStatusRightSide('Radio','0','0');
                                incomeingStatusRightSide('DTT','0','0');
                                incomeingStatusRightSide('DLTV','0','0');
                                incomeingStatusRightSide('Fiber','0','0');
                                ?>
                            </div>
                            <div class=" col-12">
                                <h6>SLA 69HRs.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card w-100 h-100 shadow-sm" data-aos="fade-up">
                    <div class="card-body text-center">
                        <h3>BROADCAST SYSTEM</h3>
                        <div class="row">
                            <div class="col-3">
                                <!-- Router -->
                                <?php broadcastSystemStatus('Router','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Switcher -->
                                <?php broadcastSystemStatus('Switcher','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- ALC -->
                                <?php broadcastSystemStatus('ALC','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Process & DA -->
                                <?php broadcastSystemStatus('Process&DA','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Logo Gennerator -->
                                <?php broadcastSystemStatus('Logo Gennerator','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Satellite Receiver -->
                                <?php broadcastSystemStatus('Satellite<br>Receiver','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Delay System -->
                                <?php broadcastSystemStatus('Delay System','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Video Server -->
                                <?php broadcastSystemStatus('Video Server','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Automation System -->
                                <?php broadcastSystemStatus('Automation<br>System','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Video Logging -->
                                <?php broadcastSystemStatus('Video Logging','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- CG -->
                                <?php broadcastSystemStatus('CG','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Virtual Graphic -->
                                <?php broadcastSystemStatus('Virtual Graphic','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Studio -->
                                <?php broadcastSystemStatus('Studio','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Voice & Dub -->
                                <?php broadcastSystemStatus('Voice & Dub','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Video Converter -->
                                <?php broadcastSystemStatus('Video Converter','0','0');?>
                            </div>
                            <div class="col-3">
                                <!-- Network Switch -->
                                <?php broadcastSystemStatus('Network Switch','0','0');?>
                            </div>

                            <hr class="mt-lg-5">

                            <h3 c>BROADCAST FACILITY</h3>
                            <div class="row text-center">
                                <div class="col-3 text-center h-100">
                                    <h6 class="ms-2 my-2">SLA 10 MIN</h6>
                                </div>
                                <div class="col-3 ">
                                    <button type="button" class=" btn btn-secondary w-100">Electrical</button>
                                </div>
                                <div class="col-3 ">
                                    <button type="button" class=" btn btn-secondary w-100">Chiller</button>
                                </div>
                                <div class="col-3 text-center h-100">
                                    <h6 class="ms-2 my-2">SLA 20 MIN</h6>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card w-100 h-100 shadow-sm" data-aos="fade-up">
                    <div class="card-body text-center">
                        <h3>OUTGOING</h3>
                        <div class="d-grid gap-2 w-100">
                            <?php
                                // Broadcast Compression 
                                outgoingTop('<br><br>Broadcast<br>Compression', '0', '0');
                                // CAS
                                outgoingBottom('CAS', '0', '0');
                                // OTT Encoder
                                outgoingBottom('OTT Encoder', '0', '0');
                            ?>
                            <hr>
                            <h6>SLA 5 MIN</h6>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card w-100 h-100 shadow-sm" data-aos="fade-left">
                    <div class="card-body text-center">
                        <h3>TRANSMISSION</h3>
                        <div class="d-grid gap-2 w-100">
                            <?php
                                // CATV
                                transmissionStatus('CATV', '1', '0');
                                // DSTV
                                transmissionStatus('DSTV','0','0');
                                // True4U TNN16
                                transmissionStatus('True4U<br>TNN16','0','0');
                                // TRUE ID
                                transmissionStatus('TRUE ID','0','0');
                            ?>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="SLA SWITCH TO BACKUP SITE (PLAN 10 MIN / UNPLAN 30 MIN)
SLA 6 HR. ONLY H/E CATV & COMMUNICATION LINK"><i
                                    class="bi bi-info-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card w-100 mt-1" data-aos="fade-up" data-aos-offset="-200">
                    <div class=" card-body d-flex justify-content-end">
                        <Button type="button" class="btn btn-light mx-1">Total Error :</Button>
                        <button type="button" class="btn btn-warning mx-1 ">NSA : <?php echo $totalNSA?></button>
                        <button type="button" class="btn btn-danger  mx-1 ">SA : <?php echo $totalSA?></button>
                        <Button type="button" class="btn btn-light mx-1 disabled">V.Testify</Button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="fact" tabindex="-1" aria-labelledby="fact" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fact">Log</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="loadLog" action="dashbroad.php" method="GET">
                        <label for="LoadLOG">Load Log Data</label>
                        <select class="form-select" name="datePicker" id="datePicker" aria-label="LoadLOG">
                            <option selected>Please select day...</option>
                            <option value="12">Today</option>
                            <option value="70">Tomorrow</option>
                            <option value="69">World's End</option>
                        </select>
                    </form>
                </div>
                <div class=" modal-footer">
                    <button type="submit" form="loadLog" class="btn btn-primary"><i class="bi bi-box-arrow-down"></i>
                        Load Data</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i>
                        Close</button>
                </div>

            </div>
            <script src="./custom/aos/aos.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
                integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
                crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

            <script>
            AOS.init({
                duration: 1200,
                once: true,
            });

            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            })
            </script>


</body>

</html>