<?php

use App\Plato;
use App\Horario;
use App\Contactano;
use App\Ingrediente; 
use Illuminate\Database\Seeder;

class PlatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plato::truncate();
        Ingrediente::truncate();
        DB::table('asigne_ingredientes')->truncate();
        Horario::truncate();
        Contactano::truncate();    

        Horario::create([
 			'diadesde' => 'Lunes',
 			'diahasta' => 'Viernes',
 			'horadesde' => '1:00 pm',
 			'horahasta' => '10:00 pm'
        ]);        
		
		Horario::create([
 			'diadesde'=>'Sabados',
 			'diahasta' => 'Domingos',
 			'horadesde' => '2:00 pm',
 			'horahasta' => '11:59 pm'
        ]);

        Contactano::create([
 			'N_telefono'=>'+56 967 123 456'
        ]);        
        
        Contactano::create([
 			'N_telefono'=>'+56 967 173 953'
        ]);        

 		Ingrediente::create([
 			//1
 			'nombre'=>'Arroz Shari'
        ]);
        Ingrediente::create([
 			//2
 			'nombre'=>'Langostinos apanados'
        ]);
        Ingrediente::create([
 			//3
 			'nombre'=>'Queso Filadelfia'
        ]);
        Ingrediente::create([
 			//4
 			'nombre'=>'Queso Filadelfia'
        ]);
        Ingrediente::create([
 			//5
 			'nombre'=>'Cibule'
        ]);
        Ingrediente::create([
 			//6
 			'nombre'=>'Salmon'
        ]);
        Ingrediente::create([
 			//7
 			'nombre'=>'kanikama'
        ]);
        Ingrediente::create([
 			//8
 			'nombre'=>'Palta'
        ]);
        Ingrediente::create([
 			//9
 			'nombre'=>'Pollo Teriyaki'
        ]);
        Ingrediente::create([
 			//10
 			'nombre'=>'Apando en Panko'
        ]);
        Ingrediente::create([
 			//11
 			'nombre'=>'Pepino'
        ]);
        Ingrediente::create([
 			//12
 			'nombre'=>'Piña'
        ]);
        Ingrediente::create([
 			//13
 			'nombre'=>'Salsa Dinamita'
        ]);
        Ingrediente::create([
 			//14
 			'nombre'=>'Pimenton Ahumado'
        ]);
        Ingrediente::create([
 			//15
 			'nombre'=>'Champiñon Salteado conAceite de Sesamo'
        ]);
        Ingrediente::create([
 			//16
 			'nombre'=>'Mix de Frutos Secos'
        ]);
        Ingrediente::create([
 			//17
 			'nombre'=>'10 uni. Pollo teriyaki: pollo teriyaki, queso crema, apanado en panko y cebollín'
        ]);
        Ingrediente::create([
 			//18
 			'nombre'=>'10 uni. kanikama Roll: kanikama, queso crema, apanado en panko y cebollín'
        ]);
        Ingrediente::create([
 			//19
 			'nombre'=>'10 uni. Camaron: langostinos, queso crema y cibulet apanado en panko'
        ]);
        Ingrediente::create([
 			//20
 			'nombre'=>'10 uni. Filadelfia Roll: salmón, queso crema,  topping sésamo blanco y negro'
        ]);
        Ingrediente::create([
 			//21
 			'nombre'=>'10 uni. Ahumado: Queso Crema + pimentón ahumado'
        ]);
        Ingrediente::create([
 			//22
 			'nombre'=>'10 uni. Champicrem: Queso crema + champiñón'
        ]);
        Ingrediente::create([
 			//23
 			'nombre'=>'10 uni. Palta teriyaki: pollo teriyaki + palta + env en cibulet'
        ]);
        Ingrediente::create([
 			//24
 			'nombre'=>'10 uni.  Salmón abokado: salmón, palta y topping sésamo blanco y negro'
        ]);
        Ingrediente::create([
 			//25
 			'nombre'=>'10 uni.  Camapal: Camaron + palta  env en cibulet'
        ]);
        Ingrediente::create([
 			//26
 			'nombre'=>'10 uni. California Surimi, pepino, palta y cobertura de masago.'
        ]);
        Ingrediente::create([
 			//27
 			'nombre'=>'10 uni. Piñasec: Queso crema, frutos y piña'
        ]);
        Ingrediente::create([
 			//28
 			'nombre'=>'10 uni. Yakuza Roll: Queso crema, camarón apanado, con cobertura de palta y sésamo blanco.'
        ]);
        Ingrediente::create([
 			//29
 			'nombre'=>'Sesamo Blanco'
        ]);
        Ingrediente::create([
 			//30
 			'nombre'=>'Sesamo Negro'
        ]);
        Ingrediente::create([
 			//31
 			'nombre'=>'Surimi'
        ]);
        Ingrediente::create([
 			//32
 			'nombre'=>'Masago'
        ]);
        Ingrediente::create([
 			//33
 			'nombre'=>'10 uni. Crazy Roll: queso crema, camarón apanado y topping de surimi y salsa dinamita.'
        ]);
        Ingrediente::create([
 			//34
 			'nombre'=>'10 uni. Furay Roll: salmón, queso crema, apanado en panko y cebollín'
        ]);
        Ingrediente::create([
 			//35	
 			'nombre'=>'Alga Nori'
        ]);
        
        
        Plato::create([
        	//1
        	 'frase' => 'Rico y Sabroso',
        	 'descrip_corta' => 'El ciboulette con sabor cálido, fresco y similar a la cebolla es ese plus atinado al plato',
        	 'frasef' => 'Con sabor discreto ligeramente salado y con un toque acido muy sutil el Queso Philadelphia hace conjunto',
        	 'nombre_plato' =>'Pollo Teriyaki hot',
        	 'descrip_histo'=>'La mescla perfecta con una proteína genial, la técnica de cómo prepararlo es lo que hace este relleno su nombre con un contexto agridulce no muy acentuado y a la vez equilibrado le da a este roll un balance perfecto.',
        	 'precio'=>3399,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/pollot.jpg'
        ]);


        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>1,
        	'ingre_id' =>3
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>1,
        	'ingre_id' =>9
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>1,
        	'ingre_id' =>10
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>1,
        	'ingre_id' =>1
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>1,
        	'ingre_id' =>4
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>1,
        	'ingre_id' =>35
        ]);
        

        Plato::create([
        	//2
        	 'frase' => 'Cremoso y Crocante',
        	 'descrip_corta' => 'Tiene un relleno estupendo, lo cremoso del Queso Philadelphia con sus características únicas',
        	 'frasef' => 'El Salmon, un alimento del mar que sumado al Ciboulette finalmente genera un producto que debes probar.',
        	 'nombre_plato' =>'Furay Roll hot',
        	 'descrip_histo'=>'Un Roll frito lleno de sabores ricos y texturas agradables al paladar, un plato irresistible con combinaciones que te van a sorprender. La mescla de harina, bañado en huevo y cubierto de panko le da ese toque y color característico que al verlo sabes que te encantara.',
        	 'precio'=>4999,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/furay.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>2,
        	'ingre_id' =>1
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>2,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>2,
        	'ingre_id' =>3
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>2,
        	'ingre_id' =>6
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>2,
        	'ingre_id' =>10
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>2,
        	'ingre_id' =>4
        ]);
        

        Plato::create([
        	//3
        	 'frase' => 'Suave y Justo',
        	 'descrip_corta' => 'Lo versátil del Queso Philadelphia hace que se compacten los sabores en uno.',
        	 'frasef' => 'La unión del ciboulette es la guinda a este plato.',
        	 'nombre_plato' =>'Kanikama Roll hot',
        	 'descrip_histo'=>'El sabor del cangrejo lo balanceado le da paso a los otros ingredientes que puedan lucirse haciendo esto un plato donde puedes sentir todos los sabores sin que se te escape alguno de tu mente ni paladar.',
        	 'precio'=>3280,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/furay.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>3,
        	'ingre_id' =>1
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>3,
        	'ingre_id' =>7
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>3,
        	'ingre_id' =>35
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>3,
        	'ingre_id' =>3
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>3,
        	'ingre_id' =>4
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>3,
        	'ingre_id' =>10
        ]);

        Plato::create([
        	//4
        	 'frase' => 'Intenso y fascinante',
        	 'descrip_corta' => 'Lo crocante con ese toque dulce del Arroz da muchas ganas de seguir comiendo.',
        	 'frasef' => 'La suma de todos los ingredientes hace un plato único.',
        	 'nombre_plato' =>'Camaron Roll hot',
        	 'descrip_histo'=>'Con una preparación única te traemos este crustáceo envuelto en una tempura dándole una textura aún más consistente y recordable, combinado con el Arroz Shari al paladar le das un encuentro muy grato.',
        	 'precio'=>3750,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/furay.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>4,
        	'ingre_id' =>1
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>4,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>4,
        	'ingre_id' =>10
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>4,
        	'ingre_id' =>2
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>4,
        	'ingre_id' =>4
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>4,
        	'ingre_id' =>3
        ]);

        Plato::create([
        	//5
        	 'frase' => 'Sabores Acentuados.',
        	 'descrip_corta' => 'Con toques refrescantes, típica propiedad del pepino.',
        	 'frasef' => 'De sabor suave y textura cremosa, la palta genera el agrupamiento del bocado.',
        	 'nombre_plato' =>'California',
        	 'descrip_histo'=>'Un roll con huevas de capellán Suave y salado, con un ligero fondo dulce. De bocado sutil. Aporta una sensación de frescura y mesclado con aceite de sésamo y otras especies generan un realce al sabor dando así un matiz interesante a este plato.',
        	 'precio'=>2700,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/california.jpg'
        ]);

     	DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>5,
        	'ingre_id' =>32
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>5,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>5,
        	'ingre_id' =>31
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>5,
        	'ingre_id' =>1
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>5,
        	'ingre_id' =>8
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>5,
        	'ingre_id' =>11
        ]);

        Plato::create([
        	//6
        	 'frase' => 'Armonia y distinción',
        	 'descrip_corta' => 'Un sabor exquisito y suave a avellana y una consistencia tierna y cremosa permiten a la Palta combinarse con este plato.',
        	 'frasef' => 'Lo pintoresco del sésamo deja dos tonalidades adorables. Disfrútalo.',
        	 'nombre_plato' =>'Salmón Abokado',
        	 'descrip_histo'=>'Su Sabor es un equilibrio perfecto entre un gusto a mar con grasitud característica del salmón, este roll tiene un equilibrio particular ya que tiene uno de los pescados con un sabor único en el mundo.',
        	 'precio'=>2700,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/salmonabokado.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>6,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>6,
        	'ingre_id' =>8
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>6,
        	'ingre_id' =>29
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>6,
        	'ingre_id' =>1
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>6,
        	'ingre_id' =>30
        ]);

       
        Plato::create([
        	//7
        	 'frase' => 'Alucinante y Cremoso',
        	 'descrip_corta' => 'El sésamo blanco y negro le da un colorido que a simple viste te empieza a impactar su imagen.',
        	 'frasef' => 'Lo ligeramente salado y el toque acido del queso crema le da la pisca necesario para consagrar tu bocado ',
        	 'nombre_plato' =>'Filadelfia Roll',
        	 'descrip_histo'=>'Un roll que trae dentro al Rey del Pescado que no solo en sabor aporta grandes ventajas si no en salud, un roll muy buscado y que se ha consagrado a lo largo del mundo por ser uno de los más pedidos.',
        	 'precio'=>2700,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/filadelfia.jpg'
        ]);

 		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>7,
        	'ingre_id' =>6
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>7,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>7,
        	'ingre_id' =>3
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>7,
        	'ingre_id' =>29
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>7,
        	'ingre_id' =>1
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>7,
        	'ingre_id' =>30
        ]);


        Plato::create([
        	//8
        	 'frase' => 'Exquisito Vegan ',
        	 'descrip_corta' => 'La unión del pimentón grillado con el Queso Philadelfia te encantara.',
        	 'frasef' => 'Una unión simple partiendo que Menos Es Más…',
        	 'nombre_plato' =>'Ahumapin',
        	 'descrip_histo'=>'Especial para los veganos o vegetarianos, tiene un sabor sensacional ya que lo dulce, y ligero picor combinado con la técnica para que quede ahumado le da un sabor estupendo.',
        	 'precio'=>1799,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'.'
        ]);

   		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>8,
        	'ingre_id' =>14
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>8,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>8,
        	'ingre_id' =>3
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>8,
        	'ingre_id' =>1
        ]);


        Plato::create([
        	//9
        	 'frase' => 'Umami Vegan',
        	 'descrip_corta' => 'Cuando se une con el Queso Philadelphia el resultado es extraordinario ',
        	 'frasef' => 'Un Roll especial para los que no quieren comer carnes.',
        	 'nombre_plato' =>'Champicrem',
        	 'descrip_histo'=>'Con la curiosidad del sabor del Champiñon descubierto como el 5 Sabor existente que percibimos, y con una característica de ser un sabor cárnico único ligero y muy acentuado, le damos un realce con aceite de sésamo que le aporta el nutriente y sabor correcto.',
        	 'precio'=>2499,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'.'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>9,
        	'ingre_id' =>15
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>9,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>9,
        	'ingre_id' =>3
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>9,
        	'ingre_id' =>1
        ]);

        Plato::create([
        	//10
        	 'frase' => 'Crustáceo Crocante',
        	 'descrip_corta' => 'Con la textura de la palta y ese rico sabor, olor y cremosidad al unión con langostinos es fabulosa.',
        	 'frasef' => 'Es típico que al unir una tempura con el resto de ingredientes te va a sorprender.',
        	 'nombre_plato' =>'Camapal',
        	 'descrip_histo'=>'Lo genial del langostino, que sorprenden por su originalidad, sencillez y contraste de sabores y preparándolo en teriyaki y colocando panko para luego freírlo te fascinara.',
        	 'precio'=>3099,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'.'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>10,
        	'ingre_id' =>1
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>10,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>10,
        	'ingre_id' =>8
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>10,
        	'ingre_id' =>4
        ]);

        Plato::create([
        	//11
        	 'frase' => 'Sabores Encontrados',
        	 'descrip_corta' => 'Un mix de frutos secos con, avellanas, mani, nuez, pasas, entre otros, coloca esos énfasis necesarios.',
        	 'frasef' => 'Todo mesclado con la cremosidad del Queso Crema. Va ser tu Preferido.',
        	 'nombre_plato' =>'Piñasec',
        	 'descrip_histo'=>'Un rico postre con una deliciosa fruta en almíbar, que entrega todo su aroma y sabor para dar a este roll esa distinción única que lo caracteriza.',
        	 'precio'=>2799,
        	 'clasif'=>'Roll',
			 'rutaimag'=>''
        ]);

		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>11,
        	'ingre_id' =>16
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>11,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>11,
        	'ingre_id' =>3
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>11,
        	'ingre_id' =>1
        ]);
	

        Plato::create([
        	//12
        	 'frase' => 'Agridulce y Cremoso',
        	 'descrip_corta' => 'Lo cremoso y fresco que genera la palta marca este roll como uno de los particulares',
        	 'frasef' => 'Sin duda es una excelente opción, arroz con toques dulces, crocancia de pollo y cremosidad de la palta.',
        	 'nombre_plato' =>'Palta Teriyaki',
        	 'descrip_histo'=>'Rico pollo cocinado con la particularidad del teriyaki, para si lograr un relleno crocante agridulce que va generar un valor a este roll que no podrás olvidar.',
        	 'precio'=>2599,
        	 'clasif'=>'Roll',
			 'rutaimag'=>''
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>12,
        	'ingre_id' =>4
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>12,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>12,
        	'ingre_id' =>8
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>12,
        	'ingre_id' =>1
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>12,
        	'ingre_id' =>9
        ]);
	

        Plato::create([
        	//13
        	 'frase' => 'Contundencia y Robustez',
        	 'descrip_corta' => 'Un relleno representativo y rico con el sabor del langostino y su sensación agridulce.',
        	 'frasef' => 'Es un roll especial por su sólido y compacto sabor. Pruébalo!!!',
        	 'nombre_plato' =>'Crazy Roll',
        	 'descrip_histo'=>'Con el rico sabor de la salsa dinamita genera ese encuentro con un sabor bien marcado a la vasta gastronomía japonesa, sumando el surimi y ese sabor y olor que genera el aceite de sésamo es una exquisitez.',
        	 'precio'=>3450,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/crazy.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>13,
        	'ingre_id' =>2
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>13,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>13,
        	'ingre_id' =>3
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>13,
        	'ingre_id' =>1
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>13,
        	'ingre_id' =>31
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>13,
        	'ingre_id' =>13
        ]);

        Plato::create([
        	//14
        	 'frase' => 'Denso Bocado',
        	 'descrip_corta' => 'Al recubrir el roll con palta se genera una cubierta mantecosa que tu primer bocado lo notaras',
        	 'frasef' => 'Las semillas de sésamo generan el contraste perfecto para hace este roll un lujo.',
        	 'nombre_plato' =>'Yakuza Roll',
        	 'descrip_histo'=>'Lo genial del langostino, que sorprenden por su originalidad, sencillez y contraste de sabores y preparándolo en teriyaki y colocando panko para luego freírlo te fascinara.',
        	 'precio'=>3900,
        	 'clasif'=>'Roll',
			 'rutaimag'=>'img/furay.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>14,
        	'ingre_id' =>2
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>14,
        	'ingre_id' =>35
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>14,
        	'ingre_id' =>3
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>14,
        	'ingre_id' =>1
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>14,
        	'ingre_id' =>8
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>14,
        	'ingre_id' =>29
        ]);

        Plato::create([
        	//15
        	 'frase' => 'Para Una Persona o Dos',
        	 'descrip_corta' => 'Rico roll frito de Langostinos y Queso Philadelfia.',
        	 'frasef' => 'Un Roll frito y uno frio variado para los gusto diversos',
        	 'nombre_plato' =>'Promo 20 Piezas',
        	 'descrip_histo'=>'Rica alternativa para dos o una persona según sea el caso, con este Promo disfrutaras de Roll Hot y uno especial con un toque de surimi que no lo podrás creer, pruébala es exquisita.',
        	 'precio'=>6250,
        	 'clasif'=>'Promo',
			 'rutaimag'=>'img/promo20.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>15,
        	'ingre_id' =>13
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>15,
        	'ingre_id' =>19
        ]);
	

        Plato::create([
        	//16
        	 'frase' => 'Para Una Persona o Dos',
        	 'descrip_corta' => 'Delicioso roll hot de pollo y otro con salmón, fascinante',
        	 'frasef' => 'Crocantes, calientes fritos como te gustan te encantara',
        	 'nombre_plato' =>'Promo 20 Piezas Fritas',
        	 'descrip_histo'=>'Maravillosa decisión para los amante del sushi frito el exquisito sabor de este plato lo hace una de las promociones más pedidas en la actualidad.',
        	 'precio'=>6875,
        	 'clasif'=>'Promo',
			 'rutaimag'=>'img/promo20f.jpg'
        ]);

 		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>16,
        	'ingre_id' =>34
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>16,
        	'ingre_id' =>17
        ]);
        
        Plato::create([
        	//17
        	 'frase' => 'Especial para dos personas que sean amante del sushi',
        	 'descrip_corta' => 'No podrás resistir las ganas de seguir comiendo ya la combinación es perfecta.',
        	 'frasef' => 'Sabores surtidos, para que tu paladar tenga el difrute pleno y total.',
        	 'nombre_plato' =>'Promo 30 Piezas',
        	 'descrip_histo'=>'Un plato lleno de emociones y sabores, con un Roll Frito, dos sabores más que hace la combinación a punto con olores y sabores que siempre recordaras.',
        	 'precio'=>7990,
        	 'clasif'=>'Promo',
			 'rutaimag'=>'img/promo30.jpg'
        ]);

 		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>17,
        	'ingre_id' =>18
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>17,
        	'ingre_id' =>33
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>17,
        	'ingre_id' =>23
        ]);
   

        Plato::create([
        	//18
        	 'frase' => 'Una buena cantidad para 2 o 3 personas',
        	 'descrip_corta' => 'Cuatro Rolls con fascinantes relleno y cantidades, lleva dos fritos, uno con salmón y otro con pollo estupenda Promo.',
        	 'frasef' => 'Pollo teriyaki, langostinos apanada, más el Rey del mar te dejan recordando este plato',
        	 'nombre_plato' =>'Promo 40 Piezas',
        	 'descrip_histo'=>'Sus sabores abarcan gustos variados teniendo dos fritos y dos que no, puedes deleitarte con esta Promo si son pocos.',
        	 'precio'=>11625,
        	 'clasif'=>'Promo',
			 'rutaimag'=>'img/promo40.jpg'
        ]);

		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>18,
        	'ingre_id' =>23
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>18,
        	'ingre_id' =>20
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>18,
        	'ingre_id' =>19
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>18,
        	'ingre_id' =>17
        ]);
		

        Plato::create([
        	//19        	
        	 'frase' => 'Especial para comer juntos',
        	 'descrip_corta' => 'Plato que alcanza para 3 o 4 personas que sea de buen comer.',
        	 'frasef' => 'Un universo de sabores exquisitos que marcaran tu vida.',
        	 'nombre_plato' =>'Promo 50 Piezas',
        	 'descrip_histo'=>'El buen comer en este plato es difícil ya que es tan rico que solo vas a querer comer y no parar, son delicioso pruébalos te encantara.',
        	 'precio'=>13750,
        	 'clasif'=>'Promo',
			 'rutaimag'=>'img/promo50.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>19,
        	'ingre_id' =>25
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>19,
        	'ingre_id' =>10
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>19,
        	'ingre_id' =>24
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>19,
        	'ingre_id' =>19
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>19,
        	'ingre_id' =>17
        ]);
	

        Plato::create([
        	//20
        	 'frase' => 'Una Promo familiar y muy cotizada.',
        	 'descrip_corta' => 'Elegido como el plato en familia o entre amigos que te da la relación precio valor que buscas',
        	 'frasef' => 'Son 6 sabores diferentes con cantidades contundentes al mejor precio',
        	 'nombre_plato' =>'Promo 60 Piezas',
        	 'descrip_histo'=>'Un plato creado para un compartir con sabores surtidos y fascinantes, el champiñón con queso filadelfia lo hace una Promo con mucha demanda ya que todos los sabores son exquisitos.',
        	 'precio'=>13990,
        	 'clasif'=>'Promo',
			 'rutaimag'=>'img/promo60.jpg'
        ]);

        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>20,
        	'ingre_id' =>22
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>20,
        	'ingre_id' =>21
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>20,
        	'ingre_id' =>23
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>20,
        	'ingre_id' =>19
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>20,
        	'ingre_id' =>18
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>20,
        	'ingre_id' =>17
        ]);

        Plato::create([
        	//21
        	 'frase' => 'Especial para familia grandes',
        	 'descrip_corta' => '7 Sabores distintos para que tu paladar deguste de una experiencia diferente.',
        	 'frasef' => 'Contundente, económico, sabores ricos que más quieres.',
        	 'nombre_plato' =>'Promo 70 Piezas',
        	 'descrip_histo'=>'Promo con sabores extraordinarios que te dejaran a ti y a los tuyos o invitados conformes con lo rico, lo copioso y lo maravilloso de este kit que te brindamos.',
        	 'precio'=>17750,
        	 'clasif'=>'Promo',
			 'rutaimag'=>'img/promo70.jpg'
        ]);

		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>21,
        	'ingre_id' =>23
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>21,
        	'ingre_id' =>22
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>21,
        	'ingre_id' =>21
        ]);
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>21,
        	'ingre_id' =>20
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>21,
        	'ingre_id' =>19
        ]);
		DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>21,
        	'ingre_id' =>18
        ]);        
        DB::table('asigne_ingredientes')->insert([
        	'plato_id' =>21,
        	'ingre_id' =>17
        ]);        

        ///// https://www.youtube.com/watch?v=2qkdAt9PuqQ montar en heroku /////
        //https://www.youtube.com/watch?v=-jAHuJvXqzw guitar//
        

    }
}
