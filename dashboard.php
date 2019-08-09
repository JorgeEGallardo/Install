<?php include "ext/header.php" ?>
<?php include "ext/navbar.php" ?>
<?php include "ext/usConfirm.php" ?>
<?php include "ext/variables.php" ?>
<!-- Sidebar -->
<div id="main" style="margin-top:2%;width:70%;float:right">
<canvas id="myChart" width="300" height="100"></canvas>
   </div>
<form action="scripts/Reporte.php" target="_blank" method="POST" >
<button type="submit" class="btn float-right btn-success">
  Generar Reporte
</button>
</form>
<div class="bg-light border-right" style="height:65%" id="sidebar-wrapper">
    <div class="sidebar-heading"><?php echo $user ; ?></div>
    <div class="list-group list-group-flush">
        <?php include "ext/sidebar.php"?>
    </div>
 
<!-- /#sidebar-wrapper -->

<!-- Page Content -->

</div>
<div id="page-content-wrapper">
    <div class="container" style="width:100%">
    <input id="date" type="date"></input>
    <select id="select" onchange="refresh()">
    <?php
                        include "config/conexion.php";
                        $con = new mysqli($SERVER, $USER, $PASSWORD, $BD);

                        $sql    = "SELECT * FROM `users` WHERE `id_level` = 1";
                        $stmt   = $con->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->get_result();
                        echo "<option value= -1>" . "Usuarios" . "</option>";
                        while ($row = $result->fetch_array()) {
                            echo "<option value=" . $row["id_user"] . ">" . $row["username"] . "</option>";
                        }
                        ?>
    </select> 
    <div id="Resultados"><h1>Resultados</h1></div>
     </div>
</div>


<script src="js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<script>
var ctx2 = document.getElementById("myChart");
var ctx = ctx2.getContext('2d')
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: [<?php 
            for($i=0;$i<count($work)-1;$i++){
                echo "'$work[$i]',";
            }  
            echo "'".$work[count($work)-1]."'";
            ?>],
        datasets: [{
            label: '<?php echo date("Y-m");?>',
            backgroundColor: 'rgb(255, 99, 132)',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php 
            for($i=0;$i<count($data)-1;$i++){
                echo "$data[$i],";
            }  
            echo "".$data[count($work)-1]."";
            ?>]
        }]
    },

    // Configuration options go here
    options: {}
});
</script>

<?php include "ext/footer.php";?>