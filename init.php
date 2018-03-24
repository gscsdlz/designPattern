<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: 2018/3/23
 * Time: 11:46
 */

if ($argc <= 1) {
    echo "miss args";
} else {

    date_default_timezone_set("PRC");

    $patternType = $argv[1];
    $patternName = $argv[2];
    if (!file_exists('F:/web/designPattern/' . $patternType  . '/'. $patternName)) {
        mkdir('F:/web/designPattern/' . $patternType  . '/' . $patternName, 777, true);
        mkdir('F:/web/designPattern/' . $patternType  . '/' . $patternName . '/Tests', 777, true);
        touch('F:/web/designPattern/' . $patternType  . '/' . $patternName. '/Tests/index.php');

        $d = date('Y/n/d');
        $t = date('H:i');
        $str = <<<EOT
<?php
/**
 * Created by PhpStorm.
 * User: 南宫悟
 * Date: $d
 * Time: $t
 */

namespace designPattern\\$patternType\\$patternName;

spl_autoload_register(function (\$class){
    require 'F:/web/' . \$class . '.php';
});

EOT;
        file_put_contents('F:/web/designPattern/' . $patternType  . '/' . $patternName . '/Tests/index.php', $str);
    }
}