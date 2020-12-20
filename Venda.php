<?php

class Venda {
    private $id;
    private $data;
    private $hora;
    private $idcliente;
    private $ValorTotal;
    function getId() {
        return $this->id;
    }

    function getData() {
        return $this->data;
    }

    function getHora() {
        return $this->hora;
    }

    function getIdcliente() {
        return $this->idcliente;
    }

    function getValorTotal() {
        return $this->ValorTotal;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setData($data): void {
        $this->data = $data;
    }

    function setHora($hora): void {
        $this->hora = $hora;
    }

    function setIdcliente($idcliente): void {
        $this->idcliente = $idcliente;
    }

    function setValorTotal($ValorTotal): void {
        $this->ValorTotal = $ValorTotal;
    }


}
