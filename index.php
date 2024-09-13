<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <script src="views/js/jquery-3.1.1.min.js"></script>
    <link href="views/css/bootstrap.min.css" rel="stylesheet">
    <link href="views/wow/animate.min.css" rel="stylesheet">
    <script src="views/js/bootstrap.min.js"></script>
    <script src="views/wow/wow.min.js"></script>
    <link href="views/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
</head>

<body>
    <?php
    $checkdatebirth = "";
    if (isset($_COOKIE['checkdatebirth'])) {
        $checkdatebirth = $_COOKIE['checkdatebirth'];
    } ?>
    <section id="zero" class="wow fadeIn" style="<?php if ($checkdatebirth == "yes") { ?> display:none <?php } ?>">
        <div class="container">
            <div class="row justify-content-center align-items-center wow fadeIn" style="gap: 5px">
                <div class="col-12">
                    <h5 class="text-center">Hãy nhập ngày sinh đi nè</h5>
                </div>
                <span>
                    <select class="form-control" name="day">
                        <?php $i = 1;
                        while ($i <= 31) { ?>
                            <option value="<?= $i ?>">Ngày <?= $i ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                </span>
                <span>
                    <select class="form-control" name="month">
                        <?php $i = 1;
                        while ($i <= 12) { ?>

                            <option value="<?= $i ?>">Tháng <?= $i ?></option>
                        <?php $i++;
                        } ?>
                    </select>
                </span>
                <span><input class="form-control" name="year" placeholder="Năm sinh"></span>
                <span><button id="submit-datebirth" class="btn btn-danger">Tiếp tục nào <i class="far fa-hand-point-right"></i></button></span>
            </div>
        </div>

    </section>
    <section id="one" style="<?php if ($checkdatebirth == "yes") { ?>display: block <?php } ?>">
        <div class="center-box">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-md-4 text-right">
                        <img src="views/img/heart1.png">
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex flex-md-column justify-content-center align-items-center">
                            <span class="title1">Những tâm tình của anh ở đây nè</span>
                            <span class="arrow"><img src="views/img/up-arrow.png"></span>
                            <div class="wrapper envelope-box">
                                <div class="lid one"></div>
                                <div class="lid two"></div>
                                <div class="envelope"></div>
                                <div class="letter">
                                    <p>Gửi người<br> anh yêu</p>
                                    <!-- gửi người anh yêu-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="views/img/heart2.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="two">
        <div class="container">

        </div>
    </section>
    <?php include "modal.php" ?>
</body>

<link href="views/css/style.css" rel="stylesheet">
<script src="views/js/script.js"></script>

</html>