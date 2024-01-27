<?php

$path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "data";
//echo $path;
$uc_path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "uc_server" . DIRECTORY_SEPARATOR . "data";

// 清理discuz缓存文件
function cleanCacheFile($dir)
{
    $handle = opendir($dir);
    while ($file = readdir($handle)) {
        if ($file !== ".." && $file !== ".") {
            $f = $dir . DIRECTORY_SEPARATOR . $file;
            if (is_file($f)) {
//                echo "|--" . $file . "<br>";
                unlink($f);
            } else {
//                echo "--" . $file . "<br>";
                if ($file !== "attachment") {
                    cleanCacheFile($f);
                }
            }
        }
    }
}

cleanCacheFile($path);
echo "清理完成data目录缓存。<br>";
//cleanCacheFile($uc_path);
//echo "清理完成uc_server/data目录缓存。<br>";
