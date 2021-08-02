function get (id) {
return document.getElementById (id) ;;
}
function checkProductname(e) 
{
var xhr = new XMLHttpRequest ();
xhr.open("GET","checkProductname.php?uname="+e.value, true) ;
xhr.onreadystatechange=function () {

if(this.readyState == 4 && this.status == 200){
if (this.responseText.trim() == "invalid"){
get ("err_uname").innerHTML = "Product Exists";
}
else
{
   get ("err_uname").innerHTML = "";
}
}
};

xhr.send();
}