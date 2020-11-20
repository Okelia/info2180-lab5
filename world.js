document.addEventListener("DOMContentLoaded", ()=>{
   var btn = document.getElementById("lookup").onclick= function(e){
        var coun = document.getElementById("country").value;
        var printResult = document.getElementById("result");
        var httprequest = new XMLHttpRequest();
        var url = "world.php"+"?country=" + coun;
        httprequest.onreadystatechange = function(){
            if (this.status ==200){
                document.getElementById("result").innerHTML =  this.response;
                //alert(this.response);
            }
        };
        httprequest.open("GET", url, true);
        httprequest.send("");
    }

    var btn_cities = document.getElementById("lookup_cities").onclick= function(e){
        e.preventDefault();
        var city = document.getElementById("cities");
        var coun = document.getElementById("country").value;
        var httprequest = new XMLHttpRequest();
        var url = "world.php"+"?country=" + city + "&context=cities";
        httprequest.onreadystatechange = function(){
            if (this.status ==200){
                document.getElementById("result").innerHTML =  this.response;
                //alert(this.response);
            }
        };
        httprequest.open("GET", url, true);
        httprequest.send("");
    }
})