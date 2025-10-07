<?php
class InvoiceController extends Controller
{
	public function __construct() {}
	public function index()
	{
		view("Invoices");
	}
	public function create()
	{
		view("Invoices");
	}
	public function save($data, $file)
	{
		if (isset($data["create"])) {
			global $now;
			$invoice = new Invoice();
			$invoice->customer_id = $data["customer_id"];
			$invoice->order_id = $data["order_id"];
			$invoice->invoice_date = date("Y-m-d", strtotime($data["invoice_date"]));
			$invoice->due_date = date("Y-m-d", strtotime($data["due_date"]));
			$invoice->total_amount = $data["total_amount"];
			$invoice->status = $data["status"];
			$invoice->payment_method = $data["payment_method"];
			$invoice->created_at = $now;
			$invoice->updated_at = $now;

			$invoice->save();
			redirect("");
		}
	}
	public function edit($id)
	{
		view("Invoices", Invoice::find($id));
	}
	public function update($data, $file)
	{
		if (isset($data["update"])) {
			global $now;
			$invoice = new Invoice();
			$invoice->id = $data["id"];
			$invoice->customer_id = $data["customer_id"];
			$invoice->order_id = $data["order_id"];
			$invoice->invoice_date = date("Y-m-d", strtotime($data["invoice_date"]));
			$invoice->due_date = date("Y-m-d", strtotime($data["due_date"]));
			$invoice->total_amount = $data["total_amount"];
			$invoice->status = $data["status"];
			$invoice->payment_method = $data["payment_method"];
			$invoice->created_at = $now;
			$invoice->updated_at = $now;
			$invoice->update();
			redirect("");
		}
	}
	public function confirm($id)
	{
		view("Invoices");
	}
	public function delete($id)
	{
		Invoice::delete($id);
		redirect("");
	}
}
