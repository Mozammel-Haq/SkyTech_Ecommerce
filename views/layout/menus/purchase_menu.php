<?php
	echo Menu::item([
		"name"=>"Purchase",
		"icon"=>"nav-icon fa fa-wrench",
		"route"=>"#",
		"links"=>[
			["route"=>"purchase/create","text"=>"Create Purchase","icon"=>"far fa-circle nav-icon"],
			["route"=>"purchase","text"=>"Manage Purchase","icon"=>"far fa-circle nav-icon"],
		]
	]);
