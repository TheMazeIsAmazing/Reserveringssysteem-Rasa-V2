<?php

class Controller
{
    protected function view($viewName, $data = [])
    {
        // Extract the data array into individual variables
        extract($data);

        // Include the view file
        require_once "views/$viewName.php";
    }
}
