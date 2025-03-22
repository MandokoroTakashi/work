<?php
$start_time = microtime(true);

// データベース接続
$conn = new mysqli("localhost", "root", "takashi5616", "practice");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQLで条件を絞る
$result = $conn->query("SELECT * FROM test WHERE value > 500");

// データを配列に格納
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
$conn->close();

// 処理時間の計測
$end_time = microtime(true);
echo "取得件数： ".count($data)."件\n";
echo "SQLで条件を絞る場合の処理時間: " . ($end_time - $start_time) . "秒\n";
echo "メモリ使用量: " . memory_get_peak_usage(true) . "バイト\n";
?>
