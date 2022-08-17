<?php 
date_default_timezone_set("Asia/Bangkok");
include './function.php';

if(isset($_GET['datePicker'])){
    $datelogToload = $_GET['datePicker'];
}else{
    $datelogToload = date("Y-m-d H:i:s");
}

//How to insert Value
//        ServiceName   Case  Case
// functionName('Name','NSA','SA');

// All Available Fuhnction : 

// incomeingStatusLeftOne();  
// incomeingStatusLeftTwo();

// incomeingStatusRightSide();

// broadcastSystemStatus();

// outgoingTop();
// outgoingBottom();

// transmissionStatus();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>On-Air Operation Daily Report</title>
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./custom/six.css?v=2.11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./custom/aos/aos.css">
    <link rel="preload" as="image" href="./image/nutzNormal.png">
    <link rel="preload" as="image" href="./image/nutzNSA.png">
    <link rel="preload" as="image" href="./image/nutzSA.png">
</head>

<body>
    <!-- navbart -->
    <nav class="navbar navbar-nav-scroll navbar-expand-lg navbar-light bg-light shadow-sm" data-aos="fade-down">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">On-Air Operation Daily Report <sup>ALPHA</sup></a>
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
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
                    </li>
                </ul>
            </div>
            <div class=" d-flex justify-content-end">
                <button type="button" class="btn btn-secondary mx-1 " data-bs-toggle="modal" data-bs-target="#fact"><i
                        class="bi bi-calendar3"></i></button>
                <button type="button" class="btn btn-primary" onclick="location.reload();">
                    <i class="bi bi-arrow-repeat"></i></button>
            </div>
        </div>
    </nav>
    <!-- navbar end -->

    <div class="container-fluid">
        <div class="row gy-2 gx-2">
            <!-- LIVE PROGRAM -->
            <div class="col-12 col-sm12 col-md-6 col-lg-3 col-xl-3">
                <div class="card text-white bg-secondary mt-2 shadow-sm w-100 h-100">
                    <h3 class="card-header text-center">LIVE PROGRAM</h3>
                    <div class="card-body">
                        <div class="row gy-1 gx-1">
                            <!-- PLAYOUT -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-primary w-100 h-100">
                                    <div class="card-body align-items-center text-center">
                                        <h3 class="w-100 text-center">PLAYOUT</h3>
                                        <h2 class="fw-bold w-100">23</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-6 col-lg-6">
                                <div class="card bg-primary w-100 h-100">
                                    <div class="card-body text-start">
                                        <h6>STUDIO TIPCO : 5</h6>

                                        <h6>STUDIO TAYAN : 8</h6>

                                        <h6>INTRERNAL VOICE : 10</h6>

                                        <h6>EXTERNAL VOICE : 0</h6>

                                    </div>
                                </div>
                            </div>
                            <!-- TAC -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-primary w-100 h-100">
                                    <div class="card-body align-items-center text-center">
                                        <h3 class="w-100 text-center">TAC</h3>
                                        <h2 class="fw-bold w-100">1</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-6 col-lg-6">
                                <div class="card bg-primary w-100 h-100">
                                    <div class="card-body text-start">
                                        <h6>INTRERNAL VOICE : 1</h6>
                                        <h6>EXTERNAL VOICE : 0</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- TNN16/TURE4U -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-primary w-100 h-100">
                                    <div class="card-body align-items-center text-center">
                                        <h4 class="w-100 text-center">TNN16 / True4U</h4>
                                        <h2 class="fw-bold">16</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-6 col-lg-6">
                                <div class="card bg-primary w-100 h-100">
                                    <div class="card-body text-start">
                                        <h6>STUDIO TIPCO : 4</h6>

                                        <h6>STUDIO TAYAN : 12</h6>

                                        <h6>INTRERNAL VOICE : 0</h6>

                                        <h6>EXTERNAL VOICE : 0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        จำนวนรายการที่ถ่ายทอดสดประจำวัน
                    </div>
                </div>
            </div>

            <!-- ADVERTISING & SPONSOR -->
            <div class="col-12 col-sm12 col-md-6 col-lg-3 col-xl-3">
                <div class="card text-white bg-secondary h-100 mt-2 shadow-sm">
                    <h3 class="card-header text-center">ADVERTISING & SPONSOR</h3>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="row gy-1 gx-1">
                            <!-- PLAYOUT -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-warning w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">PLAYOUT</h3>
                                        <h2 class="fw-bold">865</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-6 col-lg-6">
                                <div class="card bg-warning w-100 h-100">
                                    <div class="card-body text-start">
                                        <h6>PLAYOUT: 5</h6>

                                        <h6>STUDIO TAYAN : 8</h6>
                                    </div>
                                </div>
                            </div>
                            <!-- TAC -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-warning w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">TAC</h3>
                                        <h2 class="fw-bold">0</h2>

                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-6 col-lg-6">
                                <div class="card bg-warning w-100 h-100">
                                    <div class="card-body text-start">
                                        <h6>ADVERTISING : 0</h6>
                                        <h6>SPONSOR : 0</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        จำนวนครั้งที่นำขึ้นออกอากาศ
                    </div>
                </div>
            </div>

            <!-- REQUEST -->
            <div class="col-12 col-sm12 col-md-6 col-lg-3 col-xl-3">
                <div class="card text-white bg-secondary h-100 mt-2 shadow-sm">
                    <h3 class="card-header text-center">REQUEST</h3>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="row gy-1 gx-1">
                            <!-- POPUP SPONSOR -->
                            <div class="col-12 col-lg-12">
                                <div class="card bg-warning w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">POPUP SPONSOR</h3>
                                        <h2 class="fw-bold">0</h2>

                                    </div>
                                </div>
                            </div>
                            <!-- POPUP -->
                            <div class="col-6 col-6 col-lg-6">
                                <div class="card bg-warning w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">POPUP SPONSOR</h3>
                                        <h2 class="fw-bold">0</h2>

                                    </div>
                                </div>
                            </div>
                            <!-- STREAMER -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-warning w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">STREAMER</h3>
                                        <h2 class="fw-bold">0</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        จำนวนครั้งที่นำขึ้นออกอากาศ
                    </div>
                </div>
            </div>
            <!-- SPECIAL EVENT -->
            <div class="col-12 col-sm12 col-md-6 col-lg-3 col-xl-3">
                <div class="card text-white bg-success h-100 mt-2 shadow-sm">
                    <h3 class="card-header text-center">SPECIAL EVENT</h3>
                    <div class="card-body">
                        <img src="./image/nutzNRT0.png" class="img-fluid spinNutz" alt="">
                    </div>
                </div>
            </div>

            <!-- PROBLEM -->
            <div class="col-12 col-sm12 col-md-12 col-lg-3 col-xl-3">
                <div class="card text-white bg-secondary h-100 mt-2 shadow-sm">
                    <h3 class="card-header text-center">PROBLEM</h3>
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="row gy-1 gx-1">
                            <!-- SUBTITLE -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-danger w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">SUBTITLE</h3>
                                        <h2 class="fw-bold">0</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- DUBBING -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-danger w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">DUBBING</h3>
                                        <h2 class="fw-bold">0</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- EQUIPMENT -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-danger w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">EQUIPMENT</h3>
                                        <h2 class="fw-bold">1</h2>
                                    </div>
                                </div>
                            </div>
                            <!-- CENSOR -->
                            <div class="col-6 col-lg-6">
                                <div class="card bg-danger w-100 h-100">
                                    <div class="card-body d-flex align-items-center justify-content-center flex-wrap">
                                        <h3 class="w-100 text-center">CENSOR</h3>
                                        <h2 class="fw-bold">0</h2>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-end">
                        จำนวนครั้งที่พบ
                    </div>
                </div>
            </div>
            <!-- PROBLEM DETAIL & CORRECTIVE -->
            <div class="col-12 col-sm12 col-md-12 col-lg-9 col-xl-9">
                <div class="card text-white bg-secondary h-100 mt-2 shadow-sm">
                    <h3 class="card-header text-start">PROBLEM DETAIL & CORRECTIVE</h3>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 text-dark">
                                <div class="card my-1 w-100">
                                    <div class="card-body">
                                        <i class="bi bi-clock-history"></i> เวลา 16.00-00.00 น.
                                    </div>
                                </div>
                                <div class="card my-1 w-100">
                                    <div class="card-body">
                                        <i class="bi bi-tv"></i> ถ่ายทอดสดรายการ WTA 500 BETT1 OPEN 2022 : DAY 4 MATCH
                                        1-4
                                    </div>
                                </div>
                                <div class="card my-1 w-100">
                                    <div class="card-body">
                                        <span class="badge bg-danger">ปัญหา</span>เวลา 19.10 น. ขณะ Manual ออกอากาศโฆษณา
                                        Code TVC202203088X1HD
                                        พบปัญหาสัญญาณภาพไม่เต็มจอลักษณะ Sync ไม่ Lock
                                        <br>
                                        <span class="badge bg-danger">สาเหตุ</span> Play Out Server Sync ไม่ Lock <br>
                                        <span class="badge bg-success">การแก้ไข</span> Engineer ทำการเปลี่ยนสาย
                                        Reference
                                        นำโฆษณาตัวดังกล่าวมาออกอากาศซ่อมเวลา 20.33 น.

                                    </div>
                                </div>

                                </p>
                            </div>
                            <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                                <div class="videoWrapper">
                                    <iframe width="560" height="315" class="rounded"
                                        src="https://www.youtube.com/embed/DlyG6MAKUOA?controls=0"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
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
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./custom/aos/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"
        integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

    <script>
    $('img').bind('contextmenu', function(e) {
        return false;
    });

    AOS.init({
        duration: 1200,
        once: true,
    });


    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    let height = screen.height;
    let width = screen.width;
    document.getElementById('screenHight').innerText = height;
    document.getElementById('screenWidth').innerText = width;
    </script>


</body>

</html>