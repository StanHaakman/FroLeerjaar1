<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ajax landen</title>
</head>

<script src="search.js">
    searchCountry = document.getElementById('searchCountry');
    searchCountry.addEventListener('keyup', function () {
        showList(searchCountry,'list');
    });
</script>
<body>
<style>

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table, td, th {
        border: 1px solid black;
        padding: 5px;
    }

    th {text-align: left;}
</style>


<p>
    <img src="http://ma-web.nl/static/vector/Logo_blok.svg" width="30">
    Ajax 4: Zoek landen
</p>
<form action="getdata.php?q" >
<input type="text" name="search" id="searchCountry" onkeyup="showList(this.value, 'list')" placeholder="Zoek een land">
</form>
<br>
<div id="txtHint">Hier komt de list</div>
</body>
</html>