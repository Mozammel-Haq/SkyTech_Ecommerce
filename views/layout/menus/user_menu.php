<?php
	echo Menu::item([
		"name"=>"User",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"user/create","text"=>"Create User","icon"=>"far fa-circle nav-icon"],
			["route"=>"user","text"=>"Manage User","icon"=>"far fa-circle nav-icon"],
		]
	]);
