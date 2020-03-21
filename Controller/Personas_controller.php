<?php

require_once "Model/Personas_Model.php";

//--------------------------------------- Paginacion -------------------------------------
    $empleado=new Paginar();
    $total_registro=$empleado->Obtener_registros_Totales();
    $registro_por_paginas=4;
    
    if (!isset($_GET["page"])) {//evulua cuando no se ha click en la paginacion
        $_GET["page"]=1;//asigna valor a la variable 
        $pagina=1;//asigna valor a la variable 
    } else {   
        $pagina=$_GET["page"];//obtiene el valor de page cuando se ha click en la paginacion
    }
    
    $numero_total_paginas=ceil($total_registro/$registro_por_paginas);//Determina la cantidad de pagina a crear, ceil redonde al entero superior
    $empezar_desde= ($pagina-1) * $registro_por_paginas;
    $matriz_empleado=$empleado->consultar_Limite($empezar_desde,$registro_por_paginas);

//----------------------------- Controla el boton de PREVIO de la paginacion ---------------------------
    function previo()
    {
        $previo=0;
        if ($_GET['page']==1){ 
            $previo=$_GET['page']=1;
        }else{ 
            $previo=$_GET['page']-1;
        }
        return $previo;
    }

//----------------------------- Controla el boton de SIGUIENTE de la paginacion ---------------------------
function siguiente($numero_total_paginas)
{
    $siguiente=0;
    if ($_GET['page']==$numero_total_paginas){ 
        $siguiente=$_GET['page'];
    }else{ 
        $siguiente=$_GET['page']+1;
    }
    return $siguiente;
}

// ---------------------------- Numero en mostrando del total empleado ---------------------------

    $mostrar=0;
    $mostrar=$empezar_desde+4;
    if ($mostrar>$total_registro) {
        $mostrar=$empezar_desde+1;
    }

require_once "View/Personas_View_boostrap.php";

?>