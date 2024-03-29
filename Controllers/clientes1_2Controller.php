<?php
    // Llamada a la conexión
    require_once './Db/Con1Db.php';
    // Llamada al modelo
    require_once './Models/clientes2Model.php';

    // Instancia del objeto
    $oData = new Datos;

    // Llamada al método
    $sql = "select * from cliente order by cod_cliente, DNI_cliente, Nom_cliente";
    $data = $oData->getData1($sql);

    if(empty($data))
    {
        echo
        "
            <div class='bloque1 negrita'>
                No hay datos.
            </div>
        ";
    }
    else
    {
        echo
        "
        <div class='bloque0 negrita'>
            <div class='bloque1'>Marca</div>
            <div class='bloque1'>Modelo</div>
            <div class='bloque1'>Autonomia (Km)</div>
        </div>
        ";
        foreach ($data as $row)
        {
            echo
            "
            <div class='bloque0'>
                <div class='bloque1'>$row->Cod_cliente</div>
                <div class='bloque1'>$row->DNI_cliente</div>
                <div class='bloque1'>$row->Nom_cliente</div>
            </div>
            ";
        }
    }

?>