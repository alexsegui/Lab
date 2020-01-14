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
<style>
    div.a {
        text-transform: uppercase;
    }
</style>
    <!-- ################################################################################################ -->
    <div class="a">
      <!-- ################################################################################################ -->
<h1>Tutorial Menú Multiplayer Avançat </h1>
        
    <p>Importem la carpeta Scripts, Sprites i Prefabs and GameObjects.</p>
        <img src="../Imatges/Imatgesmultiplayer/multi1.png">
    <p></p>
        
    <p>Anirem a projecte, scenes i crearem 2 scenes més (noms: MainMenu i ServerClientMenu) la default li canviaré el nom per Lobby_Game.</p>
        <img src="../Imatges/Imatgesmultiplayer/multi2.png">
    <p></p>
        
    <p>Un cop tot llest preparem el menú del multi. Anirem a scene MainMenu i arrossegarem el Canvas_Main (prefab) al jerarquia:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi3.png">
    
    <p>Crearem a jerarquia un Empty Object i li anomenarem Manager_Network. A aquest, li afegirem com a components 3 scripts: ClientHUD, ServerHUD i CustomNetworkManager. També a jerarquia, la càmera principal la posarem dins del Manager_network:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi4.png">
        
    <p>Main Camera li canviaré el nom per Menu_Camera, canviaré la seva posició i escala a pos=0, 3.24, -6.58 i scale=0.5, 0.5, 0.5. També li afegiré dues components, GUI Layer i Flare Layer:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi5.png">
        
    <p>Afegirem els prefabs Canvas_Client i Canvas_Server al Manager_Network:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi6.png">
    
    <p>Fet això configurarem el Canvas_Main, anirem a la component del Script Main Menu i afegirem els següents:
        <li>Server Canvas: Canvas_Server (dins de Manager_Network).</li>
        <li>Client Canvas:  Canvas_Client (dins de Manager_Network).</li>
        <li>Client Hud Script: Manager_Network (de jerarquia).</li>
        <li>Server HUD Script: Manager_Network (de jerarquia).</li>
    </p>
        <img src="../Imatges/Imatgesmultiplayer/multi7.png">
    
    <p>Per acabar aquest punt, al Manager_Network li posarem la Tag NetworkManager i a Menu_Camera la tag MainCamera (Si alguna tag no surt a la llista la creem):</p>
        <img src="../Imatges/Imatgesmultiplayer/multi8.png">
        <img src="../Imatges/Imatgesmultiplayer/multi9.png">
    
    <p>Toca acabar de configurar el Manager_Network. Hem afegit 3 components com scripts abans però no estan relacionats. Al Manager_Network i la component Client HUD, arrossegarem de jerarquia/Manager_Network/Canvas_Server/Panel les seves corresponents fins Clients Info:
        <li>CHECKING DINS DE Button_GetIP (Image_Checking) (Bloquejar el inspector per facilitar feina)</li>    
    </p>
        <img src="../Imatges/Imatgesmultiplayer/multi10.png">
        <img src="../Imatges/Imatgesmultiplayer/multi11.png">
        <img src="../Imatges/Imatgesmultiplayer/multi12.png">
    
    <p>Ha de quedar així:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi13.png">
        
    <p>Ara toca configurar el Client Hud Component també (Aquest és més ràpid i fàcil jerarquia/Manager_Network/Canvas_Client):</p>
        <img src="../Imatges/Imatgesmultiplayer/multi14.png">
        <img src="../Imatges/Imatgesmultiplayer/multi15.png">
        
    <p>Ha de quedar:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi16.png">
        
    <p>Per acabar, falta modificar la component Custom Network Manager. Abans de començar, obrirem les altres dues scenes i les afegirem a build settings. No importa l’ordre:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi17.png">
        
    <p>Ara ja podem modificar la component (tornem a la scene MainMenu i anem a la component CustomNetworkManager).</p>
    <p>Afegirem a Offline Scene ---> ServerClientMenu i a Online Scene ---> Lobby_Game </p>
        <img src="../Imatges/Imatgesmultiplayer/multi18.png">
    
    <p>Activem la configuració avançada i podrem canviar el màxim de connexions des d’aquí. Posaré 8. </p>
        <img src="../Imatges/Imatgesmultiplayer/multi19.png">
    
    <p>A baix, falta posar 3 valors a Clients Info Text posarem jerarquia/Manager_Network/Canvas_Server/Panel/Image_ClientsInfo/TextClientsInfo</p>
    <p>I a les altres dues posarem el Manager_Network de jerarquia:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi20.png">
        
    <p>Crearem un Empty anomenat EventSystem i li afegirem com a components: Event System i Standalone Input Mode i a l’opció Drag Threshold posarem 5:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi21.png">
        
    <p>Event System de jerarquia l’hem de posar a les 3 scenes. Podem copiar i enganxar. Jo he fet un prefab i aquest l’he posat a les altres scenes:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi22.png">
        
    <p>Ja casi està, només falta acabar de configurar uns botons i ja tindrem el multiplayer llest. Per no fer-ho molt llarg ho resumirem en:
        <li>Anirem a jerarquia, Manager_Network i allà tenim Canvas_Client i Canvas_Server.</li>
        <li>Tant a Client com a Server, tenim buttons. Exemple (Button_StartServer).</li>
        <li>Hem d’anar a cada botó i a les seves components, on posa On Click () hem d’afegir sempre el Manager_Network de jerarquia. Exemple:</li>
        <img src="../Imatges/Imatgesmultiplayer/multi23.png">
    </p>
        

    <p>També hem d’afegir la seva funció corresponent, per això deixo una llista de totes:</p>
        
    <p>Canvas_Server:
        <li>Button_StartServer ---> ServerHUD.StartServerCustom</li>
        <li>Button_StopServer ---> ServerHUD.StopHostCustom</li>
        <li>Button_GetIP ---> ServerHUD.GetIP</li>
        <li>Button_ResetRettings ---> ServerHUD.ResetToDefault</li>
    </p>
        
    <p>Canvas_Client:
        <li>Button_ConnectToServer ---> ClientHUD.ConnectToServer</li>
        <li>Button_Disconnect ---> ClientHUD.ButtonDiscConnect</li>
    </p>
    
    <p>Exemple de com queda:</p>
        <img src="../Imatges/Imatgesmultiplayer/multi24.png">
        
    <p>Fet això tenim ja preparat una interfície amb diferents paràmetres de configuració per Unity, tant client com servidor. Si volem fer un joc, podem aplicar aquest tutorial al nostre joc. L’exemple és el joc que us he facilitat.</p>
    
    <p>Detalls: Al connectar al servidor, l’escena on comença el joc es diu Lobby_Game.  Per comprovar que funciona podeu compilar el programa, obrir uns quants, fer un de servidor i els altres de clients. Connecteu com a localhost i veureu que al servidor us reconeix i diu que hi ha més d’un client connectat. Si voleu realitzar la connexió fora de la vostra xarxa, només haureu de donar clic al botó de “Find Server IP Address” i obrir el port seleccionat (per defecte el 7777). Tot el procediment és igual.</p>  
        
    <p></p>
        
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