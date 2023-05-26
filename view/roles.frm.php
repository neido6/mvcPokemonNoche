<?php include_once "header.php"; ?>
<div class="row my-5">
    <h1 class="text-center">Formulario Roles</h1>
</div>
<div class="row">
    <div class="col-3 d-flex justify-content-end align-items-center">
        <span class="fw-bolder">Nombre Rol:</span>
    </div>
    <div class="col-6">
        <div class="form-floating">
            <input type="text" class="form-control" id="txtRol" name="txtRol" placeholder="admin">
            <label for="floatingInput">Nombre Rol</label>
        </div>
    </div>
    <div class="col-1">
        <a onclick="create()" class="btn btn-primary">Crear</a>
    </div>
</div>
<div class="row mt-5 d-flex justify-content-center">
    <h1 class="text-white text-center bg-dark py-1">Tabla de Roles</h1>
    <div class="col-9">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script src="./assets/js/rol.js"></script>
<?php include_once "footer.php"; ?>