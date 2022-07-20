<?php
require("../MODEL/conexion_notes.php");

$notes=new notes();
$notesFixes=$notes->tarerNotasFijadas();


