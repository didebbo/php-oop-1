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
        $this->args["titolo"] = isset($_args["titolo"]) ? strval($_args["titolo"])  : NULL;
        $this->args["descrizione"] = isset($_args["descrizione"]) ? strval($_args["descrizione"]) : NULL;
        $this->args["punteggio"] = isset($_args["punteggio"]) ? intval($_args["punteggio"]) : NULL;
    }

    /**
     * setTitolo($_titolo)
     * @param string $_titolo
     */
    function setTitolo(string $_titolo)
    {
        $this->args["titolo"] = $_titolo;
    }

    /**
     * getTitolo()
     */
    function getTitolo()
    {
        return $this->args["titolo"];
    }

    /**
     * setDescrizione($_descrizione)
     * @param string $_titolo
     */
    function setDescrizione(string $_descrizione)
    {
        $this->args["descrizione"] = $_descrizione;
    }

    /**
     * getDescrizione()
     */
    function getDescrizione()
    {
        return $this->args["descrizione"];
    }

    /**
     * setPunteggio($_punteggio)
     * @param int $_punteggio
     */
    function setPunteggio(int $_punteggio)
    {
        $this->args["punteggio"] = $_punteggio;
    }

    /**
     * getPunteggio()
     */
    function getPunteggio()
    {
        return $this->args["punteggio"];
    }
}
