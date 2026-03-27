# php-doc-sandbox

```
     ____  __  __ ___
    / __ \/ / / / __ \ 
   / /_/ / /_/ / /_/ /
  / ____/ __  / ____/
 /_/   /_/ /_/_/

 PHP Doc Sandbox

 \ Switch Mode:
 ├─ 0) Exit
 ├─ 1) Extensions
 ├─ 2) Class
 ├─ 3) Interface
 ├─ 4) Exception
 ├─ 5) Error
 ├─ 6) Iterator
 ├─ 7) Class (no Interface, no Exception)
 └─ 8) Function

Avail PHP Extensions:

 0) Core             1) date             2) libxml          
 3) openssl          4) pcre             5) zlib            
 6) filter           7) hash             8) pcntl           
 9) Reflection      10) SPL             11) sodium          
12) session         13) standard        14) mysqlnd         
15) PDO             16) xml             17) calendar        
18) ctype           19) dom             20) mbstring        
21) fileinfo        22) ftp             23) gd              
24) gettext         25) iconv           26) json            
27) exif            28) mysqli          29) pdo_mysql       
30) Phar            31) posix           32) readline        
33) shmop           34) SimpleXML       35) soap            
36) sockets         37) sysvmsg         38) sysvsem         
39) sysvshm         40) tokenizer       41) wddx            
42) xmlreader       43) xmlwriter       44) xsl             
45) zip             46) Zend OPcache    47) xdebug  

├─ Extension: Core
│ ├─ getName: Core
│ ├─ getVersion: 7.2.24-0ubuntu0.18.04.17
│ ├─ isPersistent: true
│ ├─ getConstants: 
│ │ ├─ E_ERROR = (integer) 1
│ │ ├─ E_RECOVERABLE_ERROR = (integer) 4096
│ │ ├─ E_WARNING = (integer) 2
│ │ ├─ E_PARSE = (integer) 4
│ │ ├─ E_NOTICE = (integer) 8
│ │ ├─ E_STRICT = (integer) 2048
│ │ ├─ E_DEPRECATED = (integer) 8192
│ │ ├─ E_CORE_ERROR = (integer) 16
│ │ ├─ E_CORE_WARNING = (integer) 32
│ │ ├─ E_COMPILE_ERROR = (integer) 64
│ │ ├─ E_COMPILE_WARNING = (integer) 128
│ │ ├─ E_USER_ERROR = (integer) 256
│ │ ├─ E_USER_WARNING = (integer) 512
│ │ ├─ E_USER_NOTICE = (integer) 1024
│ │ ├─ E_USER_DEPRECATED = (integer) 16384
│ │ ├─ E_ALL = (integer) 32767
│ │ ├─ DEBUG_BACKTRACE_PROVIDE_OBJECT = (integer) 1
│ │ ├─ DEBUG_BACKTRACE_IGNORE_ARGS = (integer) 2
│ │ ├─ TRUE = (boolean) 1
│ │ ├─ FALSE = (boolean) 
│ │ ├─ ZEND_THREAD_SAFE = (boolean) 
│ │ ├─ ZEND_DEBUG_BUILD = (boolean) 
│ │ ├─ NULL = (NULL) 
│ │ ├─ PHP_VERSION = (string) 7.2.24-0ubuntu0.18.04.17
│ │ ├─ PHP_MAJOR_VERSION = (integer) 7
│ │ ├─ PHP_MINOR_VERSION = (integer) 2
│ │ ├─ PHP_RELEASE_VERSION = (integer) 24
│ │ ├─ PHP_EXTRA_VERSION = (string) -0ubuntu0.18.04.17
│ │ ├─ PHP_VERSION_ID = (integer) 70224
│ │ ├─ PHP_ZTS = (integer) 0
│ │ ├─ PHP_DEBUG = (integer) 0
│ │ ├─ PHP_OS = (string) Linux
│ │ ├─ PHP_OS_FAMILY = (string) Linux
│ │ ├─ PHP_SAPI = (string) cli
│ │ ├─ DEFAULT_INCLUDE_PATH = (string) .:/usr/share/php
│ │ ├─ PEAR_INSTALL_DIR = (string) /usr/share/php
│ │ ├─ PEAR_EXTENSION_DIR = (string) /usr/lib/php/20170718
│ │ ├─ PHP_EXTENSION_DIR = (string) /usr/lib/php/20170718
│ │ ├─ PHP_PREFIX = (string) /usr
│ │ ├─ PHP_BINDIR = (string) /usr/bin
│ │ ├─ PHP_MANDIR = (string) /usr/share/man
│ │ ├─ PHP_LIBDIR = (string) /usr/lib/php
│ │ ├─ PHP_DATADIR = (string) /usr/share/php/7.2
│ │ ├─ PHP_SYSCONFDIR = (string) /etc
│ │ ├─ PHP_LOCALSTATEDIR = (string) /var
│ │ ├─ PHP_CONFIG_FILE_PATH = (string) /etc/php/7.2/cli
│ │ ├─ PHP_CONFIG_FILE_SCAN_DIR = (string) /etc/php/7.2/cli/conf.d
│ │ ├─ PHP_SHLIB_SUFFIX = (string) so
│ │ ├─ PHP_EOL = (string) 
│ │ ├─ PHP_MAXPATHLEN = (integer) 4096
│ │ ├─ PHP_INT_MAX = (integer) 9223372036854775807
│ │ ├─ PHP_INT_MIN = (integer) -9223372036854775808
│ │ ├─ PHP_INT_SIZE = (integer) 8
│ │ ├─ PHP_FD_SETSIZE = (integer) 1024
│ │ ├─ PHP_FLOAT_DIG = (integer) 15
│ │ ├─ PHP_FLOAT_EPSILON = (double) 2.2204460492503E-16
│ │ ├─ PHP_FLOAT_MAX = (double) 1.7976931348623E+308
│ │ ├─ PHP_FLOAT_MIN = (double) 2.2250738585072E-308
│ │ ├─ PHP_BINARY = (string) /usr/bin/php7.2
│ │ ├─ PHP_OUTPUT_HANDLER_START = (integer) 1
│ │ ├─ PHP_OUTPUT_HANDLER_WRITE = (integer) 0
│ │ ├─ PHP_OUTPUT_HANDLER_FLUSH = (integer) 4
│ │ ├─ PHP_OUTPUT_HANDLER_CLEAN = (integer) 2
│ │ ├─ PHP_OUTPUT_HANDLER_FINAL = (integer) 8
│ │ ├─ PHP_OUTPUT_HANDLER_CONT = (integer) 0
│ │ ├─ PHP_OUTPUT_HANDLER_END = (integer) 8
│ │ ├─ PHP_OUTPUT_HANDLER_CLEANABLE = (integer) 16
│ │ ├─ PHP_OUTPUT_HANDLER_FLUSHABLE = (integer) 32
│ │ ├─ PHP_OUTPUT_HANDLER_REMOVABLE = (integer) 64
│ │ ├─ PHP_OUTPUT_HANDLER_STDFLAGS = (integer) 112
│ │ ├─ PHP_OUTPUT_HANDLER_STARTED = (integer) 4096
│ │ ├─ PHP_OUTPUT_HANDLER_DISABLED = (integer) 8192
│ │ ├─ UPLOAD_ERR_OK = (integer) 0
│ │ ├─ UPLOAD_ERR_INI_SIZE = (integer) 1
│ │ ├─ UPLOAD_ERR_FORM_SIZE = (integer) 2
│ │ ├─ UPLOAD_ERR_PARTIAL = (integer) 3
│ │ ├─ UPLOAD_ERR_NO_FILE = (integer) 4
│ │ ├─ UPLOAD_ERR_NO_TMP_DIR = (integer) 6
│ │ ├─ UPLOAD_ERR_CANT_WRITE = (integer) 7
│ │ ├─ UPLOAD_ERR_EXTENSION = (integer) 8
│ │ ├─ STDIN = (resource) Resource id #1
│ │ ├─ STDOUT = (resource) Resource id #2
│ │ ├─ STDERR = (resource) Resource id #3
│ ├─ getINIEntries: 
│ │ ├─ highlight.comment = (string) #FF8000
│ │ ├─ highlight.default = (string) #0000BB
│ │ ├─ highlight.html = (string) #000000
│ │ ├─ highlight.keyword = (string) #007700
│ │ ├─ highlight.string = (string) #DD0000
│ │ ├─ display_errors = (string) 
│ │ ├─ display_startup_errors = (string) 
│ │ ├─ enable_dl = (string) 
│ │ ├─ expose_php = (string) 1
│ │ ├─ docref_root = (string) 
│ │ ├─ docref_ext = (string) 
│ │ ├─ html_errors = (string) 0
│ │ ├─ xmlrpc_errors = (string) 0
│ │ ├─ xmlrpc_error_number = (string) 0
│ │ ├─ max_input_time = (string) -1
│ │ ├─ ignore_user_abort = (string) 0
│ │ ├─ implicit_flush = (string) 1
│ │ ├─ log_errors = (string) 1
│ │ ├─ log_errors_max_len = (string) 1024
│ │ ├─ ignore_repeated_errors = (string) 
│ │ ├─ ignore_repeated_source = (string) 
│ │ ├─ report_memleaks = (string) 1
│ │ ├─ report_zend_debug = (string) 0
│ │ ├─ output_buffering = (string) 0
│ │ ├─ output_handler = (NULL) 
│ │ ├─ register_argc_argv = (string) 1
│ │ ├─ auto_globals_jit = (string) 1
│ │ ├─ short_open_tag = (string) 
│ │ ├─ track_errors = (string) 0
│ │ ├─ unserialize_callback_func = (string) 
│ │ ├─ serialize_precision = (string) -1
│ │ ├─ arg_separator.output = (string) &
│ │ ├─ arg_separator.input = (string) &
│ │ ├─ auto_append_file = (string) 
│ │ ├─ auto_prepend_file = (string) 
│ │ ├─ doc_root = (NULL) 
│ │ ├─ default_charset = (string) UTF-8
│ │ ├─ default_mimetype = (string) text/html
│ │ ├─ internal_encoding = (NULL) 
│ │ ├─ input_encoding = (NULL) 
│ │ ├─ output_encoding = (NULL) 
│ │ ├─ error_log = (NULL) 
│ │ ├─ extension_dir = (string) /usr/lib/php/20170718
│ │ ├─ sys_temp_dir = (NULL) 
│ │ ├─ include_path = (string) .:/usr/share/php
│ │ ├─ max_execution_time = (string) 0
│ │ ├─ open_basedir = (NULL) 
│ │ ├─ file_uploads = (string) 1
│ │ ├─ upload_max_filesize = (string) 2M
│ │ ├─ post_max_size = (string) 8M
│ │ ├─ upload_tmp_dir = (NULL) 
│ │ ├─ max_input_nesting_level = (string) 64
│ │ ├─ max_input_vars = (string) 1000
│ │ ├─ user_dir = (string) 
│ │ ├─ variables_order = (string) GPCS
│ │ ├─ request_order = (string) GP
│ │ ├─ error_append_string = (NULL) 
│ │ ├─ error_prepend_string = (NULL) 
│ │ ├─ SMTP = (string) localhost
│ │ ├─ smtp_port = (string) 25
│ │ ├─ mail.add_x_header = (string) 
│ │ ├─ mail.log = (NULL) 
│ │ ├─ browscap = (NULL) 
│ │ ├─ memory_limit = (string) -1
│ │ ├─ precision = (string) 14
│ │ ├─ sendmail_from = (NULL) 
│ │ ├─ sendmail_path = (string) /usr/sbin/sendmail -t -i
│ │ ├─ mail.force_extra_parameters = (NULL) 
│ │ ├─ disable_functions = (string) 
│ │ ├─ disable_classes = (string) 
│ │ ├─ max_file_uploads = (string) 20
│ │ ├─ max_multipart_body_parts = (string) -1
│ │ ├─ allow_url_fopen = (string) 1
│ │ ├─ allow_url_include = (string) 
│ │ ├─ enable_post_data_reading = (string) 1
│ │ ├─ realpath_cache_size = (string) 4096K
│ │ ├─ realpath_cache_ttl = (string) 120
│ │ ├─ user_ini.filename = (string) .user.ini
│ │ ├─ user_ini.cache_ttl = (string) 300
│ │ ├─ hard_timeout = (string) 2
│ │ ├─ error_reporting = (string) 22527
│ │ ├─ zend.assertions = (string) -1
│ │ ├─ zend.enable_gc = (string) 1
│ │ ├─ zend.multibyte = (string) 0
│ │ ├─ zend.script_encoding = (NULL) 
│ │ ├─ zend.detect_unicode = (string) 1
│ │ ├─ zend.signal_check = (string) 0
│ ├─ getClassNames: 
│ │ ├─ \
│ │ │ ├─ class stdClass
│ │ │ ├─ class interface Traversable
│ │ │ ├─ abstract class interface IteratorAggregate implements Traversable
│ │ │ ├─ abstract class interface Iterator implements Traversable
│ │ │ ├─ abstract class interface ArrayAccess
│ │ │ ├─ abstract class interface Serializable
│ │ │ ├─ abstract class interface Countable
│ │ │ ├─ abstract class interface Throwable
│ │ │ ├─ class Exception implements Throwable
│ │ │ │ ├─ class ErrorException implements Throwable
│ │ │ │ ├─ class ClosedGeneratorException implements Throwable
│ │ │ ├─ class Error implements Throwable
│ │ │ │ ├─ class ParseError implements Throwable
│ │ │ │ ├─ class TypeError implements Throwable
│ │ │ │ │ ├─ class ArgumentCountError implements Throwable
│ │ │ │ ├─ class ArithmeticError implements Throwable
│ │ │ │ │ ├─ class DivisionByZeroError implements Throwable
│ │ │ ├─ final class Closure
│ │ │ ├─ final class Generator implements Iterator, Traversable
│ ├─ getFunctions: 
│ │ ├─  function zend_version()
│ │ ├─  function func_num_args()
│ │ ├─  function func_get_arg($arg_num)
│ │ ├─  function func_get_args()
│ │ ├─  function strlen($str)
│ │ ├─  function strcmp($str1, $str2)
│ │ ├─  function strncmp($str1, $str2, $len)
│ │ ├─  function strcasecmp($str1, $str2)
│ │ ├─  function strncasecmp($str1, $str2, $len)
│ │ ├─  function each(&$arr)
│ │ ├─  function error_reporting($new_error_level)
│ │ ├─  function define($constant_name, $value, $case_insensitive)
│ │ ├─  function defined($constant_name)
│ │ ├─  function get_class($object)
│ │ ├─  function get_called_class()
│ │ ├─  function get_parent_class($object)
│ │ ├─  function method_exists($object, $method)
│ │ ├─  function property_exists($object_or_class, $property_name)
│ │ ├─  function class_exists($classname, $autoload)
│ │ ├─  function interface_exists($classname, $autoload)
│ │ ├─  function trait_exists($traitname, $autoload)
│ │ ├─  function function_exists($function_name)
│ │ ├─  function class_alias($user_class_name, $alias_name, $autoload)
│ │ ├─  function get_included_files()
│ │ ├─  function get_required_files()
│ │ ├─  function is_subclass_of($object, $class_name, $allow_string)
│ │ ├─  function is_a($object, $class_name, $allow_string)
│ │ ├─  function get_class_vars($class_name)
│ │ ├─  function get_object_vars($obj)
│ │ ├─  function get_class_methods($class)
│ │ ├─  function trigger_error($message, $error_type)
│ │ ├─  function user_error($message, $error_type)
│ │ ├─  function set_error_handler($error_handler, $error_types)
│ │ ├─  function restore_error_handler()
│ │ ├─  function set_exception_handler($exception_handler)
│ │ ├─  function restore_exception_handler()
│ │ ├─  function get_declared_classes()
│ │ ├─  function get_declared_traits()
│ │ ├─  function get_declared_interfaces()
│ │ ├─  function get_defined_functions($exclude_disabled)
│ │ ├─  function get_defined_vars()
│ │ ├─  function create_function($args, $code)
│ │ ├─  function get_resource_type($res)
│ │ ├─  function get_resources($type)
│ │ ├─  function get_loaded_extensions($zend_extensions)
│ │ ├─  function extension_loaded($extension_name)
│ │ ├─  function get_extension_funcs($extension_name)
│ │ ├─  function get_defined_constants($categorize)
│ │ ├─  function debug_backtrace($options, $limit)
│ │ ├─  function debug_print_backtrace($options, $limit)
│ │ ├─  function gc_mem_caches()
│ │ ├─  function gc_collect_cycles()
│ │ ├─  function gc_enabled()
│ │ ├─  function gc_enable()
│ │ ├─  function gc_disable()
└─┴─┴─ END

├─ class ZipArchive implements Countable
│ ├─ const CREATE = (integer) 1
│ ├─ const EXCL = (integer) 2
│ ├─ const CHECKCONS = (integer) 4
│ ├─ const OVERWRITE = (integer) 8
│ ├─ const FL_NOCASE = (integer) 1
│ ├─ const FL_NODIR = (integer) 2
│ ├─ const FL_COMPRESSED = (integer) 4
│ ├─ const FL_UNCHANGED = (integer) 8
│ ├─ const FL_ENC_GUESS = (integer) 0
│ ├─ const FL_ENC_RAW = (integer) 64
│ ├─ const FL_ENC_STRICT = (integer) 128
│ ├─ const FL_ENC_UTF_8 = (integer) 2048
│ ├─ const FL_ENC_CP437 = (integer) 4096
│ ├─ const CM_DEFAULT = (integer) -1
│ ├─ const CM_STORE = (integer) 0
│ ├─ const CM_SHRINK = (integer) 1
│ ├─ const CM_REDUCE_1 = (integer) 2
│ ├─ const CM_REDUCE_2 = (integer) 3
│ ├─ const CM_REDUCE_3 = (integer) 4
│ ├─ const CM_REDUCE_4 = (integer) 5
│ ├─ const CM_IMPLODE = (integer) 6
│ ├─ const CM_DEFLATE = (integer) 8
│ ├─ const CM_DEFLATE64 = (integer) 9
│ ├─ const CM_PKWARE_IMPLODE = (integer) 10
│ ├─ const CM_BZIP2 = (integer) 12
│ ├─ const CM_LZMA = (integer) 14
│ ├─ const CM_TERSE = (integer) 18
│ ├─ const CM_LZ77 = (integer) 19
│ ├─ const CM_WAVPACK = (integer) 97
│ ├─ const CM_PPMD = (integer) 98
│ ├─ const ER_OK = (integer) 0
│ ├─ const ER_MULTIDISK = (integer) 1
│ ├─ const ER_RENAME = (integer) 2
│ ├─ const ER_CLOSE = (integer) 3
│ ├─ const ER_SEEK = (integer) 4
│ ├─ const ER_READ = (integer) 5
│ ├─ const ER_WRITE = (integer) 6
│ ├─ const ER_CRC = (integer) 7
│ ├─ const ER_ZIPCLOSED = (integer) 8
│ ├─ const ER_NOENT = (integer) 9
│ ├─ const ER_EXISTS = (integer) 10
│ ├─ const ER_OPEN = (integer) 11
│ ├─ const ER_TMPOPEN = (integer) 12
│ ├─ const ER_ZLIB = (integer) 13
│ ├─ const ER_MEMORY = (integer) 14
│ ├─ const ER_CHANGED = (integer) 15
│ ├─ const ER_COMPNOTSUPP = (integer) 16
│ ├─ const ER_EOF = (integer) 17
│ ├─ const ER_INVAL = (integer) 18
│ ├─ const ER_NOZIP = (integer) 19
│ ├─ const ER_INTERNAL = (integer) 20
│ ├─ const ER_INCONS = (integer) 21
│ ├─ const ER_REMOVE = (integer) 22
│ ├─ const ER_DELETED = (integer) 23
│ ├─ const OPSYS_DOS = (integer) 0
│ ├─ const OPSYS_AMIGA = (integer) 1
│ ├─ const OPSYS_OPENVMS = (integer) 2
│ ├─ const OPSYS_UNIX = (integer) 3
│ ├─ const OPSYS_VM_CMS = (integer) 4
│ ├─ const OPSYS_ATARI_ST = (integer) 5
│ ├─ const OPSYS_OS_2 = (integer) 6
│ ├─ const OPSYS_MACINTOSH = (integer) 7
│ ├─ const OPSYS_Z_SYSTEM = (integer) 8
│ ├─ const OPSYS_Z_CPM = (integer) 9
│ ├─ const OPSYS_CPM = (integer) 9
│ ├─ const OPSYS_WINDOWS_NTFS = (integer) 10
│ ├─ const OPSYS_MVS = (integer) 11
│ ├─ const OPSYS_VSE = (integer) 12
│ ├─ const OPSYS_ACORN_RISC = (integer) 13
│ ├─ const OPSYS_VFAT = (integer) 14
│ ├─ const OPSYS_ALTERNATE_MVS = (integer) 15
│ ├─ const OPSYS_BEOS = (integer) 16
│ ├─ const OPSYS_TANDEM = (integer) 17
│ ├─ const OPSYS_OS_400 = (integer) 18
│ ├─ const OPSYS_OS_X = (integer) 19
│ ├─ const OPSYS_DEFAULT = (integer) 3
│ ├─ public $status = (NULL) 
│ ├─ public $statusSys = (NULL) 
│ ├─ public $numFiles = (NULL) 
│ ├─ public $filename = (NULL) 
│ ├─ public $comment = (NULL) 
│ ├─ public function open($filename, $flags)
│ ├─ public function setPassword($password)
│ ├─ public function close()
│ ├─ public function count()
│ ├─ public function getStatusString()
│ ├─ public function addEmptyDir($dirname)
│ ├─ public function addFromString($name, $content)
│ ├─ public function addFile($filepath, $entryname, $start, $length)
│ ├─ public function addGlob($pattern, $flags, $options)
│ ├─ public function addPattern($pattern, $path, $options)
│ ├─ public function renameIndex($index, $new_name)
│ ├─ public function renameName($name, $new_name)
│ ├─ public function setArchiveComment($comment)
│ ├─ public function getArchiveComment($flags)
│ ├─ public function setCommentIndex($index, $comment)
│ ├─ public function setCommentName($name, $comment)
│ ├─ public function getCommentIndex($index, $flags)
│ ├─ public function getCommentName($name, $flags)
│ ├─ public function deleteIndex($index)
│ ├─ public function deleteName($name)
│ ├─ public function statName($filename, $flags)
│ ├─ public function statIndex($index, $flags)
│ ├─ public function locateName($filename, $flags)
│ ├─ public function getNameIndex($index, $flags)
│ ├─ public function unchangeArchive()
│ ├─ public function unchangeAll()
│ ├─ public function unchangeIndex($index)
│ ├─ public function unchangeName($name)
│ ├─ public function extractTo($pathto, $files)
│ ├─ public function getFromName($entryname, $len, $flags)
│ ├─ public function getFromIndex($index, $len, $flags)
│ ├─ public function getStream($entryname)
│ ├─ public function setExternalAttributesName($name, $opsys, $attr, $flags)
│ ├─ public function setExternalAttributesIndex($index, $opsys, $attr, $flags)
│ ├─ public function getExternalAttributesName($name, &$opsys, &$attr, $flags)
│ ├─ public function getExternalAttributesIndex($index, &$opsys, &$attr, $flags)
│ ├─ public function setCompressionName($name, $method, $compflags)
│ ├─ public function setCompressionIndex($index, $method, $compflags)
└─┴─ END

Avail PHP Interfaces:

  0) Traversable                     
  1) IteratorAggregate               
  2) Iterator                        
  3) ArrayAccess                     
  4) Serializable                    
  5) Countable                       
  6) Throwable                       
  7) DateTimeInterface               
  8) Reflector                       
  9) RecursiveIterator               
 10) OuterIterator                   
 11) SeekableIterator                
 12) SplObserver                     
 13) SplSubject                      
 14) SessionHandlerInterface         
 15) SessionIdInterface              
 16) SessionUpdateTimestampHandlerInterface 
 17) JsonSerializable                

Avail PHP Exceptions:

  0) Exception                       
  1) ErrorException                  
  2) ClosedGeneratorException        
  3) ReflectionException             
  4) LogicException                  
  5) BadFunctionCallException        
  6) BadMethodCallException          
  7) DomainException                 
  8) InvalidArgumentException        
  9) LengthException                 
 10) OutOfRangeException             
 11) RuntimeException                
 12) OutOfBoundsException            
 13) OverflowException               
 14) RangeException                  
 15) UnderflowException              
 16) UnexpectedValueException        
 17) SodiumException                 
 18) PDOException                    
 19) DOMException                    
 20) mysqli_sql_exception            
 21) PharException                   

Avail PHP Error Classes:

  0) ErrorException                  
  1) Error                           
  2) ParseError                      
  3) TypeError                       
  4) ArgumentCountError              
  5) ArithmeticError                 
  6) DivisionByZeroError             
  7) LibXMLError                     
  8) AssertionError                  
  9) DOMDomError                     
 10) DOMErrorHandler

Avail PHP Iterators:

  0) RecursiveIteratorIterator       
  1) IteratorIterator                
  2) FilterIterator                  
  3) RecursiveFilterIterator         
  4) CallbackFilterIterator          
  5) RecursiveCallbackFilterIterator 
  6) ParentIterator                  
  7) LimitIterator                   
  8) CachingIterator                 
  9) RecursiveCachingIterator        
 10) NoRewindIterator                
 11) AppendIterator                  
 12) InfiniteIterator                
 13) RegexIterator                   
 14) RecursiveRegexIterator          
 15) EmptyIterator                   
 16) RecursiveTreeIterator           
 17) ArrayIterator                   
 18) RecursiveArrayIterator          
 19) DirectoryIterator               
 20) FilesystemIterator              
 21) RecursiveDirectoryIterator      
 22) GlobIterator                    
 23) MultipleIterator                
 24) SimpleXMLIterator               
 25) IteratorAggregate               
 26) Iterator                        
 27) RecursiveIterator               
 28) OuterIterator                   
 29) SeekableIterator

>>> Enter Function Name: array_map
├─ Extension: standard
│ ├─ getName: standard
│ ├─ getVersion: 7.2.24-0ubuntu0.18.04.17
│ ├─ isPersistent: true
│ ├─ getDependencies: 
│ │ ├─ Optional
│ ├─ getFunctions: 
│ │ ├─  function array_map($callback, ...$arrays)
└─┴─┴─ END

```
