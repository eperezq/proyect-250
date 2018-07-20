
    <script src="{{ asset('/js/jquery-3.2.1.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script> --}}
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/js/mdb.js') }}"></script>
    <script src="{{ asset('dist/js/custom.min.js') }}"></script>

<!--================VAlidacion de imputs ====================== -->   
<script>
      (function() {
    'use strict';
    window.addEventListener('load', function() {
      var form = document.getElementById('needs-validation');
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    }, false);
  })();
</script>

<!--================ Alertas ====================== -->
<script type="text/javascript">
  $(document).ready(function() {
      setTimeout(function() {
          $(".content-02").fadeOut(1500);
      },5000);
  });
</script>
<!--================ Busqueda ====================== -->
<script>
   // captura el evento keyup cuando escribes en el input
   $("#search").keyup(function(){
        _this = this;
        // Muestra los tr que concuerdan con la busqueda, y oculta los demás.
        $.each($("#table tbody tr"), function() {
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();                
        });
    }); 
</script>


<!--================ animacion de carga de barra  ====================== -->
 <script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $(".progress-bar").each(function(){
      var percentage = parseInt($(this).html());
      if(percentage > 0){
        $(this).animate({'width':''+percentage+'px'}, 800);
      }else{
        $(this).css({'color':'black', 'background':'none'}, 800);
      }
    })
  })
</script>
<!--================ Alerta nav ====================== -->
<script>
  function myFunction() {
      var hour = document.getElementById("alert-pro").innerHTML; 
      var greeting;
      if (hour < 18) {
          greeting = "<span class='ml-4 badge badge-pill red'>Agotado </span>";
      } else {
          greeting = "<span class='ml-4 badge badge-pill green'>1 bueno </span>";
      }
      document.getElementById("demo").innerHTML = greeting;
  }
  
  myFunction()
  
</script>