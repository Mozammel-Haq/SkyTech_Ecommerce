<?php
	echo Menu::item([
		"name"=>"Role",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"role/create","text"=>"Create Role","icon"=>"far fa-circle nav-icon"],
			["route"=>"role","text"=>"Manage Role","icon"=>"far fa-circle nav-icon"],
		]
	]);
