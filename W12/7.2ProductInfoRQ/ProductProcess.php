<html>
    <head><title>Product Information Results</title></head>
    <body>
        <?php
        
            $description = $_POST['description'];
            $code = $_POST['code'];
            $products = array(
                'AB01'=>'25Pound Sledgehammer',
                'AB01'=>'Extra Strong Nails',
                'AB03'=>'Super Adjustable Wrench',
                'AB04'=>'3-Speed Electric Screwdriver'
            );
            if(preg_match("/boat|plane/i",$description)){
                echo 'Sorry, we do not sell boats or planes anymore';
            }elseif(preg_match('/^AB/',$code)){
                if(isset($products["$code"])){
                    echo "Code $code Description: $products[$code]";
                }else{
                    echo 'Sorry, product code not found';
                }
            }else{
                echo 'Sorry, all our product codes start with "AB"';
            }
        ?>
    </body>
</html>