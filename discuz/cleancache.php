<?php

$path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "data";
//echo $path;
$uc_path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "uc_server" . DIRECTORY_SEPARATOR . "data";

// 清理discuz缓存文件
function cleanCacheFile($dir, $type = 1)
{
    $handle = opendir($dir);
    while ($file = readdir($handle)) {
        if ($file !== ".." && $file !== ".") {
            $f = $dir . DIRECTORY_SEPARATOR . $file;
            if (is_file($f)) {
//                echo "|--" . $file . "<br>";
                if ($type === 1) {
                    unlink($f);
                }
            } else {
                if ($type === 2) {
                    echo "目录名：" . $file . "<br>";
                    $myfile = $f . DIRECTORY_SEPARATOR . "index.htm";
                    $fileRes = fopen($myfile, "w+");
                }
//                echo "--" . $file . "<br>";
                if ($file !== "attachment") {
                    if ($type === 1) {
                        cleanCacheFile($f);
                    }
                    if ($type === 2) {
                        cleanCacheFile($f, 2);
                    }
                }
            }
        }
    }
}

cleanCacheFile($path);
echo "清理完成data目录缓存。<br>";
//cleanCacheFile($uc_path);
//echo "清理完成uc_server/data目录缓存。<br>";


// 往data目录，每个子目录创建一个index.htm空文件
cleanCacheFile($path, 2);
echo "完成在每个目录下创建空文件index.htm。";