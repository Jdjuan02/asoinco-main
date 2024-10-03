<!-- Vista de Modificar usuario -->
<section class="card centrar">

    <!-- Contenido -->
    <div class="col-8 ">
        <div class="row">
            <div class="col-50 centrar">
                <h1>Modificar usuario <svg xmlns="http://www.w3.org/2000/svg" width="40" height="" fill="currentColor" class="bi bi-person-workspace" viewBox="0 0 16 16">
                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                        <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                    </svg></h1>
            </div>
        </div>
        <div class="container">
            <div class="row row-cols-2">
                <div class="col">
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col2 col-form-label">Nombre</label>
                        <div class="col-auto">
                            <input type="texto" class="form-control" id="inputPassword" placeholder="Ingrese Nombre">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col2 col-form-label">Telefono</label>
                        <select class="form-control col-auto">
                            <option>Analisis y desarrollo de sistemas de informacion</option>
                            <option>Proveedor</option>
                            <option>Coordinador</option>
                            <option>Administrador</option>
                            <option>Inclusor social</option>
                        </select>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col2 col-form-label">Direccion</label>
                        <div class="col-auto">
                            <input type="texto" class="form-control" id="inputPassword" placeholder="Ingrese su direccion">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col2 col-form-label">Numero de Celular</label>
                        <div class="col-auto">
                            <input type="texto" class="form-control" id="inputPassword" placeholder="Ingrese su numero de celular personal">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col2 col-form-label">Fecha de nacimiento</label>
                        <div class="col-auto">
                            <input type="texto" class="form-control" id="inputPassword" placeholder="Ingrese su fecha de nacimiento">
                        </div>
                    </div>
                    <!-- apartado de cambiar contraseña -->
                    <div class="mb-3 row">
                        <label for="formFile" class="form-label">
                            <h4>Cambiar contraseña</h4>
                        </label>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col2 col-form-label">Nueva Contraseña</label>
                        <div class="col-auto">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Ingrese nueva contraseña">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col2 col-form-label">Confirmar Contraseña</label>
                        <div class="col-auto">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Ingrese nuevamente la contraseña">
                        </div>
                    </div>
                </div>

                <div class="col ">
                    <div class="mb-3 ">
                        <label for="formFile" class="form-label">Modificar Foto</label>
                    </div>
                    <img src="assets/img/USUARIO.png" class="rounded mx-auto d-block foto " width="150" height="150" alt="...">
                    <div>
                        <input class="form-control col5" type="file" id="formFile">
                    </div>


                </div>
                <br>
                <div class="mx-auto m-3">
                    <a href="" type="button" class="btn btn-success col-7  ">Guardar Cambios</a>
                    <a href="?c=Landing&a=Dashboard" type="button" class="btn btn-danger col-4">Descartar</a>
                </div>
            </div>
        </div>
    </div>

</section>