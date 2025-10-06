<?php
echo Page::title(["title"=>"Edit Order"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"order", "text"=>"Manage Order"]);
echo Page::context_open();
echo Form::open(["route"=>"order/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$order->id"]);
	echo Form::input(["label"=>"Customer","name"=>"customer_id","table"=>"customers","value"=>"$order->customer_id"]);
	echo Form::input(["label"=>"Order Date","type"=>"date","name"=>"order_date","value"=>"$order->order_date"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status","value"=>"$order->status"]);
	echo Form::input(["label"=>"Total Amount","type"=>"text","name"=>"total_amount","value"=>"$order->total_amount"]);
	echo Form::input(["label"=>"Delivery Date","type"=>"text","name"=>"delivery_date","value"=>"$order->delivery_date"]);
	echo Form::input(["label"=>"Shipping Address","type"=>"text","name"=>"shipping_address","value"=>"$order->shipping_address"]);
	echo Form::input(["label"=>"Paid Amount","type"=>"text","name"=>"paid_amount","value"=>"$order->paid_amount"]);
	echo Form::input(["label"=>"Discount","type"=>"text","name"=>"discount","value"=>"$order->discount"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
