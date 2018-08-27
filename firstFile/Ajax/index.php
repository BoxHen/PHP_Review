<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <script type="text/javascript">
      function load(thediv, thefile){
        if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
        }else{
          xmlhttp = new ActiveXObject('Microsoft.XMLHTTP')
        }

        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById(thediv).innerHTML = xmlhttp.responseText;
          }
        }
        xmlhttp.open('GET', thefile, true);
        xmlhttp.send();
      }
    </script>
    <title></title>
  </head>

  <body>
    <input type="submit" name="" value="click" onclick="load('adiv', 'include.php')">

    <div class="" id="adiv">

    </div>
  </body>

</html>
