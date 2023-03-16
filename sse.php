<?php

declare(strict_types=1);

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache'); // recommended to prevent caching of event data.

while (true) {
    echo "event: horario\n";
    echo 'data: ' . date('H:i:s');
    echo "\n\n";

    sleep(1);
}
