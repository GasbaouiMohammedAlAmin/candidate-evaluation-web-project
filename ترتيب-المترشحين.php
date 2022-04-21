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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>ترتيب المترشحين</title>
<link rel="icon" type="image/x-icon" href="./images/001-worker.png">
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="ترتيب-المترشحين.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.3.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="ترتيب المترشحين">
    <meta property="og:type" content="website">
     <script src="./js script/table2excel.js"></script>
     
  </head>
  <body class="u-body"> 
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
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="sec-9f11" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1"  border="1" cellpadding="2" id="wholeTab" >
            <colgroup>
              <col width="15.4%">
              <col width="10.7%">
              <col width="11.2%">
              <col width="12.4%">
              <col width="9.1%">
              <col width="13.1%">
              <col width="15.1%">
              <col width="13.100000000000009%">
            </colgroup>
            <thead class="u-align-center u-palette-4-base u-table-header u-table-header-1">
              <tr style="height: 60px;">
<th class="u-border-2 u-border-palette-4-base u-table-cell">المرجع</th>  
<th class="u-border-2 u-border-palette-4-base u-table-cell">الاسم الكامل للمترشح</th> 
 <th class="u-border-2 u-border-palette-4-base u-table-cell"> تــاريخ الإزدياد</th>
 <th class="u-border-2 u-border-palette-4-base u-table-cell"> معدل المسار الدراسي</th>  
<th class="u-border-2 u-border-palette-4-base u-table-cell"> معدل الخبرة المهنية</th>    
<th class="u-border-2 u-border-palette-4-base u-table-cell"> نقطة الإمتحان الشفهي</th>  
<th class="u-border-2 u-border-palette-4-base u-table-cell"> المجموع</th>    
 <th class="u-border-2 u-border-palette-4-base u-table-cell">حذف</th>

         </tr>
            </thead>
            <tbody class="u-table-body u-table-body-1" align="center"  id="myTable">
              
            </tbody>
          </table>
        </div>
        <button class="u-border-none u-btn u-button-style u-palette-4-dark-1 u-btn-3" onclick="printTab('wholeTab')">طباعة الجدول</button>
        <button  class="u-border-none u-btn u-button-style u-palette-4-dark-1 u-btn-4" id="export">تصدير اكسيل</button>
          <script  >
        // code written by amine

        function printTab(id){
let table=document.getElementById(id);
newWin= window.open("my tab");
   newWin.document.write(table.outerHTML);
   newWin.print();
   newWin.close();
}
   
  let table2excel = new Table2Excel({filename:"candidate files"});

      document.getElementById('export').addEventListener('click', function() {
        table2excel.export(document.querySelectorAll('#wholeTab'),"الإمتحانات المهنية "+new Date());
      });

      </script>
      <script   type="text/javascript"  src="./js script/fillTable.js">  </script>
    </section>
      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-d005"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">&nbsp;Created by Gasbaoui mohammed al amine</p>
      </div></footer>
    
  </body>
</html>             