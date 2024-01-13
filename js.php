<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script language= "javascript">

    </script>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
  body {
    color: red;
    padding: 20px;
    font-family: 'Arial', sans-serif;
    
}

header {
    background-image: radial-gradient(circle 311px at 8.6% 27.9%, rgba(62, 147, 252, 0.57) 12.9%, rgba(239, 183, 192, 0.44) 91.2%);
    display: flex;
    color: purple;
}

header nav button {
    background-color: purple;
    color: white;
    border: none;
    padding: 10px;
    margin: 5px;
    cursor: pointer;
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
}

header nav button:hover {
    background-color: darkpurple;
}

header nav button {
    /* ... */
    margin-right: 10px;
}

.container {
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9;
    padding: 15px;
    border-radius: 5px;
}

.hide {
    display: none;
}
header .logo img{
            width:80px;
            height:80px;
        }
 button{
    justify-content:space-around;
 }       

        
    </style>
</head>
<body>
<header>
    <div class="logo"><img src ="chic2.jpg"></div>
    <nav>
            <button class="hide" id="cat">CATALOGUE</button>
            <button id ="close">close</button>
            <button>COMPTE</button>
            <button>AVIS</button>
            <div class="container">
                <p class="lit">LITS</p>
                <p class="fauteuil">FAUTEUILS</p>
                <p class="luminaire">LUMINAIRES</p>
                <p class="table">TABLES A MANGER</p>
                <p class="bureau">BUREAUX</p>
                <p class="etagere">ETAGERES</p>
                <p class="armoire">ARMOIRES</p>
            </div>
            
    
    </nav>
</header>
<script type="text/javascript">
let cat = document.getElementById("cat");
let close = document.getElementById("close");
let container = document.querySelector(".container");

close.onclick = function(){
    container.classList.add('hide');
    close.classList.add('hide');
    cat.classList.remove('hide');
}

cat.onclick = function(){
    this.classList.add('hide');
    container.classList.remove('hide'); // Seulement .container, pas #cat
    close.classList.remove('hide');
}


</script>

</body>
</html>