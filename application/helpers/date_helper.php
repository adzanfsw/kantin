<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function format_indo($date)
{
    date_default_timezone_set('Asia/Jakarta');
    
    /** array hari dan bulan */
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

    /** pemisahan tahun, bulan, hari, dan waktu */
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = ltrim(substr($date,8,2), '0');
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    // $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;
    $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun."".$waktu;

    return $result;
}

function format_haritgl($date)
{
    date_default_timezone_set('Asia/Jakarta');
    
    /** array hari dan bulan */
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

    /** pemisahan tahun, bulan, hari, dan waktu */
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = ltrim(substr($date,8,2), '0');
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    
    $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun."".$waktu;

    return $result;
}

function format_romawi($monthNumber) {
    
    $monthNumber = intval($monthNumber);

    $romanNumerals = [
        01 => 'I',
        2 => 'II',
        3 => 'III',
        4 => 'IV',
        5 => 'V',
        6 => 'VI',
        7 => 'VII',
        8 => 'VIII',
        9 => 'IX',
        10 => 'X',
        11 => 'XI',
        12 => 'XII',
    ];

    return $romanNumerals[$monthNumber];
}
