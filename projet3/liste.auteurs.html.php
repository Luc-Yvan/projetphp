
    <div class="conteneur">
        <h3>LISTE DES AUTEURS</h3>
    <?php    $auteurs=[
        ["id"=>1,"nom"=>"GUEDON","prenom"=> "DESIRE","profession"=>"DIRECTEUR"],
        ["id"=>2,"nom"=>"MASSARD","prenom"=> "ANDRE","profession"=>"directeur"],
        ["id"=>3,"nom"=>"toto","prenom"=> "tata","profession"=>"Ecrivain"],
        ["id"=>4,"nom"=>"Dubosc","prenom"=> "Alain","profession"=>"Entrepreneur"],
        ["id"=>5,"nom"=>"ARON","prenom"=> "Pedri","profession"=>"footbaleur"],           
    ];
    ?>
        <table>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>PROFESSION</th>
            </tr>
            <?php foreach ($auteurs as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["nom"]); ?></th>
                            <th><?php echo($val["prenom"]); ?></th>
                            <th><?php echo($val["profession"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
