
    <div class="conteneur">
        <h3>LISTE DES OUVRAGES</h3>
        <?php
        $ouvrages=[
            ["code"=>1,"titre"=>"l amour d une femme","date_edition"=>"2005","id_auteurs"=>1,"id_rayons"=>1],
            ["code"=>2,"titre"=>"ange et demon","date_edition"=>"1977","id_auteurs"=>2,"id_rayons"=>2], 
            ["code"=>3,"titre"=>"le cyclope","date_edition"=>"1980","id_auteurs"=>3,"id_rayons"=>1],
            ["code"=>4,"titre"=>"soy luna","date_edition"=>"2004","id_auteurs"=>4,"id_rayons"=>2],    
            ["code"=>5,"titre"=>"ZARA","date_edition"=>"1992","id_auteurs"=>5,"id_rayons"=>2], 
        ];
        ?>
        <table>
            <tr>
                <th>CODE</th>
                <th>TITRE</th>
                <th>DATE D'EDITION</th>
                <th>AUTEUR</th>
            </tr>
            <?php foreach ($ouvrages as $val):  ?>
                        <tr>
                            <th><?php echo($val["code"]); ?> </th>
                            <th> <?php echo($val["titre"]); ?></th>
                            <th><?php echo($val["date_edition"]); ?></th>
                            <th><?php echo($val["id_auteurs"]); ?></th>
                            <th><?php echo($val["id_rayons"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
