
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Fechas para Exámenes a Título y Regularización</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Exámenes</a></li>
            <li class="breadcrumb-item active">Fechas para ET y ER</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content p-4">
    <div class="card container-fluid p-sm-3"> <!-- Filtro de busqueda de examenes -->
        <form action="#">
            <div class="row row-cols-2">
                <div class="col-sm">
                    <div class="row row-cols-3 row-cols-2">
                        <div class="col-lg-4 col-6">
                            <div class="form-check-inline">
                                <label class="form-check-label mr-sm-2" for="area">Área Académica:</label>
                                <select class="form-control form-check-input" id="area" name="areaAcad">
                                    <option>Computación e Informática</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">
                            <div class="form-check-inline">
                                <label class="form-check-label mr-sm-2" for="ciclo">Ciclo Escolar:</label>
                                <select class="form-control form-check-input" id="ciclo" name="cicloEsc">
                                    <option>2021-2022/II</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-6">    
                            <div class="form-check-inline">
                                <label class="form-check-label mr-sm-2" for="periodo">Período:</label>
                                <select class=" form-control form-check-input" id="periodo" name="periodoExa">
                                    <option>Exámenes a Título</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-secondary float-sm-right w-100"><i class="fa fa-search mr-2" aria-hidden="true"></i>Buscar</button>
                </div>
            </div>
        </form>
    </div>

    <div class="card container-fluid p-sm-3"> <!-- Formulario de datos de examen por materia -->
        <form action="#">
            <div class="container-fluid mb-sm-3"> <!-- Formulario superior -->
                <div class="row row-cols-2 mb-sm-2"> <!-- Fila 1 -->
                    <div class="col-sm filler">
                        <div class="form-check-inline fill-control">
                            <label class="form-check-label mb-1 mr-sm-2" for="claveMateria">Clave de la Matería:</label>
                            <input type="text" class="form-control form-check-input mb-2" id="claveMateria" name="claveMat">
                        </div>
                        <div class="form-check-inline mt-sm-2">
                            <label class="form-check-label mb-1 mr-sm-3" for="checkProgramar">
                                <input type="checkbox" class="form-check-input mb-2" id="checkProgramar" name="checkProg">Programar Exámen
                            </label>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <button type="submit" class="btn btn-primary w-100"><i class="fa fa-cog mr-sm-1" aria-hidden="true"></i>Modificar Parámetros</button>
                    </div>
                </div>
                
                <div class="row filler mb-sm-2"> <!-- Fila 2 -->
                    <label class="font-weight-normal mr-sm-2 mt-sm-2" for="nombreMateria">Materia:</label>
                    <input type="text" class="form-control fill-control" id="nombreMateria" name="nombreMat">
                </div>
                
                <div class="form-check-inline filler mb-sm-2"> <!-- Fila 3 -->
                    <label class="font-weight-normal mr-sm-2 mt-sm-2" for="fecha">Fecha:</label>
                    <select class="form-control mr-sm-2" id="fecha" name="fechaExa">
                        <option>2022/06/20</option>
                    </select>

                    <input type="text" class="form-control" id="fechaCompleta" name="fechaExaCompleta">
                </div>
                
                <div class="row form-check-inline filler mb-sm-2"> <!-- Fila 4 -->
                    <label class="font-weight-normal mr-sm-2 mt-sm-2" for="hora">Hora:</label>
                    <select class="form-control fill-control mr-sm-3" id="hora" name="horaExa">
                        <option>9:00 A 11:00</option>
                    </select>

                    <label class="font-weight-normal mr-sm-2 mt-sm-2" for="salon">Salón:</label>
                    <input type="text" class="form-control fill-control mr-sm-2" id="salon" name="salonExa">
                    
                    <button type="submit" class="btn btn-danger float-sm-right"><i class="fa fa-trash mr-2" aria-hidden="true"></i>Eliminar Materia</button>
                </div>
                
                <div class="row filler"> <!-- Fila 5 -->
                    <label class="font-weight-normal mr-sm-2 mt-sm-2" for="sinodalClave">Sinodal Secretario:</label>
                    <input type="text" class="form-control w-25 mr-sm-2" id="sinodalClave" name="sinodalCve">
                    <input type="text" class="form-control fill-control" id="sinodalNombre" name="sinodalNmb">
                </div>
            </div>
            <div class="row row-cols-3 row-cols-2"> <!-- Formulario inferior (salones) -->
                <div class="col-lg-4 col-6"> <!-- Salón 1 -->
                    <div class="form-check-inline filler mb-sm-2">
                        <label class="font-weight-normal mr-sm-2 mt-sm-2" for="salon1">Salón 1:</label>
                        <input type="text" class="form-control fill-control" id="salon1" name="salon1Exa">
                    </div>
                    <div class="form-check-inline filler mb-sm-2">
                        <button type="button" class="btn btn-secondary fill-control mr-sm-2">Seleccionar...</button>
                        <button type="button" class="btn btn-danger fill-control"><i class="fa fa-eraser mr-sm-1" aria-hidden="true"></i>Borrar</button>
                    </div>
                </div>
                
                <div class="col-lg-4 col-6"> <!-- Salón 2 -->
                    <div class="form-check-inline filler mb-sm-2">
                        <label class="font-weight-normal mr-sm-2 mt-sm-2" for="salon2">Salón 2:</label>
                        <input type="text" class="form-control fill-control" id="salon2" name="salon2Exa">
                    </div>
                    <div class="form-check-inline filler mb-sm-2">
                        <button type="button" class="btn btn-secondary fill-control mr-sm-2">Seleccionar...</button>
                        <button type="button" class="btn btn-danger fill-control"><i class="fa fa-eraser mr-sm-1" aria-hidden="true"></i>Borrar</button>
                    </div>
                </div>
                
                <div class="col-lg-4 col-6"> <!-- Salón 3 -->
                    <div class="form-check-inline filler mb-sm-2">
                        <label class="font-weight-normal mr-sm-2 mt-sm-2" for="salon3">Salón 3:</label>
                        <input type="text" class="form-control fill-control" id="salon3" name="salon3Exa">
                    </div>
                    <div class="form-check-inline filler mb-sm-2">
                        <button type="button" class="btn btn-secondary fill-control mr-sm-2">Seleccionar...</button>
                        <button type="button" class="btn btn-danger fill-control"><i class="fa fa-eraser mr-sm-1" aria-hidden="true"></i>Borrar</button>
                    </div>
                </div>
                
                <div class="col-lg-4 col-6"> <!-- Salón 4 -->
                    <div class="form-check-inline filler mb-sm-2">
                        <label class="font-weight-normal mr-sm-2 mt-sm-2" for="salon4">Salón 4:</label>
                        <input type="text" class="form-control fill-control" id="salon4" name="salon4Exa">
                    </div>
                    <div class="form-check-inline filler mb-sm-2">
                        <button type="button" class="btn btn-secondary fill-control mr-sm-2">Seleccionar...</button>
                        <button type="button" class="btn btn-danger fill-control"><i class="fa fa-eraser mr-sm-1" aria-hidden="true"></i>Borrar</button>
                    </div>
                </div>
                
                <div class="col-lg-4 col-6"> <!-- Salón 5 -->
                    <div class="form-check-inline filler mb-sm-2">
                        <label class="font-weight-normal mr-sm-2 mt-sm-2" for="salon5">Salón 5:</label>
                        <input type="text" class="form-control fill-control" id="salon5" name="salon5Exa">
                    </div>
                    <div class="form-check-inline filler mb-sm-2">
                        <button type="button" class="btn btn-secondary fill-control mr-sm-2">Seleccionar...</button>
                        <button type="button" class="btn btn-danger fill-control"><i class="fa fa-eraser mr-sm-1" aria-hidden="true"></i>Borrar</button>
                    </div>
                </div>
            </div>  
        </form>
    </div>

    <div class="card table-m mt-4"> <!-- Tabla de examenes programados -->
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Cve. Materia</th>
                    <th>Materia</th>
                    <th>Fecha</th>
                    <th>Salón</th>
                    <th>Hora</th>
                    <th>Ex. Prog.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
                <tr>
                    <td>2314</td>
                    <td>BASES DE DATOS</td>
                    <td>Lunes 20 de Junio de 2022</td>
                    <td>I-01/I-02/I-03/I-04</td>
                    <td>9:00 A 11:00</td>
                    <td>T</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="card container-fluid mt-4 p-3"> <!-- CRUD materias -->
        <div class="row">
            <div class="card col table-s mx-2">
                <table class="table table-bordered table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th class="w-25">Cve. Materia</th>
                            <th class="w-75">Materia</th>
                        </tr>
                    </thead>
                    <tbody class="font.weight-normal">
                        <!-- Contenidos de la tabla -->
                        <tr>
                            <td class="w-25">Cve. Materia</td>
                            <td class="w-75">Materia</td>
                        </tr>
                        <tr>
                            <td class="w-25">Cve. Materia</td>
                            <td class="w-75">Materia</td>
                        </tr>
                        <tr>
                            <td class="w-25">Cve. Materia</td>
                            <td class="w-75">Materia</td>
                        </tr>
                        <tr>
                            <td class="w-25">Cve. Materia</td>
                            <td class="w-75">Materia</td>
                        </tr>
                        <tr>
                            <td class="w-25">Cve. Materia</td>
                            <td class="w-75">Materia</td>
                        </tr>
                        <tr>
                            <td class="w-25">Cve. Materia</td>
                            <td class="w-75">Materia</td>
                        </tr>
                    </tbody>
                </table>
            </div>

                <div class="col-sm-2">
                    <button type="button" class="w-100 btn btn-primary mb-2 "><i class="fa fa-plus mr-2" aria-hidden="true"></i>Agregar</button>
                    <button type="button" class="w-100 btn btn-danger mb-2 "><i class="fa fa-trash mr-2" aria-hidden="true"></i>Eliminar</button>
                    <button type="button" class="w-100 btn btn-danger mb-2 ">Limpiar</button>
                </div>

                <div class="col-sm-3">

                    <div class="container-fluid filler">
                        <label class="font-weight-normal mr-sm-3" for="fechaMateria">Fecha:</label>
                        <select class="form-control fill-control mb-2 " id="fechaMateria" name="fechaMat">
                            <option>Lorem ipsum</option>
                        </select>
                    </div>

                    <div class="container-fluid filler">
                        <label class="font-weight-normal mb-2 mr-sm-3" for="horaMateria">Hora:</label>
                        <select class="form-control fill-control mb-2 " id="horaMateria" name="horaMat">
                            <option>Lorem ipsum</option>
                        </select>
                    </div>

                    <div class="row-form">
                        <button type="button" class="w-100 btn btn-primary "><i class="fa fa-cog mr-1" aria-hidden="true"></i>Modificar Parámetros</button>
                    </div>
                </div>
        </div>

    </div>

    <form class="container-fluid mt-4 p-3"> <!-- Panel de Botones Inferior -->
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary mr-2 mb-2 " onclick="CargarPagina('Vistas/Examenes/materias.php','content-wrapper')"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Agregar Materias</button>
                <button type="button" class="btn btn-primary mr-2 mb-2 ">Cambiar Fechas</button>
                <button type="button" class="btn btn-primary mr-2 mb-2 ">Cambiar Salones</button>
                <button type="button" class="btn btn-primary mr-2 mb-2 ">Cambiar Horarios</button>
                <button type="button" class="btn btn-secondary mr-2 mb-2 "><i class="fa fa-print mr-2" aria-hidden="true"></i>Imprimir</button>
                <button type="button" class="btn btn-secondary mr-2 mb-2 "><i class="fa fa-print mr-2" aria-hidden="true"></i>Imprimir Sinodales</button>
                <button type="button" class="btn btn-success mr-2 mb-2 "><i class="fa fa-table mr-2" aria-hidden="true"></i>Exportar XLS</button>
            </div>

            <div class="col-sm-2">
                <button type="submit" class="w-100 btn btn-danger s">Salir</button>
            </div>
        </div>
    </form>
</div>
<!-- /.content -->