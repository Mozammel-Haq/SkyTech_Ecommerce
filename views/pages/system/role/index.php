<?php
echo Page::title(["title"=>"Manage Role"]);
echo Page::body_open();
echo Page::context_open();
$page = isset($_GET["page"]) ?$_GET["page"]:1;
echo Role::html_table($page,10);
echo Page::context_close();
echo Page::body_close();
