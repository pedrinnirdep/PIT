<?php

require_once 'model/Relatorio.php';

class RelatorioController{
    public function Relatorio(){
        $obj = new Relatorio($_GET['filtro']);
        $relatorios = $obj->FiltroRelatorio();

        include "view/relatorio.php";
    }

    public function RelatorioData(){
        $obj = new Relatorio($_GET['filtro'], $_GET['datainicio'], $_GET['datafim']);
        $relatorios = $obj->FiltroRelatorioData();

        include "view/relatorio.php";
    }

    public function RelatorioPDF(){
        $obj = new Relatorio($_GET['filtro']);
        $relatorios = $obj->FiltroRelatorio();

        include "view/RelatorioPDF.php";
    }

    public function RelatorioPDFData(){
        $obj = new Relatorio($_GET['filtro'], $_GET['data_inicio'], $_GET['data_fim']);
        $relatorios = $obj->FiltroRelatorio();

        include "view/RelatorioPDFData.php";
    }
}