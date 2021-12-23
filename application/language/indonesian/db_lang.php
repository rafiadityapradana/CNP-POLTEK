<?php
{/**                SILAKAN SESUAIKAN DENGAN BAHASA YANG TELAH ANDA BUAT                 **/}
{/** PASTIKAN ANDA MERAPIHKAN KEBALI BARIS DAN MENGECEK ULANG SEBELUM ANDA MENYIMPANYNYA **/}
{/** PASTIKAN ANDA TIDAK MENGUBAH ATAUPUN MENGHAPUS TEXT YANG MANGANTUNG  : %s **/}
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['db_invalid_connection_str'] = 'Tidak dapat menentukan pengaturan database berdasarkan string koneksi yang Anda kirimkan.';
$lang['db_unable_to_connect'] = 'Tidak dapat terhubung ke server database Anda menggunakan pengaturan yang disediakan.';
$lang['db_unable_to_select'] = 'Tidak dapat memilih database yang ditentukan: %s';
$lang['db_unable_to_create'] = 'Tidak dapat membuat database yang ditentukan: %s';
$lang['db_invalid_query'] = 'Kueri yang Anda kirimkan tidak valid.';
$lang['db_must_set_table'] = 'Anda harus mengatur tabel database untuk digunakan dengan kueri Anda.';
$lang['db_must_use_set'] = 'Anda harus menggunakan metode "set" untuk memperbarui entri.';
$lang['db_must_use_index'] = 'Anda harus menentukan indeks yang akan dicocokkan untuk pembaruan batch.';
$lang['db_batch_missing_index'] = 'Satu atau lebih baris yang dikirimkan untuk pembaruan batch kehilangan indeks yang ditentukan.';
$lang['db_must_use_where'] = 'Pembaruan tidak diperbolehkan kecuali jika mengandung klausa "where".';
$lang['db_del_must_use_where'] = 'Penghapusan tidak diperbolehkan kecuali jika mengandung klausa "where" atau "like".';
$lang['db_field_param_missing'] = 'Untuk mengambil field membutuhkan nama tabel sebagai parameter.';
$lang['db_unsupported_function'] = 'Fitur ini tidak tersedia untuk database yang Anda gunakan.';
$lang['db_transaction_failure'] = 'Transaksi gagal: Rollback dilakukan.';
$lang['db_unable_to_drop'] = 'Tidak dapat menghapus database yang ditentukan.';
$lang['db_unsupported_feature'] = 'Fitur yang tidak didukung dari platform database yang Anda gunakan.';
$lang['db_unsupported_compression'] = 'Format kompresi file yang Anda pilih tidak didukung oleh server Anda.';
$lang['db_filepath_error'] = 'Tidak dapat menulis data ke jalur file yang telah Anda kirimkan.';
$lang['db_invalid_cache_path'] = 'Jalur cache yang Anda kirimkan tidak valid atau dapat ditulis.';
$lang['db_table_name_required'] = 'Nama tabel diperlukan untuk operasi itu.';
$lang['db_column_name_required'] = 'Nama kolom diperlukan untuk operasi itu.';
$lang['db_column_definition_required'] = 'Definisi kolom diperlukan untuk operasi itu.';
$lang['db_unable_to_set_charset'] = 'Tak dapat menyetel kumpulan karakter koneksi klien: %s';
$lang['db_error_heading'] = 'Terjadi Kesalahan Database';
