<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  </head>
  <body>

    <!-- layout navabar -->
    <div class="navbar">
      @yield('navbar')
      <img src="https://www.boolean.careers/images/common/logo.png" alt="logo">
      <div class="nav_right">
        <a href="#">HOME</a>
        <a href="#">CORSO</a>
        <a href="#">METODO</a>
        <a href="#">DOPO IL CORSO</a>
        <a href="#">LEZIONE GRATUITA</a>
        <a class="but_orange" href="#">Iscriviti</a>
      </div>
    </div>

    <!-- layout footer -->
    <div class="footer">
      @yield('footer')
      <div class="footer_header">
        <div class="cont_int_foot_head">
          <div class="foot_cont1">
            <img src="https://www.boolean.careers/images/common/logo.png" alt="logo footer">
          </div>
          <div class="foot_cont2">
            <a href="#">ciao@boolean.carrers</a>
            <a href="#">02-40031288</a>
            <a href="#">+39 327-9578239</a>
          </div>
          <div class="foot_cont3">
            <a href="#">Domande Frequenti</a>
            <a href="#">Lezione Gratuita</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Lavora con noi!</a>
          </div>
          <div class="foot_cont4">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="cont_int_foot_bott">
          <span>Boolean** (my_new_job > my_old_job) // returns true</span>
          <span>Boolean SRL - Piazzale Giovanni dalle Bande Nere, 9 - 20146, Milano - P.IVA: 10214930967</span>
        </div>
      </div>
    </div>
  </body>
</html>
