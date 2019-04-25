<?php include('header.php');?>


<?php 

/*
<form>
  Nom:<br>
    <input type="text" name="Nom">
      <br>
  Unité:<br>
    <input type="text" name="Unité">
      
  Quantité:<br>
    <input type="text" name="Quantité">
      <br>
      
    <input type="submit" value="Ajouter image"> 
      <br><br>
    <input type="submit" value="Valider">
</form> 
  */    
?>

<form action="" method="get">
    <fieldset>
        <legend>Completez ce formulaire</legend>

        <!--SELECTION PRODUIT-->
        <label for="nom">Nom du produit</label>
        <select name="nom" id="">
            <option value="Sable">Sable</option>
            <option value="Sable">Gravier</option>
            <option value="Sable">Ciment</option>
            <option value="Sable">Mortier</option>
        </select> <br>

        <!--L'UNITE DU PRODUIT, BLOQUER LES UNITES NON PRIS EN CHARGE-->

        <label for="unit">Unité</label>
        <select name="unit" id="">
            <option value="Sable">M³</option>
            <option value="Sable">Kg</option>
            <option value="Sable">L</option>
        </select> <br>

        <!--LA QUANTITE-->

        <label for="quantity">Quantité</label>
        <select name="quantity" id="">
            <option value="Sable">1</option>
            <option value="Sable">2</option>
            <option value="Sable">3</option>
        </select> <br>
        
        
        <!--ENVOYER UNE IMAGE-->
        
        <input type="file"> <br>
        
        <!--BOUTON VALIDER SUBMIT-->
        <input type="submit" value="Sauvegarder">



    </fieldset>
</form>

<?php include('footer.html');?>
