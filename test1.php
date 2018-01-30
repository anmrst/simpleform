<html>
<script type="text/javascript">
  function cookiecheck(){

    var user=getCookie("name");
    if(user == "") {
  
       <?php 
          $name = '';
          $age = '';
          $email = '';
          $addr = '';
          $addr2 = '';
          $addr3 = '';
       ?>
    }
    else {

        <?php
          if($_COOKIE['name'] != '') {
            $name = $_COOKIE['name'];
          } 
          if($_COOKIE['age'] != '') {
            $age = $_COOKIE['age'];
          } 
          if($_COOKIE['email'] != '') {
            $email = $_COOKIE['email'];
          } 
          if($_COOKIE['addr'] != '') {
            $addr = $_COOKIE['addr'];
          } 
          if($_COOKIE['addr2'] != '') {
            $addr2 = $_COOKIE['addr2'];
          } 
          if($_COOKIE['addr3'] != '') {
            $addr3 = $_COOKIE['addr3'];
          } 
          ?>
    }
  }
</script>
<body onload="shows_form_part(1)">
<h3>Input Form</h3>
  <form id="myForm" name="myForm" action="test3.php" method="POST">
    <div id="form_part1">
    
Name : <br>
<input type = "text" name = "fname" value="<?php echo $name; ?>"> <br>
Email : <br>
<input type = "email" name ="email" value="<?php echo $email; ?>"> <br>

<!--form elements 1-->
      <button type="button" onclick="shows_form_part(2); WriteCookie();">&raquo;</button>
    </div>
    <div id="form_part2">
      <!--form elements 2-->
      
Age : <br>
<input type = "text" name = "age" value="<?php echo $age; ?>"> <br>
Address : <br>
<input type = "text" name ="addr" value="<?php echo $addr;?>"> <br>



      <button type="button" onclick="shows_form_part(1)">&laquo;</button>
      <button type="button" onclick="shows_form_part(3); WriteCookie();">&raquo;</button>
    </div>
    <div id="form_part3">
      <!--form elements 3-->
      
Address2 : <br>
<input type = "text" name = "addr2" value="<?php echo $addr2;?>"> <br>
Address3 : <br>
<input type = "text" name ="addr3" value="<?php echo $addr3;?>"> <br>
</form>
      <button type="button" onclick="shows_form_part(2)">&laquo;</button>
      <button type="button" onclick="submit_form();WriteCookie();">Submit</button>
    </div>
  
  <script type="text/javascript">
   function submit_form()
{
  document.getElementById("myForm").submit();

}


 function WriteCookie()
            {
              
               cookievalue= escape(document.myForm.fname.value) + ";";
               document.cookie="name=" + cookievalue;
             
               cookievalue= escape(document.myForm.email.value) + ";";
               document.cookie="email=" + cookievalue;
                 
               cookievalue= escape(document.myForm.age.value) + ";";
               document.cookie="age=" + cookievalue; 

               cookievalue= escape(document.myForm.addr.value) + ";";
               document.cookie="addr=" + cookievalue;

               cookievalue= escape(document.myForm.addr2.value) + ";";
               document.cookie="addr2=" + cookievalue;

               cookievalue= escape(document.myForm.addr3.value) + ";";
               document.cookie="addr3=" + cookievalue;
            }
         
  </script>
  <script type="text/javascript">
  function shows_form_part(n){
    var i = 1, p = document.getElementById("form_part"+1);
    while (p !== null){
        if (i === n){
            p.style.display = "";
        }
        else{
            p.style.display = "none";
        }
        i++;
        p = document.getElementById("form_part"+i);
    }
}
</script>

</body>
</html>