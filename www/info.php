<?php
$youtubedlPath = '/home/cweiske/bin/youtube-dl';

if (!isset($_GET['url']) || $_GET['url'] == '') {
    header('HTTP/1.0 400 Bad Request');
    header('Content-Type: text/plain');
    echo "'url' parameter missing\n";
    exit(1);
}
$url = $_GET['url'];
$parsed = parse_url($url);
if ($parsed === false || !isset($parsed['scheme']) || !isset($parsed['host'])) {
    header('HTTP/1.0 400 Bad Request');
    header('Content-Type: text/plain');
    echo "Invalid URL\n";
    exit(1);
}

exec(
    $youtubedlPath . ' --dump-json ' . escapeshellarg($url),
    $output,
    $retval
);

if ($retval === 127) {
    header('HTTP/1.0 500 Internal Server Error');
    header('Content-Type: text/plain');
    echo "youtube-dl not found\n";
    exit(1);
} else if ($retval > 0) {
    header('HTTP/1.0 500 Internal Server Error');
    header('Content-Type: text/plain');
    echo "Error fetching video data\n";
    exit(1);
}

header('HTTP/1.0 200 OK');
header('Content-Type: application/json');
echo implode("\n", $output) . "\n";
?>
