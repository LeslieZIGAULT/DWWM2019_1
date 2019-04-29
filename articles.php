<?php include('header.php');?>

<?php
echo "<h1 class='text-center'>Vos Articles</h1>"
?>

<form action="" method="get">

    <!--SELECTION PRODUIT-->
    <div class="form-group">
        <label for="nom">Nom du produit</label>
        <input type="text" name="produit" class="form-control">
    </div>

    <!--L'UNITE DU PRODUIT, BLOQUER LES UNITES NON PRIS EN CHARGE-->

    <div class="form-group">
        <label for="unit">Unité</label>
        <select name="unite" id="unit" class="form-control">
            <option value="Sable">M³</option>
            <option value="Sable">Kg</option>
            <option value="Sable">L</option>
        </select>
    </div>

    <!--LA QUANTITE-->

    <div class="form-group">
        <label for="quantity">Quantité</label>
        <select name="quantity" id="quantity" class="form-control">
            <option value="Sable">1</option>
            <option value="Sable">2</option>
            <option value="Sable">3</option>
            <option value="Sable">4</option>
            <option value="Sable">5</option>
            <option value="Sable">6</option>
            <option value="Sable">7</option>
            <option value="Sable">8</option>
            <option value="Sable">9</option>
            <option value="Sable">10</option>
        </select>
    </div>


    <!--ENVOYER UNE IMAGE-->

    <div class="form-group">
        <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <label class="custom-file-label" for="validatedCustomFile">Selectionnez un fichier...</label>
    </div>
    </div>

    <!--BOUTON VALIDER SUBMIT-->
    <button type="submit" class="btn btn-outline-primary mb-2">Sauvegarder</button>
</form>



<?php


?>

<?php include('footer.html');?>

<!--Il est préférable de mettre le script en fin de document car le footer est entièrement chargé par le navigateur
document.getElementById permet de 
-->
<script>
document.getElementById('footer').style.background = '#1b5e20';
</script>
