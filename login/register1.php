<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>

<body class="small-device">
    <!-- Left Panel -->

    <!-- Header-->

    <!-- <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-i[">
                        <div class="page-title">
                            <h1>ลงทะบียน</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <div class="sufee-login d-flex align-content-center flex-wrap">

        <div class="container">

            <h1 class="display-4 text-center mt-5 mb-4">ลงทะเบียน</h1>
            <div class="login-content">

                <div class="animated fadeIn">


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title">ข้อมูลส่วนตัว</strong>
                                </div>
                                <div class="card-body">
                                    <!-- Credit Card -->
                                    <div id="pay-invoice">
                                        <div class="card-body">
                                            <div class="card-title">

                                            </div>
                                            <hr>
                                            <form action="#" method="post" novalidate="novalidate">
                                                <div class="form-group text-center">

                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail4">Username</label>
                                                    <input type="Username" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="inputEmail4">Email Address</label>
                                                    <input type="Email Address" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputEmail4">Password</label>
                                                    <input type="Password" class="form-control" id="inputEmail4">
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="inputEmail4">Name</label>
                                                            <input type="Name" class="form-control" id="inputEmail4">
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <label for="inputEmail4">Surname</label>
                                                            <input type="" class="form-control" id="inputEmail4">
                                                        </div>
                                                    </div>
                                                </div>
                                                <select class="custom-select my-1 mr-sm-2"
                                                    id="inlineFormCustomSelectPref">
                                                    <option selected>Gender...</option>
                                                    <option value="1">Male</option>
                                                    <option value="2">Female</option>
                                                </select>

                                                <div>
                                                    <div class="row form-group">
                                                        <div class="input-group col-lg-12">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="fa fa-calendar mr-1"> </i>Birthday
                                                                </span>
                                                            </div>
                                                            <input type="date" id="input-date" name="date"
                                                                class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- .card -->

                        </div>
                        <!--/.col-->

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-header"><strong>ข้อมูลเกี่ยวกับการเงิน</strong></div>
                                <div class="card-body card-block">
                                    <div class="form-group"><label for="เงินเดือน"
                                            class=" form-control-label">เงินเดือน</label><input type="text"
                                            id="เงินเดือน" placeholder="THB" class="form-control"></div>
                                    <fieldset class="form-group">
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <legend class="col-form-label col-sm-4 pt-0">คุณมีหนี้สินไหม?</legend>
                                                <form class="form-inline">
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio1" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio1">มี</label>
                                            </div>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="customRadio2" name="customRadio"
                                                    class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio2">ไม่มี</label>
                                            </div>
                                </div>
                                <div class="row">
                                    <div class="card-body card-block">
                                        <form action="#" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="hf-email"
                                                        class=" form-control-label">เงินต้น</label></div>
                                                <div class="col-6 col-md-6"><input type="เงินต้น" id="hf-เงินต้น"
                                                        name="hf-email" class="form-control"></div>
                                                <div class="input-group-addon">THB</div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="hf-email"
                                                        class=" form-control-label">อัตราดอกเบี้ย</label></div>
                                                <div class="col-6 col-md-6"><input type="อัตราดอกเบี้ย"
                                                        id="hf-อัตราดอกเบี้ย" name="hf-อัตราดอกเบี้ย"
                                                        class="form-control"></div>
                                                <div class="input-group-addon">ต่อปี</div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="hf-email"
                                                        class=" form-control-label">ระยะเวลา</label></div>
                                                <div class="col-6 col-md-6"><input type="ระยะเวลา" id="hf-ระยะเวลา"
                                                        name="hf-ระยะเวลา" class="form-control"></div>
                                                <div class="input-group-addon">เดือน</div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3"><label for="hf-email"
                                                        class=" form-control-label">ผ่อนเดือนละ</label></div>
                                                <div class="col-6 col-md-6"><input type="ผ่อนเดือนละ"
                                                        id="hf-ผ่อนเดือนละ" name="hf-ผ่อนเดือนละ" class="form-control">
                                                </div>

                                            </div>

                                            <div>
                                                <button type="submit" class="btn btn-lg btn-info btn-block">
                                                    Register</i>&nbsp;
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>