<?php

namespace Facade\PageMaker;

class PageMaker
{
    private function __construct() {}

    public static function makeWelcomePage($mailaddr, $filename) : void
    {
        $mailprop = Database::getProperties("maildata");
        $username = $mailprop['username'];
        $writer = new HtmlWriter($filename);
        $writer->title("Welcome to " . $username . "'s page!");
        $writer->paragraph($username . "のページへようこそ．");
        $writer->paragraph("メールを待っています．");
        $writer->mailto($mailaddr, $username);
        $writer->close();
        $writer->write();

        echo $filename . " is created for " . $mailaddr . " (" . $username . ")\n";
    }
}