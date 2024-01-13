<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panier</title>
    
    <style>
    body {
    background-image: url(pan3.jpg);
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}



h1 {
    color: #E72660;
    font-family: cursive;
    font-size: 40px;
    font-weight: bold;
    text-align: center;
    text-shadow: 5px 5px 5px white;
}

.products {
    margin-top: 20px;
    border-top: 1px navy;
    padding-top: 10px;
    margin-left:20px;
}

.product {
    margin-bottom: 15px;
}

.product h3 {
    color: navy;
    font-size: 18px;
}

        
    </style>
</head>
<body>


    <div class="container">
        <h1>DECOUVRIR VOTRE PANIER !</h1>
        <div id="panierContent" class="products">
          
        </div>
    </div>

    <script type="text/javascript">
        let produits = JSON.parse(localStorage.getItem("panier"));
        let panierContent = document.getElementById("panierContent");
        
        for (let i = 0; i < produits.length; i++) {
            let productDiv = document.createElement("div");
            productDiv.classList.add("product");
            let productName = document.createElement("h3");
            productName.textContent = produits[i];
            productDiv.appendChild(productName);
            panierContent.appendChild(productDiv);
        }
        //localStorage.clear();
    </script>
</body>
</html>
