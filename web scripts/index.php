<?php 
session_start();
if(!isset($_SESSION['loggedIN'])){
  header('Location: ./تسجيل-الدخول.php');
  exit();
  }
 ?>
<!DOCTYPE html>
<html style="font-size: 16px;" dir="rtl">
  <head>
 <link rel="stylesheet" type="text/css" href="./alertify/css/alertify.rtl.min.css">
 <script type="text/javascript" src="./alertify/alertify.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​&nbsp;شركة سوفت للبرمجيات والحلول التقنية, ​مصلحة الموظفين والإنتقاء">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>حساب المعدل</title>
<link rel="icon" type="image/x-icon" href="./images/001-worker.png">
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="حساب-المعدل.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.8.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site1",
		"sameAs": [
				"https://www.facebook.com/people/%D9%85%D8%AF%D9%8A%D8%B1%D9%8A%D8%A9-%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%8A%D8%A9-%D9%84%D9%88%D9%84%D8%A7%D9%8A%D8%A9-%D8%A8%D8%B4%D8%A7%D8%B1-Direction-De-L%C3%A9ducation-De-bechar/100069401820498/"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="حساب المعدل">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
   

    <script type="text/javascript" src="./js script/getMeanCandidate.js">   
     

  </script>
  </head>
  <body class="u-body u-xl-mode">
 
    <header class="u-align-center u-clearfix u-header" id="sec-67b9"><div class="u-clearfix u-sheet u-sheet-1">
        <nav class="u-align-left u-menu u-menu-dropdown u-menu-open-right u-offcanvas u-menu-1" data-submenu-level="on-click" data-responsive-from="MD">
          <div class="menu-collapse" style="font-size: 1.25rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#">
              <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8a8f"></use></svg>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-8a8f" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content"><g><rect y="36" width="302" height="30"></rect><rect y="236" width="302" height="30"></rect><rect y="136" width="302" height="30"></rect>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1">
<li class="u-nav-item"><a class="u-border-3 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="حساب-المعدل.php" style="padding: 8px 15px 8px 14px;">حساب المعدل</a>
</li>
<li class="u-nav-item"><a class="u-border-3 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="ترتيب-المترشحين.php" style="padding: 8px 15px 8px 14px;">ترتيب المترشحين</a>
</li><li class="u-nav-item"><a class="u-border-3 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="logout.php" style="padding: 8px 15px 8px 14px;">تسجيل الخروج</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-75 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-spacing-2 u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="ترتيب-المترشحين.php">ترتيب المترشحين</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="حساب-المعدل.php">حساب المعدل</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="logout.php">تسجيل الخروج</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <div class="u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="صفحة المطور" target="_blank" href="https://www.facebook.com/Gasa-soft-100211644816021"><span class="u-file-icon u-icon u-social-facebook u-social-icon u-icon-1"><img src="images/5968764.png" alt=""></span>
          </a>
        </div>
      </div></header>
    <section class="skrollable u-align-right u-clearfix u-image u-shading u-section-1" id="carousel_aaa9" src="" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
        <h1 class="u-align-center-md u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-xl u-custom-font u-text u-text-default-lg u-text-default-xl u-text-1"><span class="u-file-icon u-icon u-icon-1" data-href="https://nicepage.com"><img src="images/323360.png" alt=""></span>&nbsp;شركة سوفت للبرمجيات والحلول التقنية
        </h1>
        <h2 class="u-align-center-md u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-xl u-text u-text-default-lg u-text-default-xl u-text-2"> مصلحة الموظفين والإنتقاء</h2>
        <p class="u-align-center-sm u-align-center-xs u-align-right-lg u-align-right-md u-align-right-xl u-text u-text-default-lg u-text-default-xl u-text-3">صفحة تمكنك من إنتقاء   المترشحين على حسب مسارهم التعليمي والمهني</p>
        <div class="u-container-style u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-text u-text-default u-text-4">المسار التعليمي و المهني للمترشح</h2>
            <div class="u-form u-form-1">
              <form action="" method="POST" onsubmit="return meanCandidate()" class="u-clearfix u-form-custom-backend u-form-spacing-11 u-form-vertical u-inner-form" style="padding: 14px;" source="custom" name="form" redirect="true">
                <div class="u-form-group u-form-name u-label-top u-form-group-1">
                  <label for="name-bf72" class="u-label u-label-1">اسم ولقب المترشح</label>
                  <input type="text" placeholder="الإسم الكامل للمترشح" id="nameCandidate" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-input-1" required="">
                </div>
                <div class="u-form-date u-form-group u-label-top u-form-group-2">
                  <label for="date-ba27" class="u-label u-label-2">تاريخ إزدياد المترشح</label>
                  <input type="date" placeholder="MM/DD/YYYY"  id="dateBirthCandidate" name="date-2" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-input-2" required="">
                </div>
                <div class="u-form-group u-label-top u-form-group-3">
                  <label for="text-0499" class="u-label u-label-3">معدل المسار الدراسي</label>
                  <input type="number"  step="0.01" placeholder="المعدل محصور بين 1 و 20" id="meanCandidate_" name="mean" min="1" max="20" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-input-3" required="required">
                </div>
                <div class="u-form-checkbox u-form-group u-label-top u-form-group-4">
                  <input type="checkbox" id="checkbox-1" name="checkbox" value="On">
                  <label for="checkbox-10ef" class="u-label u-label-4"> هل المترشح من الدفعة الأولى في صفه </label>
                </div>
                <div class="u-form-checkbox u-form-group u-label-top u-form-group-5">
                  <input type="checkbox" id="checkbox-2" name="checkbox-1" value="On">
                  <label for="checkbox-72fe" class="u-label u-label-5">(هل المترشح من خريجوا المدارس الكبرى (المدارس الوطنية العاليا</label>
                </div>
                <div class="u-form-group u-label-top u-form-group-6">
                  <label for="name-6797" class="u-label u-label-6">سنة التخرج</label>
                  <input type="number"  step="1" min="1970" max="2030" placeholder="السنة فقط" id="yearGraduation" name="yearGradiation" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-input-4" required="required" autofocus="autofocus">
                </div>
                <div class="u-form-checkbox u-form-group u-label-top u-form-group-7">
                  <input type="checkbox" id="checkbox-3" name="checkbox-2" value="On">
                  <label for="checkbox-caca" class="u-label u-label-7"> هل للمترشح خبرة مهنية في المؤسسات والإدارات العمومية المنظمة للمسابقة</label>
                </div>
                <div class="u-form-checkbox u-form-group u-label-top u-form-group-8">
                  <input type="checkbox" id="checkbox-4" name="checkbox-4" value="On">
                  <label for="checkbox-7cdc" class="u-label u-label-8"> هل للمترشح خبرة مهنية في مؤسسات وإدارات عمومية أخرى</label>
                </div>
                <div class="u-form-checkbox u-form-group u-label-top u-form-group-9">
                  <input type="checkbox" id="checkbox-5" name="checkbox-3" value="On">
                  <label for="checkbox-f558" class="u-label u-label-9">هل للمترشح خبرة مهنية مكتسبة بصفة متعاقد بتوقيت جزئي</label>
                </div>
                <div class="u-form-checkbox u-form-group u-label-top u-form-group-10">
                  <input type="checkbox" id="checkbox-6" name="checkbox-5" value="On">
                  <label for="checkbox-552f" class="u-label u-label-10">هل المترشح شغل منصب أدنى من المنصب المراد شغله</label>
                </div>
                <div class="u-form-checkbox u-form-group u-label-top u-form-group-11">
                  <input type="checkbox" id="checkbox-7" name="checkbox-6" value="On">
                  <label for="checkbox-93c2" class="u-label u-label-11">هل المترشح خبرة مهنية مكتسبة خارج قطاع الوظيفة العمومية</label>
                </div>
                <div class="u-form-date u-form-group u-label-top u-form-group-12">
                  <label for="date-e5af" class="u-label u-label-12">تاريخ بداية العمل</label>
                  <input type="date" placeholder="MM/DD/YYYY" id="dateStartJob" name="date" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-input-5" required="">
                </div>
                <div class="u-form-date u-form-group u-label-top u-form-group-13">
                  <label for="date-0aff" class="u-label u-label-13">تاريخ نهاية العمل</label>
                  <input type="date" placeholder="MM/DD/YYYY" id="dateEndJob" name="date-1" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-input-6" required="">
                </div>
                <div class="u-form-group u-label-top u-form-group-14">
                  <label for="text-9cfd" class="u-label u-label-14">نقطة الامتحان الشفهي</label>
                  <input type="number" id="markInterview" name="text-4" placeholder="النقطة محصورة بين 0 و 3" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-5 u-input-7" min="0" max="3" step="0.1" required="required" maxlength="4">
                </div>
                <div class="u-align-center u-form-group u-form-submit u-label-top u-form-group-15">
                  <input type="submit" value="submit" class="u-form-control-hidden">
                  <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-1-base u-radius-5 u-btn-1">حساب المعدل</a>
                </div>
                <h5 >
                  <a  href="#"  onclick='return instructionUse()'>كيفية تقييم المترشح </a>
                  <script type='text/javascript'>
                    function instructionUse() {
                      txt=`يبدأ تقييم المترشح انطلاقا من 6 نقاط بمجرد اكتمال الملف.
 يتم تقييم المعدل انطلاقا من نقطة واحدة  وصولا الى 7 نقاط كأقصى حد حسب معدل تخرج المترشح  .
 يتم اضافة نقطة واحدة اذا كان  المترشح من الدفة الاولى.
 يتم اضافة نقطتين إضافيتين إذا كان المترشح من خريجوا المدارس الكبرى .
يتم اضافة  6 نقاط كأقصى حد إذا كان المترشح لديه خبرة مهنية في الادارات و المؤسسات العمومية المنظمة للمسابقة (1 نقطة كل عام).
 يتم اضافة  3 نقاط كأقصى حد إذا كان المترشح لديه خبرة مهنية في الادارات و المؤسسات العمومية في منصب أدنى من المنصب المراد شغله  (0.5 نقطة كل عام).

 يتم اضافة  4 نقاط كأقصى حد إذا كان المترشح لديه خبرة مهنية في الادارات و المؤسسات عمومية أخرى غير منظمة للمسابقة. (1 نقطة كل عام).
 يتم اضافة  3 نقاط كأقصى حد إذا كان المترشح لديه خبرة مهنية مكتسبة بصفة متعاقد بتوقيت جزئي (0.25 كل سنة).
 يتم اضافة  2 نقاط كأقصى حد إذا كان المترشح لديه خبرة مهنية في القطاع الخاص مؤشرة من طرف هيئة الضمان الأجتماعي    (0.5 نقطة  كل سنة).
  يتم تقويم  نقطة اقدمية الشهادة 5 نقاط كحد أقصى ( نقطة 0.5  كل سنة) .
يتم اضافة بين ( 0 و 3 نقاط) مقدمة من طرف الجنة الإنتقاء  كالإمتحان شفهي. 
`;
                    //  alertify
  alertify.alert('كيفية حساب نقاط المترشح', txt, function(){ /*alertify.success('Ok');*/ });
                       return false;
                 }
                        </script>
                </h5>


              </form>
            </div>
          </div>
        </div>
        <img class="u-hidden-sm u-hidden-xs u-image u-image-default u-image-1" src="images/fff.jpg" alt="" data-image-width="689" data-image-height="930">
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-d005"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">&nbsp;Created by Gasbaoui mohammed al amine</p>
      </div></footer>
    
  </body>
</html>
