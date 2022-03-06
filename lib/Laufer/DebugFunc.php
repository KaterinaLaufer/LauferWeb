<?php
/**
 * Created by PhpStorm.
 * User: aparova
 * Date: 30.03.2018
 * Time: 11:43
 */

namespace Laufer;
class DebugFunc
{
    //********* КОНСТАНТЫ ДЛЯ ТЕЛЕГРАМА***********************************//
    //@BotFather создать бота
    const TOKEN = '1629139739:AAFis-lXBn-MgT4LvK02P3x29-E2Thcq2y8';
    //@getmyid_bot команда /myid
    const CHAT_ID = 253891175;
    //********************************************************************//
    public static function sendLogToTg($text)
    {
        $source=$_SERVER["SERVER_NAME"];
        $url = "https://api.telegram.org/bot" . self::TOKEN . "/sendMessage";
        if (is_array($text)) {
            $data = print_r($text, true);
        } else {
            $data = $text;
        }
        $data = $source . ' ' . $data;
        $data = substr($data, 0, 4000);
        $params = array(
            'text' => $data,
            'chat_id' => self::CHAT_ID,
            'disable_web_page_preview' => 'true',
        );
        $result = file_get_contents($url, false, stream_context_create(array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => http_build_query($params)
            )
        )));
        return $result;
    }

    public static function showLog($data, $color = false)
    {
        echo '<pre>';
        if ($color) echo '<font color="' . $color . '">';
        print_r($data);
        if ($color) echo '</font>';
        echo '</pre>';
    }
}