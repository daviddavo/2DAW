<?php

/**
Confeccionar una clase CabeceraPagina que permita mostrar un t�tulo,
 * indicarle si queremos que aparezca centrado, a derecha o izquierda,
 * adem�s permitir definir el color de fondo y de la fuente.
 */
class CabeceraPagina
{
    private $titulo;
    private $align;
    private $color;
    private $background_color;

    function __construct($titulo = '', $align = '', $color = '', $background_color = '' ){
        $this->titulo = $titulo;
        $this->align = $align;
        $this->color = $color;
        $this->background_color = $background_color;
    }

    function inicializar($titulo = '', $align = '', $color = '', $background_color = '' ){
        $this->titulo = $titulo;
        $this->align = $align;
        $this->color = $color;
        $this->background_color = $background_color;
    }

    function mostrar(){

        $cabecera = '<div style="text-align:'.$this->align.'; color:'.$this->color.';background-color:'.$this->background_color.'">';
        $cabecera .= $this->titulo."</div>";

        print $cabecera;
    }



}