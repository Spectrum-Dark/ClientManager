<?php

function ViewModel()
{
    if (isset($_GET["action"])) {
        $action = $_GET["action"];
        if ($action == "newclient") New_Client();
        elseif ($action == "allclient") All_CLient();
        elseif ($action == "updateclient") Update_Client();
    }
}

function New_Client()
{
    //Importamos la vista de agregar
    include_once("./Views/add_client.php");
}

function All_CLient()
{
    //Importamos la vista de agregar
    include_once("./Views/all_client.php");
}

function Update_Client()
{
    //Importamos la vista de agregar
    include_once("./Views/update_client.php");
}
