<?php



/**
* Function to clean a value
*/
if (!function_exists('clean')) {
    function clean($value)
    {
        $value = cleanQuotes($value);

        $text = preg_replace(array(
        // Remove invisible content
        '@<head[^>]*?>.*?</head>@siu',
        '@<script[^>]*?.*?</script>@siu',
        '@<object[^>]*?.*?</object>@siu',
        '@<embed[^>]*?.*?</embed>@siu',
        '@<applet[^>]*?.*?</applet>@siu',
        '@<noframes[^>]*?.*?</noframes>@siu',
        '@<noscript[^>]*?.*?</noscript>@siu',
        '@<noembed[^>]*?.*?</noembed>@siu',
        ), array('', '', '', '', '', '', '', ''), $value);
        $value = strip_tags($text);

        $value = trim($value);
        // $value = ($value == "") ? null : $value;

        return $value;
    }
}

/**
* Function to clean quotes from a value
*/
if (!function_exists('cleanQuotes')) {
    function cleanQuotes($value)
    {
        // Replace special curved quotes with normal quotes.
        $chr_map = array(
        // Windows codepage 1252
        "\xC2\x82" => "'", // U+0082⇒U+201A single low-9 quotation mark
        "\xC2\x84" => '"', // U+0084⇒U+201E double low-9 quotation mark
        "\xC2\x8B" => "'", // U+008B⇒U+2039 single left-pointing angle quotation mark
        "\xC2\x91" => "'", // U+0091⇒U+2018 left single quotation mark
        "\xC2\x92" => "'", // U+0092⇒U+2019 right single quotation mark
        "\xC2\x93" => '"', // U+0093⇒U+201C left double quotation mark
        "\xC2\x94" => '"', // U+0094⇒U+201D right double quotation mark
        "\xC2\x9B" => "'", // U+009B⇒U+203A single right-pointing angle quotation mark
        // Regular Unicode     // U+0022 quotation mark (")
        // U+0027 apostrophe     (')
        "\xC2\xAB" => '"', // U+00AB left-pointing double angle quotation mark
        "\xC2\xBB" => '"', // U+00BB right-pointing double angle quotation mark
        "\xE2\x80\x98" => "'", // U+2018 left single quotation mark
        "\xE2\x80\x99" => "'", // U+2019 right single quotation mark
        "\xE2\x80\x9A" => "'", // U+201A single low-9 quotation mark
        "\xE2\x80\x9B" => "'", // U+201B single high-reversed-9 quotation mark
        "\xE2\x80\x9C" => '"', // U+201C left double quotation mark
        "\xE2\x80\x9D" => '"', // U+201D right double quotation mark
        "\xE2\x80\x9E" => '"', // U+201E double low-9 quotation mark
        "\xE2\x80\x9F" => '"', // U+201F double high-reversed-9 quotation mark
        "\xE2\x80\xB9" => "'", // U+2039 single left-pointing angle quotation mark
        "\xE2\x80\xBA" => "'", // U+203A single right-pointing angle quotation mark
        );
        $chr = array_keys($chr_map); // but: for efficiency you should
        $rpl = array_values($chr_map); // pre-calculate these two arrays
        $value = str_replace($chr, $rpl, html_entity_decode($value, ENT_QUOTES, "UTF-8"));
        return $value;
    }
}

/**
**  round
*/
if (!function_exists('roundNumber')) {
    function roundNumber($format, $value)
    {
        $round = (int) preg_replace('/[^0-9]/', '', $format);
        return sprintf($format, round($value, $round));
    }
}

/**
* Function to clean values in an array
*/
if (!function_exists('cleanArray')) {
    function cleanArray($data, $allowed_keys = [], $skip = [])
    {
        if (count($allowed_keys) > 0) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $allowed_keys)) {
                    unset($data[$key]);
                }
            }
        }

        foreach ($data as $key => $value) {
            if (!in_array($key, $skip)) {
                if (is_array($data[$key])) {
                    $data[$key] = cleanArray($data[$key]);
                } else {
                    $data[$key] = clean($value);
                }
            }
        }

        return $data;
    }
}




/**
* validate file
*/
if (!function_exists('validateFile')) {
    function validateFile($data, $allowed_extensions = ['jpg', 'png', 'jpeg'])
    {
        $error = false;
        try {
            foreach ($data as $file) {
                $extension = strtolower($file->getClientOriginalExtension());
                if (!in_array($extension, $allowed_extensions)) {
                    $error = true;
                    break;
                }
            }
        } catch (\Exception $ex) {
            $error = true;
        }

        return $error;
    }
}

/**
** Function to Override Laravel Decrypt
*/
if (!function_exists('laravelDecrypt')) {
    function laravelDecrypt($encrypted)
    {
        try {
            return decrypt($encrypted);
        } catch (\Exception $ex) {
            return null;
        }
    }
}



/**
** Set Token for website
*/
if (!function_exists('setTokenWebsite')) {
    function setTokenWebsite()
    {
        $token_key = conf("token_cookie_name");
        $unique_id = uniqid() . time() . uniqid();

        // Cookie Domain
        $domain = trim(asset("/"), "/");
        $domain = explode("//", $domain);
        $domain = explode("/", $domain[1]);
        $domain = $domain[0];

        $secure = env('SESSION_SECURE_COOKIE', false);
        $expiry = time() + (60 * 60 * 24 * 365 * 5);

        if (!isset($_COOKIE[$token_key])) {
            setcookie($token_key, lock($unique_id), $expiry, "/", $domain, $secure, true);
        } else {
            $unique_id = unlock($_COOKIE[$token_key]);
        }

        // If cookie not set or Changed
        if ($unique_id == null) {
            $unique_id = uniqid() . time() . uniqid();
            setcookie($token_key, lock($unique_id), $expiry, "/", $domain, $secure, true);
        }

        return $unique_id;
    }
}


/**
* Function to AES Encrypt text
*/
if (!function_exists('lock')) {
    function lock($string, $key = "YOU-CAN-NEVER-UNLOCK-ME")
    {
        // AES-128-CBC needs IV with length 16
        $iv = str_pad(substr($key, 0, 16), 16, "0", STR_PAD_LEFT);

        $res = openssl_encrypt($string, 'aes-128-cbc', $key, 0, $iv);

        $res = bin2hex($res);

        return $res;
    }
}

/**
** Function to AES Decrypt text
*/
if (!function_exists('unlock')) {
    function unlock($encrypted, $key = "YOU-CAN-NEVER-UNLOCK-ME")
    {
        try {
            $encrypted = pack("H*", $encrypted);

            // AES-128-CBC needs IV with length 16
            $iv = str_pad(substr($key, 0, 16), 16, "0", STR_PAD_LEFT);

            $res = openssl_decrypt($encrypted, 'aes-128-cbc', $key, 0, $iv);
            if ($res == false) {
                return null;
            }
            return $res;
        } catch (\Exception $ex) {
            return null;
        }
    }
}

/**
** Function to return constants
*/
if (!function_exists('conf')) {
    function conf($key)
    {
        return config("constant.{$key}");
    }
}

/**
** Function to return version for JS & CSS
*/
if (!function_exists('ver')) {
    function ver()
    {
        return config("constant.version");
    }
}

/**
* Function to clean values in an array
*/
if (!function_exists('cleanRequest')) {
    function cleanRequest($rules, $keys, $html_key = [], $skip = [])
    {
        $data = [];
        foreach ($rules as $k => $v) {
            if (!is_array($v)) {
                $v = explode("|", $v);
            }

            // Skip Files
            if (in_array("file", $v) || in_array($k, $skip)) {
                // Skip Null
                if (!is_null($keys->$k)) {
                    $data[$k] = $keys->$k;
                }

                continue;
            }

            if (is_array($keys->$k)) {
                $data[$k] = cleanArray($keys->$k);
            } else {
                if (!in_array($k, $html_key)) {
                    $data[$k] = clean($keys->$k);
                } else {
                    $data[$k] = createImageForTextEditorContent($keys->$k);
                }

                if ($data[$k] == "") {
                    $data[$k] = null;
                }
            }
        }

        return $data;
    }
}

/**
* Function Action Buttons
*/
if (!function_exists('actionButtons')) {
    /**
     * PARAMETER SAMPLE
    // "edit" => route('role.edit', [$result->id]),

    // "editAjax" => "confirm(x,y)",

    // "status" => [
    //     "id" => $result->id,
    //     "status" => $result->is_active,
    //     "function" => "confirm",
    // ],

    // "custom" => [
    //     "url" => $url,
    //     "name" => name,
    //     "icon" => "fa fa-user",
    // ],

    // "deleteAjax" => "confirm(x)",

     */
    function actionButtons($data)
    {

        $html = [];
        foreach ($data as $k => $v) {
            // Edit Button
            if ($k == "edit") {
                $html[] = "<a href='{$v}'  title='Edit' class='edit_btn'><i class='fa fa-edit '></i></a>";
            }

            // Edit ajax
            elseif ($k == "editAjax") {
                $html[] = "<a href='#' onclick='return {$v}'  title='Edit' class='edit_btn'><i class='fa fa-edit '></i></a>";
            }

            // Enable/Disable Button
            elseif ($k == "status") {
                $new_status = ($v["status"] == 0) ? 1 : 0;
                $temp = "<a href='#' onclick='return {$v['function']}({$v["id"]}, {$new_status})'>";
                if ($v["status"] == 0) {
                    $temp .= "<img src='" . asset("themes/admin/img/icons/off.png") . "' class='' >";
                } else {
                    $temp .= "<img src='" . asset("themes/admin/img/icons/on.png") . "' class='' alt='Disable'>";
                }
                $temp .= "</a>";

                $html[] = $temp;
            }

            // Delete ajax
            elseif ($k == "deleteAjax") {
                $html[] = "<a href='#' onclick='return {$v['function']}({$v["id"]},2)' class='delete_btn text-center' title='Delete'><i class='fa fa-trash '></i></a>";
            }

              // Custom
            if ($k == "custom") {
                $html[] = "<a href='{$v['url']}'  title='{$v['name']}' class='edit_btn'><i class='{$v['icon']} '></i></a>";
            }
              // Custom ajax
            if ($k == "customAjax") {
                $html[] = "<a href='javascript:' onclick='return {$v['function']}({$v["id"]},2)' class='edit_btn text-center' title='{$v['name']}'><i class='{$v['icon']}'></i></a>";
            }
        }

        return implode("", $html);
    }
}






/**
 * Function to clean a value
 */
if (!function_exists('createImageForTextEditorContent')) {
    function createImageForTextEditorContent($content)
    {
        preg_match_all('/(?<=src=")[^"]+(?=")/', $content, $srcs, PREG_PATTERN_ORDER);
        $i = 1;

        foreach ($srcs[0] as $src) {
            // For image uploaded
            if (strpos($src, "data:image") !== false) {
                $original_src = $src;

                $array = explode(",", $src);
                $extension = array_shift($array);
                $extension = str_replace("data:image/", "", $extension);
                $extension = str_replace(";base64", "", $extension);
                $src = implode(",", $array);

                $filename = conf("img_prefix") . time() . uniqid() . ".{$i}.{$extension}";

                $filename = "pageContent/{$filename}";
                \Storage::put($filename, (string) base64_decode($src));

                $content = str_replace($original_src, \Storage::url($filename), $content);
            }

            $i++;
        }

        return $content;
    }
}



if (!function_exists('slug')) {
    function slug($slug)
    {
        return strtolower(preg_replace("/[^A-Za-z0-9-,]+/", '', $slug));
    }
}





