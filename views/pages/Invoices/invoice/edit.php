<?php
echo Page::title(["title"=>"Edit Invoice"]);
echo Page::body_open();
echo Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
echo Page::context_open();
echo Form::open(["route"=>"invoice/update"]);
	echo Form::input(["label"=>"Id","type"=>"hidden","name"=>"id","value"=>"$invoice->id"]);
	echo Form::input(["label"=>"Customer","name"=>"customer_id","table"=>"customers","value"=>"$invoice->customer_id"]);
	echo Form::input(["label"=>"Order","name"=>"order_id","table"=>"orders","value"=>"$invoice->order_id"]);
	echo Form::input(["label"=>"Invoice Date","type"=>"date","name"=>"invoice_date","value"=>"$invoice->invoice_date"]);
	echo Form::input(["label"=>"Due Date","type"=>"date","name"=>"due_date","value"=>"$invoice->due_date"]);
	echo Form::input(["label"=>"Total Amount","type"=>"text","name"=>"total_amount","value"=>"$invoice->total_amount"]);
	echo Form::input(["label"=>"Status","type"=>"text","name"=>"status","value"=>"$invoice->status"]);
	echo Form::input(["label"=>"Payment Method","type"=>"text","name"=>"payment_method","value"=>"$invoice->payment_method"]);

echo Form::input(["name"=>"update","class"=>"btn btn-success offset-2" , "value"=>"Save Chanage", "type"=>"submit"]);
echo Form::close();
echo Page::context_close();
echo Page::body_close();
