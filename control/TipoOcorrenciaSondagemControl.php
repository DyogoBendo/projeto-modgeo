<?php 
require_once "../dao/TipoOcorrenciaSondagemDAO.php";
require_once "../model/TipoOcorrenciaSondagem.php";

    class TipoOcorrenciaControl{
        private $dao;
        private $modelo;
        private $acao;
        function __construct(){
            $this->dao=new TipoOcorrenciaSondagemDAO();
            $this->modelo=new TipoOcorrenciaSondagem();
            $this->acao=$_REQUEST["acao"];
            $this->verificaAcao();
        }
        function verificaAcao(){
            switch ($this->acao){
                case 1:
                    $this->modelo->setProfMin($_POST["profMin"]);
                    $this->modelo->setProfMax($_POST["profMax"]);
                    $this->modelo->setTipoRocha($_POST["tipoRocha"]);
                    $this->modelo->setIdNomeSondagem($_POST["id"]);
                    $this->dao->inserir($this->modelo);
                    break;
            }
    }
}