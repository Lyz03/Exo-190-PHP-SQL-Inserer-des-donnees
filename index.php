<?php

/**
 * Pour cet exercice, vous allez utiliser la base de données table_test_php créée pendant l'exo 189
 * Vous utiliserez également les deux tables que vous aviez créées au point 2 ( créer des tables avec PHP )
 */

try {
    /**
     * Créez ici votre objet de connection PDO, et utilisez à chaque fois le même objet $pdo ici.
     */
    $pdo = new PDO('mysql:host=localhost;dbname=table_test_php;charset=utf8', 'root', '');

    /**
     * 1. Insérez un nouvel utilisateur dans la table utilisateur.
     */

    // TODO votre code ici.
    $sql = "
        INSERT INTO user (name, first_name, email, password, address, zip_code, contry) 
        VALUES ('name1', 'firstname1', 'email1@mail.com', 'P@ssseWord', 'adresse', '00000', 'country1');
    ";

    $pdo->exec($sql);

    /**
     * 2. Insérez un nouveau produit dans la table produit
     */

    // TODO votre code ici.
    $sql = "
        INSERT INTO product (title, price, short_description, long_description) 
        VALUES ('titre1', 10.90, 'the short description nb1', 'the loooooooooooooong description nb1');
    ";

    $pdo->exec($sql);

    /**
     * 3. En une seule requête, ajoutez deux nouveaux utilisateurs à la table utilisateur.
     */

    // TODO Votre code ici.
    $sql = "
        INSERT INTO user (name, first_name, email, password, address, zip_code, contry) 
        VALUES ('name2', 'firstname2', 'email2@mail.com', 'P@seWoRd', 'adresse2', '00002', 'country2'),
               ('name3', 'firstname3', 'email3@mail.com', 'P@s€WoRd', 'adresse3', '00003', 'country3');
    ";

    $pdo->exec($sql);

    /**
     * 4. En une seule requête, ajoutez deux produits à la table produit.
     */

    // TODO Votre code ici.
    $sql = "
        INSERT INTO product (title, price, short_description, long_description) 
        VALUES ('titre2', 10.60, 'the short description nb2', 'the loooooooooooooong description nb2'),
               ('titre3', 1.50, 'the short description nb3', 'the loooooooooooooong description nb3');
    ";

    $pdo->exec($sql);

    /**
     * 5. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux utilisateurs dans la table utilisateur.
     */

    // TODO Votre code ici.
    $pdo->beginTransaction();
    $insertUser = 'INSERT INTO user (name, first_name, email, password, address, zip_code, contry) VALUES ';
    $sql1 = $insertUser . "('name4', 'firstname4', 'email4@mail.com', 'P@s€WooRd', 'adresse4', '00004', 'country4')";

    $pdo->exec($sql1);

    $sql2 = $insertUser . "('name5', 'firstname5', 'email5@mail.com', 'P@s€WooRdd', 'adresse5', '00005', 'country5')";

    $pdo->exec($sql2);

    $sql3 = $insertUser . "('name6', 'firstname6', 'email6@mail.com', 'P@s€WoooRd', 'adresse6', '00006', 'country6')";

    $pdo->exec($sql3);

    $pdo->commit();

    /**
     * 6. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux produits dans la table produit.
     */

    // TODO Votre code ici.
    $pdo->beginTransaction();
    $insertUser = 'INSERT INTO product (title, price, short_description, long_description) VALUES ';
    $sql1 = $insertUser . "('titre4', 1.55, 'the short description nb4', 'the loooooooooooooong description nb4')";

    $pdo->exec($sql1);

    $sql2 = $insertUser . "('titre5', 17.50, 'the short description nb5', 'the loooooooooooooong description nb5')";

    $pdo->exec($sql2);

    $sql3 = $insertUser . "('titre6', 18.50, 'the short description nb6', 'the loooooooooooooong description nb6')";

    $pdo->exec($sql3);

    $pdo->commit();
}
catch (PDOException $e) {
    die();
}