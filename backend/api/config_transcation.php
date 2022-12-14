<?php
	$transcation_config = array(
		'vServiceSrNo'=>array(
			'validate'=>'1',
			'clientname'=>'transServiceNo',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1',
		),
		'vServiceInwardletterno'=>array(
			'validate'=>'1',
			'clientname'=>'transServiceInwardLetterNo',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'dServiceInwardletterdate'=>array(
			'validate'=>'1',
			'clientname'=>'transdServiceInwardletterDate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'vReceivedFrom'=>array(
			'validate'=>'1',
			'clientname'=>'transdReceivedFrom',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'iServiceId'=>array(
			'validate'=>'1',
			'clientname'=>'transServiceId',
			'type'=>'string',
			'data_fetch'=>'services_types',
			'html'=>'dropdown',
			'table'=>'1'
		),
		'vReplyToLetterNo'=>array(
			'validate'=>'1',
			'clientname'=>'transdReplyToLetterNo',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'dReplyToLetterDate'=>array(
			'validate'=>'1',
			'clientname'=>'transdReplyToLetterDate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'dReceiptDate'=>array(
			'validate'=>'1',
			'clientname'=>'transdReceiptDate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'vSubject'=>array(
			'validate'=>'1',
			'clientname'=>'transdSubject',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'vReplyNo'=>array(
			'validate'=>'1',
			'clientname'=>'transdReplyNo',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'dReplyDate'=>array(
			'validate'=>'1',
			'clientname'=>'transdReplyDate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'vRemarks'=>array(
			'validate'=>'0',
			'clientname'=>'transdRemarks',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1',
			'decline_phase'=>'1',
			'approve_phase'=>"1"
		),
		'dEntryDate'=>array(
			'validate'=>'1',
			'clientname'=>'transdEntryDate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'iCreatedBy'=>array(
			'validate'=>'1',
			'clientname'=>'transCreated',
			'type'=>'string',
			'data_fetch'=>'users',
			'html'=>'dropdown',
			'table'=>'1'
		),
		'iApprovedUserId'=>array(
			'validate'=>'0',
			'clientname'=>'transApprovedUser',
			'type'=>'string',
			'data_fetch'=>'users',
			'html'=>'dropdown',
			'table'=>'1',
			"decline_phase"=>"1",
			"approve_phase"=>"1"
		),
		'iApprovalStatus'=>array(
			'validate'=>'1',
			'clientname'=>'transApprovedStatus',
			'type'=>'string',
			'data_fetch'=>'statusform',
			'html'=>'dropdown',
			'table'=>'1',
			"decline_phase"=>"1",
			"approve_phase"=>"1"
		),
		'dCreatedDate'=>array(
			'validate'=>'0',
			'clientname'=>'createdDate',
			'type'=>'string',
			'html'=>'text',
			'table'=>'1'
		),
		'vStatus'=>array(
			'validate'=>'1',
			'clientname'=>'transStatus',
			'type'=>'string',
			'html'=>'text',
			'table'=>'0',
		)        
	) 
?>
