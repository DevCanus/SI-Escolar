
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
    <div class="card container-fluid pb-2 pt-3 px-3"> <!-- Filtro de busqueda de examenes -->
        <form action="#">
            <div class="row">
                <div class="col">
                    <div class="form-check-inline">
                        <label class="form-check-label font-weight-bold mb-1 mr-sm-1" for="area">Área Académica:</label>
                        <select class="form-check-input mb-2 p-1" id="area" name="areaAcad">
                            <option>Computación e Informática</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                    <div class="form-check-inline">
                        <label class="form-check-label font-weight-bold mb-1 mr-sm-1" for="ciclo">Ciclo Escolar:</label>
                        <select class="form-check-input mb-2 p-1" id="ciclo" name="cicloEsc">
                            <option>2021-2022/II</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                            
                    <div class="form-check-inline">
                        <label class="form-check-label font-weight-bold mb-1 mr-sm-1" for="periodo">Período:</label>
                        <select class="form-check-input mb-2 p-1" id="periodo" name="periodoExa">
                            <option>Exámenes a Título</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-secondary float-sm-right w-75 mb-2 py-1"><span class="font-reduce-button"><i class="fa fa-search mr-2" aria-hidden="true"></i>Buscar</span></button>
                </div>
            </div>
        </form>
    </div>

    <div class="card container-fluid pt-3 pl-3"> <!-- Formulario de datos de examen por materia -->
        <form action="#">
            <div class="row p-2">

                <div class="principal-col"> <!-- Columna izquierda -->

                    <div class="row"> <!-- Fila 1 -->
                        <div class="col">
                            <div class="form-check-inline">
                                <label class="form-check-label mb-1 mr-sm-3" for="claveMateria">Clave de la Matería:</label>
                                <input type="text" class="form-check-input mb-2" id="claveMateria" name="claveMat">
                            </div>

                            <div class="form-check-inline">
                                <label class="form-check-label mb-1 mr-sm-3" for="checkProgramar">
                                    <input type="checkbox" class="form-check-input mb-2" id="checkProgramar" name="checkProg">Programar Exámen
                                </label>
                            </div>
                        </div>
                        
                        <div class="col-sm-5">
                            <button type="submit" class="btn btn-primary w-100 float-sm-right mb-2 p-1"><i class="fa fa-cog mr-1" aria-hidden="true"></i><span class="font-reduce-button">Modificar Parámetros</span></button>
                        </div>
                    </div>
                    
                    <div class="row-form filler"> <!-- Fila 2 -->
                        <label class="font-weight-normal mr-sm-2 mb-2" for="nombreMateria">Materia:</label>
                        <input type="text" class="fill-control mb-2" id="nombreMateria" name="nombreMat">
                    </div>
                    
                    <div class="row-form filler"> <!-- Fila 3 -->
                        <label class="font-weight-normal mr-sm-2 mb-2" for="fecha">Fecha:</label>
                        <select class="mr-2 mb-2 p-1" id="fecha" name="fechaExa">
                            <option>2022/06/20</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>

                        <input type="text" class="fill-control mb-2" id="fechaCompleta" name="fechaExaCompleta">
                    </div>
                    
                    <div class="row-form filler"> <!-- Fila 4 -->
                        <label class="font-weight-normal mr-sm-2 mb-2" for="hora">Hora:</label>
                        <select class="mr-2 mb-2 p-1" id="hora" name="horaExa">
                            <option>9:00 A 11:00</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>

                        <label class="font-weight-normal mr-sm-2 mb-2" for="salon">Salón:</label>
                        <input type="text" class="fill-control mr-2 mb-2" id="salon" name="salonExa">
                        
                        <button type="submit" class="btn btn-danger float-sm-right mb-2 py-1"><i class="fa fa-trash mr-2" aria-hidden="true"></i><span class="font-reduce-button">Eliminar Materia</span></button>
                    </div>
                    
                    <div class="row-form filler"> <!-- Fila 5 -->
                        <label class="font-weight-normal mr-sm-2 mb-2" for="sinodalClave">Sinodal Secretario:</label>
                        <input type="text" class="mr-sm-2 mb-2" id="sinodalClave" name="sinodalCve">
                        <input type="text" class="fill-control mb-2" id="sinodalNombre" name="sinodalNmb">
                    </div>

                </div>

                <div class="second-col mt-1"> <!-- Columna derecha -->
                
                    <div class="salon-row"> <!-- Fila 1 -->
                        <div class="salon-label">
                            <label class="font-weight-normal mr-sm-1 mb-2" for="salon1">Salón 1:</label>
                            <input type="text" class="salon-text mr-sm-1 mb-2" id="salon1" name="salon1Exa">
                        </div>

                        <div class="col-sm">
                            <button type="button" class="btn btn-secondary mb-2 py-1"><span class="font-reduce-button">Seleccionar...</span></button>
                            <button type="button" class="btn btn-danger mb-2 py-1"><i class="fa fa-eraser mr-1" aria-hidden="true"></i><span class="font-reduce-button">Borrar</span></button>
                        </div>
                    </div>
                    
                    <div class="salon-row"> <!-- Fila 2 -->
                        <div class="salon-label">
                            <label class="font-weight-normal mr-sm-1 mb-2" for="salon2">Salón 2:</label>
                            <input type="text" class="salon-text mr-sm-1 mb-2" id="salon2" name="salon1Exa">
                        </div>

                        <div class="col-sm">
                            <button type="button" class="btn btn-secondary mb-2 py-1"><span class="font-reduce-button">Seleccionar...</span></button>
                            <button type="button" class="btn btn-danger mb-2 py-1"><i class="fa fa-eraser mr-1" aria-hidden="true"></i><span class="font-reduce-button">Borrar</span></button>
                        </div>
                    </div>
                    
                    <div class="salon-row"> <!-- Fila 3 -->
                        <div class="salon-label">
                            <label class="font-weight-normal mr-sm-1 mb-2" for="salon3">Salón 3:</label>
                            <input type="text" class="salon-text mr-sm-1 mb-2" id="salon3" name="salon1Exa">
                        </div>

                        <div class="col-sm">
                            <button type="button" class="btn btn-secondary mb-2 py-1"><span class="font-reduce-button">Seleccionar...</span></button>
                            <button type="button" class="btn btn-danger mb-2 py-1"><i class="fa fa-eraser mr-1" aria-hidden="true"></i><span class="font-reduce-button">Borrar</span></button>
                        </div>
                    </div>
                    
                    <div class="salon-row"> <!-- Fila 4 -->
                        <div class="salon-label">
                            <label class="font-weight-normal mr-sm-1 mb-2" for="salon4">Salón 4:</label>
                            <input type="text" class="salon-text mr-sm-1 mb-2" id="salon4" name="salon1Exa">
                        </div>

                        <div class="col-sm">
                            <button type="button" class="btn btn-secondary mb-2 py-1"><span class="font-reduce-button">Seleccionar...</span></button>
                            <button type="button" class="btn btn-danger mb-2 py-1"><i class="fa fa-eraser mr-1" aria-hidden="true"></i><span class="font-reduce-button">Borrar</span></button>
                        </div>
                    </div>
                    
                    <div class="salon-row"> <!-- Fila 5 -->
                        <div class="salon-label">
                            <label class="font-weight-normal mr-sm-1 mb-2" for="salon5">Salón 5:</label>
                            <input type="text" class="salon-text mr-sm-1 mb-2" id="salon5" name="salon1Exa">
                        </div>

                        <div class="col-sm">
                            <button type="button" class="btn btn-secondary mb-2 py-1"><span class="font-reduce-button">Seleccionar...</span></button>
                            <button type="button" class="btn btn-danger mb-2 py-1"><i class="fa fa-eraser mr-1" aria-hidden="true"></i><span class="font-reduce-button">Borrar</span></button>
                        </div>
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
                    <button type="button" class="w-100 btn btn-primary mb-2 py-1"><i class="fa fa-plus mr-2" aria-hidden="true"></i><span class="font-reduce-button">Agregar</span></button>
                    <button type="button" class="w-100 btn btn-danger mb-2 py-1"><i class="fa fa-trash mr-2" aria-hidden="true"></i><span class="font-reduce-button">Eliminar</span></button>
                    <button type="button" class="w-100 btn btn-danger mb-2 py-1"><span class="font-reduce-button">Limpiar</span></button>
                </div>

                <div class="col-sm-3">

                    <div class="container-fluid filler">
                        <label class="font-weight-bold mr-sm-3" for="fechaMateria">Fecha:</label>
                        <select class="fill-control mb-2 p-1" id="fechaMateria" name="fechaMat">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                    <div class="container-fluid filler">
                        <label class="font-weight-bold mb-2 mr-sm-3" for="horaMateria">Hora:</label>
                        <select class="fill-control mb-2 p-1" id="horaMateria" name="horaMat">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>

                    <div class="row-form">
                        <button type="button" class="w-100 btn btn-primary py-1"><i class="fa fa-cog mr-1" aria-hidden="true"></i><span class="font-reduce-button">Modificar Parámetros</span></button>
                    </div>
                </div>
        </div>

    </div>

    <div class="container-fluid mt-4 p-3"> <!-- Panel de Botones Inferior -->
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary mr-2 mb-2 py-1"><i class="fa fa-plus mr-2" aria-hidden="true"></i><span class="font-reduce-button">Agregar Materias</span></button>
                <button type="button" class="btn btn-primary mr-2 mb-2 py-1"><span class="font-reduce-button">Cambiar Fechas</span></button>
                <button type="button" class="btn btn-primary mr-2 mb-2 py-1"><span class="font-reduce-button">Cambiar Salones</span></button>
                <button type="button" class="btn btn-primary mr-2 mb-2 py-1"><span class="font-reduce-button">Cambiar Horarios</span></button>
                <button type="button" class="btn btn-secondary mr-2 mb-2 py-1"><i class="fa fa-print mr-2" aria-hidden="true"></i><span class="font-reduce-button">Imprimir</span></button>
                <button type="button" class="btn btn-secondary mr-2 mb-2 py-1"><i class="fa fa-print mr-2" aria-hidden="true"></i><span class="font-reduce-button">Imprimir Sinodales</span></button>
                <button type="button" class="btn btn-success mr-2 mb-2 py-1"><i class="fa fa-table mr-2" aria-hidden="true"></i><span class="font-reduce-button">Exportar XLS</span></button>
            </div>

            <div class="col-sm-1">
                <button type="button" class="w-100 btn btn-danger py-1"><span class="font-reduce-button">Salir</span></button>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->