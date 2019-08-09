<!-- Modal -->
<div class="modal fade" id="insertEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <form action="scripts/insertUserInstalation.php" method="POST">
                    <h5 class="modal-title" id="exampleModalLabel">Asignar trabajador</h5>

            </div>
            <div class="modal-body">
                <div class="row">
                    <label for="exampleInputEmail1">Evento</label>
                    <select class="form-control" name="event" required>
                        <?php
                        include "config/conexion.php";
                        $con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

                        $sql    = "SELECT * FROM `instalations` WHERE `status` = 0 order by `date`";
                        $stmt   = $con->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        echo '<ul class="list-group">';
                        while ($row = $result->fetch_array()) {
                            echo "<option value=" . $row["id_instalation"] . ">" . $row["place"] . "</option>";
                        }
                        ?>
                    </select>
                    <label for="exampleInputEmail1">Trabajador</label>
                    <select class="form-control" name="worker" required>
                        <?php
                        $sql    = "SELECT * FROM `users` WHERE `id_level` = 1";
                        $stmt   = $con->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        echo '<ul class="list-group">';
                        while ($row = $result->fetch_array()) {
                            echo "<option value=" . $row["id_user"] . ">" . $row["username"] . "</option>";
                        }
                        ?>
                    </select>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>