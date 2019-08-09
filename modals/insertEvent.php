<!-- Modal -->
<div class="modal fade" id="insertEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="scripts/insertEvent.php" method="POST">
                    <h5 class="modal-title" id="exampleModalLabel">Nueva instalación</h5>

            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        Lugar <input type="text" name="place" class="form-control" placeholder="Unipoli">
                    </div>
                    <div class="col">
                        Costo <input type="text" name="charge" class="form-control" placeholder="150.00">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Hora <input type="text" name="hour" class="form-control" placeholder="23:02">
                    </div>
                    <div class="col">
                        Equipo<input type="text" name="equipment" class="form-control" placeholder="Camaras, tripie, cables">
                    </div>
                </div>
                <div class="row">
                <div class="col">
                        Fecha <input type="date" name="date" class="form-control" placeholder="Last name">
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