<?php
echo Page::title(["title"=>"Show Supplier"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"supplier", "text"=>"Manage Supplier"]);
echo Page::context_open();
echo Supplier::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
