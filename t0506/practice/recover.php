<?php
include './common/db.php';
include './common/dd.php';

$sql = " TRUNCATE TABLE `stores`;


INSERT INTO `stores` (`id`, `name`, `location`, `price`, `people`) VALUES 
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '泰山店', '北區', 10000, 10000),
(NULL, '泰太店', '北區', 10000, 10000),
(NULL, '台中店', '中區', 1000000, 1000000),
(NULL, '中台店', '中區', 1000000, 1000000),
(NULL, '高雄店', '南區', 10000000, 10000),
(NULL, '顆顆店', '中區', '50', '50');

";

$recoverData = $conn->prepare($sql); 
    $recoverData->execute();
    $url = "./index.php?msg=recover_ok";
    header("Location: $url");

?>