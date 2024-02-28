<?php

    // Llamada a la conexión
    require_once "./Db/Con1Db.php";
    // Llamada al modelo
    require_once "./Models/clientes1Model.php";

    // Tratamiento de los imput text
    $textoConsulta1 = empty($_POST['textoConsulta1']) ? '' : $_POST['textoConsulta1'];

    // Instanciación de un objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from cliente where cod_cliente like '%$textoConsulta1%' or DNI_cliente like '%$textoConsulta1%' or Nom_cliente like '%$textoConsulta1%' order by cod_cliente, DNI_cliente, Nom_cliente";

    $data = $oData->getData1($sql);


    if(empty($data))
    {
        echo
        "
            <div class='bloque1 negrita'>
                No hay datos
            </div>
        ";
    }
    else
    {
        echo
        "
            <div class='bloque1 negrita'>
                <div class='bloque1'>Marca</div>
                <div class='bloque1'>Modelo</div>
                <div class='bloque1'>Autonomía</div>
            </div>     
        ";
        foreach($data as $row)
        {
            echo
            "
            <div class='bloque0'>
                    <div class='bloque1'>$row->Cod_cliente</div>
                    <div class='bloque1'>$row->DNI_cliente</div>
                    <div class='bloque1'>$row->Nom_cliente</div>
                </a>  
            </div>
            ";
        }
    }
    

    


?>