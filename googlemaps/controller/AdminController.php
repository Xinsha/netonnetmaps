<?php
//deklarerar min jsonfil och arrdata som håller en tom array för den nya butiken som ska in
$myFile = "./data.json";
$arr_data = array(); // create empty array


//skapar upp en array med namn som stämmer överens med jsonfilen så att den fyller ut rätt data

        $feature=array(
            "type"=>"Feature",
            "geometry"=>array(
                "type"=>"Point",
                "coordinates"=>array(floatval($_POST['lng']),
                   floatval($_POST['lat']))
            ),
                "properties"=>array(
                    "butik"=>$_POST["butik"],
                    "bild"=>$_POST["bild"],
                    "fakta"=>$_POST["fakta"],
                    "sida"=>$_POST["sida"],
                    "idt"=>$_POST["idt"],
					"vader"=>$_POST["vader"]
                )

        );
//pushar in data från en array till jsonfilen, encodar om det så att man kan få ut jsondata
        $jsondata = file_get_contents('../data.json');
        $arr_data = json_decode($jsondata, true);
        array_push($arr_data['features'], $feature);

        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);

        file_put_contents('../data.json', $jsondata);

   // }




?>