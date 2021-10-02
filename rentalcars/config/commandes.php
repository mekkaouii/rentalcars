<?php
function add($image, $brand, $price, $desc)
{
    if(require("connection.php"))
    {
        $req = $access->prepare("INSERT INTO CARS(image, brand, price, description) VALUES('$image', '$brand', $price, '$desc')");

        $req->execute(array($image, $brand, $price, $desc));

        $req->closeCursor();


    }
}

function display()
{

    if(require("connection.php"))
    {
        $req = $access->prepare("SELECT * FROM cars ORDER BY id DESC" );

        $req->execute();
        
        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
        
        $req->closeCursor();


    }

}

function delete($id)
{

    if(require("connection.php"))
    {
        $req = $access->prepare("DELETE FROM cars WHERE id =?" );

        $req->execute(array($id));
        
        $req->closeCursor();
    }

}



