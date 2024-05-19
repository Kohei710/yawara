<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'yawara_column' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'yawara' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'yawara7889' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'mysql57.yawara.sakura.ne.jp' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '),w(dTyl> 4ytbtF[8+I,cBAlc!|3w59J?FL*IzB>]daG>I>%|+;[?>ng56W&)Dm' );
define( 'SECURE_AUTH_KEY',  'O7[#-3+CH44<26r[EbK8_,Q8X>!O>$UN~,}7^d3W((#0AN(yo@b!#(oL8Giay? {' );
define( 'LOGGED_IN_KEY',    'fKNsobxi^;|0}~joNp|.|=J.UvMgv_cp$0Tk1jGEKAIa(;Q&w@n:x#^&pcXu%+gf' );
define( 'NONCE_KEY',        'kq.S0C ^Sk%?QAKn<#k45`:#ZwW?8$Lga;wi8BF%~%PiROlVg$EPG/Tzlvg|1K>m' );
define( 'AUTH_SALT',        'UwbZf-c_ 2@AnMJYAQX+WVH/WG7=[P{^[t:^P$Zpdsu&h>~:=/F(3p! AM*[@j~m' );
define( 'SECURE_AUTH_SALT', '3A3j^S]?&qZv+3hEO)pneQ%89B-cr_3-yzei_:VCkt~X>ztl4YO#}K!B(QQ.a&}v' );
define( 'LOGGED_IN_SALT',   '5rb%Wz{$Vmsmb]$,`gFuU2s+A.f!zAYl*I28/D+.h@&p9oNPp+S{7?0K`5(+r%{*' );
define( 'NONCE_SALT',       '(pA8Q!h~vnVX|kpjsU2/YG8}w*jYKY%CTf_55:%aTS}2,,bie{L.OA?{/clAn,Ov' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
