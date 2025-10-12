<?php
echo Page::title(["title"=>"Show Role"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"role", "text"=>"Manage Role"]);
echo Page::context_open();
echo Role::html_row_details($id);
echo Page::context_close();
echo Page::body_close();
