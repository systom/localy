<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Index of /</title>
</head>
<style>
    html, body {margin:0;padding:0;font-family: 'Montserrat', sans-serif;}
    body {background: #c0392b;color:whitesmoke;}
    h1 {text-align:center;}
    a {color:whitesmoke; text-decoration:none;}
    a:hover {text-decoration: underline;}
    a:visited {color:whitesmoke;}
    svg {position:relative;top:5px;}
    th, td {width:25%;}
    #content {width:500px;margin:0 auto;position:relative;margin-top:5%;background-color: rgba(255,255,255, 0.15);padding:20px;overflow:auto;}
    .top6 {position:relative;top:6px;}
    .center {text-align:center;}
    .spacer {width:100%;height:5%;}
</style>
<body>
    <?php
        $dir = realpath(dirname(__FILE__));
        $thisDir = pathinfo($dir, PATHINFO_BASENAME);
        $url  = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
        $url .= $_SERVER['SERVER_NAME'];
        $url .= $_SERVER['REQUEST_URI'];
        $parentDir = dirname($url);
    ?>
    <h1>Index of /<?php if ($parentDir != 'http:') {echo $thisDir;} ?></h1>
    <div id="content">
        <?php
            echo '<table class="center"><tr><th>Name</th><th>Last Modified</th><th>Size</th></tr>';
            if ($parentDir != 'http:') {echo '<tr><td><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><g></g><path d="M23.75 21c0 0-2.5-12.166-13.469-12.166v-4.834l-9.031 8.069 9.031 8.364v-5.448c5.954 0 10.365 0.527 13.469 6.015z" fill="#ffffff" /></svg><a href="'.$parentDir.'">Parent Directory</a></td></tr>';};
            $od = opendir($dir);
            while ($entry = readdir($od)) {
                if ($entry !='.' && $entry !='..' && $entry !='Thumbs.db' && $entry !='index.php') {
                    $exEntry = pathinfo($entry, PATHINFO_EXTENSION);
                    if ( $exEntry == "html" || $exEntry == "php" || $exEntry == "css" || $exEntry == "js" || $exEntry == "aspx" || $exEntry == "asp" || $exEntry == "xml") {
                        echo '<tr><td align="left"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><path d="M10.938 14.063l-1.563-1.563-4.688 4.688 4.688 4.688 1.563-1.563-3.125-3.125zM14.063 20.313l1.563 1.563 4.688-4.688-4.688-4.688-1.563 1.563 3.125 3.125zM22.056 4.869l-3.488-3.488c-0.76-0.76-2.26-1.381-3.334-1.381h-11.719c-1.074 0-1.953 0.879-1.953 1.953v21.094c0 1.074 0.879 1.953 1.953 1.953h17.969c1.074 0 1.953-0.879 1.953-1.953v-14.844c0-1.074-0.621-2.575-1.381-3.334zM20.952 5.974c0.076 0.076 0.153 0.17 0.227 0.276h-3.991v-3.991c0.106 0.074 0.2 0.15 0.276 0.227l3.488 3.488zM21.875 23.047c0 0.212-0.179 0.391-0.391 0.391h-17.969c-0.212 0-0.391-0.179-0.391-0.391v-21.094c0-0.212 0.179-0.391 0.391-0.391h11.719c0.118 0 0.25 0.015 0.391 0.042v6.208h6.208c0.027 0.14 0.042 0.273 0.042 0.391v14.844z" fill="#ffffff" /></svg> <a href="'.$entry .'">'. $entry .'</a></td>';
                    }
                    elseif ($exEntry == "zip" || $exEntry == "rar") {
                        echo '<tr><td align="left"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><path d="M10.156 3.125h2.344v1.563h-2.344zM7.813 4.688h2.344v1.563h-2.344zM10.156 6.25h2.344v1.563h-2.344zM7.813 7.813h2.344v1.563h-2.344zM10.156 9.375h2.344v1.563h-2.344zM7.813 10.938h2.344v1.563h-2.344zM10.156 12.5v1.563h-2.344v5.469c0 0.431 0.35 0.781 0.781 0.781h3.125c0.431 0 0.781-0.35 0.781-0.781v-7.031h-2.344zM11.719 18.75h-3.125v-1.563h3.125v1.563zM22.056 4.869l-3.488-3.488c-0.76-0.76-2.26-1.381-3.334-1.381h-11.719c-1.074 0-1.953 0.879-1.953 1.953v21.094c0 1.074 0.879 1.953 1.953 1.953h17.969c1.074 0 1.953-0.879 1.953-1.953v-14.844c0-1.074-0.621-2.575-1.381-3.334zM20.952 5.974c0.076 0.076 0.153 0.17 0.227 0.276h-3.991v-3.991c0.106 0.074 0.2 0.15 0.276 0.227l3.488 3.488zM21.875 23.047c0 0.212-0.179 0.391-0.391 0.391h-17.969c-0.212 0-0.391-0.179-0.391-0.391v-21.094c0-0.212 0.179-0.391 0.391-0.391h11.719c0.118 0 0.25 0.015 0.391 0.042v6.208h6.208c0.027 0.14 0.042 0.273 0.042 0.391v14.844z" fill="#ffffff" /></svg> <a href="'.$entry .'">'. $entry .'</a></td>';
                    }
                    elseif ($exEntry == "avi" || $exEntry == "mp4" || $exEntry == "flv" || $exEntry == "AVI") {
                        echo '<tr><td align="left"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><path d="M0 3.125v18.75h25v-18.75h-25zM4.688 20.313h-3.125v-3.125h3.125v3.125zM4.688 14.063h-3.125v-3.125h3.125v3.125zM4.688 7.813h-3.125v-3.125h3.125v3.125zM18.75 20.313h-12.5v-15.625h12.5v15.625zM23.438 20.313h-3.125v-3.125h3.125v3.125zM23.438 14.063h-3.125v-3.125h3.125v3.125zM23.438 7.813h-3.125v-3.125h3.125v3.125zM9.375 7.813v9.375l6.25-4.688z" fill="#ffffff" /></svg> <a href="'.$entry .'">'. $entry .'</a></td>';
                    }
                    elseif ($exEntry == "mp3" || $exEntry == "ogg" || $exEntry == "wav") {
                        echo '<tr><td align="left"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><path d="M7.813 4.688l17.188-4.688v17.969c0 2.157-2.448 3.906-5.469 3.906s-5.469-1.749-5.469-3.906c0-2.157 2.448-3.906 5.469-3.906 0.839 0 1.633 0.135 2.344 0.376v-8.047l-10.938 2.983v11.719c0 2.157-2.448 3.906-5.469 3.906-3.020 0-5.469-1.749-5.469-3.906 0-2.157 2.448-3.906 5.469-3.906 0.839 0 1.633 0.135 2.344 0.376v-12.876z" fill="#ffffff" /></svg> <a href="'.$entry .'">'. $entry .'</a></td>';
                    }
                    elseif ($exEntry == "txt" || $exEntry == "csv" || $exEntry == "pdf") {
                        echo '<tr><td align="left"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><path d="M9.029 13.588h7v-2.25h-7v2.25zM18.75 1.25h-12.5c-1.375 0-2.5 1.125-2.5 2.5v17.5c0 1.375 1.125 2.5 2.5 2.5h12.5c1.375 0 2.5-1.125 2.5-2.5v-17.5c0-1.375-1.125-2.5-2.5-2.5zM18.75 21.25h-12.5v-17.5h12.5v17.5zM16 6.461h-7v2.188h7v-2.188zM16 16.275h-7v2.188h7v-2.188z" fill="#ffffff" /></svg> <a href="'.$entry .'">'. $entry .'</a></td>';
                    }
                    elseif (is_dir($entry)) {
                        echo '<tr><td align="left"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><path d="M20.313 23.438l4.688-12.5h-20.313l-4.688 12.5zM3.125 9.375l-3.125 14.063v-20.313h7.031l3.125 3.125h10.156v3.125z" fill="#ffffff" /></svg> <a href="'.$entry .'">'. $entry .'</a></td>';
                    }
                    else {
                        echo '<tr><td align="left"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" viewBox="0 0 25 25"><path d="M17.613 2.793c-1.426-1.029-3.215-1.543-5.37-1.543-1.64 0-3.023 0.363-4.146 1.085-1.784 1.132-2.731 3.055-2.846 5.768h4.132c0-0.79 0.23-1.551 0.691-2.284s1.244-1.099 2.348-1.099c1.121 0 1.895 0.298 2.318 0.891 0.424 0.596 0.635 1.255 0.635 1.977 0 0.629-0.315 1.204-0.695 1.727-0.209 0.305-0.485 0.585-0.826 0.843 0 0-2.241 1.438-3.226 2.593-0.571 0.67-0.623 1.673-0.673 3.111-0.004 0.102 0.035 0.314 0.394 0.314s2.896 0 3.215 0 0.385-0.236 0.39-0.34c0.023-0.524 0.081-0.791 0.177-1.094 0.181-0.571 0.671-1.070 1.224-1.499l1.137-0.785c1.026-0.8 1.846-1.456 2.207-1.971 0.618-0.848 1.051-1.89 1.051-3.126 0-2.019-0.714-3.541-2.137-4.569zM12.176 18.655c-1.425-0.043-2.6 0.943-2.645 2.488-0.045 1.544 1.073 2.564 2.498 2.606 1.488 0.044 2.631-0.91 2.676-2.454 0.044-1.545-1.041-2.596-2.529-2.64z" fill="#ffffff" /></svg> <a href="'.$entry .'">'. $entry .'</a></td>';
                    }
                    $last_mod = filemtime($entry);
                    print "<td class='top6'>".(date("y-m-j H:i", $last_mod))."</td>";
                    $bytes = filesize($entry);
                    if ($bytes < 1023 && $bytes > 0) {echo "<td class='top6'>".$bytes." Bytes</td>";} 
                    elseif ($bytes >= 1073741824) {echo "<td class='top6'>".round($bytes / 1073741824, 2) ." GB</td>";}
                    elseif ($bytes >= 1048576) {echo "<td class='top6'>".round($bytes / 1048576, 2) ." MB</td>";}
                    elseif ($bytes >= 1024) {echo "<td class='top6'>".round($bytes / 1024, 2) ." KB</td>";}
                    else {echo "<td class='top6'>-</td>";};
                    echo '</tr>';};};closedir($od);?>
        </table></div><br/><div class="center"><a href="/phpmyadmin">MySQL</a></div><br/><div class="center"><span><?php echo apache_get_version() ?></span></div><div class="spacer"></div></body></html>