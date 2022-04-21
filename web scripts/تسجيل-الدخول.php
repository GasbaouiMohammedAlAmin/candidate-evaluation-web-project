<?php
session_start();
if(isset($_SESSION['loggedIN'])){
  header('location: ./index.php');
  exit();
}
if(isset($_POST['login'])){
  $username=$_POST['usernamePHP'];
  $arrayString=  explode(" ", $username );
 if(count($arrayString)>1)
     return; 
  $password=md5($_POST['passwordPHP']);
  $conn=mysqli_connect("localhost","aminegasa","Amin1994;","candidateevaluation");

$result=mysqli_query($conn,"select * from user where username= '$arrayString[0]' and password='$password' ");
$rowcount=mysqli_num_rows($result);
if($rowcount>0){
  $_SESSION['loggedIN']='1';
  $_SESSION['username']=$username;
exit('success');
}else{
exit('failed');

}
mysqli_close($conn);
  //exit($)
}
?>
<!DOCTYPE html>
<html style="font-size: 16px;" dir="rtl">
  <head>
      <link rel="stylesheet" type="text/css" href="alertify/css/alertify.rtl.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="تسجيل الدخول">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">

    <title>تسجيل الدخول</title>
    <link rel="icon" type="image/x-icon" href="./images/001-worker.png">
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="تسجيل-الدخول.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="تسجيل الدخول">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <script type="text/javascript" src="alertify/alertify.min.js"></script>

    <section class="u-clearfix u-image u-shading u-section-1" id="carousel_3b19" data-image-width="1280" data-image-height="1024">
      <h1 class="u-align-right u-custom-font u-text u-text-default-lg u-text-default-xl u-text-1"><span class="u-file-icon u-icon u-icon-1" data-href="https://nicepage.com"><img src="images/323360.png" alt=""></span>&nbsp;شركة سوفت للبرمجيات والحلول التقنية
      </h1>
      <p class="u-align-center-xs u-align-right-lg u-align-right-md u-align-right-sm u-align-right-xl u-text u-text-default-lg u-text-default-xl u-text-2"> صفحة تمكنك من إنتقاء   المترشحين على حسب مسارهم التعليمي والمهني </p>
      <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1" data-animation-name="customAnimation" data-animation-duration="1000" data-animation-direction="">
        <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-text-white u-icon-2"><img src="images/2.png" alt=""></span>
          <h2 class="u-text u-text-body-alt-color u-text-default u-text-3">تسجيل الدخول</h2>
          <div class="u-form u-login-control u-form-1">
            <form action="#" method="POST" action="تسجيل-الدخول.php" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
              <div class="u-form-group u-form-name">
                <label for="username-a30d" class="u-label u-text-grey-5 u-label-1">اسم المستخدم *</label>
                <input type="text" id="username" name="username_" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-1" required="" placeholder="اسم المستخدم او الايمايل">
              </div>
              <div class="u-form-group u-form-password">
                <label for="password-a30d" class="u-label u-text-grey-5 u-label-2">كلمة المرور *</label>
                <input type="password" placeholder="ضع كلمة المرور" id="password" name="password_" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-input-2" required="">
              </div>
              
              <div class="u-align-center u-form-group u-form-submit">
               
                <input type="button" value="دخول"  id="login" class="u-active-palette-2-light-2 u-border-2 u-border-grey-75 u-btn u-btn-round u-btn-submit u-button-style u-custom-font u-font-arial u-hover-palette-2-light-2 u-palette-4-dark-1 u-radius-24 u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-1">
              </div>
              
            </form>
            <script src="jquery.js"></script>
<script type="text/javascript">
  let attempt=0;
 
  $(document).ready(function(){
    //console.log("page ready");
    $("#login").on('click',function(){
      let username=$("#username").val();
      let password=$("#password").val();
       
      if(username=="" || password==""){
       // alert("الرجاء ملئ البييانتات")
        alertify.error('الرجاء ادخال اسم المستعمل وكلمة المرور');
        attempt++;

        if(attempt>=3)
          window.location='./index.php'
      }
      else{
        $.ajax(
          {
            url:'تسجيل-الدخول.php',
            method:"POST",
            data:{
              login:1,
              usernamePHP:username,
              passwordPHP : password
            },
            success:function(response){
              console.log(response)
              //$("#response").html(response);
              if(response.indexOf('success')>=0)
                window.location='./index.php'
              else{
                attempt++;
                //alert("خطأ في كلمة المرور او اسم المستخدم")
                      alertify.error("خطأ في كلمة المرور او اسم المستخدم");
                      if(attempt>=5)
                        window.location='./index.php'

                 
              }

            },
            dataType:'text'
          }
        );
      }
      

    });

  });
</script>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-d005"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">&nbsp;Created by Gasbaoui mohammed al amine</p>
      </div></footer>
    
  </body>
</html>
