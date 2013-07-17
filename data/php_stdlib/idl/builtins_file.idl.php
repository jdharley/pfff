<?hh     /* -*- php -*- */
// THIS IS AUTOGENERATED BY builtins_php.ml

define('STDIN', 0);
define('STDOUT', 0);
define('STDERR', 0);
function fopen($filename, $mode, $use_include_path = false, $context = null) { }
function popen($command, $mode) { }
function fclose($handle) { }
function pclose($handle) { }
function fseek($handle, $offset, $whence = SEEK_SET) { }
function rewind($handle) { }
function ftell($handle) { }
function feof($handle) { }
function fstat($handle) { }
function fread($handle, $length) { }
function fgetc($handle) { }
function fgets($handle, $length = 0) { }
function fgetss($handle, $length = 0, $allowable_tags = null) { }
function fscanf($handle, $format) { }
function fpassthru($handle) { }
function fwrite($handle, $data, $length = 0) { }
function fputs($handle, $data, $length = 0) { }
function fprintf($handle, $format, ...) { }
function vfprintf($handle, $format, $args) { }
function fflush($handle) { }
function ftruncate($handle, $size) { }
function flock($handle, $operation, &$wouldblock = null) { }
function fputcsv($handle, $fields, $delimiter = ",", $enclosure = "\"") { }
function fgetcsv($handle, $length = 0, $delimiter = ",", $enclosure = "\"", $escape = "\\") { }
function file_get_contents($filename, $use_include_path = false, $context = null, $offset = 0, $maxlen = 0) { }
function file_put_contents($filename, $data, $flags = 0, $context = null) { }
function file($filename, $flags = 0, $context = null) { }
function readfile($filename, $use_include_path = false, $context = null) { }
function move_uploaded_file($filename, $destination) { }
function parse_ini_file($filename, $process_sections = false, $scanner_mode = INI_SCANNER_NORMAL) { }
function parse_ini_string($ini, $process_sections = false, $scanner_mode = INI_SCANNER_NORMAL) { }
function parse_hdf_file($filename) { }
function parse_hdf_string($input) { }
function write_hdf_file($data, $filename) { }
function write_hdf_string($data) { }
function md5_file($filename, $raw_output = false) { }
function sha1_file($filename, $raw_output = false) { }
function chmod($filename, $mode) { }
function chown($filename, $user) { }
function lchown($filename, $user) { }
function chgrp($filename, $group) { }
function lchgrp($filename, $group) { }
function touch($filename, $mtime = 0, $atime = 0) { }
function copy($source, $dest, $context = null) { }
function rename($oldname, $newname, $context = null) { }
function umask($mask = null_variant) { }
function unlink($filename, $context = null) { }
function link($target, $link) { }
function symlink($target, $link) { }
function basename($path, $suffix = null) { }
function fnmatch($pattern, $filename, $flags = 0) { }
function glob($pattern, $flags = 0) { }
function tempnam($dir, $prefix) { }
function tmpfile() { }
function fileperms($filename) { }
function fileinode($filename) { }
function filesize($filename) { }
function fileowner($filename) { }
function filegroup($filename) { }
function fileatime($filename) { }
function filemtime($filename) { }
function filectime($filename) { }
function filetype($filename) { }
function linkinfo($filename) { }
function is_writable($filename) { }
function is_writeable($filename) { }
function is_readable($filename) { }
function is_executable($filename) { }
function is_file($filename) { }
function is_dir($filename) { }
function is_link($filename) { }
function is_uploaded_file($filename) { }
function file_exists($filename) { }
function stat($filename) { }
function lstat($filename) { }
function clearstatcache() { }
function readlink($path) { }
function realpath($path) { }
function pathinfo($path, $opt = 15) { }
function disk_free_space($directory) { }
function diskfreespace($directory) { }
function disk_total_space($directory) { }
function mkdir($pathname, $mode = 0777, $recursive = false, $context = null) { }
function rmdir($dirname, $context = null) { }
function dirname($path) { }
function getcwd() { }
function chdir($directory) { }
function chroot($directory) { }
function dir($directory) { }
function opendir($path, $context = null) { }
function readdir($dir_handle) { }
function rewinddir($dir_handle) { }
function scandir($directory, $descending = false, $context = null) { }
function closedir($dir_handle) { }