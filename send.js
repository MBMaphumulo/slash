
function send_post(){
    
    var hr = new XMLHttpRequest();
    var url = "send_post.php";
    var pHeader = document.getElementById("post_header").value;
    var pBody = document.getElementById("post_body").value;
    var pp = document.getElementById("pp").value;
    var vars = "pHeader="+pHeader+"&pBody="+pBody+"&pp="+pp;

    hr.open("POST",url,true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function(){
        if(hr.readyState == 4 && hr.status == 200){
            var return_data = hr.responseText;
            document.getElementById("status").innerHTML = return_data;
        }
    }
    
hr.send(vars);
document.getElementById("status").innerHTML = "processing ... ";

}
