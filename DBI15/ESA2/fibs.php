<?php
header('Content-Type:˽text/event-stream');
header('Cache-Control: no-cache'); // ist zu empfehlen
function sendeDaten($i , $res) {
echo "data: ", "fib(", $i, ")=", $res, "\n\n";
echo PHP_EOL;
ob_flush();
flush();
}
function fibonacci($n) {
if ($n < 2)
return 1;
return fibonacci($n-1) + fibonacci($n-2);
}
$i = 10;
$start = time();
echo "data:˽","Neue˽HTTP-Verbindung˽eingerichtet","\n\n";
ob_flush();
flush();
do {
// Nach 5 Sekunden wird die Verbindung rekonstruiert.
if ((time() – $start) > 5) { die(); }
sendeDaten($i, fibonacci($i));
$i += 1;
sleep(1);
} while(true);
?>
