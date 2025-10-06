<?php
echo Page::title(["title"=>"Show Order"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"order", "text"=>"Manage Order"]);
echo Page::context_open();
echo Order::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
