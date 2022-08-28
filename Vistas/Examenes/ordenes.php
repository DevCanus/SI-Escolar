
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Generar Archivo para Ordenes de Pago</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Exámenes</a></li>
            <li class="breadcrumb-item active">Generar Archivo para Ordenes de Pago</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <form action="#" class="container-fluid filler">
        <div class="col-3">
            <div class="card p-3">
                <div class="row filler">
                    <div class="fill-control mr-2">
                        <label class="font-weight-normal mt-2 mb-1" for="ciclo">Ciclo Escolar:</label>
                        <select class="form-control mb-1 " id="ciclo" name="cicloEsc">
                            <option>2021-2022/II</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>

                <div class="row filler">
                    <div class="fill-control">
                        <label class="font-weight-normal mb-1" for="ciclo">Periodo:</label>
                        <select class="form-control w-100 mb-2 " id="ciclo" name="cicloEsc">
                            <option>EXÁMENES A TITULO</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>

                <div class="row filler">
                    <div class="fill-control">
                        <label class="font-weight-normal mb-1" for="tipoSinodal">Tipo de Sinodal:</label>
                        <select class="form-control w-100 mb-2 " id="tipoSinodal" name="tipoSi">
                            <option>TITULAR</option>
                            <option>SECRETARIO</option>
                        </select>
                    </div>
                </div>

                <div class="row fill-control">
                    <button type="submit" class="btn btn-primary w-100 mb-3 ">Listar Fechas</button>
                </div>

                <div class="card table-m mb-3">
                    <table class="table table-bordered table-hover mt-2">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fechas de Exámenes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Viernes 17 de Junio de 2022</td>
                            </tr>
                            <tr>
                                <td>Viernes 17 de Junio de 2022</td>
                            </tr>
                            <tr>
                                <td>Viernes 17 de Junio de 2022</td>
                            </tr>
                            <tr>
                                <td>Viernes 17 de Junio de 2022</td>
                            </tr>
                            <tr>
                                <td>Viernes 17 de Junio de 2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-primary w-100 mt-1 ">Listar Exámenes</button>
                </div>
            </div>
            <div class="card p-3">
                <div class="row filler">
                    <label class="font-weight-normal mr-sm-2 mb-2" for="fechaEntrega">Fecha de Entrega de Resultados:</label>
                    <input type="date" class="form-control fill-control mb-2" id="fechaEntrega" name="fechaEn" placeholder="AAAA/MM/DD">
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-primary w-100 mt-1 ">Generar Archivo SIIA</button>
                </div>

                <div class="row">
                    <button type="submit" class="btn btn-primary w-100 mt-3 ">Capturar Fecha de Entrega de Resultados</button>
                </div>
            </div>
        </div>

        <div class="col fill-control">
            <div class="card p-3">
                <div class="row row-cols-3 row-cols-2 filler"> <!-- Fila 1 -->
                    <div class="col-lg-4 col-6 form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="tipoSinodal">Tipo de Sinodal:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="tipoSinodal" name="tipoSin">
                    </div>
                    
                    <div class="col-lg-4 col-6 form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="rpe">RPE:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="rpe" name="rpeSin">
                    </div>

                    <div class="col-lg-4 col-6 form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="profesor">Profesor:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="profesor" name="´rofesorSin">
                    </div>
                </div>

                <div class="row row-cols-3 row-cols-2 filler"> <!-- Fila 2 -->
                    <div class="col-lg-4 col-6 form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="claveMateria">Cve. Materia:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="claveMateria" name="claveMat">
                    </div>
                    
                    <div class="col-lg-4 col-6 form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="claveMateriaUASLP">Cve. Mat. UASLP:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="claveMateriaUASLP" name="claveMatUASLP">
                    </div>

                    <div class="col-lg-4 col-6 form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="claveMateria">Clave de la Matería:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="claveMateria" name="claveMat">
                    </div>
                </div>

                <div class="row row-cols-2 filler"> <!-- Fila 3 -->
                    <div class="col form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="claveUnica">Cve. Única:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="claveUnica" name="claveUn">
                    </div>
                    
                    <div class="col form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="nombreAlumno">Nombre del Alumno:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="nombreAlumno" name="nombreAlum">
                    </div>
                </div>

                <div class="row row-cols-2 filler mb-sm-2"> <!-- Fila 4 -->
                    <div class="col form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="tipoExamen">Tipo de Examen:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="tipoExamen" name="tipoExa">
                    </div>
                    
                    <div class="col form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="fechaExamen">Fecha de Examen:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="fechaExamen" name="fechaExa">
                    </div>
                </div>

                <div class="row row-cols-2 filler mb-sm-3"> <!-- Fila 5 -->
                    <div class="col form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="recibo">No. de Recibo:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="recibo" name="reciboExa">
                    </div>
                    <div class="col form-check-inline fill-control">
                        <label class="form-check-label mb-1 mr-sm-3" for="fechaEntrega">Fecha de Entrega de Resultados:</label>
                        <input type="text" class="form-control form-check-input mb-2" id="fechaEntrega" name="fechaEn">
                    </div>
                </div>

                <div class="row filler"> <!-- Fila 6 -->
                    <div class="fill-control mr-sm-2">
                        <button type="submit" class="btn btn-primary w-100 mb-2 "><i class="fa fa-cog mr-1" aria-hidden="true"></i>Modificar No. de Recibo</button>
                    </div>
                    <div class="fill-control mr-sm-2">
                        <button type="submit" class="btn btn-warning w-100 mb-2 ">Grabar Cambio</button>
                    </div>
                    <div class="fill-control">
                        <button type="submit" class="btn btn-danger w-100 mb-2 ">Deshacer Cambio</button>
                    </div>
                </div>
            </div>

            <div class="card table-x w-100 mr-3 mb-3">
                <table class="table table-bordered table-hover mt-2">
                    <thead class="thead-dark">
                        <tr>
                            <th>SUO</th>
                            <th>RPE</th>
                            <th class="w-25">Profesor</th>
                            <th>Cve. Materia</th>
                            <th>Cve. Mat UASLP</th>
                            <th class="w-25">Materia</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>26705</td>
                            <td>ACOSTA ESPINOZA JUAN JOSE</td>
                            <td>2233</td>
                            <td>4225</td>
                            <td>LENGUAJES DE PROGRAMACIÓN</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="card p-3">
                <div class="container-fluid">
                    <button type="button" class="btn btn-secondary w-25 float-sm-left"><i class="fa fa-print mr-2" aria-hidden="true"></i>Imprimir</button>
                    <button type="submit" class="btn btn-danger w-25 float-sm-right">Salir</button>
                </div>
            </div>
        </div>
    </form><!-- /.container-fluid -->
</div>
<!-- /.content -->