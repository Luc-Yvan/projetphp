
    <div class="conteneur">
        <h3>LISTE DES RAYONS</h3>
        <?php
        $rayons=[
            ["id"=>1,"type"=>"histoire"],
            ["id"=>2,"type"=>"geographie"],
            ["id"=>3,"type"=>"litterature"],
            ["id"=>4,"type"=>"sciences humaines"],
    
        ];
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>TYPE</th>
            </tr>
            <?php foreach ($rayons as $val):  ?>
                        <tr>
                            <th><?php echo($val["id"]); ?> </th>
                            <th> <?php echo($val["type"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>
