<?php
// parameters
$hubVerifyToken = 'pipe';
$accessToken = "EAAEAjpZBNWk0BAIQ3Qm6N93mR9rqtRvmYVkyHukqelybbel3g7ZCpbon1RwvdF6M6uoHDlsnlwJ5jsBpwAN4wzWgthQvEC1cumCKZBjvQK9tsfkMBq5d6HYZCyMsPaufmlbz6ZBNW7Y2b9yuwWsD4qnne8ahyr5OrsWPqSxxHrgZDZD";
// check token at setup
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
  echo $_REQUEST['hub_challenge'];
  exit;
}
// handle bot's anwser
$input = json_decode(file_get_contents('php://input'), true);
$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];

$messageText = strtolower($messageText);

$answer = array("Para contarte un chiste de mi sistema escribeme 'chiste' 😊",
				"Soy un robot 😱 escribeme 'chiste' para pasar el rato ☺☺",
				"Se te cayo el sistema? 😂 escribeme 'chiste' 0010101 ☺☺",
				"Oye humano escribeme 'chiste' 😘😘",
				"☺ No puedo entender escribeme 'chiste'😁",
				"En mi sistema tengo chistes, escribeme 'chiste'😁",
				"Quieres un chiste?, escribeme 'chiste'😂😂😂",
				" escribe 'chiste' para decirte unos buenos☺☺",
				"Oye anda a LAAAR y escribeme 'chiste' ☺☺",
				"Soy la mejor contando chistes, escribeme 'chiste' ☺☺"
				);


if ($messageText == "chiste")
{
    $answer = array("Va un abuelito muy, muy, muy apurado a una panaderia, el abuelito le dice al vendedor:Me da 40 kilos de pan.A lo que el vendedor le responde:!40 kilos de pan¡pero se le va a poner duro.y el abuelo responde:eso es lo que quiero. ",
"Una vez un campesino salió a pasear con su caballo por los cerros, cuando de pronto se encuentran con un perro que les dice: 
-Me dice la hora por favor? 
El señor asustado porque el perro le habló, sale corriendo como un loco con el caballo, y después de correr varios kilómetros se paran en una pradera a descansar y el caballo le dice: Medio susto que nos hizo pasar el perro!! ",
"Estaban reunidos los mejores policias de todo los paises en una reunion anual, y dentro de la misma se juntaron un Norteamericano, un Ingles y el infaltable chileno, y discutian sobre sus actos heroicos. 
El norteamericano muestra una cicatriz en todo el cuello y exclama NEW YORK CITY. los dos quedaron sorprendidos, pero el ingles para no hacerse menos mostro su espalda y dijo: LONDON CITY, nadie lo podia creer, y el chileno sin hacerse de menos se levanto la polera indicando un poco mas abajo del ombligo y exclamo  APENDI-CITY jajaja",
"Van dos cieguitos por la calle pasando calor y dicen:
- ¡Ojalá lloviera!
- ¡Ojalá yo también!",
"Entra seco y oliendo a goma, pero sale mojado y oliendo a pescado. -El buzo",
"¿No te entra bien? ¿Te maltrata la punta? ¿Te duele por detrás? ¿Sientes que te arde? ¿Gritas al sacarlo? – Entonces ese zapato no es para ti",
"Un niño le pregunta a su madre:
- ¿Mamá, mamá, la luz se come?.
- ¿Cómo se va a comer la luz? - responde la madre -.
- No lo sé - dice el niño -. Pero Papá le decía ayer a la criada:
- Apaga la luz que te la vas a comer toda",
"¿Cómo se dice prostituta en japonés?
Sinochingo nocomo.",
"¿Cómo se dice plagio en chino?
Telescopio",
"Un chino entra en un bar y dice:
- Buena venía palo del tlabajo.
Y el dueño le responde:
- Aquí el trabajo que hay es de lunes a domingo de 12 de la mañana a 12 de la noche.
Y responde el chino:
- Eso, lo que yo establa buscando..., medlia jolnada.",
"-Como se dice en chino marinero pobre?
-Chin chu lancha.",
"- Se abre el telón y aparece un chino tocando un arpa.
- ¿Cómo se llama el actor de la película?
- Alpa chino.",
"Un cliente le pregunta al camarero del restaurante chino:
- Oiga camarero, ¿qué clase de carne era lo que he comido?
- Ela calne de lata.
- ¿Cómo es posible, si era buenísima y fresquísima, cómo va a ser carne de lata?.
- Calne de lata que cole.",
"- ¿Por qué las elecciones están prohibidas en china?
- Porque sin elecciones no pueden nacer más chinos",
"Como se dice divorcio en Arabe?
Se aleja la almeja.
Y en Chino?
Chao Chochin.",
"Como se llama un chino que se limpia el culo con la mano... cochino",
"Van tres chinos por la calle y le dice uno a otro:
-Yo, vivo con Melcedes y me puso una melcería.
-Yo, vivo con Lestituta y me puso un lestaulante.
Y dice el tercero:
-Yo, vivo con la mona.
-¿Y qué te puso?
-La casa llena de mielda.",
"- ¿Qué hace un chino con un capucha?
- Un capuchino.",
"Cuales son los chinos mas pobres
CHINLUZ CHINGAS CHINAGUA",
"- ¿Como se llama el campeón de buceo de china?
- Toko Fondo
- ¿y el subcampeón?
- Casi Toko",
"- ¿Nivel de inglés?.
- Alto.
- Traduzca vidrio.
- Glass.
- Úselo en una frase.
- Glassias pol la entlevista.
- Maldito chino eres un festival!! estás contratado!!.",
"Se encuentran dos chinos:
-El otlo día me comple un coche nuevo.
-¿Ah si?
-Si, mila, es ese de ahí.
-Y que malca es?
-Un Alfa
-¿Lomeo?
-Lo meas y te lompo el cuello, pol cochino.",
"Como se llama barrendero en chino ?
Yokito lakaka",
"- ¡Oye tu! dime algo amarillo chillón.
- Que a un chino le tiren de los huevos",
"¿Cómo se dice Real Madrid en Chino?
Chin Chan Pion Lig..!!",
"- ¿Como se dice 99 en chino?
- Cachichien",
"Entra un borracho a una bodega y dice:
- Me da 20 litros de vino?
- Ha traido el envase?
- Esta usted hablando con el.",
"Un borracho estaba orinando en la calle.
Pasa una señora, y dice: 
- ¡¡¡Qué horror, qué bestia, qué monstruo...!!! 
Y el borracho le contesta: 
- Pase tranquila señora, que lo tengo agarrao del pescuezo.",
"El marido, totalmente borracho, le dice a su mujer al acostarse:
- Me ha sucedido algo increíble. He ido al baño y al abrir la puerta se ha encendido la luz automáticamente.
- ¡La madre que te parió!, ya te has vuelto a mear en la nevera.",
"- ¿Estoy gorda amor?
- Nah, yo diría que tienes un cuerpo común...
- ¿Que tan común ?
- Pues ComúnCamión mi amo",
"En una entrevista de trabajo:
- ¿Nivel de inglés? 
- Alto 
- Bien. Traduzca 'fiesta'. 
- Party
- Perfecto. Úselo en una frase. 
- Ayer me party la cara con la bicicleta. 
- Contratado.",
"- Soy un tipo saludable
- Ah. ¿Comes sano y todo eso?
- No, la gente me saluda...",
"- Oiga. ¿Se puede llamar imbécil a un juez?
- No.
- ¿Y llamar 'señor juez' a un imbécil?
- Eso sí.
- Gracias, señor juez.",
"- Papá, ¿qué se siente tener un hijo tan guapo?.
- No sé hijo, pregúntale a tu abuelo...",
"- Hola ¿te llamas google?
- No, ¿por qué?
- Porque tienes todo lo que busco, nena.
- ¿Y tú te llamas yahoorespuestas?
- No, ¿por qué?
- Porque haces preguntas estúpidas...",
"- Mamá, ¿qué haces en frente de la computadora con los ojos cerrados?
- Nada, hijo, es que Windows me dijo que cerrara las pestañas...",
"Le dice una madre a su hijo:
- ¡Me ha dicho un pajarito que te drogas!
- ¡La que se droga eres tu que hablas con pajaritos!",
"- ¿Tienes wi-fi?
- Sí
- ¿Y cuál es la clave?
- Tener dinero y pagarlo",
"- Mi amor, estoy embarazada. ¿Qué te gustaría que fuera?
- ¿Una broma?.",
"- ¡A mí nadie me da órdenes! -
- 2% de batería. Conecte el cargador.
- Voy.",
"- Amor, quiero que pasemos un lindo fin de semana.
- Ok, nos vemos el lunes...",
"Entra una señora en la carnicería y dice:
- Deme esa cabeza de cerdo de allí.
Y contesta el carnicero:
- Perdone señora, pero eso es un espejo.",
"- Amor, de ahora en adelante te llamaré Eva por ser mi primera mujer.
- Vale cariño, pues yo te llamaré dálmata por ser el 101.",
"- Papá, papá, ¿vos te casaste por la iglesia o por el civil?.
- ¡Por estúpido!.",
"Tía Teresa, ¿para qué te pintas?
- Para estar más guapa.
- ¿Y tarda mucho en hacer efecto?",
"- Doctor, doctor,...me tiro peos sin olor.
- A ver, tírese uno.
- Pffff...a usted tenemos que operarlo.
- ¿De la barriga?
- No, ¡de la nariz!",
"- Cariño, dame el bebé.
- Espera a que llore.
- ¿A que llore?. ¿Por qué?
- ¡¡¡¡¡¡¡¡¡Porque no lo encuentro!!!!!!!",
"- Amor, ¿me queda bien el disfraz?
- Sí, amor, te ves bonita de vaca.
- ¿Vaca? ¡Pero si voy de dálmata!",
"- ¿Bailamos?
- Claro. ¿Pero quién saca a mi amiga?
- Ahhh, por eso no te preocupes. ¡SEGURIDAAAAD!",
"- Cariño ¿tengo la nariz grande?
- No, tienes una nariz común.
- ¿Ah, sí?
- Sí, ¡común tucán!",
"YO VIVO A BASE DE VITAMINA C
-COMPUTADORA
-CELULAR
-COMIDA
-CAMA",
"¿Qué le dice Tarzán a un ratón?
- ¡Tan pequeño y con bigote!.
- ¿Y qué le dice el ratón a Tarzán?.
- ¡Tan grandote y con pañal!.",
"¿Cuál es la diferencia entre un motor y un inodoro?
En que en el motor tu te sientas para correr, y en el inodoro tu corres para sentarte.",
"Estaba una pizza llorando en el cementerio, llega otra pizza y le dice:
- ¿Era familiar?
- No, era mediana..",
"La enfermera le dice al médico:
- Hay un hombre invisible en la sala de espera.
Y el doctor responde:
- Dígale que en este momento no puedo verlo.",
"- Perdona, ¿estoy bien maquillada?
- No, todavía se te ve la cara.",
"TU HABLAS INGLES?
-OBVIO TONTICO
COMO SE DICE PAN?
-BREAD
COMO SE DICE QUE?
-WHAT
Y PANQUEQUE?
BREADWHATWHAT
CONTRATADO",
"Marcelo estaba trabajando, cuando su jefe va y le pregunta:
- ¿Oiga, no piensa ir al velatorio de su suegra?.
Y él le contesta:
- No jefe, primero el trabajo, y después la diversión.",
"- Oye, ¿y qué tal el gimnasio?
- Pues me estoy poniendo en forma
- ¿Ah sí?
- Si, en forma de bola. No voy",
"¿Qué le dice una piedra a otra piedra?
- La vida es dura.",
"¿Por qué los diabéticos no pueden vengarse?
Porque la venganza es dulce...",
"Un profesor le dice a sus alumnos:
- Los hombres inteligentes siempre dudan, sólo los tontos creen que lo saben todo.
- ¿Está usted seguro profesor?
- ¡Seguro del todo!",
"- Hola Blanca.
- Soy Rosa.
- Ah perdóname, es que soy daltónico.",
"- ¿Por qué se suicidó el libro de matemáticas?.
- Porque tenia muchos problemas.",
"- Mamá, tengo dos noticias, una buena y una mala
- Primero la buena, hija
- Pasé una prueba
- Muy bien, ¿Y la mala?
- Que era un Test de embarazo...",
"¿Cómo se llama el primo vegetariano de Bruce Lee?
Pues Broco Lee...",
"- ¿Sabes que mi hermano anda en bicicleta desde los cuatro años?.
- Mmm, pues ya debe estar lejos.",
"En una entrevista de trabajo:
- ¿Nivel de inglés?
- Alto
- Bien. Traduzca 'mirar'.
- Look.
- Perfecto. Úselo en una frase.
- 'Luke', yo soy tu padre.
- Contratado.",
"- ¿De qué trabajas?
- Aprieto tuercas.
- ¿Eres mecánico?
- No, psiquiatra. ¿Y tú?
- Qué gracioso, yo muevo vacas.
- Ah. ¿Ganadero?
- No,... monitor de gimnasia.",
"- Hola, ¿cómo te llamas?
- María de Los Ángeles, ¿y tú?
- Daniel de Nueva York",
"- Mamá, aún no sé qué estudiar.
- ¿Qué te gusta?
- Dormir…",
"- ¡Señorita!¡Eh, usted, la rubia!
- ¿Si, es a mi?
- ¡Le comunicamos que su avión viene demorado!.
- Hay qué lindo, ese es mi color favorito...",
"- Cariño, tengo dos noticias, una buena y otra mala. He dejado las drogas, pero no sé donde.",
"Dos amigos hablando:
- ¿Oye, cómo se escribe nariz en inglés?
– NOSE
- ¿Tú tampoco?. Jo, nadie lo sabe...",
"- Íbamos yo y Nacho.
- No hijo, íbamos Nacho y yo.
- ¿Cómo? ¿entonces yo no iba?",
"si car es carro y men es hombre carmen es un transformer",
"Un gato y un gallo van por un puente. El gato se cae y dice: 
-Miaogo, miaogo.
Y el gallo contesta: 
-Kikirikiaga, Kikirikiaga.",
"- ¿Qué son 50 físicos y 50 químicos juntos?
- Pues 100tíficos...",
"- Mamá, mamá, en el cole me llaman Facebook.
- ¿Y tú que les dices?
- ¡Me gusta!",
"¿Para qué va una caja al gimnasio?
Para hacerse caja fuerte.",
"- ¿Qué le dice un techo a otro?
- Techo de menos...",
"A que te dedicas?
•	Básicamente a respirar. No gano mucho, pero me da para vivir.",
"- Mi virtud es la paciencia.
- ¿Que?
- Que mi virtud es la paciencia, ¡sordo asqueroso!",
"Un hombre va a un adivino y llama a la puerta.
- Toc toc.
- ¿Quién es?
- ¡Pues vaya porquería de adivino!",
"Cariño, creo que estás obsesionado con el fútbol y me haces falta.
- ¡¿Qué falta?! ¡¿Qué falta?! ¡¡Si no te he tocado!!",
"¿Qué hace una persona con un sobre de ketchup en la oreja?
Escuchando salsa.",
"Un día en Mercurio dura 1408 horas. Lo mismo que un lunes en la Tierra...",
"- Mami, ¿a que no adivinas dónde estoy?
- Hijo, ahora no puedo hablar, llámame luego.
- No puedo, sólo tengo derecho a una llamada",
"- Mamá, mamá, en el colegio me dicen champú.
- Tranquilo, Johnson, no más lágrimas.",
"¿Qué le dice una bombilla a otra bombilla?
- Tantos años dando luz, ¡y ni un hijo!",
"Dos madres hablando:
- ¡Dígale a su hijo que me deje de imitar!
- Jaimito, ¡deja de hacer el idiota!",
"- Hija, lo que hiciste no tiene nombre!.
- Todavía no Papi, ¡pero espérate 9 meses y le pongo uno bien bonito!"
);
    $response = [
    'recipient' => [ 'id' => $senderId ],
    'message' => array('text' => $answer[rand(0,81)] )
];
} 
else {
$response = [
    'recipient' => [ 'id' => $senderId ],
    'message' => array('text' => $answer[rand(0,9)] )
];
}

$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_exec($ch);
curl_close($ch);
