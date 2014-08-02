<html>
<!--                      test update                 -->
   <head>

       <!-- Important Owl stylesheet -->
<!--       <link rel="stylesheet" href="--><?//=get_template_directory_uri()?><!--/owl-carousel/owl.carousel.css">-->

       <!-- Default Theme -->
<!--       <link rel="stylesheet" href="--><?//=get_template_directory_uri()?><!--/owl-carousel/owl.theme.css">-->
       <style>
           *{
               margin: 0;
               padding: 0;
           }
           body {
               background-color: #f2f2f2;
               font-size: 13px;
               font-family: 'Open Sans', sans-serif;
           }
           div{
               display: block;
           }
           nav{
               display: block;
           }
           .main{
              /*height:  auto !important;*/
              position: relative;
           }
           .head-nav{
               background-color: #000000;
               width: 100%;
               height:83px;
               z-index: 1000;
               top:0px;
               margin-left: 0px;
               left: 0px;
               position: fixed;
           }
           .head-nav .title {
               float: left;
               width: 364px;
               margin-left:128px;
               margin-top: 20px;
           }
           .head-nav nav {
               margin-left: 478px;
           }
           .head-nav nav ul{
               margin-top: 30px;
           }
           .head-nav nav ul li {
               float: left;
               color: #ffffff;
               display: block;
               margin: 0px 0px 0px 73px;
               height:80px ;

           }
           .head-nav nav a:hover{
               color: #78c7ee;
           }
           .head-nav nav li a{
               color: #ffffff;
               text-decoration: none;
               font-family:  'Autour One', cursive;
               font-size: 15px;
           }
           .head-nav nav li ul{
               display: none;
           }
           .head-nav nav ul li:hover ul{
               display: block;
               position:absolute;
               margin-left: -100px;
               margin-top: 30px;

           }
           .head-nav nav ul li:hover ul li{
               display: block;
               float: none;
               width: 98px;
               height: 32px;
               background-color: #000000;
              text-align: center;
           }
           .head-nav nav ul li:hover ul li a{
               font-size: 13px;
           }
           .head-nav nav ul li:hover ul li ul{
               display: none;
           }

           .head-nav nav ul li:hover ul li:hover ul{
               display: block;
               position: absolute;
               margin-left:20px;
               margin-top:-30px;
           }
           .head-nav nav ul li:hover ul li:hover ul li{
               display: block;
               float: none;
               width: 98px;
               height: 25px;
               background-color: #000000;
               text-align: center;
               padding-top: 10px;
               padding-bottom: -10px;

           }
           .change_pic{
               width: 100%;
               height: 688px;
               left: 0px;
               display: block;
               z-index: 1;
               position: relative;
           }
           .content{
               position: relative;

               padding-top: 100px;
               margin-top: -300px;
               z-index: 3;
           }
           .content_1{
               height: 306px;
           }
           .content_1_1{
               margin: 0 100px;
               height: 306px;
               font-family: 'Open Sans', sans-serif;
               color: #ffffff;
            }
           .content_1_1 a{
               font-family: 'Open Sans', sans-serif;
               color: #ffffff;
           }
           .content_1_1 h1{
               margin-left: 140px;
               margin-top: 35px;
               font-size: 19px;
               font-family: 'Autour One', cursive;
           }
           .content_1_1_01{
               background-color: #78c7ee;
               width: 377px;
               height: 306px;
               float: left;

           }
           .content_1_1_01:hover{
               background-color: #74b7ce;
           }
           .content_1_1_02{
               background-color: #ff6666;
               width: 377px;
               height: 306px;
               float: left;
               margin-left: 8px;

           }
           .content_1_1_02:hover{
               background-color: #e45055;
           }
           .content_1_1_03{
               background-color: #ffba00;
               width: 377px;
               height: 306px;
               margin-left:8px;
               float: left;
           }
           .content_1_1_03:hover{
               background-color:#ff8f22 ;
           }
           .content_1_1_pag{
               padding: 5px 18px 10px;
               text-align: center;
               font-family: 'Autour One', cursive;
               font-size: 14px;
           }
           .content_2{
               height: 776px;
           }
           .content_2_1{
               height: 120px;
           }
           .content_2_1_inner{
               height: 120px;
               margin: 0 100px;
               background-color: #ffffff;
               text-align: center;
           }
           .content_2_1_inner .inner_title{
               font-family:  'Autour One', cursive;
               font-size:40px;
               padding-top: 21px;
           }
           .huitiao{
               background-color: #cecece;
               height: 2px;
               width: 108px;
              margin-left: 513px;
               margin-top: 8px;
           }
           .programs_main{
               margin: 0 100px;
               height: 620px;
               background-color: #eaeaea;
               font-family: 'Open Sans', sans-serif;
               font-size: 13px;
               line-height: 18px;
               color: #9d9d9d;
           }
           .view{
               color: #78c7ee;
               border-bottom: 2px solid #78c7ee;
               border-top: 2px solid #78c7ee;
               text-align: center;
               height: 46px;
               width: 110px;
               margin-left: 250px;
               margin-top: 30px;
               font: 14px/46px 'Autour One', cursive;
           }
           .view:hover{
               color: #ffba00;
               border-bottom: 2px solid #ffba00;
               border-top: 2px solid #ffba00;
           }
           .view_link{
               text-decoration: none;
           }
           .content_3{
               height: 578px;
               margin-top: -35px;
           }
           .content_3_1{
               margin: 0 100px;
               height: 578px;
           }
           .content_3_2{
               height: 458px;
               background-color: #b9b9b9;
               text-align: center;
               font-family:  'Autour One', cursive;
               font-size:25px;
           }
           .content_3_2:hover{

               background-color: #EEEEEE;
           }
           .content_3_1_inner{
               height: 120px;
               background-color: #ffffff;
               text-align: center;
           }
           .content_3_1_inner .inner_title{
               font-family:  'Autour One', cursive;
               font-size:40px;
               padding-top: 21px;
           }
           .content_4{
               height: 451px;
           }
           .content_4_1{
               margin: 0 100px;
           }
           .content_4_1_inner{
               height: 120px;
               background-color: #ffffff;
               text-align: center;
           }
           .content_4_1_inner .inner_title{
               font-family:  'Autour One', cursive;
               font-size:40px;
               padding-top: 21px;
           }
           .content_4_2{
               height: 331px;
               background-color: #ffffff;
           }
           .content_4_2_article{
               height: 290px;
               width: 275px;
               float: left;
               color: #9d9d9d;
               background-color: #eaeaea;
           }
           .content_4_2_article_content{
               height: 290px;
               width: 275px;
               text-align: center;
           }
           .content_4_2_article_content h4{
               color: #000000;
               font: 20px/40px 'Autour One', cursive;
               padding: 11px 0 9px;
           }
           .content_4_2_article_content_pass{
               height: 69px;
               font-family: Arial, sans-serif;
               font-size: 13px;
               line-height: 18px;
               color: #9d9d9d;
               padding: 13px 18px 20px;
               text-align: center;
           }
           .more_info{
               color: #78c7ee;
               border-bottom: 2px solid #78c7ee;
               border-top: 2px solid #78c7ee;
               text-align: center;
               height: 46px;
               width: 110px;
               font: 14px/46px 'Autour One', cursive;
               margin-left: 85px;
               margin-top:-35px;
           }
           .more_info:hover{
               color: #ffba00;
               border-bottom: 2px solid #ffba00;
               border-top: 2px solid #ffba00;
           }
           .footer{
               height: 150px;
               background-color: #000000;
               font-family: Arial, sans-serif;
               font-size: 14px;
               text-align: center;
               position: relative;
               margin-top: -80px;
               bottom: 0;
               left: 0;
               right: 0;
               color: #ffffff;
           }
           .footer_title a{
               color: #ffffff;
               font-size: 14px;
               font-family: Arial, sans-serif;
               text-decoration: none;
           }
           .footer_title a:hover{
               text-decoration: underline;
           }
           .footer_title{
               padding-top: 110px;
           }
           .1111{

           }
           .clearfix {
               clear: both;
               height: 0px;
           }
       </style>

<!--       <script src="--><?//=get_template_directory_uri()?><!--/owl-carousel/owl.carousel.min.js"></script>-->
<!--       <script>-->
<!--           jQuery(function($) {-->
<!--               $('.owl-carousel').owlCarousel({-->
<!--                   autoPlay: true,-->
<!--                   slideSpeed : 300,-->
<!--                   paginationSpeed : 400,-->
<!--                   singleItem:true-->
<!--               });-->
<!--           });-->
<!--       </script>-->
<!--       <script>-->
<!--           $(document).ready(function(){-->
<!--               $(".head-nav>nav>ul>li").hover(function(){-->
<!--                   $(".head-nav nav ul li ul").fadeIn("slow");-->
<!--               }function(){-->
<!--                   $(".head-nav nav ul li ul").fadeOut("slow");-->
<!--               });-->
<!--           });-->
<!--       </script>-->
   </head>


   <body>
   <div class="main">

      <!--                                   Head                                           -->
         <div class="head-nav">

                   <h1 class="title">
                       <a href="#">
                           <img src="http://livedemo00.template-help.com/joomla_50797/images/logo.png" alt="ESP University">


                           <!--                           <h1>ESP University</h1>-->
                       </a>
                   </h1>
                   <nav>
                       <ul style="list-style: none;">
                           <li><a href="#">HOME</a></li>
                           <li><a href="#">ABOUT</a>
                                <ul >
                                    <li><a href="#">History</a></li>
                                    <li class="sub-ul-parent"><a href="#">Team</a>
                                        <ul>
                                            <li><a href="#">Testimonials</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">FAQs</a></li>
                                    <li style="padding-bottom: 7px;"><a href="#">Template settings</a></li>
                                    <li><a href="#">Forum</a></li>
                                </ul>
                           </li>
                           <li><a href="#">PROGRAMS</a></li>
                           <li><a href="#">NEWS & EVENTS</a></li>
                           <li><a href="#">CONTACTS</a></li>
                       </ul>
                   </nav>

             <div class="clearfix"></div>
         </div>
         <div style="
               background-color: #ffffff;
               width: 100%;
               height:83px;
               top:0px;
               margin-left: 0px;
               left: 0px;
                "></div>

       <!--                                  图片切换                                -->
         <div class="change_pic" >
             <div>
                 <a href="#">
                     <img class="1111" src="http://livedemo00.template-help.com/joomla_50797/images/slider/slide-1.jpg?1406797874615"width="1350px"/>
                 </a>
             </div>
         </div>
       <!--                                   主体内容                                     -->
         <div class="content">
            <!--                          3个图片导航                          -->
              <div class="content_1">
                   <div class="content_1_1">
                       <a href="#">
                         <div class="content_1_1_01">
                              <img style="margin-top: 61px;margin-left: 155px;"
                                 src="http://livedemo00.template-help.com/joomla_50797/images/icons/icon1.png"/>
                             <h1 style="margin-left: 145px;">LIBRARY</h1>
                             <div class="content_1_1_pag">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis</div>
                         </div>
                       </a>
                       <a href="#">
                         <div class="content_1_1_02">
                             <img style="margin-top: 61px;margin-left: 155px;"
                                 src="http://livedemo00.template-help.com/joomla_50797/images/icons/icon2.png"/>
                             <h1>STUDENTS</h1>
                             <div class="content_1_1_pag">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis</div>
                         </div>
                       </a>
                       <a href="#">
                         <div class="content_1_1_03">
                             <img style="margin-top: 61px;margin-left: 155px;"
                                 src="http://livedemo00.template-help.com/joomla_50797/images/icons/icon3.png"/>
                             <h1>SCHEDULE</h1>
                             <div class="content_1_1_pag">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis</div>
                         </div>
                       </a>
                   </div>
              </div>
              <div class="clearfix"></div>

            <!--                                     Programs                                         -->
              <div class="content_2">
                   <div class="content_2_1">
                        <div class="content_2_1_inner">
                            <div class="inner_title">Programs</div>
                            <div class="huitiao"></div>
                        </div>
                       <div style="height: 620px;">
                         <div class="programs_main">
                           <div style="width: 1148px;height: 310px;">
                               <div style="width: 570px;height: 310px;float: left;">
                                   <a href="#">
                                       <img src="http://livedemo00.template-help.com/joomla_50797/images/pages/img1.jpg"width="570px"height="310px">
                                   </a>
                               </div>
                               <div style="width: 574px;height: 310px;margin-left:570px;text-align: center;">
                                   <div style="padding-top: 55px;font: 20px/40px 'Autour One', cursive;color: #444444;">
                                       <h4>UT WISI ENIM AD MINIM VENIA</h4>
                                   </div>
                                   <div style="padding: 10px 60px;">
                                       <p>
                                           Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in olestie consequat, vel illum dolore eu feugiat nulla facilisis at vero odio dignissim qui blandit praesent luptatum zzril
                                       </p>
                                   </div>
                                 <div style="width: 110px;">
                                   <a class="view_link" href="#">
                                       <div class="view">VIEW</div>
                                   </a>
                                 </div>
                               </div>
                           </div>
                           <div class="clearfix"></div>
                           <div>
                               <div style="width: 570px;height: 310px;float: left;text-align: center;">
                                   <div style="padding-top: 55px;font: 20px/40px 'Autour One', cursive;color: #444444;">
                                       <h4>NAM LIBER TEMPOR CUM SOLUTA</h4>
                                   </div>
                                   <div style="padding: 10px 60px;">
                                       <p>
                                           Wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in olestie consequat, vel illum dolore eu feugiat nulla facilisis at vero odio dignissim qui blandit praesent luptatum zzril
                                       </p>
                                   </div>
                                   <div style="width: 110px;">
                                       <a class="view_link" href="#">
                                           <div class="view">VIEW</div>
                                       </a>
                                   </div>
                               </div>
                               <div style="margin-left: 570px;height: 310px;">
                                   <a href="#">
                                       <img src="http://livedemo00.template-help.com/joomla_50797/images/pages/img2.jpg" width="580px" height="310px"/>
                                   </a>
                               </div>
                           </div>
                           <div class="clearfix"></div>
                         </div>
                       </div>
                   </div>
              </div>


            <!--                         Video Lessons                           -->
            <div class="content_3">
                <div class="content_3_1">
                    <div class="content_3_1_inner">
                        <div class="inner_title">Video Lessons</div>
                        <div class="huitiao"></div>
                    </div>
                    <div class="content_3_2">
                            <!--                Video                    -->
                           <div style="padding-top: 190px"> This is a video. </div>
                    </div>
                </div>
            </div>

            <!--                           News & Events                               -->
            <div class="content_4">
                <div class="content_4_1">
                    <div class="content_4_1_inner">
                        <div class="inner_title">News & Events</div>
                        <div class="huitiao"></div>
                    </div>
                    <div class="content_4_2">
                        <div class="content_4_2_article">
                            <div class="content_4_2_article_content">
                                <h4>WEMPOR CUM SOLU</h4>
                                <a href="#">
                                    <img src="http://livedemo00.template-help.com/joomla_50797/images/pages/page1-img1.jpg" width="275px" height="86px">
                                </a>
                                <div class="content_4_2_article_content_pass">
                                    Wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                                </div>
                                <div style="width: 110px;">
                                    <a class="view_link" href="#">
                                        <div class="more_info">MORE INFO</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content_4_2_article"style="margin-left: 17px">
                            <div class="content_4_2_article_content">
                                <h4>LOREM IPSUM DOLOR</h4>
                                <a href="#">
                                    <img src="http://livedemo00.template-help.com/joomla_50797/images/pages/page1-img2.jpg" width="275px" height="86px">
                                </a>
                                <div class="content_4_2_article_content_pass">
                                    Senim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                </div>
                                <div style="width: 110px;">
                                    <a class="view_link" href="#">
                                        <div class="more_info">MORE INFO</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content_4_2_article"style="margin-left: 16px">
                            <div class="content_4_2_article_content">
                                <h4>EODEM MODO TYPI</h4>
                                <a href="#">
                                    <img src="http://livedemo00.template-help.com/joomla_50797/images/pages/page1-img3.jpg" width="275px" height="86px">
                                </a>
                                <div class="content_4_2_article_content_pass">
                                    Ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                </div>
                                <div style="width: 110px;">
                                    <a class="view_link" href="#">
                                        <div class="more_info">MORE INFO</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content_4_2_article"style="margin-left: 16px">
                            <div class="content_4_2_article_content">
                                <h4>CLARITAS EST ETIAM</h4>
                                <a href="#">
                                    <img src="http://livedemo00.template-help.com/joomla_50797/images/pages/page1-img4.jpg" width="275px" height="86px">
                                </a>
                                <div class="content_4_2_article_content_pass">
                                    Xeim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit
                                </div>
                                <div style="width: 110px;">
                                    <a class="view_link" href="#">
                                        <div class="more_info">MORE INFO</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
      <!--                                 Footer                                      -->
         <div class="footer">
             <div class="footer_title">ESP University 2014  |  <a href="#" >Privacy Policy</a></div>
         </div>
   </div>

   </body>

</html>