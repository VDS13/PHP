#!/usr/bin/php
<?php
    if ($argc === 2 && file_exists($argv[1]))
    {
        $mag = file_get_contents($argv[1]);
        $check = explode('\n', $mag);
        $i = 0;
        while ($check[$i])
        {
            $check[$i] = preg_replace_callback('/<a.*?title="(.*?)">/', function ($matches)
                {
                    return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
                }, $check[$i]);
            $check[$i] = preg_replace_callback('/<a.*?>(.*?)</', function ($matches) 
                {
                    return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
                }, $check[$i]);
            $check[$i] = preg_replace_callback('/<span.*?>(.*?)</', function ($matches) 
                {
                    return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
                }, $check[$i]);
            $check[$i] = preg_replace_callback('/<div.*?>(.*?)</', function ($matches) 
                {
                    return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
                }, $check[$i]);
            $check[$i] = preg_replace_callback('/<.*?title="(.*?)">/', function ($matches)
                {
                    return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
                }, $check[$i]);
            if ((preg_match("/<a.*?>/", $check[$i - 1]) != 0 && preg_match("/<\/a.*?>/", $check[$i + 1]) != 0) || (preg_match("/<div.*?>/", $check[$i - 1]) != 0 && preg_match("/<\/div.*?>/", $check[$i + 1]) != 0) || (preg_match("/<span.*?>$/", $check[$i - 1]) != 0 && preg_match("/<\/span.*?>/", $check[$i + 1]) != 0))
            {
                $check[$i] = preg_replace_callback('/.*/', function ($matches)
                {
                    return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
                }, $check[$i]);
            }
            echo $check[$i];
            $i++;
        }
    }
?>