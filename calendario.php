<?php include "ext/header.php" ?>
<?php include "ext/navbar.php" ?>
<?php include "ext/usConfirm.php" ?>
<?php include "scripts/getEvents.php" ?>
<div class="d-flex" id="wrapper" style="height:100%">

    <!-- Sidebar -->
    <div class="bg-light border-right" style="height:100%" id="sidebar-wrapper">
        <div class="sidebar-heading"><?php echo $user; ?></div>
        <div class="list-group list-group-flush">
            <?php include "ext/sidebar.php" ?>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div id='calendar'></div>
    </div>
    <?php include "modals/insertEvent.php" ?>
    <?php include "ext/footer.php" ?>
    <script src="js/index.js"></script>
    <script src='fullcalendar-4.2.0/packages/core/main.js'></script>
    <script src='fullcalendar-4.2.0/packages/interaction/main.js'></script>
    <script src='fullcalendar-4.2.0/packages/daygrid/main.js'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            dateClick: function(info) {
                alert('Date: ' + info.dateStr);
                alert('Resource ID: ' + info.resource.id);
            },
            eventClick: function(info) {
                alert('Event: ' + info.event.title);
            },


            plugins: ['interaction', 'dayGrid'],
            defaultDate: "2019-07-07",
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [{
                    title: 'Ejemplo',
                    start: '2019-01-01'
                }
                <?php
                    for ($i = 0; $i < count($events); $i++) {
                        echo ",{title: '" . $events[$i] . "'";
                        echo ",start:'" . $dates[$i] . "'}";
                    }
                    ?>
            ]
        });

        calendar.render();
    });
    </script>

    </html>