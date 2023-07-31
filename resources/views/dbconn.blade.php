<html>
    <head><title>Laravel and mysql DB</title></head>
    <body>
        <div>
            <?php
                if(DB::connection()->getPdo()){
                    echo "connected successfully and its name: " . DB::connection()->getDatabaseName();
                }
            ?>
        </div>

        <div>
            <?php
                if(DB::connection()->getPdo()){
                    $products = DB::table('product')->get();
 
                    foreach ($products as $product)
                    {
                        echo "id: " . $product->id . ", name: " . $product->name;
                    }
                }
            ?>
        </div>

    </body>
</html>