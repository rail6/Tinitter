<?php
// ライブラリ読み込み
require '../vendor/autoload.php';
// 設定ファイルの読み込み
require '../config.php';

// DB定義
\Base\DB::registerIlluminate($db_settings);

// Slimの初期化
$app = new \Slim\Slim([
    'templates.path' => TEMPLATES_DIR_PATH,
    'view'           => new \Slim\Views\Twig()
]);

// Slimにルートを登録
\Tinitter\Route::registration($app);
// 投稿
$app->post('/post/commit', '\Tinitter\Controller\Post::commit');

// 実行
$app->run();
