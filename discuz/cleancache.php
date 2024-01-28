<?php

$path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "data";
//echo $path;
$uc_path = dirname(__FILE__) . DIRECTORY_SEPARATOR . "uc_server" . DIRECTORY_SEPARATOR . "data";

// 清理discuz缓存文件
function cleanCacheFile($dir, $type = 1)
{
    $handle = opendir($dir);
    while ($file = readdir($handle)) {
        if ($file !== ".." && $file !== "." && $file !== "attachment") {
            $f = $dir . DIRECTORY_SEPARATOR . $file;
            if (is_file($f)) {
                if ($type === 1) {
                    unlink($f);
                }
            } else {
                if ($type === 1) {
                    cleanCacheFile($f);
                }
                if ($type === 2) {
                    cleanCacheFile($f, 2);
                }
            }
        }
    }
    if ($type === 2 && is_dir($dir)) {
        $myfile = $dir . DIRECTORY_SEPARATOR . "index.htm";
        fopen($myfile, "w+");
    }
}

cleanCacheFile($path);
echo "清理完成data目录缓存。<br>";
//cleanCacheFile($uc_path);
//echo "清理完成uc_server/data目录缓存。<br>";


// 往data目录，每个子目录创建一个index.htm空文件，保留目录结构
cleanCacheFile($path, 2);
echo "完成在每个目录下创建空文件index.htm。";