<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            color: navy;
            padding: 20px;
            font-family: 'Arial', sans-serif;
            margin :0px;
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
            margin-right: 10px;
            border-radius: 10px;
            padding :10px;
        }

        header nav button:hover {
            background-color: darkpurple;
        }

        header nav button a{
            text-decoration:none;
            color :white;
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

        header .logo img {
            width: 80px;
            height: 80px;
            padding:10px;
        }
        

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .product {
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .product img {
            width: 100%;
            height: auto;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        header nav{
            margin:10px auto;
        }
        header nav button{
            margin:10px 50px;
        }
       h3{
        color :purple;
       }

       input{
        font-family: bold;
        font-size: 15px;
       }
    </style>
</head>
<body>
<header>
    <div class="logo"><img src="chic2.jpg" alt="logo"></div>
    <nav>
        
        
        <button class="hide" id="cat">CATALOGUE</button>
        <button  id="close">close</button>
        <button><a href="panier.php">🛒PANIER</a></button>
        <button><a href="paiement.php">PAIEMENT</a></button>
        <div class="content">
                <p class="lit">LITS</p>
                <p class="fauteuil">FAUTEUILS</p>
                <p class="table">TABLES A MANGER</p>
                <p class="bureau">BUREAUX</p>
        </div>
    </nav>
</header>
<div class="container">
            <div class="products">
                <div class="product">
                    <img src="l.jpg" alt="Product 1">
                    <h3>LIT LUNAIRE ELEGANT</h3>
                    <p>
                    Plongez dans le luxe avec notre lit lunaire, doté d'une tête de lit capitonnée en velours doux et d'un cadre en bois massif. Son design contemporain et épuré et épuré crée une atmosphère apaisante</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'LIT LUNAIRE ELEGANT')">
                </div>
                <div class="product">
                    <img src="l2.jpg" alt="Product 2">
                    <h3>LIT NUITS ÉTOILEES</h3>
                    <p>
                    Transformez votre chambre en un sanctuaire de détente avec le lit Nuits Étoilées. Le cadre en métal forgé est orné de motifs subtils évoquant la magie des étoiles. La tête de lit rembourrée offre un confort supplémentaire, </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'LIT NUITS ÉTOILEES')">
                </div>
                <div class="product">
                    <img src="l3.jpg" alt="Product 2">
                    <h3>LIT BOHEME</h3>
                    <p>
                    Ajoutez une touche de bohème à votre espace avec notre lit chic. Les lignes organiques du cadre en bois recyclé et la tête de lit en macramé créent une ambiance décontractée et artistique, C'est le choix idéal pour ceux qui recherchent un style unique</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'LIT BOHEME')">
                </div>
                <div class="product">
                    <img src="l4.jpg" alt="Product 2">
                    <h3>LIT HORIZON</h3>
                    <p>Le Lit Horizon en Cuir :
                    Plongez dans le confort ultime avec le lit Horizon en cuir. Son cadre en acier robuste est revêtu de cuir haut de gamme, créant une esthétique moderne et sophistiquée.</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'LIT HORIZON')">
                </div>
                <div class="product">
                    <img src="l5.jpg" alt="Product 2">
                    <h3>LIT TEMPETE MARINE</h3>
                    <p>
                    Transformez votre chambre en un refuge côtier avec le lit Tempête Marine. Le cadre en bois blanchi évoque l'essence de la plage, tandis que la tête de lit rembourrée rappelle les vagues douces de l'océan.</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'LIT TEMPETE MARINE')">
                </div>
                <div class="product">
                    <img src="t1.jpeg" alt="Product 2">
                    <h3>TABLE A MANGER</h3>
                    <p>Détails :
                    Table de cuisine, table à manger, avec 3 pieds en fer forgé 78cm, rangement et organisation, 
                    table ronde 60 cm •	Modèle: Décoration
                    •	Taille (Longueur x Largeur x Hauteur cm): 60x60x80
                    •	Poids (kg): 2
                    •	Couleur: Bois brûler

                    </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'TABLE A MANGER')">
                </div>
                <div class="product">
                    <img src="t2.jpeg" alt="Product 2">
                    <h3>SALLE A MANGER</h3>
                    <p>Catégorie : Salle à manger, Table Matière : Fabriquée en MDF laminé de haute qualité et en acier enduit de poudre, cette table allie élégance et durabilité. Couleur : Le plateau est en marbre blanc, tandis que les pieds sont de couleur blanche. </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'SALLE A MANGER')">
                </div>
                <div class="product">
                    <img src="t3.jpeg" alt="Product 2">
                    <h3>FLAVITA</h3>
                    <p>FLAVIA Table à manger rectangulaire 180 cm avec un design contemporain et un style unique.
                    Catégorie : Table, Salle à manger
                    Matière : Mdf et Métal
                    Couleur : Noyer et noir
                    Hauteur : 75 cm
                    Longueur : 180 cm
                    Profondeur : 100 cm
                   
                 </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'FLAVITA')">
                </div>
                <div class="product">
                    <img src="t4.jpeg" alt="Product 2">
                    <h3>TEXAS</h3>
                    <p>TEXAS Table à manger rectangulaire 160 cm avec un design contemporain et un style unique.
                    Catégorie : Table, Salle à manger
                    Matière : Mdf et Métal
                    Couleur : chêne et noir
                    Hauteur : 76.5 cm
                    Longueur : 160 cm
                    Profondeur : 90 cm
                    </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'TEXAS')">
                </div>
                <div class="product">
                    <img src="t5.jpeg" alt="Product 2">
                    <h3>TABLE A MANGER</h3>
                    <p>Catégorie : Salle à manger, Table Matière : Fabriquée en MDF de qualité supérieure et en métal, cette table offre un mélange harmonieux de robustesse et d'esthétique. Couleur : De couleur noire, elle ajoute une note élégante à votre espace. </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'TABLE A MANGER')">
                </div>
                <div class="product">
                    <img src="n5.jpg" alt="Product 2">
                    <h3>SALON ROYAL</h3>
                    <p>Profitez de ce set de salon royal !
                     Le set de salon royal est un ensemble de mobilier d'extérieur luxueux qui comprend un canapé de 3 places, deux fauteuils d'une place pour chacun et une table assortie.
                    </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'SALON ROYAL')">
                </div>
                <div class="product">
                    <img src="n4.jpg" alt="Product 2">
                    <h3>CANAPE</h3>
                    <p>Profitez pleinement de vos moments de détente en famille ou entre amis avec le canapé aux dimensions généreuses (L. 195 x l. 80 x H. 65 cm)</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'CANAPE')">
                </div>
                <div class="product">
                    <img src="n3.jpg" alt="Product 2">
                    <h3>FAUTEUILS</h3>
                    <p>Il dispose de 4 fauteuils et une table basse. L'ensemble vous assure le confort nécessaire lors de vos moments de détente.Disponible en couleur anthracite, cet ensemble de la gamme ARGOS.</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'FAUTEUILS')">
                </div>
                <div class="product">
                    <img src="n2.jpg" alt="Product 2">
                    <h3>SALON</h3>
                    <p>Le set TARIFA au coloris marron et d’inspiration espagnole est fait pour vous.
                    Conçu pour 4 personnes, il embellira votre extérieur par son raffinement et son design harmonieux.
                    </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'SALON')">
                </div>
                <div class="product">
                    <img src="n1.jpg" alt="Product 2">
                    <h3>CANAPE</h3>
                    <p>La housse de coussin est équipée d'une fermeture éclair, amovible et lavable. De plus, cette chaise d'extérieur est facile à déplacer grâce à sa construction légère</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'CANAPE')">
                </div>
                <div class="product">
                    <img src="b1.jpeg" alt="Product 1">
                    <h3>BUREAU D'ECRITURE</h3>
                    <p>Gamme de produits: nordique deco
                    Modèle: bureau d'écriture pour chambre à coucher
                    Pays de production: Norway
                    Taille (Longueur x Largeur x Hauteur cm): 120x50x74
                    Poids (kg): 5
                    </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'BUREAU D ECRITURE')">
                </div>
                <div class="product">
                    <img src="b2.jpeg" alt="Product 1">
                    <h3>BUREAU ALBANO</h3>
                    <p> À la fois classique et intemporel, notre bureau Albano est également très facile d’entretien grâce à son revêtement mélaminé.
                • Les étagères pratiques garantissent un ordre optimal et créent plus d'espace sur le plan de travail.
                </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'BUREAU ALBANO')">
                </div>
                <div class="product">
                    <img src="b3.jpeg" alt="Product 1">
                    <h3>BUREAU ELEGANT</h3>
                    <p>Ce bureau s'associera à n'importe quel meuble et décoration de la chambre à coucher de votre enfant ou votre espace de travail.
                    Élégant et unique, ce bureau donnera une touche spéciale et des accents originaux et naturels
                    </p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'BUREAU ELEGANT')">
                </div>
                <div class="product">
                    <img src="b4.jpeg" alt="Product 1">
                    <h3>BUREAU MULTIRANGEMENT</h3>
                    <p>Le bureau multirangement MINISTER en chêne gris comporte un réhausse optionnel avec des niches, des étagères et d’une petite porte coulissante. Pour la partie inférieure il y a un espace central sous le plateau pour le clavier</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'BUREAU MULTIRANGEMENT')">
                </div>
                <div class="product">
                    <img src="b5.jpeg" alt="Product 1">
                    <h3>BUREAU DE DIRECTION</h3>
                    <p>Design parfait et confort assuré avec le bureau de direction CORE !
                    La gamme CORE vous propose ce magnifique bureau luxueux au coloris Chêne et Oak foncé.
                    Faites-vous plaisir et offrez-vous ce bureau directionnel luxueux !</p>
                    <input type="submit" value="Ajouter au panier" class="panier" onclick="ajouter(this, 'BUREAU DE DIRECTION')">
                </div>
            </div>
        </div>
<script type="text/javascript">
    let cat = document.getElementById("cat");
    let close = document.getElementById("close");
    let content = document.querySelector(".content");

    cat.onclick = function () {
        this.classList.add('hide');
        content.classList.remove('hide');
        close.classList.remove('hide');
    }
    close.onclick = function () {
        content.classList.add('hide');
        close.classList.add('hide');
        cat.classList.remove('hide');
    }
    
    
    function ajouter(button, productName) {
        ajouterAuPanier(productName);

        if (button.value == "Ajouter au panier")
            button.value = "Produit ajouté";
        else if (button.value == "Produit ajouté")
            button.value = "Produit retiré";
        else if (button.value == "Produit retiré")
            button.value = "Produit ajouté";
    }
    function ajouterAuPanier(productName) {
        // Vérifiez si le localStorage est pris en charge par le navigateur
        if (typeof(Storage) !== "undefined") {
            // Récupérez le tableau de produits depuis le localStorage
            let produits = JSON.parse(localStorage.getItem("panier")) || [];

            // Ajoutez le nom du produit à la liste
            produits.push(productName);

            // Enregistrez le tableau mis à jour dans le localStorage
            localStorage.setItem("panier", JSON.stringify(produits));
        } else {
            console.error("LocalStorage n'est pas pris en charge par ce navigateur.");
        }
    }
 
</script>
</body>
</html>

