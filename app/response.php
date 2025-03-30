<?php

function response($message, $data = null, $statusCode = 200) {
    ob_clean();
    header('Content-Type: application/json');
    http_response_code($statusCode);
    echo json_encode(['message' => $message, 'data' => $data]);
}

