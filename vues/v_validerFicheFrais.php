 <form action="index.php?uc=validFrais&action=selectionnerVisiteur" method="post">
        <div class="corpsForm">

            <p>

                <label for="lstFicheFrais" >Fiche :</label>
                <select id="lstFicheFrais" name="lstFicheFrais">
                    <?php
                    foreach ($lesFichesFrais as $uneFicheFrais) {
                        $id = $uneFicheFrais['id'];
                        $nom = $uneFicheFrais['nom'];
                        $prenom = $uneFicheFrais['prenom'];
                        $mois = $uneFicheFrais['mois'];
                        ?>
                        <option value="<?php echo $id . "/" . $mois; ?>"><?php echo $prenom . " " . $nom . " " . $mois ?></option>
                        <?php
                    }
                    ?>    
                                    
                </select>
            </p>
        </div>
        <div class="piedForm">
            <p>
                <input id="ok" type="submit" value="Valider" size="20" />
                <input id="annuler" type="reset" value="Effacer" size="20" />
            </p> 
        </div>
    </form>



