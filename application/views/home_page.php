<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>GenWebApp - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="bs/css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bs/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<style type="text/css">
    
    .bs-calltoaction{
    position: relative;
    width:auto;
    padding: 15px 25px;
    border: 1px solid black;
    margin-top: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
}

    .bs-calltoaction > .row{
        display:table;
        width: calc(100% + 30px);
    }
     
        .bs-calltoaction > .row > [class^="col-"],
        .bs-calltoaction > .row > [class*=" col-"]{
            float:none;
            display:table-cell;
            vertical-align:middle;
        }

            .cta-contents{
                padding-top: 10px;
                padding-bottom: 10px;
            }

                .cta-title{
                    margin: 0 auto 15px;
                    padding: 0;
                }

                .cta-desc{
                    padding: 0;
                }

                .cta-desc p:last-child{
                    margin-bottom: 0;
                }

            .cta-button{
                padding-top: 10px;
                padding-bottom: 10px;
            }

@media (max-width: 991px){
    .bs-calltoaction > .row{
        display:block;
        width: auto;
    }

        .bs-calltoaction > .row > [class^="col-"],
        .bs-calltoaction > .row > [class*=" col-"]{
            float:none;
            display:block;
            vertical-align:middle;
            position: relative;
        }

        .cta-contents{
            text-align: center;
        }
}



.bs-calltoaction.bs-calltoaction-default{
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}

.bs-calltoaction.bs-calltoaction-primary{
    color: #fff;
    background-color: #337ab7;
    border-color: #2e6da4;
}

.bs-calltoaction.bs-calltoaction-info{
    color: #fff;
    background-color: #5bc0de;
    border-color: #46b8da;
}

.bs-calltoaction.bs-calltoaction-success{
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
}

.bs-calltoaction.bs-calltoaction-warning{
    color: #fff;
    background-color: #f0ad4e;
    border-color: #eea236;
}

.bs-calltoaction.bs-calltoaction-danger{
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
}

.bs-calltoaction.bs-calltoaction-primary .cta-button .btn,
.bs-calltoaction.bs-calltoaction-info .cta-button .btn,
.bs-calltoaction.bs-calltoaction-success .cta-button .btn,
.bs-calltoaction.bs-calltoaction-warning .cta-button .btn,
.bs-calltoaction.bs-calltoaction-danger .cta-button .btn{
    border-color:#fff;
}

</style>

<body>

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="home" onclick=$("#menu-close").click();>GenWebApp</a>
            </li>
            <li>
                <a href="#top" onclick=$("#menu-close").click();>Home</a>
            </li>
            <li>
                <a href="#about" onclick=$("#menu-close").click();>Introduction</a>
            </li>
            <li>
                <a href="#services" onclick=$("#menu-close").click();>Installing Tools</a>
            </li>
            <li>
                <a href="#Step" onclick=$("#menu-close").click();>CreateWebapplication</a>
            </li>
            <li>
                <a href="#portfolio" onclick=$("#menu-close").click();>Example WebApplication</a>
            </li>
            <li>
                <a href="#pe-test" onclick=$("#menu-close").click();>Pe-Test</a>
            </li>
            <li>
                <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>GenWebApp</h1>
            <h2>By codeIgniter Framework MVC &amp; Bootstrap3 Templates</h2>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">เริ่มกันเลย</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                     <h1>Introduction</h1>
                     <h2>ความรู้เบื้องต้นในการเขียน WebApplication</h2>   
                </div>
               
                <div class="col-lg-12 text-center">
                    <h3>WebApplication!</h3>
                    <p class="lead">WebApplication คือ การพัฒนาระบบงานบนเว็บ ซึ่งมีระบบมีการไหลเวียนในแบบ Online (ออนไลน์)  ออกไปยังเครือข่ายอินเตอร์เน็ต ทำให้เหมาะสำหรับงานที่ต้องการข้อมูลแบบ Real Time (เรียลไทม์)  <a target="_blank" href="https://goo.gl/qctmtU">Lean More</a>.</p>
                </div>
                <div class="col-lg-12 text-center">
                    <h3>MVC Frameworks!</h3>
                    <p class="lead">MVC Frameworks คือ  สถาปัตยกรรมซอฟต์แวร์ชนิดหนึ่ง ซึ่งปัจจุบันมี Frameworks สำหรับสร้าง Web จำนวนมาก แต่เกือบทั้งหมดมีโครงสร้างแบบ MVC ซึ่งแต่ละระบบจะถูกแบ่งส่วนออกเป็นสามส่วน คือ   1. Controller
  เป็นส่วนที่มีการประมวลผลหลัก ของโปรแกรม และติดต่อกับ Database(ฐานข้อมูล) ด้วย Model และแสดงผลข้อมูลผ่านทาง View    2.Model
ดูแลในเรื่องของการติดต่อสื่อสารระหว่าง Object และ Database โดยที่ผู้พัฒนาไม่ต้องยุ่งยากกับการใช้ SQL command 3. View เป็นส่วนที่ต้องแสดงผลผ่าน web browser <a target="_blank" href="https://goo.gl/tg8tXX">Lean More</a>.</p>
                </div>
                <div class="col-lg-12 text-center">
                    <h3>CodeIgniter!</h3>
                    <p class="lead">CodeIgniter คือ  framework ที่ถูกพัฒนาขึ้นด้วย ภาษา PHP สำหรับ CodeIgniter Framework เป็นเครื่องมือสำหรับช่วยพัฒนาเว็บไซต์และเว็บแอปผลิเคชั่น โดยมีโครงสร้างการพัฒนาโปรแกรมอย่างเป็นระบบและรวมคำสั่งต่างๆ ที่จำเป็นต่อการพัฒนาเว็บไซต์ด้วย PHP ใว้ภายใน CodeIgniter พัฒนาโดย Rick Ellis ซึ่งมีลิขสิทธิเป็น Open Source สามารถดาวน์โหลดและใช้ได้ฟรี ถูกพัฒนาขึ้นตั้งแต่ปี 2006 และยังมีการพัฒนามาเรื่อยๆ จนถึงปัจจุบัน <a target="_blank" href="http://www.codeigniter.in.th/">Lean More</a>.</p>
                    <a href="#services" class="btn btn-dark btn-lg">ขั้นตอนต่อไป</a>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->

    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2>Installing Tools</h2>
                    <h2>ติดตั้งเครื่องมือในการเขียน WebApplication</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-fire fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Step 1.Download CodeIgniter</strong>
                                </h4>
                                <p>คุณจะต้องดาวน์โหลด CodeIgniter เพื่อใช้ในการสร้างเว็บเบื้องต้น คลิกเพื่อดาวน์โหลด CodeIgniter-3.1.4 http://www.codeigniter.in.th</p>
                                <br>
                                <a href="https://goo.gl/vXNCkU" class="btn btn-light">Download</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-server fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Step 2.Download&Install XAMPP</strong>
                                </h4>
                                <p>คุณจะต้องดาวน์โหลด XAMPP และติดตั้ง XAMPP ลงบนเครื่องเพื่อจำลอง Server ในการรัน WebApplication เมื้อติดตั้ง XAMPP คุณจะได้ Apache และ phpMyadmin ด้วย .</p>
                                <a href="https://www.apachefriends.org/download.html" class="btn btn-light">Download</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-code fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Step 3.Download&Install Sublime Text</strong>
                                </h4>
                                <p>คุณจะต้องดาวน์โหลด Sublime Text และติดตั้ง Sublime Text ลงบนเครื่องเพื่อใช้ในการเขียนโค้ดที่ง่ายและสะดวกขึ้น.</p>
                                <br>
                                <a href="https://www.sublimetext.com/3" class="btn btn-light">Download</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-arrow-right fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Next Step</strong>
                                </h4>
                                <p>เมื่อคุณดาวน์โหลดและติดตั้งเครื่องมือเรียบร้อยแล้ว คุณสามารถเริ่มการสร้างเว็บแอพพลิเคชันได้.</p>
                                <br>
                                <br>
                                <br>
                                <a href="#portfolio" class="btn btn-light">Stat Create</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>



    <!-- Callout -->
    <aside class="callout">

        <div class="text-vertical-center">
            <div id="carousel-id" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                    <li data-target="#carousel-id" data-slide-to="3" class=""></li>

                </ol>
                <div class="carousel-inner">

                    <div class="item active">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/y5KHqaTzOdg" frameborder="0" allowfullscreen></iframe>
                        <div class="container">
                            <h1>Download CodeIgniter.</h1>
                        </div>
                    </div>
                    <div class="item ">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/8fE6pbZGNik" frameborder="0" allowfullscreen></iframe>
                        <div class="container">
                            <h1>แตกไฟล์ CodeIgniter.</h1>
                        </div>
                    </div>
                    <div class="item ">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/9otLJma0si4" frameborder="0" allowfullscreen></iframe>
                        <div class="container">                            
                                <h1>Download&Install Xampp.</h1>                               
                        </div>
                    </div>
                    <div class="item ">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/WR0q79Xdl_M" frameborder="0" allowfullscreen></iframe>
                        <div class="container">                            
                                <h1>Download&Install Sublime Text.</h1>                               
                        </div>
                    </div>

                </div>
                <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
        </div>
    </aside>


<section id="Step" class="Step " >

    <div class="bs-calltoaction bs-calltoaction-success">
        <div class="text-center">
            <h1>CreateWebapplication</h1>
        </div>
    </div>

<div class="container">
            <div class="col-sm-12">

                <div class="bs-calltoaction bs-calltoaction-default">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">Step1. Simple Run WebApplication</h1>
                            <div class="cta-desc">
                                <h3>1.Start Xampp การใช้งาน Xampp เพื่อใช้รัน WebApplication</h3>
                                <p>อันดับแรกให้คลิก XAMPP Control Panel ขึ้นมาแล้วคลิก Start->Apache และ Start->MySQL </p>
                                <h3>2.การนำไฟล์โปรเจคเข้าสู่ Server เพื่อรันโปรเจค</h3>
                                <p>ให้ Coppy ไฟล์ SimpleWebApp ที่เตรียมไว้ไปที่ C:\xampp\htdocs </p>
                                <h3>3.ทำการรันโปรเจค SimpleWebApp</h3>
                                <p>ให้เปิด Browser ขึ้นมาแล้วพิมพ์ที่อยู่โปรเจค <a href="http://localhost/SimpleWebApp" >http://localhost/SimpleWebApp</a> </p> 


                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a  class="btn btn-lg btn-block btn-default" data-toggle="modal" data-target="#myModal">View Video</a>



  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
            <div class="text-center">
                 <p>This is a large modal.</p>
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/y5KHqaTzOdg" frameborder="0" allowfullscreen></iframe>
                
            </div>
         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-primary">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">Step2. Create Controller and Veiw</h1>
                            <div class="cta-desc">
                                <h3>1.Start Sublime Text เพื่อเปิดไฟล์โปรเจค</h3>
                                <p>ให้คลิก File -> OpenFolder แล้วเลือกที่อยู่ของโปรเจค C:\xampp\htdocs\SimpleWebApp</p>
                                <h3>2.สร้าง Controller เพื่อเรียกหน้า View มาแสดง</h3>
                                <p>ให้คลิก File -> Newfile หรือ Ctrl+N  แล้วคลิก File -> Save As หรือ Ctrl+Shift+S ตั้งชื่อไฟล์ Test_Contorller.php เลือกที่อยู่ไฟล์ C:\xampp\htdocs\SimpleWebApp\controllers แล้วคลิก Save</p>
                                <h3>3.พิมพ์ Code ในการทำงานของ Controller</h3>
                                    <img src="bs/img/controller.jpg" class="img-responsive" alt="Image">
                                    <h4>อธิบายโค้ด</h4>
                                    <p>บรรทัดที่ 1 ทำการเปิดโค้ด php เพื่อให้คำสั่งทำงาน</p>
                                    <p>บรรทัดที่ 4 สร้าง Class Test_Contorller และเรียกใช้คุณสมบัติ Contorller (ชื่อ Class ต้องตรงกับชื่อไฟล์)</p>
                                    <p>บรรทัดที่ 7 สร้าง function index เพื่อเรียกใช้ View </p>
                                    <p>บรรทัดที่ 9 เป็นการเรียกใช้หน้า View ที่ชื่อว่า Hello มาแสดง </p>
                                <h3>4. สร้างหน้า View เพื่อใช้ในการแสดงหน้าเว็บ</h3>
                                <p>ให้คลิก File -> Newfile หรือ Ctrl+N  แล้วคลิก File -> Save As หรือ Ctrl+Shift+S ตั้งชื่อไฟล์ Hello.php เลือกที่อยู่ไฟล์ C:\xampp\htdocs\SimpleWebApp\views แล้วคลิก Save</p>
                                <h3>3.พิมพ์ Code ในการทำงานของหน้า View</h3>
                                <img src="bs/img/controller.jpg" class="img-responsive" alt="Image">
                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="#" class="btn btn-lg btn-block btn-primary">Go for It!</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-info">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">Its a Call To Action</h1>
                            <div class="cta-desc">
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="#" class="btn btn-lg btn-block btn-info">Go for It!</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-success">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">Its a Call To Action</h1>
                            <div class="cta-desc">
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="#" class="btn btn-lg btn-block btn-success">Go for It!</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-warning">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">Its a Call To Action</h1>
                            <div class="cta-desc">
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="#" class="btn btn-lg btn-block btn-warning">Go for It!</a>
                        </div>
                     </div>
                </div>

                <div class="bs-calltoaction bs-calltoaction-danger">
                    <div class="row">
                        <div class="col-md-9 cta-contents">
                            <h1 class="cta-title">Its a Call To Action</h1>
                            <div class="cta-desc">
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                                <p>Describe the action here.</p>
                            </div>
                        </div>
                        <div class="col-md-3 cta-button">
                            <a href="#" class="btn btn-lg btn-block btn-danger">Go for It!</a>
                        </div>
                     </div>
                </div>

            </div>
        </div>
    
</section>



  



    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h1>Example WebApplication</h1>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="Step">
                                    <h4>Simple Run WebApplication</h4>
                                    <img class="img-portfolio img-responsive" src="bs/img/portfolio-1.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <h4>Simple Run WebApplication</h4>
                                    <img class="img-portfolio img-responsive" src="bs/img/portfolio-2.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <h4>Simple Run WebApplication</h4>
                                    <img class="img-portfolio img-responsive" src="bs/img/portfolio-3.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">
                                    <h4>Simple Run WebApplication</h4>
                                    <img class="img-portfolio img-responsive" src="bs/img/portfolio-4.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <section id="pe-test">
        
    
    <!-- Call to Action -->
    <aside class="call-to-action bg-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Pe-Test</h1>
                    <h3>แบบทดสอบเพื่อตรวจสอบว่าคุณเข้าใจในบทเรียนหรือไม่</h3>
                    <a href="#" class="btn btn-lg btn-light">ทำแบบทดสอบ</a>
                    <a href="#contact" class="btn btn-lg btn-dark">ข้ามแบบทดสอบ</a>
                </div>
            </div>
        </div>
    </aside>

    </section>




    <!-- Map -->
    <section id="contact" class="responsive">
            <div class="container">
                <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Northbankkok University</strong>
                    </h4>
                    <p>6/999 ซ.พหลโยธิน 52 ถ.พหลโยธิน
                        <br>เขตสายไหม กรุงเทพมหานคร 10220</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> 0-2972-7200</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="https://www.northbkk.ac.th"> www.northbkk.ac.th</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="https://www.facebook.com/herosib"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/@northbkk_"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://www.northbkk.ac.th"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    
                </div>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4605.867670247457!2d100.61520428037487!3d13.8955032788903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeefe9b5160df7293!2sNorth+Bangkok+University!5e0!3m2!1sen!2sth!4v1491490749094" width="1150" height="720" frameborder="0" style="border:0" allowfullscreen>
                
            </iframe> 

            </div>          
                      
                       
        
    </section>

    <!-- Footer -->
    <footer class="bg-success">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Start Bootstrap</strong>
                    </h4>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

    <!-- jQuery -->
    <script src="bs/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bs/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    //#to-top button appears after scrolling
    var fixed = false;
    $(document).scroll(function() {
        if ($(this).scrollTop() > 250) {
            if (!fixed) {
                fixed = true;
                // $('#to-top').css({position:'fixed', display:'block'});
                $('#to-top').show("slow", function() {
                    $('#to-top').css({
                        position: 'fixed',
                        display: 'block'
                    });
                });
            }
        } else {
            if (fixed) {
                fixed = false;
                $('#to-top').hide("slow", function() {
                    $('#to-top').css({
                        display: 'none'
                    });
                });
            }
        }
    });
    // Disable Google Maps scrolling
    // See http://stackoverflow.com/a/25904582/1607849
    // Disable scroll zooming and bind back the click event
    var onMapMouseleaveHandler = function(event) {
        var that = $(this);
        that.on('click', onMapClickHandler);
        that.off('mouseleave', onMapMouseleaveHandler);
        that.find('iframe').css("pointer-events", "none");
    }
    var onMapClickHandler = function(event) {
            var that = $(this);
            // Disable the click handler until the user leaves the map area
            that.off('click', onMapClickHandler);
            // Enable scrolling zoom
            that.find('iframe').css("pointer-events", "auto");
            // Handle the mouse leave event
            that.on('mouseleave', onMapMouseleaveHandler);
        }
        // Enable map zooming with mouse scroll when the user clicks the map
    $('.map').on('click', onMapClickHandler);
    </script>

</body>

</html>
