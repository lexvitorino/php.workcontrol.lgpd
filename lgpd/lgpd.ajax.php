<?php
ob_start();
session_start();

$getLgpd = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($getLgpd) || empty($getLgpd['action'])) :
    return;
endif;

$strPost = array_map('strip_tags', $getLgpd);
$POST = array_map('trim', $getLgpd);

$Action = $POST['action'];
$jSON = null;
unset($POST['action']);

usleep(2000);

require '../../../_app/Config.inc.php';

switch ($Action):
    case 'cookiePolicy':
        $data = filter_var_array($POST, FILTER_SANITIZE_STRIPPED);
        if ($data["cookie"] == "reject") {
            $jSON["agree"] = false;
        } else {
            setcookie("cookiePolicy", "agree", time() + 3600 * 24 * 30 * 12 * 5, "/");
            $jSON["agree"] = true;
        }
        break;
endswitch;

if (!empty($jSON)) :
    echo json_encode($jSON);
endif;

ob_end_flush();
