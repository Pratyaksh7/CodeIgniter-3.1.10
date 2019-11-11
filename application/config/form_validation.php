<?php

$config= [

			'add_product_rules'	=>	[
											[
												'field'	=>	'name',
												'label'	=>	'Product Name',
												'rules'	=>	'required|alpha_dash|alpha_numeric',
											],
											[
												'field'	=>	'category',
												'label'	=>	'Product Category',
												'rules'	=>	'required',
											]

									],

			'admin_login'		=>	[
											[
												'field'	=>	'username',
												'label'	=>	'UserName',
												'rules'	=>	'required|alpha_numeric|max_length[20]',
											],
											[
												'field'	=>	'password',
												'label'	=>	'Password',
												'rules'	=>	'required',
											]
									],   

			'add_user_rules'	=>	[
											[
												'field'	=>	'FirstName',
												'label'	=>	'FirstName',
												'rules'	=>	'required|alpha_dash|alpha_numeric',
											],
											[
												'field'	=>	'LastName',
												'label'	=>	'LastName',
												'rules'	=>	'required|alpha_dash|alpha',
											],
											[
												'field'	=>	'Email',
												'label'	=>	'Email',
												'rules'	=>	'required|valid_email|valid_emails',
											],
											[
												'field'	=>	'Password',
												'label'	=>	'Password',
												'rules'	=>	'required',
											],
											[
												'field'	=>	'month',
												'label'	=>	'Month',
												'rules'	=>	'required',
											],
											[
												'field'	=>	'day',
												'label'	=>	'Day',
												'rules'	=>	'required',
											],
											[
												'field'	=>	'year',
												'label'	=>	'Year',
												'rules'	=>	'required',
											],
											[
												'field'	=>	'gender',
												'label'	=>	'Gender',
												'rules'	=>	'required',
											]
									],						
];