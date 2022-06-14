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
define( 'DB_NAME', 'socialmedia' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'mw2peg2fxz' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '8Wk@4#TW7Pz' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '@Qe|.T#]jMr`89|ngG%uZ_+O2:1Uf3@<KZYY4{oCY0U dkl~G|{3V&G@%9#0+b70' );
define( 'SECURE_AUTH_KEY',  'NK~[Bl<ib5b&yh1?qT$!SF}d|T!4Ql&I<;%xhF<t<ayX_R7mBA}8rl$ap}Bg*:BZ' );
define( 'LOGGED_IN_KEY',    'k4H>f$m0ht!gfC!oh$To-WRc4=&ssh`hu+92@i&9l&i5& %KnB,H[;bH*m:Kh!+b' );
define( 'NONCE_KEY',        '|6qw(:9ucIv:0h<}Z,)&s)G@qEK(4.L/~B=JB)_dNkK:RBw3>{r:WTe:5j&-ka0O' );
define( 'AUTH_SALT',        '7Cl}wzl+BmYkJT2XnB<(K.F}.|tuZpq2ii=e~beR2`)l#^!2;0O=}vQ.|(Ap%`>c' );
define( 'SECURE_AUTH_SALT', '(ytU}QXKG?d>,{9be*4yGLjnDq-V#LMq~ImDK]V3VQXA9.yA1Ckn_ZNROZAx7l#(' );
define( 'LOGGED_IN_SALT',   'NBvHPX:_qDTU5X-6|hGJs[QG./`e#6VB#/7CT!6H!O:+yR_V8T(}<E@FvSJXEjvy' );
define( 'NONCE_SALT',       'RY.ruk(<r&)/9L=?#Don<!p0HyB1 ]1mu+c68.D??7wU7(OH_=(rnlJ1t8#I&c[p' );

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

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
