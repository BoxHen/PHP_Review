<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript">
      function insert(){
        if(window.XMLHttpRequest){
          xmlhttp = new XMLHttpRequest();
        }else{
          xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
        }

        xmlhttp.onreadystatechange = function(){
          if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById('results').innerHTML = xmlhttp.responseText;
          }
        }

        xmlhttp.open('POST', 'suggest.php', true);
        xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded')
        parameter = 'text='+document.getElementById('text').value;
        xmlhttp.send(parameter);
      }
    </script>
  </head>
  <body>
    <form id="search" name="search">
      Type: <br>
      <input type="text" id='text'> <input type="button" value="submit" onclick="insert()">
    </form>

    <div id="results"></div>
  </body>
</html>
