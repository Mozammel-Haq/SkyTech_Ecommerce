<?php
echo Page::title(["title"=>"Edit Role"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"role", "text"=>"Manage Role"]);
echo Page::context_open();
echo Form::open(["route"=>"role/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$role->id"]);
	echo Form::input(["label"=>"Name","type"=>"text","name"=>"name","value"=>"$role->name"]);
	echo Form::input(["label"=>"Description","type"=>"textarea","name"=>"description","value"=>"$role->description"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
