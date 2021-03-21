<?php
require('loopFunctions.php');
$elements = array(
    "alcalinos" => array('Li','Na','K','Rb','Cs','Fr'),
    "alcalinoterreos" => array('Be','Mg','Ca','Sr','Ba','Ra'),
    "metalesTransicion" => array('Sc','Y','Ti','Zr','Hf','Rf','V','Nb','Ta','Db','Cr','Mo','W','Sg','Mn','Tc',
    'Re','Bh','Fe','Ru','Os','Hs','Co','Rh','Ir','Mt','Ni','Pd','Pt','Ds','Cu','Ag','Au','Rg','Zn','Cd','Hg','Cn'),
    "otrosMetales" => array('Al','Ga','In','Tl','Nh','Sn','Pb','Fl','Bi','Mc','Lv'),
    "metaloides" => array('B','Si','Ge','As','Sb','Te','Po'),
    "otrosNoMetales" => array('H','C','N','P','O','S','Se'),
    "halogenos" => array('F','Cl','Br','I','At','Ts'),
    "gasesNobles" => array('He','Ne','Ar','Kr','Xe','Rn','Og'),
    "lantanidos" => array('La','Ce','Pr','Nd','Nd','Pm','Sm','Eu','Gd','Tb','Dy','Ho','Er','Tm','Yb','Lu'),
    "actinidos" => array('Ac','Th','Pa','U','Np','Pu','Am','Cm','Bk','Cf','Es','Fm','Md','No','Lr'),
    "extras" => array('La-Lu','Ac-Lr')
); 
    
?>
<div class="elements-first-container">
    <div class="first-column">
        <?php forLoopCustomize("otrosNoMetales",$elements,0,0);
        forLoop("alcalinos",$elements);?>
    </div>
    <div class="second-column">
        <?php forLoop("alcalinoterreos",$elements);?>
    </div>
    <div class="third-column">
        <?php forLoopCustomize("metalesTransicion",$elements,0,1);
        forLoop("extras",$elements); ?>
    </div>
    <div class="fourth-column">
        <?php forLoopCustomize("metalesTransicion",$elements,2,5);?>
    </div>
    <div class="fifth-column">
        <?php forLoopCustomize("metalesTransicion",$elements,6,9);?>
    </div>
    <div class="sixth-column">
        <?php forLoopCustomize("metalesTransicion",$elements,10,13);?>
    </div>
    <div class="seventh-column">
        <?php forLoopCustomize("metalesTransicion",$elements,14,17);?>
    </div>
    <div class="eighth-column">
        <?php forLoopCustomize("metalesTransicion",$elements,18,21);?>
    </div>
    <div class="nineth-column">
        <?php forLoopCustomize("metalesTransicion",$elements,22,25);?>
    </div>
    <div class="tenth-column">
        <?php forLoopCustomize("metalesTransicion",$elements,26,29);?>
    </div>
    <div class="eleventh-column">
        <?php forLoopCustomize("metalesTransicion",$elements,30,33);?>
    </div>
    <div class="twelveth-column">
        <?php forLoopCustomize("metalesTransicion",$elements,34,37);?>
    </div>
    <div class="thirteenth-column">
        <?php forLoopCustomize("metaloides",$elements,0,0);
        forLoopCustomize("otrosMetales",$elements,0,4);?>
    </div>
    <div class="fourteenth-column">
        <?php forLoopCustomize("otrosNoMetales",$elements,1,1);
        forLoopCustomize("metaloides",$elements,1,2);
        forLoopCustomize("otrosMetales",$elements,5,7);?>
    </div>
    <div class="fifteenth-column">
        <?php forLoopCustomize("otrosNoMetales",$elements,2,3);
        forLoopCustomize("metaloides",$elements,3,4);
        forLoopCustomize("otrosMetales",$elements,8,9);?>
    </div>
    <div class="sixteenth-column">
        <?php forLoopCustomize("otrosNoMetales",$elements,4,6);
        forLoopCustomize("metaloides",$elements,5,6);
        forLoopCustomize("otrosMetales",$elements,10,10);?>
    </div>
    <div class="seventeenth-column">
        <?php forLoop("halogenos",$elements);?>
    </div>
    <div class="eighteenth-column">
        <?php forLoop("gasesNobles",$elements);?>
    </div>
</div>
<div class="elements-second-container">
    <div class="nineteenth-column">
            <?php forLoop("lantanidos",$elements);?>
    </div>
    <div class="twentyth-column">
            <?php forLoop("actinidos",$elements);?>
    </div>
</div>
<div class="elementsTypes">
    <fieldset>
     <legend id="legend">Metales</legend>   
     <label id="alcalinos" for="alcalinos">Alcalinos</label>
     <label id="alcalinoterreos" for="alcalinoterreos">Alcalinotérreos</label>
     <label id="metalestransicion" for="metalestransicion">Metales de transición / Bloque D</label>
     <label id="lantanidos" for="lantanidos">Lantánidos</label>
     <label id="actinidos" for="actinidos">Actínidos</label>
     <label id="otrosmetales" for="otrosmetales">Otros Metales</label>
    </fieldset>
    <label id="metaloides" for="metaloides">Metaloides</label>
    <fieldset>
        <legend id="legend2">No Metales</legend>
        <label id="otrosnometales" for="otrosnometales">Otros No Metales</label>
        <label id="halogenos" for="halogenos">Halógenos</label>
        <label id="gasesnobles" for="gasesnobles">Gase Nobles</label>
    </fieldset>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
</body>
</html>