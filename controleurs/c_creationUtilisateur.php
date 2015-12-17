<?PHP

    if (isset($_POST['valider']))
    {
        extract($_REQUEST);
        
        switch ($action)
        {
            case champsRemplis:
                               
                verifierUtilisateur($id, $nom, $prenom, $codePostal, $ville, $date);
                
                if (nbErreurs() === 0)
                {
                    $login = strtolower(substr($prenom,0,1).$nom);

                    $mdp = "";
                    $caractere = "abcdefghijklmnopqrstuvwxyz0123456789";

                    for ($i = 0; $i < 5; $i++) 
                    {
                        $mdp .= $caractere[rand(0,35)];
                    }
                    
                    if(empty(($pdo->verifierUtilisateur($id))))
                    {
                        $pdo->creerUtilisateur($id, $nom, $prenom, $adresse, $codePostal, $ville, $date, $login, $mdp);
                        include("vues/v_identifiants.php");
                    }
                    
                    else
                    {
                        ajouterErreur("Utilisateur déjà existant","creationUtilisateur");
                        include("vues/v_creationUtilisateur.php");
                    }
                }
                
                break;
        }
    }
    
    else
    {
        include("vues/v_creationUtilisateur.php");
    }
    
    
?>