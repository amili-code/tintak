<?php

add_action("init", function () {
    register_nav_menus([
        "header" => "Header Menu",
        "footer" => "Footer Menu"
    ]);
});

function register_theme_menus() {
    register_nav_menus(array(
        'navbar' => __('Navigation Bar', 'tintak'), // منوی Navbar
    ));
}
add_action('after_setup_theme', 'register_theme_menus');


add_theme_support('post-thumbnails');




function convert_gregorian_to_persian($date) {
    list($gy, $gm, $gd) = explode('-', $date);
    $jalali_date = gregorian_to_jalali($gy, $gm, $gd);
    return $jalali_date[2] . ' ' . get_persian_month($jalali_date[1]) . ' ' . $jalali_date[0];
}

function gregorian_to_jalali($gy, $gm, $gd) {
    $g_d_m = [0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
    if ($gy > 1600) {
        $jy = 979;
        $gy -= 1600;
    } else {
        $jy = 0;
        $gy -= 621;
    }
    $gy2 = ($gm > 2) ? ($gy + 1) : $gy;
    $days = (365 * $gy) + (int)(($gy2 + 3) / 4) - (int)(($gy2 + 99) / 100) + (int)(($gy2 + 399) / 400) - 80 + $gd;
    for ($i = 0; $i < $gm; ++$i) {
        $days += $g_d_m[$i];
    }
    $jy += 33 * (int)($days / 12053);
    $days %= 12053;
    $jy += 4 * (int)($days / 1461);
    $days %= 1461;
    if ($days > 365) {
        $jy += (int)(($days - 1) / 365);
        $days = ($days - 1) % 365;
    }
    $jm = ($days < 186) ? 1 + (int)($days / 31) : 7 + (int)(($days - 186) / 30);
    $jd = 1 + (($days < 186) ? ($days % 31) : (($days - 186) % 30));
    return [$jy, $jm, $jd];
}

function get_persian_month($month) {
    $months = [
        1 => 'فروردین', 2 => 'اردیبهشت', 3 => 'خرداد',
        4 => 'تیر', 5 => 'مرداد', 6 => 'شهریور',
        7 => 'مهر', 8 => 'آبان', 9 => 'آذر',
        10 => 'دی', 11 => 'بهمن', 12 => 'اسفند'
    ];
    return $months[intval($month)];
}

?>



