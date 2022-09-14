<?php
	$master_config = array(
		'department'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'colorName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1',
				'other_validation'=>'vName'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'1'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'colorStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),
		'statusform'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'statusformName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1',
				'other_validation'=>'vName'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'1'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'statusformStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),
		'services_types'=>array(
			'vName'=>array(
				'validate'=>'1',
				'clientname'=>'serviceTypeName',
				'type'=>'string',
				'html'=>'text',
				'table'=>'1',
				'other_validation'=>'vName'
			),
			'iDepartmentId'=>array(
				'validate'=>'1',
				'clientname'=>'serviceTypeDepartment',
				'type'=>'string',
				'data_fetch'=>'department',
				'html'=>'dropdown',
				'table'=>'1'
			),
			'dCreatedDate'=>array(
				'validate'=>'0',
				'clientname'=>'createdDate',
				'type'=>'string',
				'html'=>'',
				'table'=>'1'
			),
			'vStatus'=>array(
				'validate'=>'1',
				'clientname'=>'serviceTypeStatus',
				'type'=>'string',
				'html'=>'',
				'table'=>'0'
			)
		),
	) 
?>
