<!DOCTYPE html>
<html lang="en" style="height:100%">

<head><?php  
$name = basename($_SERVER['PHP_SELF']);
if($name=="login.php"){

?>
    <style>
    body {
        background: url('res/fondo.png') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        background-size: cover;
        -o-background-size: cover;
    }
    </style>

    <?php }else {?>
    <style>
    body {
        overflow-x: hidden;
        height: 100%;
    }

    #sidebar-wrapper .sidebar-heading {
        padding: 0.875rem 1.25rem;
        font-size: 1.2rem;
    }

    #sidebar-wrapper .list-group {
        width: 15rem;
    }

    #page-content-wrapper {
        min-width: 100vw;
    }

    #wrapper.toggled #sidebar-wrapper {
        margin-left: 0;
    }

    @media (min-width: 768px) {
        #sidebar-wrapper {
            margin-left: 0;
        }

        #page-content-wrapper {
            min-width: 0;
            width: 100%;
        }

        #wrapper.toggled #sidebar-wrapper {
            margin-left: -15rem;
        }
    }
    </style>
    <?php }?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insta-all</title>
    <!---Bootstrapp--->

    <link href='fullcalendar-4.2.0/packages/core/main.css' rel='stylesheet' />
    <link href='fullcalendar-4.2.0/packages/daygrid/main.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!----------------->
</head>

<body style="height:100%">