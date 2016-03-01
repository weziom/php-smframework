<?php

/**
 * Created by Lee Cook.
 * User: Dev
 * Date: 01/03/2016
 * Time: 21:00
 */

class Pages extends framework
{
    /**
     * @var array
     */
    protected static $pages;

    /**
     * pages constructor.
     */
    public function __construct()
    {
        $this->pages = array();
    }

    /**
     * @param $name
     * @param $href
     */
    public static function AddPageLink($name, $href)
    {
        self::$pages[] = array('title' => $name, 'href' => $href);
    }

    /**
     * @return string
     */
    public static function GetPageLinks()
    {
        $html='';

        // Build up HTML
        foreach(self::$pages as $page)
        {
            $html .= '<li><a href=' . $page['href'] . '>' . $page{'title'} . '</a></li>';
        }

        // Return to caller
        return $html;
    }
}