<!-- Modal -->
<div class="modal fade" id="insertUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="scripts/insertUser.php" method="POST">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo usuario</h5>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        Usuario <input type="text" name="user" class="form-control" placeholder="Nombre de usuario">
                    </div>
                    <div class="col">
                        Contraseña <input type="password" name="password" class="form-control" placeholder="Contraseña">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>