<?php
/**
 * Created by PhpStorm.
 * User: lilichun
 * Date: 2016/1/29 0029
 * Time: 14:32
 */

/**
 * 生成静态的文件链接
 * @param $path
 * @param null $secure
 * @return string
 */
function dns($path, $secure = null)
{
    return asset($path, $secure);
}

/**
 * 批量生成链接
 * @param string $tpl 模版
 * @param string $base_path 根路径
 * @param string $file_name 文件名
 * @param null $secure
 * @return string
 */
function batch_link($tpl, $base_path, $file_name, $secure = null)
{
    $html = '';
    $file_name = is_array($file_name) ?: [$file_name];
    foreach ((array)$file_name as $value) {
        $html .= sprintf($tpl, dns($base_path . $value, $secure)) . "/n";
    }
    return $html;
}

/**
 * 生成HTML文件链接
 * @param string $tpl
 * @param string $base_path
 * @param string $file_name
 * @param null $secure
 * @return string
 */
function html_file_link($tpl, $base_path, $file_name, $secure = null)
{
    $html = '';
    $file_name = is_array($file_name) ? $file_name : [$file_name];
    foreach ((array)$file_name as $value) {
        $html .= sprintf($tpl, dns("{$base_path}/{$value}", $secure)) . "\n";
    }
    return $html;
}

/**
 * 生成CSS链接
 * @param string $base_path
 * @param string $file_name
 * @param null $secure
 * @return string
 */
function link_css($base_path, $file_name, $secure = null)
{
    $css_tpl = '<link href="%s" rel="stylesheet" type="text/css"/>';
    return html_file_link($css_tpl, $base_path, $file_name, $secure);
}

/**
 * 生成script链接
 * @param string $base_path
 * @param string $file_name
 * @param null $secure
 * @return string
 */
function link_script($base_path, $file_name, $secure = null)
{
    $script_tpl = '<script type="text/javascript" src="%s"></script>';
    return html_file_link($script_tpl, $base_path, $file_name, $secure);
}