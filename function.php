<?php
$totalNSA = 0;
$totalSA = 0;

function TotalSum($nsa, $sa)
{
    $GLOBALS['totalNSA'] = $GLOBALS['totalNSA'] + intval($nsa);
    $GLOBALS['totalSA'] = $GLOBALS['totalSA'] + intval($sa);
}

function incomeingStatusLeftOne($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage d-flex align-items-center">' . "\r\n";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" class="img-fluid my-1 mx-auto d-block" alt="SA">' . "\r\n";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        echo '<img src="./image/nutzNSA.png" class="img-fluid my-1 mx-auto d-block" alt="NSA">' . "\r\n";
        $statusReturn = '<span class="text-warning">NSA</span>';

    } else {

        echo '<img src="./image/nutzNormal.png" class="img-fluid my-1 mx-auto d-block" alt="NORMAL">' . "\r\n";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h3 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h3>' . "\r\n";
    echo '</div>' . "\r\n";
    TotalSum($nsa, $sa);

}

function incomeingStatusLeftTwo($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage d-flex align-items-center">' . "\r\n";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" class="img-fluid my-1 d-block" alt="SA">' . "\r\n";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        echo '<img src="./image/nutzNSA.png" class="img-fluid my-1 d-block" alt="NSA">' . "\r\n";
        $statusReturn = '<span class="text-warning">NSA</span>';

    } else {

        echo '<img src="./image/nutzNormal.png" class="img-fluid my-1  d-block" alt="NORMAL">' . "\r\n";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h3 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h3>' . "\r\n";
    echo '</div>' . "\r\n";
    TotalSum($nsa, $sa);

}

function incomeingStatusRightSide($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r\n";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" class="img-fluid my-1 imageN" alt="SA">' . "\r\n";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        echo '<img src="./image/nutzNSA.png" class="img-fluid my-1 imageN" alt="NSA">' . "\r\n";
        $statusReturn = '<span class="text-warning">NSA</span>';

    } else {

        echo '<img src="./image/nutzNormal.png" class="img-fluid my-1 imageN" alt="NORMAL">' . "\r\n";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h6 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h6>' . "\r\n";
    echo '</div>' . "\r\n";
    TotalSum($nsa, $sa);

}

function broadcastSystemStatus($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r\n";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" class="img-fluid my-1 imageN" alt="SA">' . "\r\n";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        echo '<img src="./image/nutzNSA.png" class="img-fluid my-1 imageN" alt="NSA">' . "\r\n";
        $statusReturn = '<span class="text-warning">NSA</span>';

    } else {

        echo '<img src="./image/nutzNormal.png" class="img-fluid my-1 imageN" alt="NORMAL">' . "\r\n";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<p class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></p>' . "\r\n";
    echo '</div>' . "\r\n";
    TotalSum($nsa, $sa);

}

function outgoingTop($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r\n";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" class="img-fluid mx-auto d-block mt-5 my-1 imageOutgoing">' . "\r\n";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        echo '<img src="./image/nutzNSA.png" class="img-fluid mx-auto d-block mt-5 my-1 imageOutgoing">' . "\r\n";
        $statusReturn = '<span class="text-warning">NSA</span>';

    } else {

        echo '<img src="./image/nutzNormal.png" class="img-fluid mx-auto d-block mt-5 my-1 imageOutgoing">' . "\r\n";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h5 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h5>' . "\r\n";
    echo '</div>' . "\r\n";
    TotalSum($nsa, $sa);

}

function outgoingBottom($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r\n";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" class="img-fluid mx-auto d-block my-1 imageOutgoing">' . "\r\n";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        echo '<img src="./image/nutzNSA.png" class="img-fluid mx-auto d-block my-1 imageOutgoing">' . "\r\n";
        $statusReturn = '<span class="text-warning">NSA</span>';

    } else {

        echo '<img src="./image/nutzNormal.png" class="img-fluid mx-auto d-block my-1 imageOutgoing">' . "\r\n";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h5 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h5>' . "\r\n";
    echo '</div>' . "\r\n";
    TotalSum($nsa, $sa);

}

function transmissionStatus($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r\n";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" class="img-fluid mx-auto d-block my-1 imageTranOut">' . "\r\n";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        echo '<img src="./image/nutzNSA.png" class="img-fluid mx-auto d-block my-1 imageTranOut">' . "\r\n";
        $statusReturn = '<span class="text-warning">NSA</span>';

    } else {

        echo '<img src="./image/nutzNormal.png" class="img-fluid mx-auto d-block my-1 imageTranOut">' . "\r\n";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h5 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h5>' . "\r\n";
    echo '</div>' . "\r\n";
    TotalSum($nsa, $sa);

}

function electricalStatus($status)
{
    if ($status == "NSA") {
        echo '<button type="button" class=" btn btn-danger w-100">Electrical</button>';
    } else if ($status == "SA") {
        echo '<button type="button" class=" btn btn-warning w-100">Electrical</button>';
    } else if ($status == "" or $status = "NORMAL") {
        echo '<button type="button" class=" btn btn-success w-100">Electrical</button>';
    }

}

function chillerStatus($status)
{
    if ($status == "NSA") {
        echo '<button type="button" class=" btn btn-danger w-100">Chiller</button>';
    } else if ($status == "SA") {
        echo '<button type="button" class=" btn btn-warning w-100">Chiller</button>';
    } else if ($status == "" or $status = "NORMAL") {
        echo '<button type="button" class=" btn btn-success w-100">Chiller</button>';
    }

}
