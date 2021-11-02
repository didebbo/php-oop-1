<?php

class Movie
{
    protected $args;

    /**
     * __construct
     * @param object $_args
     * [
     * 'titolo' => 'Titolo Movie',
     * 'descrizione' => 'Descrizione Movie',
     * 'punteggio' => 8
     * ]
     */
    function __construct($_args)
    {
        $this->args["titolo"] = isset($_args["titolo"]) ? $_args["titolo"] : NULL;
        $this->args["descrizione"] = isset($_args["descrizione"]) ? $_args["descrizione"] : NULL;
        $this->args["punteggio"] = isset($_args["punteggio"]) ? $_args["punteggio"] : NULL;
    }

    function setTitolo($_titolo)
    {
        $this->args["titolo"] = $_titolo;
    }

    function getTitolo()
    {
        return $this->args["titolo"];
    }

    function setDescrizione($_descrizione)
    {
        $this->args["descrizione"] = $_descrizione;
    }

    function getDescrizione()
    {
        return $this->args["descrizione"];
    }

    function setPunteggio($_punteggio)
    {
        $this->args["punteggio"] = $_punteggio;
    }

    function getPunteggio()
    {
        return $this->args["punteggio"];
    }
}
