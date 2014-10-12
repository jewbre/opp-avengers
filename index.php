<!DOCTYPE html ng-app>

<head>
    <link rel="stylesheet" type="text/css" href="css/design.css">

    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="js/jQuery.js"></script>
    <script type="text/javascript" src="js/angulasApp.js"></script>
</head>
<body ng-app="restaurants">

    <?php
        include_once "classes/RestaurantsList.php";
        include_once "classes/Header.php";
        $header = new Header();
        $header->displayHeader();

        $view = new RestaurantsList();
        $view->displayList();
    ?>


</body>


</html>