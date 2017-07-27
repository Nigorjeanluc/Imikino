<?php
    include('connect.php');
    $pipsql = mysqli_query($dbcon,"SELECT * FROM news ORDER BY ID DESC LIMIT 0,11");
    $ids = array('','','','','','','','','','','');
    $title = array('','','','','','','','','','','');
    $author = array('','','','','','','','','','','');
    $content = array('','','','','','','','','','','');
    $categorie = array('','','','','','','','','','','');
    $place = array('','','','','','','','','','','');
    $views = array('','','','','','','','','','','');
    $Date = array('','','','','','','','','','','');
    $picture1 = array('','','','','','','','','','','');
    $i = 0;
	while($myrow = mysqli_fetch_array($pipsql)){
            $ids[$i] = $myrow['ID'];
            $title[$i] = $myrow['Title'];
            $author[$i] =$myrow['Author'];
            $content[$i] =$myrow['Content'];
            $categorie[$i] =$myrow['Categorie'];
            $place[$i] = $myrow['Place'];
            $views[$i] = $myrow['Views'];
            $Date[$i]= $myrow['Date'];
            $picture1[$i]= $myrow['picture1'];
            $picture2[$i]= $myrow['picture2'];
            $picture3[$i]= $myrow['picture3'];
            $picture4[$i]= $myrow['picture4'];
            $picture5[$i]= $myrow['picture5'];
            $i++;
    }
    <?php

/**
 * AntiAdBlock custom library for API, with some caching.
 * Requires PHP 5+.
 */
class __AntiAdBlock
{
    /** @var string */
    private $token = 'c0279aab88c5a2aa8a5329b2b65e13bfac753e3c';

    /** @var int */
    private $zoneId = '1329937';

    ///// do not change anything below this point /////

    private function getCurl($url)
    {
        if ((!extension_loaded('curl')) || (!function_exists('curl_version'))) {
            return false;
        }

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_USERAGENT      => 'AntiAdBlock API Client',
            CURLOPT_FOLLOWLOCATION => false,
            CURLOPT_SSL_VERIFYPEER => true,
        ));

        // prefer SSL if at all possible
        $version = curl_version();
        if ($version['features'] & CURL_VERSION_SSL) {
            curl_setopt($curl, CURLOPT_URL, 'https://go.transferzenad.com' . $url);
        } else {
            curl_setopt($curl, CURLOPT_URL, 'http://go.transferzenad.com' . $url);
        }

        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

    private function getFileGetContents($url)
    {
        if (!function_exists('file_get_contents') || !ini_get('allow_url_fopen') ||
            ((function_exists('stream_get_wrappers')) && (!in_array('http', stream_get_wrappers())))) {
            return false;
        }

        if (function_exists('stream_get_wrappers') && in_array('https', stream_get_wrappers())) {
            return file_get_contents('https://go.transferzenad.com' . $url);
        } else {
            return file_get_contents('http://go.transferzenad.com' . $url);
        }
    }

    private function getFsockopen($url)
    {
        $fp = null;
        if (function_exists('stream_get_wrappers') && in_array('https', stream_get_wrappers())) {
            $fp = fsockopen('ssl://' . 'go.transferzenad.com', 443, $enum, $estr, 10);
        }
        if ((!$fp) && (!($fp = fsockopen('tcp://' . gethostbyname('go.transferzenad.com'), 80, $enum, $estr, 10)))) {
            return false;
        }

        $out = "GET " . $url . " HTTP/1.1\r\n";
        $out .= "Host: go.transferzenad.com\r\n";
        $out .= "User-Agent: AntiAdBlock API Client\r\n";
        $out .= "Connection: close\r\n\r\n";
        fwrite($fp, $out);
        $in = '';
        while (!feof($fp)) {
            $in .= fgets($fp, 1024);
        }
        fclose($fp);
        return substr($in, strpos($in, "\r\n\r\n") + 4);
    }

    private function findTmpDir()
    {
        if (!function_exists('sys_get_temp_dir')) {
            if (!empty($_ENV['TMP'])) {
                return realpath($_ENV['TMP']);
            }
            if (!empty($_ENV['TMPDIR'])) {
                return realpath($_ENV['TMPDIR']);
            }
            if (!empty($_ENV['TEMP'])) {
                return realpath($_ENV['TEMP']);
            }
            // this will try to create file in dirname(__FILE__) and should fall back to /tmp or wherever
            $tempfile = tempnam(dirname(__FILE__), '');
            if (file_exists($tempfile)) {
                unlink($tempfile);
                return realpath(dirname($tempfile));
            }
            return null;
        }
        return sys_get_temp_dir();
    }

    public function get()
    {
        $e = error_reporting(0);

        $url = "/v1/getTag?" . http_build_query(array('token' => $this->token, 'zoneId' => $this->zoneId));
        $file = $this->findTmpDir() . '/pa-code-' . md5($url) . '.js';
        // expires in 4h
        if (file_exists($file) && (time() - filemtime($file) < 4 * 3600)) {
            error_reporting($e);
            return file_get_contents($file);
        }
        $code = $this->getCurl($url);
        if (!$code) {
            $code = $this->getFileGetContents($url);
        }
        if (!$code) {
            $code = $this->getFsockopen($url);
        }

        if ($code) {
            // atomic update, and it should be okay if this happens simultaneously
            $fp = fopen("{$file}.tmp", 'wt');
            fwrite($fp, $code);
            fclose($fp);
            rename("${file}.tmp", $file);
        }

        error_reporting($e);
        return $code;
    }
}

$__aab = new __AntiAdBlock();
return $__aab->get();


    function truncate($text, $length = 310, $ending = '...', $exact = true, $considerHtml = true) {
        if ($considerHtml) {
            // if the plain text is shorter than the maximum length, return the whole text
            if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
                return $text;
            }
            // splits all html-tags to scanable lines
            preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);
            $total_length = strlen($ending);
            $open_tags = array();
            $truncate = '';
            foreach ($lines as $line_matchings) {
                // if there is any html-tag in this line, handle it and add it (uncounted) to the output
                if (!empty($line_matchings[1])) {
                    // if it's an "empty element" with or without xhtml-conform closing slash
                    if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
                        // do nothing
                    // if tag is a closing tag
                    } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
                        // delete tag from $open_tags list
                        $pos = array_search($tag_matchings[1], $open_tags);
                        if ($pos !== false) {
                        unset($open_tags[$pos]);
                        }
                    // if tag is an opening tag
                    } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
                        // add tag to the beginning of $open_tags list
                        array_unshift($open_tags, strtolower($tag_matchings[1]));
                    }
                    // add html-tag to $truncate'd text
                    $truncate .= $line_matchings[1];
                }
                // calculate the length of the plain text part of the line; handle entities as one character
                $content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
                if ($total_length+$content_length> $length) {
                    // the number of characters which are left
                    $left = $length - $total_length;
                    $entities_length = 0;
                    // search for html entities
                    if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
                        // calculate the real length of all entities in the legal range
                        foreach ($entities[0] as $entity) {
                            if ($entity[1]+1-$entities_length <= $left) {
                                $left--;
                                $entities_length += strlen($entity[0]);
                            } else {
                                // no more characters left
                                break;
                            }
                        }
                    }
                    $truncate .= substr($line_matchings[2], 0, $left+$entities_length);
                    // maximum lenght is reached, so get off the loop
                    break;
                } else {
                    $truncate .= $line_matchings[2];
                    $total_length += $content_length;
                }
                // if the maximum length is reached, get off the loop
                if($total_length>= $length) {
                    break;
                }
            }
        } else {
            if (strlen($text) <= $length) {
                return $text;
            } else {
                $truncate = substr($text, 0, $length - strlen($ending));
            }
        }
        // if the words shouldn't be cut in the middle...
        if (!$exact) {
            // ...search the last occurance of a space...
            $spacepos = strrpos($truncate, ' ');
            if (isset($spacepos)) {
                // ...and cut the text in this position
                $truncate = substr($truncate, 0, $spacepos);
            }
        }
        // add the defined ending to the text
        $truncate .= $ending;
        if($considerHtml) {
            // close all unclosed html-tags
            foreach ($open_tags as $tag) {
                $truncate .= '</' . $tag . '>';
            }
        }
        return $truncate;
    }
    function truncateee($text, $length = 50, $ending = '...', $exact = true, $considerHtml = true) {
        if ($considerHtml) {
            // if the plain text is shorter than the maximum length, return the whole text
            if (strlen(preg_replace('/<.*?>/', '', $text)) <= $length) {
                return $text;
            }
            // splits all html-tags to scanable lines
            preg_match_all('/(<.+?>)?([^<>]*)/s', $text, $lines, PREG_SET_ORDER);
            $total_length = strlen($ending);
            $open_tags = array();
            $truncate = '';
            foreach ($lines as $line_matchings) {
                // if there is any html-tag in this line, handle it and add it (uncounted) to the output
                if (!empty($line_matchings[1])) {
                    // if it's an "empty element" with or without xhtml-conform closing slash
                    if (preg_match('/^<(\s*.+?\/\s*|\s*(img|br|input|hr|area|base|basefont|col|frame|isindex|link|meta|param)(\s.+?)?)>$/is', $line_matchings[1])) {
                        // do nothing
                    // if tag is a closing tag
                    } else if (preg_match('/^<\s*\/([^\s]+?)\s*>$/s', $line_matchings[1], $tag_matchings)) {
                        // delete tag from $open_tags list
                        $pos = array_search($tag_matchings[1], $open_tags);
                        if ($pos !== false) {
                        unset($open_tags[$pos]);
                        }
                    // if tag is an opening tag
                    } else if (preg_match('/^<\s*([^\s>!]+).*?>$/s', $line_matchings[1], $tag_matchings)) {
                        // add tag to the beginning of $open_tags list
                        array_unshift($open_tags, strtolower($tag_matchings[1]));
                    }
                    // add html-tag to $truncate'd text
                    $truncate .= $line_matchings[1];
                }
                // calculate the length of the plain text part of the line; handle entities as one character
                $content_length = strlen(preg_replace('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', ' ', $line_matchings[2]));
                if ($total_length+$content_length> $length) {
                    // the number of characters which are left
                    $left = $length - $total_length;
                    $entities_length = 0;
                    // search for html entities
                    if (preg_match_all('/&[0-9a-z]{2,8};|&#[0-9]{1,7};|[0-9a-f]{1,6};/i', $line_matchings[2], $entities, PREG_OFFSET_CAPTURE)) {
                        // calculate the real length of all entities in the legal range
                        foreach ($entities[0] as $entity) {
                            if ($entity[1]+1-$entities_length <= $left) {
                                $left--;
                                $entities_length += strlen($entity[0]);
                            } else {
                                // no more characters left
                                break;
                            }
                        }
                    }
                    $truncate .= substr($line_matchings[2], 0, $left+$entities_length);
                    // maximum lenght is reached, so get off the loop
                    break;
                } else {
                    $truncate .= $line_matchings[2];
                    $total_length += $content_length;
                }
                // if the maximum length is reached, get off the loop
                if($total_length>= $length) {
                    break;
                }
            }
        } else {
            if (strlen($text) <= $length) {
                return $text;
            } else {
                $truncate = substr($text, 0, $length - strlen($ending));
            }
        }
        // if the words shouldn't be cut in the middle...
        if (!$exact) {
            // ...search the last occurance of a space...
            $spacepos = strrpos($truncate, ' ');
            if (isset($spacepos)) {
                // ...and cut the text in this position
                $truncate = substr($truncate, 0, $spacepos);
            }
        }
        // add the defined ending to the text
        $truncate .= $ending;
        if($considerHtml) {
            // close all unclosed html-tags
            foreach ($open_tags as $tag) {
                $truncate .= '</' . $tag . '>';
            }
        }
        return $truncate;
    }
?>