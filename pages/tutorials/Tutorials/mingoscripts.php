<!DOCTYPE html>
<!--
Template Name: Abele
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<?php session_start(); ?>
<html>
<head>
<title>ELLABORATOR</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<?php 
   $avat =  $_SESSION['avat'];
?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
   <div class="fl_left">
	    Usuari/a:  
		<?php         
            echo "<img src = /images/avatar/" . $avat . ".png style=width:20%>"?>
       <!-- 
      <ul class="nospace linklist"> -->
 		<a href="/sortir.php">-- Sortir --</a>
        <!-- <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
      </ul>
        -->
    </div>
    <div class="fl_right">
      <ul class="nospace linklist">
        <li><i class="fa fa-phone"></i> 65 75 85 266</li>
        <li><i class="fa fa-envelope-o"></i> jferna6@xtec.cat</li>
      </ul>
    </div>
    <br>
	 <br>
	<div class="fl_right">
      <ul class="nospace linklist"> 
        <li><a href="#">Comunicat</a></li>
        <li><a href="/pages/full-width.php">Xat</a></li>
        <li><a href="/pages/tutorials/Tutorials/tutorialsindex.php">Tutorials</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_left">
      <img src = "/images/UDGPalamos.gif" style="width:20%"> 
    </nav>
    <!-- ################################################################################################ -->
       <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="/index.php">Inici</a></li>
        <li><a href="/pages/gallery.php">Galeria </a></li>
		 <li><a class="active" href="/pages/dam.php">DAM/SMX</a></li>
		<li><a class="active" href="/pages/mep.php">MEP/MEI</a>
        </li>       
        <li><a href="/pages/propostes.php">Propostes</a></li>
      </ul>
    </nav>
	<nav id="mainav" class="fl_center">
      <img src = "/textstyle/ElLaboratori.png" style="width:258px;height:54px"> 
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content three_quarter first"> 
      <!-- ################################################################################################ -->
        
    <h1>Unity: programació de videojoc bàsica en C # </h1>
        <img src="../Imatges/ImatgesScripts/imaScript1.png">
    <p></p>
        
    <!-- ################################################################################################ -->
        
    <h2 id = "C1">Requisits minims</h2>     
    <p>Tenir alguna versió d'Unity instal·lada.</p>
    <p></p>
    
    <!-- ################################################################################################ -->
    <h1 id = "C2"> Crear i aplicar scripts: </h1>
        
        <p>Si volem programar en Unity necessitem crear scripts que són unitats de codi que realitzen una missió, per això donem clic dret sobre la carpeta per defecte baix a l'esquerra Assets, Create, Folder, i l'anomenem Scripts: </p>
            <img src="../Imatges/ImatgesScripts/imaScript2.png">
        <p></p>

        <p>Hauria de quedar com:</p>
            <img src="../Imatges/ImatgesScripts/imaScript3.png">
        <p></p>
        
        <p>Ara que tenim una carpeta a on organitzar tots els nostres scripts creiem alguns d'aquests, botó dret dins de la carpeta de Scripts, create, C # script:</p>
            <img src="../Imatges/ImatgesScripts/imaScript4.png">
        <p></p>
        
        <p>Li podem donar un nom, com és un exemple posem -ExampleScript:</p>
            <img src="../Imatges/ImatgesScripts/imaScript5.png">
        <p></p>
        
        <p>Si premem doble clic sobre l'script se'ns obrirà en un editor de text. El primer que és bo saber és què vol dir NomScript: MonoBehaviour. Bé MonoBehaviour és una classe de la qual hereta el nostre script i això ens permet comunicar-li a Unity: vull que el meu script sigui usat dins dels objectes del joc, val?.</p>
        <p>Aprenem com crear un objecte de joc o GameObject en anglès. Per això tornem a Unity, a dalt a l'esquerra a Hierarchy cliquem a create, 3d object, capsule:</p>
            <img src="../Imatges/ImatgesScripts/imaScript6.png">
        <p></p>
        
        <p>Fem clic esquerre en el nostre ExampleScript i l'arrosseguem a l'objecte càpsula que acabem de crear, amb això aconseguim associar el tros de codi a l'objecte de joc:</p>
            <img src="../Imatges/ImatgesScripts/imaScript7.png">
        <p></p>
        
        <p>Si el volguéssim eliminar podríem fer-ho fent clic dret sobre el títol de l'objecte i al menú clicar Remove Component:</p>
            <img src="../Imatges/ImatgesScripts/imaScript8.png">
        <p></p>
        
        <p>També es pot afegir un script a un objecte clicant a Add Component, a baix a la dreta, Scripts, triem el que vulguem:</p>
            <img src="../Imatges/ImatgesScripts/imaScript9.png">
        <p></p>
        
        <p>A més es pot fer de forma directa en un sol pas al crear l'script i aplicar-ho a l'objecte mitjançant Add Component, New Script, li donem el nom que vulguem:</p>
            <img src="../Imatges/ImatgesScripts/imaScript10.png">
            <img src="../Imatges/ImatgesScripts/imaScript11.png">
        <p></p>
        
        <p>Ens adonarem de dues coses, primer que el component, l'script, ja ens ho afegeix sota de tots els altres, a la dreta, en aquest cas l'hem anomenat Test:</p>
            <img src="../Imatges/ImatgesScripts/imaScript12.png">
        <p></p>
        
        <p>Una altra qüestió és que al fer així l'script no t'ho afegeix a la carpeta actual, a Scripts, sinó que el posa a l'arrel del projecte, a Assets, és a dir, no està a l'actual:</p>
            <img src="../Imatges/ImatgesScripts/imaScript13.png">
        <p></p>
        
        <p>Sinó a l'arrel:</p>
            <img src="../Imatges/ImatgesScripts/imaScript14.png">
        <p></p>
        
        <p>Una cosa a tenir en compte. A mi m'agrada depurar usant prints, és a dir imprimint per pantalla el que està passant, però si tinguéssim un objecte hiper complex amb molts scripts ens convindria tenir una manera d'habilitar / deshabilitar cada script per anar comprovant que funciona bé un a un. Per a això tenim la casella de dalt a l'esquerra en cada component, que ens permet habilitar / deshabilitar cada un:</p>
            <img src="../Imatges/ImatgesScripts/imaScript15.png">
        <p></p>
        
        <p>Com hem vist podem fer clic al nom del component i donar-li a remove component per esborrar-ho, o clic dret i remove component; però compte perquè l'script seguirà al nostre projecte:</p>
            <img src="../Imatges/ImatgesScripts/imaScript16.png">
        <p></p>
        
        <p>Per esborrar-ho del projecte anem al panell de baix a l'esquerra, clic dret, delete, o prement el botó suprimir del teclat:</p>
            <img src="../Imatges/ImatgesScripts/imaScript17.png">
        <p></p>
        
     <!-- ################################################################################################ -->
     <h1 id = "C3"> Estructura dels scripts </h1>
        
        <p>A continuació anem a entendre què volen dir les parts que componen un script perquè així estarem preparats per crear els comportaments que vulguem que els nostres objectes tinguin. Primer, a dalt tenim aquestes frases que comencen per using. Aquesta paraula ens permet accedir al que es diu namespaces. </p>
            <img src="../Imatges/ImatgesScripts/imaScript18.png">
        <p></p>
        
        <p>Un namespace és simplement una col·lecció de classes a què es fa referència utilitzant un prefix seleccionat en el nom de la classe. </p>
            
        <p>A nosaltres ens importa això per comprendre el següent: el nostre script ExampleScript està heretant de MonoBehaviour (això s'observa mitjançant ExampleScript: MonoBehaviour, els: signifiquen que el primer hereta, és fill del segon). </p>
        
        <p>És a dir, nosaltres som ExampleScript i estem fent ús de coses que pertanyen a MonoBehaviour, que seria l'equivalent al nostre pare o mare. A la vida real faríem ús de la casa, i en l'script fem ús d'unes funcions ja presents com són Start () i Update ().</p> 
            
        <p>Per provar això comentem la línia que posa UnityEngine, els comentaris es realitzen amb // i assenyalen que aquesta línia no serà executada, és a dir, el programa la ignorarà. Seria el mateix que emancipar-nos dels nostres pares:</p>
            <img src="../Imatges/ImatgesScripts/imaScript19.png">
        <p></p>
        
        <p>El que passa és que si ens emancipem dels nostres pares no podrem fer servir la seva casa, per tant aquí no podríem heretar de MonoBehaviour i per això s'assenyala subratllat en vermell com un error.</p>
        
        <p>En concret si deixem el cursor sobre l'error ens ho explicarà comentant que no podem accedir a MonoBehaviour, lògic perquè hem comentat using UnityEngine i per tant hem abandonat la casa dels nostres pares:</p>
            <img src="../Imatges/ImatgesScripts/imaScript20.png">
        <p></p>
        
        <p>A continuació esborrarem la // del principi de l'using que acabàvem de posar i entenguem què són les classes. Les classes són contenidors de mètodes (comportament), coses que es fan, i dades (variables), coses que es tenen:</p>
            <img src="../Imatges/ImatgesScripts/imaScript21.png">
        <p></p>
        
        <p>Per exemple si volguéssim crearíem una classe Player, jugador, i els seus mètodes serien PlayerMovement, moure'l, PlayerAttack, atacar etc.</p>
        
        <p>A més cal saber que el nom de la classe i el fitxer han de coincidir, en el nostre cas, a dalt, el fitxer es diu ExampleScript.cs i la class ExampleScript, això és així perquè Unity pugui saber quin arxiu del nostre ordinador conté la definició del comportament de l'objecte de joc:</p>
            <img src="../Imatges/ImatgesScripts/imaScript22.png">
        <p></p>
        
        <p>Després cal tenir en compte que ja per omissió se'ns donen dos mètodes (també anomenats funcions). Start (), s'executa quan es crea l'objecte:</p>
            <img src="../Imatges/ImatgesScripts/imaScript23.png">
        <p></p>
        
        <p>A més cal tenir en compte que els mètodes són trossos de codi que retornen o no, alguna cosa. És a dir, per exemple, la nostra mare ens pot trucar la qual cosa vol dir que nosaltres som el seu mètode, per recollir la nostra habitació. Després que nosaltres recollim la nostra habitació 'no li retornarem res a la nostra mare'. En el cas dels programes això s'explica mitjançant la paraula void, buit en català:</p>
            <img src="../Imatges/ImatgesScripts/imaScript24.png">
        <p></p>
        
        <p>També se'ns dóna la funció Update () la qual s'executa cada vegada que s'imprimeix la pantalla, és a dir entre 30 i 60 vegades per segon:</p>
            <img src="../Imatges/ImatgesScripts/imaScript25.png">
        <p></p>
        
     <!-- ################################################################################################ -->
     <h1 id = "C4"> Variables </h1>
        
        <p>Per començar a declarar una variable cal indicar un accés. És a dir una paraula que limiti quines classes poden utilitzar aquesta variable. Hi ha dues paraules public</p>
            <img src="../Imatges/ImatgesScripts/imaScript26.png">
        
        <p>O private </p>
            <img src="../Imatges/ImatgesScripts/imaScript27.png">
        
        <p>Public vol dir que tota classe pot accedir a aquesta variable. Private vol dir que només la classe actual ExampleScript pot usar aquesta variable.</p>
        <p> Després seguirem amb el tipus de dada. Aquest pot ser un float: </p>
            <img src="../Imatges/ImatgesScripts/imaScript28.png">
        
        <p>el qual és un nombre decimal com a 0.2 o 9.7 o 3.14. un int </p>
            <img src="../Imatges/ImatgesScripts/imaScript29.png">
        
        <p>és un nombre sencer com 7, o 9 o 1000. Un bool</p>
            <img src="../Imatges/ImatgesScripts/imaScript30.png">
        
        <p>és una dada que pot contenir false o true. Segur que molts estareu pensant per què cal usar tipus de dades? Bé imaginem que tenim un pot que posa 'cogombres'. Un esperaria trobar cogombres dins. Què passa si a l'destapar trobes peix cru. Doncs que tindríem un problema. Doncs el mateix és en codi.</p>
        <p>Seguim construint la variable. Ara cal donar-li un nom. Cal tenir en compte que el seu nom pot ser qualsevol però hem de complir una regla: el seu nom no pot ser alguna de les paraules que s'usen en el llenguatge amb un significat especial; per exemple, no podem posar-li UnityEngine, perquè hauria conflicte:</p>
            <img src="../Imatges/ImatgesScripts/imaScript31.png">
        
        <p>i ens donaria un error. Per exemple si volguéssim una variable per guardar la distància de l'jugador a terra la podríem anomenar isGrounded.</p>
            <img src="../Imatges/ImatgesScripts/imaScript32.png">
        
        <p>Cal tenir en compte que els noms de variables han de ser una única paraula, així que si volem incloure diverses, cal fer-ho com: primeraSegundaTerceraPalabra, és a dir la primera inicial en minúscules i per separar paraules indicar la inicial de cada en majúscules.</p>
        <p>Després anem a inicialitzar el valor de la variable. Per això després el nom, posem una = i el valor. En aquest cas com el valor és decimal, separem la part exacta de la decimal amb punt i vam acabar amb f. A més la frase s'acaba amb; així:</p>
            <img src="../Imatges/ImatgesScripts/imaScript33.png">
        
        <p>Fins ara hem declarat una variable i inicialitzat la mateixa tot en una línia. També es pot fer en dos passos, primer declarar-la buida i després en el Start () donar-li contingut:</p>
            <img src="../Imatges/ImatgesScripts/imaScript34.png">
        
        <p>Amb variables tan senzilles es prefereix fer-les en línia:</p>
            <img src="../Imatges/ImatgesScripts/imaScript35.png">
        
        <p>Així que si premem ctrl + so file save guardem el codi.</p>
        <p>De tornada a Unity veurem que es recarrega l'script i ens apareix en l'objecte una variable anomenada speed posada a 10. Això és perquè l'hem declarat public i accessible:</p>
            <img src="../Imatges/ImatgesScripts/imaScript36.png">
        
        <p>Si volguéssim podríem canviar el seu valor:</p>
            <img src="../Imatges/ImatgesScripts/imaScript37.png">
        
        <p>Si volguéssim tornar-li el valor original podem clicar a la rodeta dalt a la dreta, Reset:</p>
            <img src="../Imatges/ImatgesScripts/imaScript38.png">
        <p></p>
        
        
     <!-- ################################################################################################ -->
    <h1 id = "C5"> Operadors d'assignació i aritmètica </h1>

        <p>Primer aprenguem com fer comentaris en bloc o multi-línia. Es fan mitjançant l'escriptura de / * * / Tot el que estigui dins serà ignorat pel programa. Els comentaris ens serveixen per explicar què fa el codi, són bons quan es treballa en equip.</p>
            <img src="../Imatges/ImatgesScripts/imaScript39.png">
        
        <p>Per exemple l'operador = s'usa per assignar el que està a la seva dreta al que es troba a la seva esquerra, en concret, en l'exemple de la variable que acabem de crear assignem un valor de 10.0 a la variable anomenada speed. </p>
            <img src="../Imatges/ImatgesScripts/imaScript40.png">
        
        <p>Un altre operador és el + = Significa agafa el contingut de la variable de l'esquerra i suma-li el que hagi a la dreta, és a dir, si tenim: speed = speed + i; podem escurçar l'escriptura com speed + = i; </p>
            <img src="../Imatges/ImatgesScripts/imaScript41.png">
        
        <p>A més també hi ha el - = que resta a l'contingut de l'esquerra el que posem a la dreta, el * = que multiplica a el contingut de l'esquerra el que tinguem a la dreta i el / = que divideix el posat a l'esquerra per l'escrit a la dreta.</p> 
        <p>Ara bé hi ha un operador curiós i rar que se sol usar anomenat mòdul. El mòdul és la resta de dividir un nombre per un altre, es denota mitjançant %</p>
        <p>Per exemple si tenim 7% 3 que es llegeix '7 mòdul 3', el resultat serà la resta de la divisió de 7 entre 3. En contreto 7 dividit per 3 dóna 2, de la resta gener.</p>
        <p>El resum:</p>
            <img src="../Imatges/ImatgesScripts/imaScript42.png">
        
        <p>Els anteriors realitzen una operació amb el valor que ja es troba a l'esquerra, però també es poden fer operacions més senzilles tipus a = b + c; és a dir on en una variable es guardi el resultat d'operar amb altres dos: </p>
            <img src="../Imatges/ImatgesScripts/imaScript43.png">
        
        <p>Bé, ara fem un exemple senzill d'ús del que s'ha après. Primer declararem algunes variables dins del nostre ExampleScript per sobre de l'Start ()</p>
            <img src="../Imatges/ImatgesScripts/imaScript44.png">
        
        <p>Com veiem tenim la speed, velocitat, distance, distància i time, temps. </p>
        <p>Després ens agradaria fer alguna cosa com calcular la velocitat a la qual va el personatge, això és speed = distance / time;</p>
        <p>A més perquè sigui interessant anem a imprimir per pantalla el valor que se'ns calcula, per a això fem servir la funció print () i dins dels parèntesis posem un text que vulguem entre cometes dobles</p>
        <p>"You are travelling a:" i com volem incloure el contingut d'una variable fem servir el + que significa AGAFA'M i úneme en la frase a imprimir per pantalla amb el següent, que és el nom de la variable speed, i després un altre + i les cometes dobles per indicar la unitat de mesura "MPH" (milers per hour, milles per hora, perquè l'exemple està agafat d'un autor anglès, podríem posar "km / h quilòmetres per hora"). </p>
            <img src="../Imatges/ImatgesScripts/imaScript45.png">
        
        <p>Li donem a ctrl so file save per guardar el codi i tornem a unity, on ens apareix el nou: </p>
            <img src="../Imatges/ImatgesScripts/imaScript46.png">
        
        <p>Ens pot sorprendre que el valor de speed en Unity sigui de 10, perquè en el codi l'hem canviat perquè sigui 0.0 i hem guardat. Però el guardar el codi no vol dir que es sobreescriu el d'Unity, per a això cal prémer a la rodeta dalt a la dreta i donar-li a Reset:</p>
            <img src="../Imatges/ImatgesScripts/imaScript47.png">
            
        <p>Ara que està tot a 0, donem-li a Play amunt en el botó de la fletxa: </p>
            <img src="../Imatges/ImatgesScripts/imaScript48.png">
        
        <p>I a sota a l'esquerra veurem un missatge com el següent:
            <li>You are travelling at NaN MPH.</li>
        </p>
            <img src="../Imatges/ImatgesScripts/imaScript49.png">
        
        <p>Això es deu al fet que estem intentant dividir 0 entre 0 per això surt que la speed és NaN, not a number:</p>
            <img src="../Imatges/ImatgesScripts/imaScript50.png">
        
        <p>Com volem calcular coses canviem la Distance a 100 i el Time a 1 i vegem que passa:</p>
            <img src="../Imatges/ImatgesScripts/imaScript51.png">
        
        <p>Si li donem a Play i mirem a baix a l'esquerra diu:
            <li>You are travelling at 100 MPH.</li>
        </p>
            <img src="../Imatges/ImatgesScripts/imaScript52.png">
        
        <p>Si poséssim Time a 2:</p>
            <img src="../Imatges/ImatgesScripts/imaScript53.png">
        
        <p>Ens sortiria:
            <li>You are travelling at 50 MPH.</li>
        </p>
            <img src="../Imatges/ImatgesScripts/imaScript54.png">
        <p></p>
    
        
    <!-- ################################################################################################ -->
    <h1 id = "C6"> Operadors de comparació i lògica </h1>
        
        <p>Per donar lògica al nostre programa necessitem comparar valors de variables mitjançant condicions. Per exemple l'operador == retorna true si el que hi ha a banda i banda és igual, i false si no:</p>
            <img src="../Imatges/ImatgesScripts/imaScript55.png">
        
        <p>També tenim el complementari ! = Que significa no és igual que. Dóna true si el que hi ha a banda i banda és diferent i false si no:</p>
            <img src="../Imatges/ImatgesScripts/imaScript56.png">
        
        <p>Després tenim més gran que, dóna true si el de l'esquerra té més valor que el de la dreta, menor que, major o igual que, menor mateixa manera que:</p>
            <img src="../Imatges/ImatgesScripts/imaScript57.png">
        
        <p>Després tenim els operadors lògics que es fan servir per a crear comparacions / condicions complexes:</p>
            <img src="../Imatges/ImatgesScripts/imaScript58.png">
        
        <p>&& significa i, || és o,! és no; s'entén millor amb un exemple:</p>
        
        <p>Per exemple, normalment les condicions i comparacions es fan servir dins d'una estructura anomenada if. S'escriu:
            if (esCompleixCondició) {
                ferAlgo;
            }
        </p>
        
        <p>Si volguéssim indicar a el jugador quan està sobrepassant el límit de velocitat podem usar el següent:</p>
            <img src="../Imatges/ImatgesScripts/imaScript59.png">
        <p>if (speed> 70 || speed <40) print ( "You are breaking the law!"); </p>
        
        <p>Expressa: si la velocitat és superior a 70 o inferior a 40, posa per pantalla You are breaking the law !, tu estàs infringint la llei !.</p>
        <p>Guardem i tornem a Unity.</p>
        
        <p>Si a la dreta posem que viatgem Distance 100 a Time 1</p>
            <img src="../Imatges/ImatgesScripts/imaScript60.png">
        
        <p>Obrim la Console, on s'imprimeixen els missatges:</p>
            <img src="../Imatges/ImatgesScripts/imaScript61.png">
        
        <p>Si no la veus disponible clica al menú superior a Window -> Console.</p>
        
        <p>En concret, veiem que anem a 100 MPH per tant la nostra velocitat és> 70 i estem infringint la llei:</p>
            <img src="../Imatges/ImatgesScripts/imaScript62.png">
        
        <p>Si canviéssim el time a 2, aniríem a 50 de speed i ja no infringiríem la llei:</p>
            <img src="../Imatges/ImatgesScripts/imaScript63.png">
            <img src="../Imatges/ImatgesScripts/imaScript64.png">
        
        <p>El motiu d'aquest comportament recordem que és la condició de dins de l'if que acabem d'escriure:</p>
            <img src="../Imatges/ImatgesScripts/imaScript65.png">
        
        <p>Que expressa si la nostra velocitat speed és superior a 70 o menys que 40 infringim la llei, si no, com en aquest cas, anem a 50 simplement vam imprimir el que està fora de l'if: You are travelling at 50 MPH.</p>
        
        <p></p>
        
    <!-- ################################################################################################ -->
    <h1 id = "C7"> Mètodes / Funcions </h1>
        
        <p>Ara anem a aprendre què són i com es fan servir els mètodes. Els mètodes són un conjunt d'instruccions. Els mètodes són instruccions que realitzen tasques.</p>
        <p>Si volguéssim que la velocitat de el jugador es calculi cada vegada que premem un botó podríem començar creant un mètode per a això:</p>
             <img src="../Imatges/ImatgesScripts/imaScript66.png">
        
        <p>void SpeedCheck () { }</p>
        <p>Recordem que void significa el tipus de dada que ens torna el mètode, en aquest cas com retorna res li posem void. SpeedCheck és el títol de l'mètode, normalment els noms de mètodes es distingeixen dels de variables posant la primera inicial també en majúscules. Els () parèntesis signifiquen que és un mètode. Les {} claus tanquen el conjunt d'instruccions que componen el nostre mètode.</p>
        
        <p>Així que ara podem agafar el codi que havíem escrit abans de seleccionar-tallar-lo i posar-lo dins del mètode:</p>
             <img src="../Imatges/ImatgesScripts/imaScript67.png">
        
        <p>Guardem i tornem a Unity:</p>
             <img src="../Imatges/ImatgesScripts/imaScript68.png">
        
        <p>Li donem a Play i ens adonem que no s'imprimeixen missatges a la consola:</p>
             <img src="../Imatges/ImatgesScripts/imaScript69.png">
        
        <p>Això es deu al fet que abans estàvem posant tot el codi en el mètode per defecte Start () que s'executa a l'començar la vida de l'objecte de forma automàtica.</p>
        
        <p>Si volguéssim cridar a la nostra funció quan premem l'espai faríem el següent:</p>
             <img src="../Imatges/ImatgesScripts/imaScript70.png">
        
        <p>És a dir dins de l'Update () el mètode que Unity s'executa cada vegada que s'imprimeix la pantalla entre 30 i 60 vegades per segon, escrivim:</p>
        <p>if (Input.GetKeyDown (KeyCode.Space)) {SpeedCheck ();}</p>
        <p>Això expressa: si pressionem de el teclat l'espai, llavors crida a la funció SpeedCheck (). Una crida a una funció és el nom de la funció amb els parèntesis ().</p>
        <p>Guardem i tornem a Unity.</p>
        <p>Si tornem a Unity i li donem a Play veurem que no s'imprimeix cap missatge, bé:</p>
             <img src="../Imatges/ImatgesScripts/imaScript71.png">
        
        <p>Però si li donem a l'espai, sí:</p>
             <img src="../Imatges/ImatgesScripts/imaScript72.png">
             <img src="../Imatges/ImatgesScripts/imaScript73.png">
        <p>You are travelling at 50MPH.</p>
        
        <p>Ja amb això hem après a fer servir els mètodes i les condicions amb IFS; =).</p>
        <p></p>

        
    <!-- ################################################################################################ -->
   
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="sidebar one_quarter"> 
      <!-- ################################################################################################ -->
      <h6>PROGRAMACIÓ DE VIDEOJOC BÀSICA EN C #</h6>
      <nav class="sdb_holder">
        <ul>
            <li><a href="#C1"> REQUISITS MINIMS </a></li>
            <li><a href="#C2"> CREAR I APLICAR SCRIPTS </a></li>
            <li><a href="#C3"> ESTRUCTURA DELS SCRIPTS </a></li>
            <li><a href="#C4"> VARIABLES </a></li>
            <li><a href="#C5"> OPERADORS D'ASSIGNACIÓ I ARITMÈTICA </a></li>
            <li><a href="#C6"> OPERADORS DE COMPARACIÓ I LÒGICA </a></li>
            <li><a href="#C7"> MÈTODES / FUNCIONS </a></li>
          </ul>
        </nav>
    
    
     <!-- ################################################################################################ --> 
      
      <div class="sdb_holder">
        <article>
          <h6>TUTORIALS DAM</h6>
          <ul>
            <li><a href="mingo.php">GAMEKIT 2D</a></li>
            <li><a href="jocsan.php">GAMEKIT 3D</a></li>
            <li><a href="toni.php">PLATAFORMES 2D</a></li>
            <li><a href="eric.php">PROTOTYPE 3RD PERSON</a></li>
            <li><a href="alex.php">BASIC GAMEPLAY</a></li>
            <li><a href="danim.php">DRIVE SIMULATION</a></li>
            <li><a href="ivan.php">PLANE SIMULATION</a></li>
            <li><a href="julia.php">AR TRUMP</a></li>
            <li><a href="arturo.php">BASE DE DADES EN UNITY</a></li>
            <li><a href="dania.php">JOC MULTIPLAYER</a></li>
            <li><a href="mingoscripts.php">PROGRAMACIÓ DE VIDEOJOC BÀSICA EN C #</a></li>
            <li><a href="dialoguesystem.php">SIMPLE DIALOGUE SYSTEM</a></li>
            <li><a href="minimap.php">MINIMAP TUTORIAL</a></li>
            <li><a href="xat.php">CHAT TUTORIAL</a></li>
            <li><a href="3dcharacterselection.php">3D CHARACTER SELECTION</a></li>
            <li><a href="2dcharacterselection.php">2D CHARACTER SELECTION</a></li>
            <li><a href="multiplayer.php">MENU MULTIPLAYER</a></li>
            <li><a href="github.php">GITHUB EN UNITY</a></li>
            <li><a href="menus.php">TUTORIAL START MENU/SETTINGS MENU/SAVE/LOAD SYSTEM</a></li>
            <li><a href="gps.php">GPS EN UNITY</a></li>
            <li><a href="navmesh.php">NAV MESH TUTORIAL</a></li>
          </ul>
        </article>
      </div>
            
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">El Laboratori</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script> 
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>