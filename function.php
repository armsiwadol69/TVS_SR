<?php
$totalNSA = 0;
$totalSA = 0;

function TotalSum($nsa,$sa){
    $GLOBALS['totalNSA'] =  $GLOBALS['totalNSA'] + intval($nsa);
    $GLOBALS['totalSA'] =  $GLOBALS['totalSA'] + intval($sa);
}


function incomeingStatusLeftOne($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" draggable="false" class="img-fluid my-1 mx-auto d-block mt-5 " alt="SA">' . "\r";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        
        echo '<img src="./image/nutzNSA.png" draggable="false" class="img-fluid my-1 mx-auto d-block mt-5 " alt="NSA">' . "\r";
        $statusReturn = '<span class="text-warning">NSA</span>';


    } else {

        echo '<img src="./image/nutzNormal.png" draggable="false" class="img-fluid my-1 mx-auto d-block mt-5 " alt="NORMAL">' . "\r";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h3 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h3>' . "\r";
    echo '</div>' . "\r";
    TotalSum($nsa,$sa);

}

function incomeingStatusLeftTwo($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" draggable="false" class="img-fluid my-1 d-block" alt="SA">' . "\r";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        
        echo '<img src="./image/nutzNSA.png" draggable="false" class="img-fluid my-1 d-block" alt="NSA">' . "\r";
        $statusReturn = '<span class="text-warning">NSA</span>';


    } else {

        echo '<img src="./image/nutzNormal.png" draggable="false" class="img-fluid my-1  d-block" alt="NORMAL">' . "\r";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h3 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h3>' . "\r";
    echo '</div>' . "\r";
    TotalSum($nsa,$sa);

}

function incomeingStatusRightSide($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" draggable="false" class="img-fluid my-1 imageN" alt="SA">' . "\r";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        
        echo '<img src="./image/nutzNSA.png" draggable="false" class="img-fluid my-1 imageN" alt="NSA">' . "\r";
        $statusReturn = '<span class="text-warning">NSA</span>';


    } else {

        echo '<img src="./image/nutzNormal.png" draggable="false" class="img-fluid my-1 imageN" alt="NORMAL">' . "\r";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h6 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h6>' . "\r";
    echo '</div>' . "\r";
    TotalSum($nsa,$sa);

}

function broadcastSystemStatus($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" draggable="false" class="img-fluid my-1 imageN" alt="SA">' . "\r";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        
        echo '<img src="./image/nutzNSA.png" draggable="false" class="img-fluid my-1 imageN" alt="NSA">' . "\r";
        $statusReturn = '<span class="text-warning">NSA</span>';


    } else {

        echo '<img src="./image/nutzNormal.png" draggable="false" class="img-fluid my-1 imageN" alt="NORMAL">' . "\r";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<p class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></p>' . "\r";
    echo '</div>' . "\r";
    TotalSum($nsa,$sa);

}

function outgoingTop($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" draggable="false" class="img-fluid mx-auto d-block mt-5 my-1 imageOutgoing">' . "\r";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        
        echo '<img src="./image/nutzNSA.png" draggable="false" class="img-fluid mx-auto d-block mt-5 my-1 imageOutgoing">' . "\r";
        $statusReturn = '<span class="text-warning">NSA</span>';


    } else {

        echo '<img src="./image/nutzNormal.png" draggable="false" class="img-fluid mx-auto d-block mt-5 my-1 imageOutgoing">' . "\r";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h5 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h5>' . "\r";
    echo '</div>' . "\r";
    TotalSum($nsa,$sa);

}

function outgoingBottom($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" draggable="false" class="img-fluid mx-auto d-block my-1 imageOutgoing">' . "\r";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        
        echo '<img src="./image/nutzNSA.png" draggable="false" class="img-fluid mx-auto d-block my-1 imageOutgoing">' . "\r";
        $statusReturn = '<span class="text-warning">NSA</span>';


    } else {

        echo '<img src="./image/nutzNormal.png" draggable="false" class="img-fluid mx-auto d-block my-1 imageOutgoing">' . "\r";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h5 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h5>' . "\r";
    echo '</div>' . "\r";
    TotalSum($nsa,$sa);

}

function transmissionStatus($serviceName, $nsa, $sa)
{
    echo '<div class="containerImage">' . "\r";
    if (!$sa == "0") {

        echo '<img src="./image/nutzSA.png" draggable="false" class="img-fluid mx-auto d-block my-1 imageTranOut">' . "\r";
        $statusReturn = '<span class="text-danger">SA</span>';

    } else if (!$nsa == "0") {

        
        echo '<img src="./image/nutzNSA.png" draggable="false" class="img-fluid mx-auto d-block my-1 imageTranOut">' . "\r";
        $statusReturn = '<span class="text-warning">NSA</span>';


    } else {

        echo '<img src="./image/nutzNormal.png" draggable="false" class="img-fluid mx-auto d-block my-1 imageTranOut">' . "\r";
        $statusReturn = '<span class="text-info">NORMAL</span>';

    }
    echo '<h5 class="centeredTextIMG text-white">' . $serviceName . '<br>' . $statusReturn . '<br><span class="text-warning">' . $nsa . '</span> | <span class="text-danger">' . $sa . '</span></h5>' . "\r";
    echo '</div>' . "\r";
    TotalSum($nsa,$sa);

}



?>
