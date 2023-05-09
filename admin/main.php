<?php
    session_start();
    include('./conn/conn.php');

    $admin_id = $_SESSION['idd'];

    if($admin_id == ''){
        echo "<script>location.replace('./index.html');</script>";
    }

    $sql1 = 'select count(*) as totuser from Data_Users';
    $res1 = mysqli_query($mysqli,$sql1);
    $row1 = mysqli_fetch_array($res1);

    $sql2 = 'SELECT count(*) as todayuser FROM `Data_Users` WHERE DATE_FORMAT(S_time, "%Y-%m-%d") = curdate()';
    $res2 = mysqli_query($mysqli,$sql2);
    $row2 = mysqli_fetch_array($res2);

    $sql5 = "SELECT * from Data_Users order by idx desc";
    $res5 = mysqli_query($mysqli, $sql5);

    $totuser = $row1['totuser'];
    $todayuser = $row2['todayuser'];


?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>관리자 - Dashboard</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v3.0.6/css/line.css'>
    <link rel="stylesheet" href="css/admin_main_style.css">
</head>
<body>

<aside class="sidebar position-fixed top-0 left-0 overflow-auto h-100 float-left" id="show-side-navigation1">
    <i class="uil-bars close-aside d-md-none d-lg-none" data-close="show-side-navigation1"></i>
    <div class="sidebar-header d-flex justify-content-center align-items-center px-3 py-4">
        <div class="ms-2">
        </div>
    </div>

    <div class="search position-relative text-center px-4 py-3 mt-2">
        <i class="fa fa-search position-absolute d-block fs-6"></i>
    </div>

    <ul class="categories list-unstyled">
        <li>
            <a href="#"><i class="uil-estate fa-fw"></i> 대시보드</a>
        </li>s
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel()"> (1~80) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel2()"> (81~160) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel3()"> (161~240) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel4()"> (241~320) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel5()"> (321~400) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel6()"> (401~480) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel7()"> (481~560) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel8()"> (561~640) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenMainExcel9()"> (641~720) 다운로드</a>
        </li>
        <li class="has-dropdown_1">
            <i class="uil-bag"></i><a href="javascript:OpenPostExel()"> Post-Test 다운로드</a>
        </li>
    </ul>
</aside>
<script>
    function OpenPostExel(){
        window.open('./PostExel.php', '_blank');
    }
    function OpenMainExcel(){
        window.open('./MainExcel.php', '_blank');
    }
    function OpenMainExcel2(){
        window.open('./MainExcel2.php', '_blank');
    }
    function OpenMainExcel3(){
        window.open('./MainExcel3.php', '_blank');
    }
    function OpenMainExcel4(){
        window.open('./MainExcel4.php', '_blank');
    }
    function OpenMainExcel5(){
        window.open('./MainExcel5.php', '_blank');
    }
    function OpenMainExcel6(){
        window.open('./MainExcel6.php', '_blank');
    }
    function OpenMainExcel7(){
        window.open('./MainExcel7.php', '_blank');
    }
    function OpenMainExcel8(){
        window.open('./MainExcel8.php', '_blank');
    }
    function OpenMainExcel9(){
        window.open('./MainExcel9.php', '_blank');
    }
</script>
<section id="wrapper">
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid mx-2">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggle-navbar" aria-controls="toggle-navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="uil-bars text-white"></i>
                </button>
                <a class="navbar-brand" href="#">Admin<span class="main-color">Page</span></a>
            </div>
            <div class="collapse navbar-collapse" id="toggle-navbar">
                <ul class="navbar-nav ms-auto">
                </ul>
            </div>
        </div>
    </nav>

    <div class="p-4">
        <div class="welcome">
            <div class="content rounded-3 p-3">
                <h1 class="fs-3">Admin Dashboard</h1>
                <p class="mb-0">안녕하세요 관리자 페이지에 오신 것을 환영합니다.</p>
            </div>
        </div>

        <section class="statistics mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                        <i class="uil-envelope-shield fs-2 text-center bg-primary rounded-circle"></i>
                        <div class="ms-3">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0"><?php echo $totuser; ?></h3> <span class="d-block ms-2">명</span>
                            </div>
                            <p class="fs-normal mb-0">전체 참여자 수</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box d-flex rounded-2 align-items-center mb-4 mb-lg-0 p-3">
                        <i class="uil-file fs-2 text-center bg-danger rounded-circle"></i>
                        <div class="ms-3">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0"> 0 </h3> <span class="d-block ms-2">명</span>
                            </div>
                            <p class="fs-normal mb-0">진행 완료 참여자</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="box d-flex rounded-2 align-items-center p-3">
                        <i class="uil-users-alt fs-2 text-center bg-success rounded-circle"></i>
                        <div class="ms-3">
                            <div class="d-flex align-items-center">
                                <h3 class="mb-0"><?php echo $todayuser; ?></h3> <span class="d-block ms-2">명</span>
                            </div>
                            <p class="fs-normal mb-0">오늘 참여자</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="statis mt-4 text-center">
            <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0">
                    <div class="box bg-primary p-3">
                        <i class="uil-eye"></i>
                        <h3> 720 문제</h3>
                        <p class="lead">전체 문제 수</p>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-lg-0">
                    <div class="box bg-danger p-3">
                        <i class="uil-user"></i>
                        <h3>1 명</h3>
                        <p class="lead">미완료 참여자 수</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="admins mt-4">
            <div class="row">
                <div class="col-md-6" style="width: 100%">
                    <div class="box">
                        <?php
                        while($row = mysqli_fetch_array($res5)){
                            $uuid = $row['uid'];
                            $reg_date = $row['S_time'];
                            $proceed = $row['Proceed'];
                            if($proceed == 721){
                                $proceed = 720;
                            }
                            ?>
                            <a href="#" style="text-decoration: none">
                                <div class="admin d-flex align-items-center rounded-2 p-3 mb-4">
                                    <div class="img">
                                        <img class="img-fluid rounded-pill"
                                             width="75" height="75"
                                             src="./img/user_noimg.png"
                                             alt="admin">
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="fs-5 mb-1">유저 식별 아이디 : <?php echo $uuid; ?></h3>
                                        <p class="mb-0">참여일자 : <?php echo $reg_date;?></p>
                                        <p class="mb-0">최종 진행 문제 번호 : <?php echo $proceed;?></p>
                                    </div>
                                </div>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js'></script>

</body>
</html>

