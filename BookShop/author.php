<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ebook Shop</title>
<link href="CSS/style.css" rel="stylesheet" type="text/css">
<script> function showAuthor(str) { 
    if (str == "") { 
        document.getElementById("txtHint").innerHTML = "";
return;
 }  else { 
         if (window.XMLHttpRequest) { 
          //code for IE7+, Firefox, Chrome, Opera, Safari 
             xmlhttp = new XMLHttpRequest();
         } else { 
           // code for IE6, IE5 
             xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                 } 
             xmlhttp.onreadystatechange = function () {
                   if (this.readyState == 4 && this.status == 200) { 
                       document.getElementById("txtHint").innerHTML = this.responseText;
                   } 
                   }; 
             xmlhttp.open("GET", "getauthor.php?q=" + str, true);
             xmlhttp.send();
               } 
               }
</script> 

   
    <body> 
         <div id="all">  
             
        <form> 
            <select name="authors" onchange="showAuthor(this.value)"> <option value="">Select an Author:</option> 
                <option value="5">Robin Nixon</option> 
                <option value="6">Carrie Winstanley</option> 
                <option value="7">James Anderson</option> 
                <option value="8">Phil Ballard</option> 
            </select> 
        </form> <br> 
        <div id="txtHint"><b>Author info will be listed here...</b></div> 
        
        </div>
       
        </body> 
        </html>
