<!-- Vista de crear usuario -->
<form>
    <div class="card">
        <div class="form-row m-3">
            <div class="form-group col-md-4">
                <label for="inputEmail4">Rol</label>
                <select class="form-control">
                    <option>Proveedor</option>
                    <option>Coodinador</option>
                    <option>Administrador</option>
                    <option>Inclusor social</option>
                </select>
            </div>
            <div class="form-group col-md-4 ">
                <label for="inputEmail4">Nombre</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="nombre">
            </div>
            <div class="form-group col-md-4">
                <label for="inputPassword4">Apellidos</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Apellidos">
            </div>
        </div>
        <div class="form-group m-3">
            <label for="inputAddress">Numero de movil o correo electronico</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Numero de movil o correo electronico">
        </div>
        <div class="form-group m-3">
            <label for="inputAddress2">Contraseña nueva</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Contraseña nueva">
        </div>
        <div class="form-row m-3">

            <div class="form-group col-md-4">
                <label for="inputState">Dia</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Mes</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Año</label>
                <label for="inputState"></label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
        </div>
        <div class="form-group col-md-12">
        <label for="inputState">Genero</label>
            <select class="custom-select custom-select-sm">
                <option selected>Seleccione genero</option>
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>
        </div>

        <div class="form-group m-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>
        <a type="submit" class="btn btn-success m-3">Registrate</a>
    </div>


</form>