<?php
	echo Menu::item([
		"name"=>"Supplier",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"supplier/create","text"=>"Create Supplier","icon"=>"far fa-circle nav-icon"],
			["route"=>"supplier","text"=>"Manage Supplier","icon"=>"far fa-circle nav-icon"],
		]
	]);
