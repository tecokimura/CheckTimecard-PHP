<?php
/**
 * Created by PhpStorm.
 * User: kimura
 * Date: 2016/11/07
 * Time: 1:44
 *
 * csv 貰って実行
 * ファイルか画面にだす。
 * monologでもいいかも
 *
 * composer.json でmonologを追加する
 */

// require_once


main($argv);

function main(Array $argv) {
    
    
    checkRunOption($argv);
    
    
    
    print("Hello CheckTimecard-PHP");
}

function getLogOutput(int $level) {
    static $log = 0;
    
    if(empty($log)) {
        $log = $level;
    }
    
    return $log;
}

// デバッグログを設定
function getLogDebug(int $level) {
    static $log = 0;
    
    if (empty($log)) {
        $log = $level;
    }
    
    return $log;
}


// 起動引数を調べる
function checkRunOption(Array $argv) {
    return $argv;
}