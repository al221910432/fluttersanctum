<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $prod = new producto(); 

        $prod->id="1";
        $prod->clave="76865";
        $prod->producto="Rancheritos";
        $prod->existencias="50";
        $prod->precio_unitario="10.7";
        $prod->unidad_de_medida="bolsa";
        $prod->estatus="activo";

        $prod->save();

        $prod2 = new producto(); 

        $prod2->id="2";
        $prod2->clave="87687";
        $prod2->producto="Emperador Chocolate";
        $prod2->existencias="70";
        $prod2->precio_unitario="13.7";
        $prod2->unidad_de_medida="caja";
        $prod2->estatus="activo";

        $prod2->save();

        $prod3 = new producto(); 

        $prod3->id="3";
        $prod3->clave="96324796";
        $prod3->producto="Frijol";
        $prod3->existencias="10";
        $prod3->precio_unitario="10.0";
        $prod3->unidad_de_medida="kilogramo";
        $prod3->estatus="activo";

        $prod3->save();

        $prod4 = new producto(); 

        $prod4->id="4";
        $prod4->clave="87987";
        $prod4->producto="Ameyal kiwi";
        $prod4->existencias="20";
        $prod4->precio_unitario="30";
        $prod4->unidad_de_medida="paquete";
        $prod4->estatus="activo";

        $prod4->save();

        $prod5 = new producto(); 

        $prod5->id="5";
        $prod5->clave="983434";
        $prod5->producto="Bacardi";
        $prod5->existencias="100";
        $prod5->precio_unitario="175.10";
        $prod5->unidad_de_medida="caja";
        $prod5->estatus="activo";

        $prod5->save();

        $prod6 = new producto(); 

        $prod6->id="6";
        $prod6->clave="38749834";
        $prod6->producto="Cigarros Marlboro";
        $prod6->existencias="50";
        $prod6->precio_unitario="56.7";
        $prod6->unidad_de_medida="paquete";
        $prod6->estatus="activo";

        $prod6->save();

        $prod7 = new producto(); 

        $prod7->id="7";
        $prod7->clave="984729834";
        $prod7->producto="Takis";
        $prod7->existencias="50";
        $prod7->precio_unitario="12.7";
        $prod7->unidad_de_medida="paquete";
        $prod7->estatus="activo";

        $prod7->save();

        $prod8 = new producto(); 

        $prod8->id="8";
        $prod8->clave="9382744";
        $prod8->producto="Maruchan";
        $prod8->existencias="170";
        $prod8->precio_unitario="100";
        $prod8->unidad_de_medida="paquete";
        $prod8->estatus="activo";

        $prod8->save();

        $prod9 = new producto(); 

        $prod9->id="9";
        $prod9->clave="89492384";
        $prod9->producto="charrones";
        $prod9->existencias="40";
        $prod9->precio_unitario="10.0";
        $prod9->unidad_de_medida="bolsa";
        $prod9->estatus="activo";

        $prod9->save();

        $prod10 = new producto(); 

        $prod10->id="10";
        $prod10->clave="9874392487";
        $prod10->producto="TecateNegra";
        $prod10->existencias="50";
        $prod10->precio_unitario="30.07";
        $prod10->unidad_de_medida="paquete";
        $prod10->estatus="activo";

        $prod10->save();

        $prod11 = new producto(); 

        $prod11->id="11";
        $prod11->clave="873439";
        $prod11->producto="Pasta de dientes";
        $prod11->existencias="35";
        $prod11->precio_unitario="70.7";
        $prod11->unidad_de_medida="paquete";
        $prod11->estatus="activo";

        $prod11->save();

        $prod12 = new producto(); 

        $prod12->id="12";
        $prod12->clave="8967930";
        $prod12->producto="Papel de baño petalo";
        $prod12->existencias="0";
        $prod12->precio_unitario="13.7";
        $prod12->unidad_de_medida="caja";
        $prod12->estatus="inactivo";

        $prod12->save();

        $prod13 = new producto(); 

        $prod13->id="13";
        $prod13->clave="8764289236";
        $prod13->producto="Moztasa Hellmans";
        $prod13->existencias="10";
        $prod13->precio_unitario="40.50";
        $prod13->unidad_de_medida="paquete";
        $prod13->estatus="activo";

        $prod13->save();

        $prod14 = new producto(); 

        $prod14->id="14";
        $prod14->clave="7649264";
        $prod14->producto="Catsum La costeña";
        $prod14->existencias="50";
        $prod14->precio_unitario="70";
        $prod14->unidad_de_medida="paquete";
        $prod14->estatus="activo";

        $prod14->save();

        $prod15 = new producto(); 

        $prod15->id="15";
        $prod15->clave="987432472";
        $prod15->producto="Doritos Toro";
        $prod15->existencias="0";
        $prod15->precio_unitario="12.0";
        $prod15->unidad_de_medida="bolsa";
        $prod15->estatus="inactivo";

        $prod15->save();

        $prod16 = new producto(); 

        $prod16->id="16";
        $prod16->clave="9763419";
        $prod16->producto="Cigarros Lucky Strike";
        $prod16->existencias="10";
        $prod16->precio_unitario="55.0";
        $prod16->unidad_de_medida="paquete";
        $prod16->estatus="activo";

        $prod16->save();

        $prod17 = new producto(); 

        $prod17->id="17";
        $prod17->clave="878743207";
        $prod17->producto="Jabon Zote";
        $prod17->existencias="70";
        $prod17->precio_unitario="78.70";
        $prod17->unidad_de_medida="paquete";
        $prod17->estatus="activo";

        $prod17->save();

        $prod18 = new producto(); 

        $prod18->id="18";
        $prod18->clave="784029347";
        $prod18->producto="Jugo manzana Jumex";
        $prod18->existencias="50";
        $prod18->precio_unitario="170";
        $prod18->unidad_de_medida="paquete";
        $prod18->estatus="activo";

        $prod18->save();

        $prod19 = new producto(); 

        $prod19->id="19";
        $prod19->clave="8793287";
        $prod19->producto="Salsa Valentina";
        $prod19->existencias="20";
        $prod19->precio_unitario="100";
        $prod19->unidad_de_medida="paquete";
        $prod19->estatus="activo";

        $prod19->save();

        $prod20 = new producto(); 

        $prod20->id="20";
        $prod20->clave="807349";
        $prod20->producto="Caguama Corona";
        $prod20->existencias="300";
        $prod20->precio_unitario="350";
        $prod20->unidad_de_medida="Caja";
        $prod20->estatus="activo";

        $prod20->save();


    }
}
