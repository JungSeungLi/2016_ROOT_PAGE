<?php session_start();
include ("sqlconn.php");
$student_id=$_SESSION['student_id'];
$sql="select * from user_imp where student_id='$student_id'";
$stmt=$pdo->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll();
foreach($result as $r)
$score=$r['score'];
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<?php 
    include("head.html"); 
?>
      <?php include("header.php");
      
    ?>
</head>
<body>
    <!-- Navigation -->
    
    <!--End Navigation -->

  
    <!--Header section  -->
    <div id="home">
       <div id="mainbgcolor_width">
        <div class="container">
            <div class="row ">
                <div class="col-md-9 col-sm-9">
                    <h1 class="head-main">We Are Root</h1>
                    <span class="head-sub-main">Digital Technology</span>
                    <div class="head-last">

                        Welcome to Seoul Digitech High School<br>
				<h5><a href="https://drive.google.com/open?id=0B6v9J0XY-t-hRkRLdl9JMUNycWs"><button>보고서 다운로드</button></a></h5>
                    </div>
                </div>
                   <div class="col-md-3 col-sm-3">
                       <div class="div-trans text-center">
                           <?php

                           if(isset($_SESSION['email']))
                   { 
                        ?> 

                           <h4><?php print $_SESSION['name']; ?>님</h4>
                           <h3>환영합니다</h3><br>
                           <h6>내 점수 : <?php print $score; ?></h6><br>
                                <div class="col-md-12 col-sm-12">
                                   <form action="logout.php">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success">Logout</button>
                                    </div>
                                    </form>
                                </div>

                           <?php }
                   else
                   {?> 
                            <h3>Sign in to Root</h3>
                                <form action="login.php" method="post" name="addjoin">

                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" required="required" placeholder="Email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <input type="password" class="form-control" required="required" placeholder="PW" name="passwd">
                                        </div>
                                    </div>


                                    <div class="col-md-12 col-sm-12">

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success">Sign in</button>
                                        </div>
                                    </div>

                                    <div>
                                        <p>Join to Root? <a href="signup_page.php">Sign up for Root</a> </p>
                                    </div>

                                </form>
                  <?php }

                           ?>

                       </div>
                </div>

            </div>
        </div>
        </div>
    </div>
    <!--End Header section  -->
    <!--Services Section-->
    <section  id="services">
        <div class="container">
          
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>TRACK</h2>
                   
                </div>

            </div>

            <div class="row text-center space-pad">
                <div class="col-md-3 col-sm-3">

                    <div >

                        <i class="fa fa-camera fa-4x main-color"></i>


                        <h3>Reversing </h3>
                        <p>
                            소프트웨어 시스템의 구성요소를 알아 내고, 구성요소들 간의 관계를 식별하며, 대상(object) 시스템을 분석하는 과정이다.
                        </p>

                    </div>

                </div>
                <div class="col-md-3 col-sm-3">

                    <div >

                        <i class="fa fa-briefcase fa-4x main-color"></i>


                        <h3>Forensic </h3>
                        <p>
                            사이버 포렌식이란 컴퓨터 공학 지식을 기반으로 범죄에 사용되거나 현장에 있는 디지털 기기에서 범죄자 혹은 범죄에 대한 단서 혹은 증거를 수집하는 절차를 말한다.
                        </p>

                    </div>

                </div>
                <div class="col-md-3 col-sm-3">

                    <div >

                        <i class="fa fa-desktop fa-4x main-color"></i>


                        <h3>Programming </h3>
                        <p>
                            프로그래밍 혹은 코딩은 하나 이상의 관련된 추상 알고리즘을 특정한 프로그래밍 언어를 이용해 구체적인 컴퓨터 프로그램으로 구현하는 기술을 말한다.
                        </p>

                    </div>

                </div>
                <div class="col-md-3 col-sm-3">

                    <div>

                        <i class="fa fa-folder fa-4x main-color"></i>


                        <h3>Web  </h3>
                        <p>
                            Web Service의 전반적인 구성요소와 동작방법에 대해 학습하고 연관된 타 서비스의 취약점 분석 혹은 침투테스트를 하는 분야이다.
                        </p>

                    </div>

                </div>
            </div>
            <div class="row ">
                <div class="col-md-6 col-sm-6">
                    <h3>ROOT Introduce</h3>
                    <p>
                        안녕하세요 저희 동아리는 다양한 정보통신 분야 중에서도<br>
                        해킹보안을 공부하고자 하는 학생들이 모여 활동하는 동아리<br>
                        입니다. 저희 동아리 세부 전공은 웹, 리버싱, 포렌식, 프로그래밍<br>
                    총4개의 트랙으로 나누어지며 각각 선택한 분야를 집중적으로 공부<br>
                       하고 있습니다. 

                        
                    </p>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-default">
                     
                        <div class="panel-body">
                            <ul class="nav nav-pills" style="background-color: #ECECEC;">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Reversing</a>
                                </li>
                                <li class=""><a href="#profile-pills" data-toggle="tab">Forensic</a>
                                </li>
                                <li class=""><a href="#messages-pills" data-toggle="tab">Programming</a>
                                </li>
                                <li class=""><a href="#settings-pills" data-toggle="tab">Web</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane fade  active in" id="home-pills">
                                    <h4>Reversing</h4>
                                    <p>Assembly<br>OllyDBG<br>IDA</p>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Forensic </h4>
                                   <p> FTK Imager<br>WIRESHARK<br>Encase Imager</p>

                                </div>
                                <div class="tab-pane fade" id="messages-pills">
                                    <h4>Programming</h4>
                                     <p> C/C++<br>
                                      Python<br>
                                      Algorithm</p>
                                </div>
                                <div class="tab-pane fade" id="settings-pills">
                                    <h4>Web</h4>
                                    <p>DataBase<br> XSS/Injection<br>Operating System</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>


    </section>
     <!--End Services Section-->
    <!--parallax one-->
    <section  id="Parallax-one">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h2><i class="fa fa-desktop fa-3x"></i>     Program_by_Root
                    </h2>
                    <h3 style="text-align:left;">
                        <strong style ="font-size:1.3em">
                            가사파인더_제작자_황주현
                        </strong>
                        <p>
                            설명 : 가사를 이용하여 노래의 정보를 검색 할 수 있다.
                        </p>
                        <p>
                            YellowId = @가사파인더
                        </p>
                        <p>
                            <a href="http://plus.kakao.com/home/nd2s4g9f" target="_blank">http://plus.kakao.com/home/nd2s4g9f</a>
                        </p>
                    </h3>
                    <h3 style="text-align:left;">
                        <strong style ="font-size:1.3em">
                            서울디지텍고급식알리미_제작자_황주현
                        </strong>
                        <p>
                            설명 : 서울디지텍고등학교의 오늘과 내일 급식을 알 수 있다.
                        </p>
                        <p>
                            YellowId = @서울디지텍고급식알리미
                        </p>
                        <p>
                            <a href="http://plus.kakao.com/home/nnmyq78p" target="_blank">http://plus.kakao.com/home/nnmyq78p</a>
                        </p>
                    </h3>
            </div>
        </div>
    </section>
    <!--./parallax one-->
        <!-- Pricing Section -->
    <section  id="price-sec">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h2>2016 ChairMan</h2>
                    <h2>
                        <strong>
                            황주현
                        </strong>
                    </h2>
                </div>

            </div>
            
            <div class="row text-center">

                <div class="col-md-12 ">
                   
                    <div class="col-md-3 col-sm-6">
                        <ul class="plan ">
                            <li class="plan-head">2012</li>
                            <li class="main-price"><strong>이지운</strong>
                            <li><strong>해킹보안(ROOT) </strong>동아리 창설</li>
                            <li><strong>HolyShield </strong>120여팀 中 21위</li>
                            <li><strong>Codegate  </strong>Conference 참여</li>
                           
                        </ul>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <ul class="plan ">
                            <li class="plan-head">2013</li>
                            <li class="main-price"><strong>이지운</strong></li>
                            <li><strong>NewHeart </strong>166명中 3명 상위권</li>
                            <li><strong>WhiteHatContest </strong>1명 본선</li>
                            <li><strong>해킹보안전문가 </strong>예비학교 주최</li>
                       
                        </ul>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <ul class="plan ">
                            <li class="plan-head">2014</li>
                            <li class="main-price"><strong>김성현</strong></li>
                            <li><strong>Defcon </strong>참여</li>
                            <li><strong>Codegate </strong>참여</li>
                           <li><strong>해킹보안전문가 </strong>예비학교 주최</li>
                        
                        </ul>
                    </div>
                    
                    <div class="col-md-3 col-sm-6">
                        <ul class="plan ">
                            <li class="plan-head">2015</li>
                            <li class="main-price"><strong>이지훈</strong></li>
                            <li><strong>HDCON </strong>참여</li>
                            <li><strong>교내 해킹대회 </strong>주최</li>
                            <li><strong>해킹보안전문가 </strong>예비학교 주최</li>
                           
                        </ul>
                    </div>


                </div>
            </div>


        </div>
    </section>
    <section  id="Parallax-one">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2 ">
                    <h2><i class="fa fa-desktop fa-3x"></i> 해킹 맛보기 영상</h2>
                    <h3 style = "text-align:left;">
                        <p>
                            동아리 홍보(Don't Blink)
                        </p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/A23OhD61pgA" frameborder="0" allowfullscreen></iframe><br>
                        <p>
                            웹해킹 맛보기(Basic WebHacking)
                        </p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/bve7cNVigK4" frameborder="0" allowfullscreen></iframe><br>
                        <p>
                            시스템해킹 맛보기(Basic SystemHacking)
                        </p>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/g6z-YS2DxMY" frameborder="0" allowfullscreen></iframe><br>
                        <p>
                            리눅스해킹 맛보기(Basic Pwnable)
                        </p>
                        <p>
                            준비중
                        </p><br>
                    </h3>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing Section -->
    <!--parallax two-->
    <section  id="Parallax-two">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.1360044299172!2d126.98954604078769!3d37.53901529447667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca24eb4678a9f%3A0xb36c6648c406537f!2z7ISc7Jq465SU7KeA7YWN6rOg65Ox7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1475256851951" width=100% height=400px frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
    <!--./parallax two-->
    

    <!-- Contact Section -->
    <section  id="contact-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="social-icon">
                          <strong> Address:</strong> 서울특별시 용산구 이태원동 회나무로12길 27
                        <a href="https://www.facebook.com/sdhsroot/"><i class="fa fa-facebook fa-2x"></i></a>
                        <a href="https://twitter.com/SDHS_ROOT"><i class="fa fa-twitter fa-2x"></i></a>
                        <a href="https://plus.google.com/u/0/113239232273926400982"><i class="fa fa-google-plus fa-2x"></i></a>
                    </div>
                </div>
                

            </div>
        </div>
    </section>

    <!--End Contact Section -->
    <!--footer Section -->

    <div class="for-full-back " id="footer">
 	<div>
        본 홈페이지 공격시 정보통신망 이용촉진 및 정보보호 등에 관한 법률에 의거하여 민형사상 책임을 물수있습니다
    </div>
        @2016 SDHS ROOT || CALL 010-5322-1701
         
    </div>
    <!--End footer Section -->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP CORE SCRIPT   -->
    <script src="assets/plugins/bootstrap.js"></script>
    <!-- PARALLAX SCRIPT   -->
    <script src="assets/plugins/4jquery.parallax-1.1.3.js"></script>
    <!-- CUSTOM SCRIPT   -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
