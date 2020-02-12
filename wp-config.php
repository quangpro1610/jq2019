<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'jq2019' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '.EHE!6)^mS_#ob&!z|d/^8p|A2CsIoOYE07:Y,AHaZ(t]%&E.en]$J]seus]&64]' );
define( 'SECURE_AUTH_KEY',  'q)3G8Dj]M3x.z.:B,rfg]JT6CpFHNs}*:5--;BvN.M*aYKyWFr1j]H]{,O5!Xn%[' );
define( 'LOGGED_IN_KEY',    'Hxd`oxFo!9<|`dw464-Uh[qj]kQ7f{,Xxe3_#w]<A0Uf1:qQsmklX+7wna</+XfN' );
define( 'NONCE_KEY',        ')80xpbOHtq*_NlV5cctd}ZUDc v*MG46 dt~*h5!zPLg(^)/bjT<@&/_>ylW-Dr?' );
define( 'AUTH_SALT',        '7J.%vuk]8U7liyPsjE!wX!N!(zRmq/+B-~o4<9(G}fC]dV(=AqYMn.4/7[*qx9Kx' );
define( 'SECURE_AUTH_SALT', '50fVt9L<C,>[M=s;o1zB{Zi}(uXgJ~f)^@<6+$9=$-q c3#=rL%f)|,uxr[XN1m2' );
define( 'LOGGED_IN_SALT',   '?XyvzocT^FMrlgN@X!EcHa;xqa^/Y<R8Yp6].?zfx3_TV}T)+u3y-n3%4*bd 2y4' );
define( 'NONCE_SALT',       'M>mmv+*>@$LIc+55&)0p=)GuDxv//K=@roRi}3ut$^e~iF03$!x_pjT,p^}I[|?!' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
