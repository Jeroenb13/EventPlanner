</div>
</div>
    </body>
    <script>
      function showNav(){
        if($("#nav-overlay").height()  < 1){
          $("#nav-overlay").animate({height: $("#nav-overlay").get(0).scrollHeight}, 750 );
        }else{
          $("#nav-overlay").animate({height: 0.1}, 750);
        }
      }
      /* Display login info on click, for mobile users*/
      function showLoginInfo(){
        if($("#loginDropdown").is(":visible")){
          $("#loginDropdown").css("display","none");
        }else{
          $("#loginDropdown").css("display","block");
        }
      }
    </script>
</html>
