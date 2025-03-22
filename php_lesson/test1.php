<?php
$start_time = microtime(true);

// データベース接続
$conn = new mysqli("localhost", "root", "takashi5616", "practice");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 全データを取得
$result = $conn->query("SELECT * FROM test");

// 配列にデータを格納
$data = [];
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// 配列関数で条件を絞り込み
$data = array_filter($data, function($row) {
    return $row['value'] > 500;
});

// 絞り込んだ結果をインデックス付き配列に戻す
$data = array_values($data);

$conn->close();

// 処理時間の計測
$end_time = microtime(true);
echo "取得件数： ".count($data)."件\n";
echo "PHPで条件を絞る場合の処理時間: " . ($end_time - $start_time) . "秒\n";
echo "メモリ使用量: " . memory_get_peak_usage(true) . "バイト\n";
?>
