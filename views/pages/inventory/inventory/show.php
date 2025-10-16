<?php
echo Page::title(["title"=>"Show Inventory"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"inventory", "text"=>"Manage Inventory"]);
echo Page::context_open();
echo Inventory::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
