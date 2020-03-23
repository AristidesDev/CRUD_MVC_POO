<?php

session_start();
session_destroy();
header("location:../Login_CRUD_View.php");
