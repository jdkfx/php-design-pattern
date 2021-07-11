<?php

namespace Facade\PageMaker;

class HtmlWriter
{
    private $htmlFileName;
    private $html = "";

    public function __construct($htmlFileName)
    {
        $this->htmlFileName = $htmlFileName;
    }

    public function title($title) : void
    {
        $this->html .= "<html>\n";
        $this->html .= "<head>\n";
        $this->html .= "<title>" . $title . "</title>\n";
        $this->html .= "</head>\n";
        $this->html .= "<body>\n";
        $this->html .= "<h1>" . $title . "</h1>\n";
    }

    public function paragraph($msg) : void
    {
        $this->html .= "<p>" . $msg . "</p>\n";
    }

    public function link($href, $caption) : void
    {
        $this->html .= "<a href=" . $href . ">" . $caption . "</a>\n";
    }

    public function mailto($mailaddr, $username) : void
    {
        $this->link("mailto:" . $mailaddr, $username);
    }

    public function close() : void
    {
        $this->html .= "</body>\n";
        $this->html .= "</html>\n";
    }

    public function write()
    {
        file_put_contents($this->htmlFileName, $this->html);
    }
}