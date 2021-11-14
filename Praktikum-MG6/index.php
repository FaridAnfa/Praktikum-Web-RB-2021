<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Daftar Belanjaan</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
        <h1 align="center">Simple Shopping Calculation WEB</h1> 

<center>
            
        <div>            
            <form action="belanja.php" method="POST" id="belanja" name="belanja" enctype="multipart/form">
                <label for="">Mangga Rp 15.000/kg </label>
                <input type="number" id="mangga" onchange="setValue()" name="mangga"> <br>
                <label for="">Jambu Rp 13.000/kg </label>
                <input type="number" id="jambu" onchange="setValue()" name="jambu"> <br>
                <label for="">Salak Rp 10.000/kg </label>
                <input type="number" id="salak" onchange="setValue()" name="salak"> <br>
                <label for="">Total Harga Buah : </label>
                <input type="text" id="total" name="total" readonly> <br>
                <button type="submit" name="">Submit</button>
            </form>
        </div>

</center>

</body>

<script>
    function setValue(){
        var total = document.getElementById("total");
        var mangga = document.getElementById("mangga").value * 15000;
        var jambu = document.getElementById("jambu").value * 13000;
        var salak = document.getElementById("salak").value * 10000;
        console.log(mangga + jambu + salak);
        var hasil = mangga + jambu + salak;
        total.value = hasil;
    }
    
</script>

</html>