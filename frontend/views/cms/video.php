<?php
session_start();
function creatVideo($videoTitle, $cate, $channel, $videoDesc, $creat)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($creat)) {
            if (empty($videoTitle) || empty($cate) || empty($channel) || empty($videoDesc)) {
                return false;
            } else {
                $videos = $_SESSION['videos'];
                $new_video = array(
                    'video_tilte' => $videoTitle,
                    'video_cate' => $cate,
                    'video_channel' => $channel,
                    'video_videoDesc' => $videoDesc
                );
                $videos[] = $new_video;
                $_SESSION['videos'] = $videos;
            }
            return true;
        }
    }
}
function showAllVideo()
{
    $videos = isset($_SESSION['videos']) ? $_SESSION['videos'] : array();
    return $videos;
}
