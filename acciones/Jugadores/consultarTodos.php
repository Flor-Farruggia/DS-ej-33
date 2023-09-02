<?php

require_once '../../modelo/jugador.php';
require_once '../../modelo/club.php';
require_once 'responses/consultarTodosResponse.php';

header('Content-Type: application/json');

$res = new ConsultarTodosResponse();

$c = new Club ();
$c->Nombre='Paris Saint-Germain Football Club';
$c->Fundacion='2 de agosto de 1970 (52 anos)';
$c->Presidente='Nasser Al-Khelaifi';

$c1 = new Club ();
$c1->Nombre='Manchester United Football Club';
$c1->Fundacion='5 de marzo de 1878 (144 anos)';
$c1->Presidente='Joel Glazer';

$j = new Jugador();
$j->Id = 1;
$j->Nombre = 'Lionel Andres Messi';
$j->Apodos = 'La Pulga,  El Mesias,  D10S';
$j->Club = $c;
$j->Altura = '1.70 m' ;

$j1 = new Jugador();
$j1->Id = 2;
$j1->Nombre = 'Lisandro Martinez';
$j1->Apodos = 'Licha';
$j1->Club = $c1;
$j1->Altura = '1.75 m';

$res->ListaJugadores[] = $j;
$res->ListaJugadores[] = $j1;


echo json_encode($res);
