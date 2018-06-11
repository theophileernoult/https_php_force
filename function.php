$protocol = $_SERVER["HTTP_CF_VISITOR"];
if (!strstr($protocol, 'https')){
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
