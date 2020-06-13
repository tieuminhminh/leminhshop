<?php


$request = $_SERVER['REQUEST_URI'];
$request = str_replace(ROOT, "", $request);
$data = [];

redirect($request, $Route);

function redirect($Request = null, $Route = [])
{
    $url = BASE_URL;
    if (empty($Request) || empty($Route)) {
        return;
    }

    if (isset(parse_url($Request)['query'])) {
        $query = parse_url($Request)['query'];
        $data_request = parse_str($query, $GET);
    }
    $path = parse_url($Request)['path'];

    if (!isset($Route[$path]) || empty($Route[$path])) {
       header("Location: $url/404");
        exit;
    }

    $list_check_obj = explode("/", $Route[$path]);
    if (CreateObject($list_check_obj))
        exit;

   header("Location: $url/404");

}

function CreateObject($list_str)
{
    $url = BASE_URL;
    $path = '';
    $id_class = -1;
    for ($i = 0; $i < count($list_str); $i++) {
        $path .= $list_str[$i];

        if (file_exists($path . '.php')) {
            require $path . '.php';
            $id_class = $i;
            break;
        } else {
            $path .= '/';
        }
    }

    $isOpps = class_exists($list_str[$id_class]);

    if ($isOpps) {
        $object = new $list_str[$id_class]();

        for ($i = $id_class + 1; $i < count($list_str); $i++) {
            if (method_exists($object, $list_str[$i])) {
                $object->{$list_str[$i]}();
            } else {
               header("Location: $url/404");
                exit;
            }
        }
    } else {
        for ($i = $id_class + 1; $i < count($list_str); $i++) {
            if (function_exists($list_str[$i])) {
                $list_str[$i]();
            } else {
               header("Location: $url/404");
                exit;
            }
        }
    }

    return $id_class != -1 ? true : false;
}