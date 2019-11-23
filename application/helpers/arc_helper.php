<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

if (!function_exists('pretty_date')) {

  function pretty_date($date = '', $format = '', $timezone = TRUE)
  {
    $date_str = strtotime($date);

    if (empty($format)) {
      $date_pretty = date('l, d/m/Y H:i', $date_str);
    } else {
      $date_pretty = date($format, $date_str);
    }

    if ($timezone) {
      $date_pretty .= ' WIB';
    }

    $date_pretty = str_replace('Sunday', 'Minggu', $date_pretty);
    $date_pretty = str_replace('Monday', 'Senin', $date_pretty);
    $date_pretty = str_replace('Tuesday', 'Selasa', $date_pretty);
    $date_pretty = str_replace('Wednesday', 'Rabu', $date_pretty);
    $date_pretty = str_replace('Thursday', 'Kamis', $date_pretty);
    $date_pretty = str_replace('Friday', 'Jumat', $date_pretty);
    $date_pretty = str_replace('Saturday', 'Sabtu', $date_pretty);

    $date_pretty = str_replace('January', 'Januari', $date_pretty);
    $date_pretty = str_replace('February', 'Februari', $date_pretty);
    $date_pretty = str_replace('March', 'Maret', $date_pretty);
    $date_pretty = str_replace('April', 'April', $date_pretty);
    $date_pretty = str_replace('May', 'Mei', $date_pretty);
    $date_pretty = str_replace('June', 'Juni', $date_pretty);
    $date_pretty = str_replace('July', 'Juli', $date_pretty);
    $date_pretty = str_replace('August', 'Agustus', $date_pretty);
    $date_pretty = str_replace('September', 'September', $date_pretty);
    $date_pretty = str_replace('October', 'Oktober', $date_pretty);
    $date_pretty = str_replace('November', 'November', $date_pretty);
    $date_pretty = str_replace('December', 'Desember', $date_pretty);

    return $date_pretty;
  }
}

function konversiBulan($angka)
{

  $bulan = array('I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX', 'X', 'XI', 'XII');
  $index = $angka - 1;
  return $bulan[$index];
}


if (!function_exists('menu_url')) {

  function menu_url($menu = array())
  {
    if (stristr($menu['url'], '://') !== FALSE) {
      return $menu['url'];
    }

    return site_url($menu['url']);
  }
}

if (!function_exists('page_tree_url_to_page_edit_url')) {

  function page_tree_url_to_page_edit_url($page = array())
  {
    $status = is_page($page);

    if ($status) {
      list($page, $id) = explode('/', $page['url']);
      return site_url('manage/page/edit/' . $id);
    }

    return '#';
  }
}

if (!function_exists('is_page')) {

  function is_page($page = array())
  {
    return (stristr($page['url'], 'page/') === FALSE) ? FALSE : TRUE;
  }
}

if (!function_exists('page_url')) {

  function page_url($page = array())
  {
    return site_url('pages/read/' . $page['post_id'] . '/' . url_title($page['post_title'], '-', TRUE) . '.html');
  }
}

if (!function_exists('posts_url')) {

  function posts_url($posts = array())
  {
    if (isset($posts['posts_url'])) {
      return $posts['posts_url'];
    } else {
      list($date, $time) = explode(' ', $posts['post_created_at']);
      list($year, $month, $day) = explode('-', $date);
      return site_url('pages/read/' . $year . '/' . $month . '/' . $day . '/' . $posts['post_id'] . '/' . url_title($posts['post_title'], '-', TRUE) . '.html');
    }
  }
}

if (!function_exists('template_media_url')) {

  function template_media_url($name = '')
  {
    return base_url('media/templates/' . config_item('template') . '/' . $name);
  }
}

if (!function_exists('upload_url')) {

  function upload_url($name = '')
  {
    if (stristr($name, '://') !== FALSE) {
      return $name;
    } else {
      return base_url('uploads/' . $name);
    }
  }
}

if (!function_exists('media_url')) {

  function media_url($name = '')
  {
    return base_url('media/' . $name);
  }
}
