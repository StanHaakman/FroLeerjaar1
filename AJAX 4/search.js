function showList(str, typeSearch) { // eerste dropdownlist
    console.log(typeSearch);
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        if (window.XMLHttpRequest) {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if(typeSearch == "list"){
                    var myArr = JSON.parse(xmlhttp.responseText);
                    printArray(myArr);
                }
                if(typeSearch == "answer"){
                    document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                }
            }
        }
        xmlhttp.open("GET","getdata.php?q="+str+"&type="+typeSearch,true);
        xmlhttp.send();
    }
}
//===============================================
function printArray(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
//console.log(arr[i]);
        out += '<span id="'  + arr[i] + '" onClick="showList(this.id,\'answer\')">'+ arr[i] + '</span><br>';
    }
    document.getElementById("txtHint").innerHTML = out;

}
