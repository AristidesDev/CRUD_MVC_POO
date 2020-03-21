<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title></title>
</head>
<body>
    <div class="container">        
<!------------------------------ Cabecera de la tabla y boton modal de agregar empleado -------------------------------------->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Administrar <b>Empleados</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Nuevo Empleado</span></a>
						<!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Borrar</span></a>						 -->
					</div>
                </div>
            </div>
<!--------------------------------- Titulos de la tabla de empleados -------------------------------------->
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
						<th>
							<span class="custom-checkbox">
								<!-- <input type="checkbox" id="selectAll">
								<label for="selectAll"></label> -->
							</span>
						</th>
                        <th>Nombre</th>
                        <th>Email</th>
						<th>Direccion</th>
                        <th>Telefono</th>
                        <th>Accion</th>
                    </tr>
                </thead>
<!----------------------------------- Contruccion de regsitro de empleados ----------------------------------->
                <?php 
                    foreach ($matriz_empleado as $empleados):
                ?>
                <tbody>
                    <tr>
						<td>
							<span class="custom-checkbox">
								<!-- <input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label> -->
							</span>
						</td>
                        <td><?php echo $empleados["NOMBRE"]?></td>
                        <td><?php echo $empleados["EMAIL"]?></td>
						<td><?php echo $empleados["DIRECCION"]?></td>
                        <td><?php echo $empleados["TELEFONO"]?></td>
                        <td>
                            <a href="View/Personas_View_Actualizar_boostrap.php?id=<?php echo $empleados["ID"]?> & nomb_act=<?php echo $empleados["NOMBRE"]?> & email_act=<?php echo $empleados["EMAIL"]?> & direc_act=<?php echo $empleados["DIRECCION"]?> & tel_act=<?php echo $empleados["TELEFONO"]?> & page=<?php echo $_GET['page']?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
                            <!-- <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>                          -->
                            <a href="Controller/Personas_Borrar_Registro.php?id=<?php echo $empleados["ID"]?> & page=<?php echo $_GET['page']?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Borrar">&#xE872;</i></a>
                        </td>
                    </tr>
                <?php 
                    endforeach
                ?> 
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Mostrando <b><?php echo $empezar_desde+1?></b> de <b><?php echo $mostrar?></b> Empleados </div>
                <div class="hint-text"><span class="total_emp" id="total_emp">| Total de Empleados <b><?php echo $total_registro?></span></div>
                <ul class="pagination">
                    <li class="page-item <?php echo $_GET['page']<=1? 'disabled' : '' ?>"><a href="CRUD.php?page=<?php echo previo()?>">Previo</a></li>
                    <?php
                        $page=0;
                        for ($i = 1; $i <= $numero_total_paginas; $i++): 
                    ?>
                            <li class='page-item <?php echo $_GET['page']==$i ? 'active' : ''?>'><a class='page-link' href="CRUD.php?page=<?php echo $i ?>"><?php echo $i ?></a> </li>
                    <?php 
                        endfor
                    ?> 
                    <li class="page-item <?php echo $_GET['page']>=$numero_total_paginas ? 'disabled' : '' ?>"><a href="CRUD.php?page=<?php echo siguiente($numero_total_paginas)?>">Siguiente</a></li>
                </ul>
            </div>
        </div>
<!--------------------------------------- Modal Agregar Empleado  ----------------------------------->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="Controller/Personas_Insertar_Registro.php" method="get">
                        <div class="modal-header">						
                            <h4 class="modal-title">Agregar Empleado</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" required name="nombre" id="nombre">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" required name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label>Direccion</label>
                                <input type="text" class="form-control" required name="direccion" id="direccion">
                            </div>
                            <div class="form-group">
                                <label>Telefono</label>
                                <input type="text" class="form-control" required name="telefono" id="telefono">
                            </div>					
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                            <input type="submit" class="btn btn-success" value="Agregar" name="insertar" id="insertar">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</body>
</html>