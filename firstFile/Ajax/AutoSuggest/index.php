<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <script type="text/javascript">
      function findmatch(){
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

        xmlhttp.open('GET', 'suggest.php?search_text='+document.search.searchbar.value, true);
        // passes into the $_GET the searcbar value
        xmlhttp.send();
      }
    </script>
  </head>
  <body>
    <form id="search" name="search">
      Type: <br>
      <input type="text" name="searchbar" value="" onkeyup="findmatch();">
    </form>

    <div id="results"></div>
  </body>
</html>
