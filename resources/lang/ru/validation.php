<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Последующие языковые строки содержат сообщения по-умолчанию, используемые
    | классом, проверяющим значения (валидатором). Некоторые из правил имеют
    | несколько версий, например, size. Вы можете поменять их на любые
    | другие, которые лучше подходят для вашего приложения.
    |
    */
    'accepted'        => 'Вы должны принять :attribute.',
    'active_url'      => 'Поле :attribute содержит недействительный URL.',
    'after'           => 'В поле :attribute должна быть дата после :date.',
    'after_or_equal'  => 'В поле :attribute должна быть дата после или равняться :date.',
    'alpha'           => 'Поле :attribute может содержать только буквы.',
    'alpha_dash'      => 'Поле :attribute может содержать только буквы, цифры, дефис и нижнее подчеркивание.',
    'alpha_num'       => 'Поле :attribute может содержать только буквы и цифры.',
    'array'           => 'Поле :attribute должно быть массивом.',
    'before'          => 'В поле :attribute должна быть дата до :date.',
    'before_or_equal' => 'В поле :attribute должна быть дата до или равняться :date.',
    'between'         => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file'    => 'Размер файла в поле :attribute должен быть между :min и :max Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть между :min и :max.',
        'array'   => 'Количество элементов в поле :attribute должно быть между :min и :max.',
    ],
    'boolean'        => 'Поле :attribute должно иметь значение логического типа.',
    'confirmed'      => 'Поле :attribute не совпадает с подтверждением.',
    'date'           => 'Поле :attribute не является датой.',
    'date_equals'    => 'Поле :attribute должно быть датой равной :date.',
    'date_format'    => 'Поле :attribute не соответствует формату :format.',
    'different'      => 'Поля :attribute и :other должны различаться.',
    'digits'         => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between' => 'Длина цифрового поля :attribute должна быть между :min и :max.',
    'dimensions'     => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct'       => 'Поле :attribute содержит повторяющееся значение.',
    'email'          => 'Поле :attribute должно быть действительным электронным адресом.',
    'ends_with'      => 'Поле :attribute должно заканчиваться одним из следующих значений: :values',
    'exists'         => 'Выбранное значение для :attribute некорректно.',
    'file'           => 'Поле :attribute должно быть файлом.',
    'filled'         => 'Поле :attribute обязательно для заполнения.',
    'gt'             => [
        'numeric' => 'Поле :attribute должно быть больше :value.',
        'file'    => 'Размер файла в поле :attribute должен быть больше :value Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть больше :value.',
        'array'   => 'Количество элементов в поле :attribute должно быть больше :value.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должно быть больше или равно :value.',
        'file'    => 'Размер файла в поле :attribute должен быть больше или равен :value Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть больше или равно :value.',
        'array'   => 'Количество элементов в поле :attribute должно быть больше или равно :value.',
    ],
    'image'    => 'Поле :attribute должно быть изображением.',
    'in'       => 'Выбранное значение для :attribute ошибочно.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer'  => 'Поле :attribute должно быть целым числом.',
    'ip'       => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4'     => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6'     => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json'     => 'Поле :attribute должно быть JSON строкой.',
    'lt'       => [
        'numeric' => 'Поле :attribute должно быть меньше :value.',
        'file'    => 'Размер файла в поле :attribute должен быть меньше :value Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть меньше :value.',
        'array'   => 'Количество элементов в поле :attribute должно быть меньше :value.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должно быть меньше или равно :value.',
        'file'    => 'Размер файла в поле :attribute должен быть меньше или равен :value Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть меньше или равно :value.',
        'array'   => 'Количество элементов в поле :attribute должно быть меньше или равно :value.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не может быть более :max.',
        'file'    => 'Размер файла в поле :attribute не может быть более :max Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute не может превышать :max.',
        'array'   => 'Количество элементов в поле :attribute не может превышать :max.',
    ],
    'mimes'     => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min'       => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file'    => 'Размер файла в поле :attribute должен быть не менее :min Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть не менее :min.',
        'array'   => 'Количество элементов в поле :attribute должно быть не менее :min.',
    ],
    'not_in'               => 'Выбранное значение для :attribute ошибочно.',
    'not_regex'            => 'Выбранный формат для :attribute ошибочный.',
    'numeric'              => 'Поле :attribute должно быть числом.',
    'password'             => 'Неверный пароль.',
    'present'              => 'Поле :attribute должно присутствовать.',
    'regex'                => 'Поле :attribute имеет ошибочный формат.',
    'required'             => 'Поле :attribute обязательно для заполнения.',
    'required_if'          => 'Поле :attribute обязательно для заполнения, когда :other равно :value.',
    'required_unless'      => 'Поле :attribute обязательно для заполнения, когда :other не равно :values.',
    'required_with'        => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all'    => 'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without'     => 'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' => 'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same'                 => 'Значения полей :attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'Поле :attribute должно быть равным :size.',
        'file'    => 'Размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'string'  => 'Количество символов в поле :attribute должно быть равным :size.',
        'array'   => 'Количество элементов в поле :attribute должно быть равным :size.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться из одного из следующих значений: :values',
    'string'      => 'Поле :attribute должно быть строкой.',
    'timezone'    => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique'      => 'Такое значение поля :attribute уже существует.',
    'uploaded'    => 'Загрузка поля :attribute не удалась.',
    'url'         => 'Поле :attribute имеет ошибочный формат.',
    'uuid'        => 'Поле :attribute должно быть корректным UUID.',
    /*
    |--------------------------------------------------------------------------
    | Собственные языковые ресурсы для проверки значений
    |--------------------------------------------------------------------------
    |
    | Здесь Вы можете указать собственные сообщения для атрибутов.
    | Это позволяет легко указать свое сообщение для заданного правила атрибута.
    |
    | http://laravel.com/docs/validation#custom-error-messages
    | Пример использования
    |
    |   'custom' => [
    |       'email' => [
    |           'required' => 'Нам необходимо знать Ваш электронный адрес!',
    |       ],
    |   ],
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Собственные названия атрибутов
    |--------------------------------------------------------------------------
    |
    | Последующие строки используются для подмены программных имен элементов
    | пользовательского интерфейса на удобочитаемые. Например, вместо имени
    | поля "email" в сообщениях будет выводиться "электронный адрес".
    |
    | Пример использования
    |
    |   'attributes' => [
    |       'email' => 'электронный адрес',
    |   ],
    |
    */
    'attributes' => [
        'name'                  => 'Имя',
        'username'              => 'Никнейм',
        'email'                 => 'E-Mail адрес',
        'first_name'            => 'Имя',
        'last_name'             => 'Фамилия',
        'password'              => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',
        'city'                  => 'Город',
        'country'               => 'Страна',
        'address'               => 'Адрес',
        'phone'                 => 'Телефон',
        'mobile'                => 'Моб. номер',
        'age'                   => 'Возраст',
        'sex'                   => 'Пол',
        'gender'                => 'Пол',
        'day'                   => 'День',
        'month'                 => 'Месяц',
        'year'                  => 'Год',
        'hour'                  => 'Час',
        'minute'                => 'Минута',
        'second'                => 'Секунда',
        'title'                 => 'Наименование',
        'content'               => 'Контент',
        'description'           => 'Описание',
        'excerpt'               => 'Выдержка',
        'date'                  => 'Дата',
        'time'                  => 'Время',
        'available'             => 'Доступно',
        'size'                  => 'Размер',
    ],
];
//$mime_types = array (
//    "stl" => "application/SLA",
//    "step" => "application/STEP",
//    "stp" => "application/STEP",
//    "dwg" => "application/acad",
//    "ez" => "application/andrew-inset",
//    "ccad" => "application/clariscad",
//    "drw" => "application/drafting",
//    "tsp" => "application/dsptype",
//    "dxf" => "application/dxf",
//    "xls" => "application/excel",
//    "unv" => "application/i-deas",
//    "jar" => "application/java-archive",
//    "hqx" => "application/mac-binhex40",
//    "cpt" => "application/mac-compactpro",
//    "pot" => "application/vnd.ms-powerpoint",
//    "pps" => "application/vnd.ms-powerpoint",
//    "ppt" => "application/vnd.ms-powerpoint",
//    "ppz" => "application/vnd.ms-powerpoint",
//    "doc" => "application/msword",
//    "bin" => "application/octet-stream",
//    "class" => "application/octet-stream",
//    "dms" => "application/octet-stream",
//    "exe" => "application/octet-stream",
//    "lha" => "application/octet-stream",
//    "lzh" => "application/octet-stream",
//    "oda" => "application/oda",
//    "ogg" => "application/ogg",
//    "ogm" => "application/ogg",
//    "pdf" => "application/pdf",
//    "pgp" => "application/pgp",
//    "ai" => "application/postscript",
//    "eps" => "application/postscript",
//    "ps" => "application/postscript",
//    "prt" => "application/pro_eng",
//    "rtf" => "application/rtf",
//    "set" => "application/set",
//    "smi" => "application/smil",
//    "smil" => "application/smil",
//    "sol" => "application/solids",
//    "vda" => "application/vda",
//    "mif" => "application/vnd.mif",
//    "xlc" => "application/vnd.ms-excel",
//    "xll" => "application/vnd.ms-excel",
//    "xlm" => "application/vnd.ms-excel",
//    "xls" => "application/vnd.ms-excel",
//    "xlw" => "application/vnd.ms-excel",
//    "cod" => "application/vnd.rim.cod",
//    "arj" => "application/x-arj-compressed",
//    "bcpio" => "application/x-bcpio",
//    "vcd" => "application/x-cdlink",
//    "pgn" => "application/x-chess-pgn",
//    "cpio" => "application/x-cpio",
//    "csh" => "application/x-csh",
//    "deb" => "application/x-debian-package",
//    "dcr" => "application/x-director",
//    "dir" => "application/x-director",
//    "dxr" => "application/x-director",
//    "dvi" => "application/x-dvi",
//    "pre" => "application/x-freelance",
//    "spl" => "application/x-futuresplash",
//    "gtar" => "application/x-gtar",
//    "gz" => "application/x-gunzip",
//    "gz" => "application/x-gzip",
//    "hdf" => "application/x-hdf",
//    "ipx" => "application/x-ipix",
//    "ips" => "application/x-ipscript",
//    "js" => "application/x-javascript",
//    "skd" => "application/x-koan",
//    "skm" => "application/x-koan",
//    "skp" => "application/x-koan",
//    "skt" => "application/x-koan",
//    "latex" => "application/x-latex",
//    "lsp" => "application/x-lisp",
//    "scm" => "application/x-lotusscreencam",
//    "mif" => "application/x-mif",
//    "bat" => "application/x-msdos-program",
//    "com" => "application/x-msdos-program",
//    "exe" => "application/x-msdos-program",
//    "cdf" => "application/x-netcdf",
//    "nc" => "application/x-netcdf",
//    "pl" => "application/x-perl",
//    "pm" => "application/x-perl",
//    "rar" => "application/x-rar-compressed",
//    "sh" => "application/x-sh",
//    "shar" => "application/x-shar",
//    "swf" => "application/x-shockwave-flash",
//    "sit" => "application/x-stuffit",
//    "sv4cpio" => "application/x-sv4cpio",
//    "sv4crc" => "application/x-sv4crc",
//    "tar.gz" => "application/x-tar-gz",
//    "tgz" => "application/x-tar-gz",
//    "tar" => "application/x-tar",
//    "tcl" => "application/x-tcl",
//    "tex" => "application/x-tex",
//    "texi" => "application/x-texinfo",
//    "texinfo" => "application/x-texinfo",
//    "man" => "application/x-troff-man",
//    "me" => "application/x-troff-me",
//    "ms" => "application/x-troff-ms",
//    "roff" => "application/x-troff",
//    "t" => "application/x-troff",
//    "tr" => "application/x-troff",
//    "ustar" => "application/x-ustar",
//    "src" => "application/x-wais-source",
//    "zip" => "application/x-zip-compressed",
//    "zip" => "application/zip",
//    "tsi" => "audio/TSP-audio",
//    "au" => "audio/basic",
//    "snd" => "audio/basic",
//    "kar" => "audio/midi",
//    "mid" => "audio/midi",
//    "midi" => "audio/midi",
//    "mp2" => "audio/mpeg",
//    "mp3" => "audio/mpeg",
//    "mpga" => "audio/mpeg",
//    "au" => "audio/ulaw",
//    "aif" => "audio/x-aiff",
//    "aifc" => "audio/x-aiff",
//    "aiff" => "audio/x-aiff",
//    "m3u" => "audio/x-mpegurl",
//    "wax" => "audio/x-ms-wax",
//    "wma" => "audio/x-ms-wma",
//    "rpm" => "audio/x-pn-realaudio-plugin",
//    "ram" => "audio/x-pn-realaudio",
//    "rm" => "audio/x-pn-realaudio",
//    "ra" => "audio/x-realaudio",
//    "wav" => "audio/x-wav",
//    "pdb" => "chemical/x-pdb",
//    "xyz" => "chemical/x-pdb",
//    "ras" => "image/cmu-raster",
//    "gif" => "image/gif",
//    "ief" => "image/ief",
//    "jpe" => "image/jpeg",
//    "jpeg" => "image/jpeg",
//    "jpg" => "image/jpeg",
//    "png" => "image/png",
//    "tif tiff" => "image/tiff",
//    "tif" => "image/tiff",
//    "tiff" => "image/tiff",
//    "ras" => "image/x-cmu-raster",
//    "pnm" => "image/x-portable-anymap",
//    "pbm" => "image/x-portable-bitmap",
//    "pgm" => "image/x-portable-graymap",
//    "ppm" => "image/x-portable-pixmap",
//    "rgb" => "image/x-rgb",
//    "xbm" => "image/x-xbitmap",
//    "xpm" => "image/x-xpixmap",
//    "xwd" => "image/x-xwindowdump",
//    "iges" => "model/iges",
//    "igs" => "model/iges",
//    "mesh" => "model/mesh",
//    "msh" => "model/mesh",
//    "silo" => "model/mesh",
//    "vrml" => "model/vrml",
//    "wrl" => "model/vrml",
//    "css" => "text/css",
//    "htm" => "text/html",
//    "html htm" => "text/html",
//    "html" => "text/html",
//    "asc txt" => "text/plain",
//    "asc" => "text/plain",
//    "c" => "text/plain",
//    "cc" => "text/plain",
//    "f90" => "text/plain",
//    "f" => "text/plain",
//    "h" => "text/plain",
//    "hh" => "text/plain",
//    "m" => "text/plain",
//    "txt" => "text/plain",
//    "rtx" => "text/richtext",
//    "rtf" => "text/rtf",
//    "sgm" => "text/sgml",
//    "sgml" => "text/sgml",
//    "tsv" => "text/tab-separated-values",
//    "jad" => "text/vnd.sun.j2me.app-descriptor",
//    "etx" => "text/x-setext",
//    "xml" => "text/xml",
//    "dl" => "video/dl",
//    "fli" => "video/fli",
//    "flv" => "video/flv",
//    "gl" => "video/gl",
//    "mp2" => "video/mpeg",
//    "mpe" => "video/mpeg",
//    "mpeg" => "video/mpeg",
//    "mpg" => "video/mpeg",
//    "mov" => "video/quicktime",
//    "qt" => "video/quicktime",
//    "viv" => "video/vnd.vivo",
//    "vivo" => "video/vnd.vivo",
//    "fli" => "video/x-fli",
//    "asf" => "video/x-ms-asf",
//    "asx" => "video/x-ms-asx",
//    "wmv" => "video/x-ms-wmv",
//    "wmx" => "video/x-ms-wmx",
//    "wvx" => "video/x-ms-wvx",
//    "avi" => "video/x-msvideo",
//    "movie" => "video/x-sgi-movie",
//    "mime" => "www/mime",
//    "ice" => "x-conference/x-cooltalk",
//    "vrm" => "x-world/x-vrml",
//    "vrml" => "x-world/x-vrml"
//);
//
//// типы файлов по расширению:
//$loc_mime_types = array (
//    "blank"         => "",
//    "application"   => "exe msi bat bin com scr",
//    "audio"         => "mp3 ogg wav wma aiff aif mid",
//    "document"      => "doc docx pdf chm hlp rtf",
//    "flash"         => "swf fla",
//    "font"          => "fon ttf otf",
//    "html"          => "htm html shtm shtml dhtm shtml xml",
//    "image"         => "bmp jpg jpeg jpe gif png tiff pic tga pcx",
//    "package"       => "rar zip 7z tgz gz tar",
//    "presentation"  => "ppt",
//    "script"        => "vbs js php inc css",
//    "spreadsheet"   => "xls",
//    "text"          => "txt nfo inf ion dis diz",
//    "video"         => "avi wmv mov flv mp4 vob 3gp mpg"
//);
//
//// соответсвие описания:
//$loc_mime_descr = array (
//    // files:
//    "blank"         => "неизвестный файл",
//    "application"   => "приложение",
//    "audio"         => "аудио",
//    "document"      => "документ флэш",
//    "flash"         => "анимация",
//    "font"          => "системный шрифт",
//    "html"          => "веб-документ",
//    "image"         => "изображение",
//    "package"       => "архив файлов",
//    "presentation"  => "презентация",
//    "script"        => "скрипт",
//    "spreadsheet"   => "таблицы данных",
//    "text"          => "текст",
//    "video"         => "видео",
//    // folders:
//    "folder"        => "папка с файлами",
//    "folder_open"   => "текущая папка",
//    "folder_home"   => "домашняя папка",
//    "trash"         => "корзина (пустая)",
//    "trash_full"    => "корзина (полная)"
//);
//
//// соответсвие иконок:
//$loc_mime_icons = array (
//    // files:
//    "blank"         => "text-x-generic-template",
//    "application"   => "application-x-executable",
//    "audio"         => "audio-x-generic",
//    "document"      => "x-office-document",
//    "flash"         => "x-office-drawing",
//    "font"          => "font-x-generic",
//    "html"          => "text-html",
//    "image"         => "image-x-generic",
//    "package"       => "package-x-generic",
//    "presentation"  => "x-office-presentation",
//    "script"        => "text-x-script",
//    "spreadsheet"   => "x-office-spreadsheet",
//    "text"          => "text-x-generic",
//    "video"         => "video-x-generic",
//    // folders:
//    "folder"        => "folder",
//    "folder_open"   => "folder-open",
//    "folder_home"   => "user-home",
//    "trash"         => "user-trash",
//    "trash_full"    => "user-trash-full"
//);
//
///*
//Функция определения локального майм-типа файла
//*/
//function getLocMimeType($file) {
//    global $loc_mime_types;
//    $ext = strtolower(array_pop(explode('.', $file)));
//    foreach($loc_mime_types as $type => $exts)
//        if(strpos($exts, $ext) !== false)
//            return $type;
//    return "blank";
//}
//
///*
//Функция определения майм-типа файла
//*/
//function getMimeType($file) {
//    global $mime_types;
//    $ext = strtolower(array_pop(explode('.', $file)));
//    if(isset($mime_types[$ext]))
//        return $mime_types[$ext];
//    return 'application/octet-stream';
//}
