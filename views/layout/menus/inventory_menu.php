<?php
	echo Menu::item([
		"name"=>"Inventory",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"inventory/create","text"=>"Create Inventory","icon"=>"far fa-circle nav-icon"],
			["route"=>"inventory","text"=>"Manage Inventory","icon"=>"far fa-circle nav-icon"],
		]
	]);
