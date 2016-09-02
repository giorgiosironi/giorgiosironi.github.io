<?php
include_once 'common.php';
$collection = $db->messages;
echo '<?xml version="1.0"?><messages>';
foreach ($collection->find(array('from' => $_GET['sender'])) as $message) {
    echo "<message date=\"{$message['date']}\">{$message['text']}</message>\n";
}
echo '</messages>';
