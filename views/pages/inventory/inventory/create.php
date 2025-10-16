<?php
echo Page::title(["title"=>"Create Inventory"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"inventory", "text"=>"Manage Inventory"]);
echo Page::context_open();
echo Form::open(["route"=>"inventory/save"]);
	echo Form::input(["label"=>"Product","name"=>"product_id","table"=>"products"]);
	echo Form::input(["label"=>"Warehouse","name"=>"warehouse_id","table"=>"warehouses"]);
	echo Form::input(["label"=>"Supplier","name"=>"supplier_id","table"=>"suppliers"]);
	echo Form::input(["label"=>"Quantity","type"=>"text","name"=>"quantity"]);
	echo Form::input(["label"=>"Transaction Type","name"=>"transaction_type_id","table"=>"transaction_types"]);
	echo Form::input(["label"=>"Remarks","type"=>"textarea","name"=>"remarks"]);

echo Form::input(["name"=>"create","class"=>"btn btn-primary offset-2", "value"=>"Save", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
