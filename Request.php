<?php
    require_once 'api/usersApi.php';

    try {
        $api = new UsersApi();
        echo $api->run();
    } catch (Exception $e) {
        echo json_encode(Array('error' => $e->getMessage()));
    }
?>