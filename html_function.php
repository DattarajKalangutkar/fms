<?php
	function create_input($iden,$type,$req,$val,$data,$con,$modules,$url)
	{
		$str = '';
		if($type == 'dropdown')
		{
			$full_data = getalldata($con,$data['data_fetch'],'');
			$str .= "<select class='form-control form-control-user' id='$iden' name='$iden'>";
			$str .= "<option value='0'>Select an Option</option>";
			foreach($full_data as $key=>$value)
			{
				$selected = ($value['iId'] == $val) ? 'selected':'';
				$str .= "<option value='".$value['iId']."' $selected>".$value['vName']."</option>";
			}
			$str .= "</select>";
		}
		else if($type == 'file')
		{
			$str .="<input id='$iden' onchange='updateValue()' name='$iden' class='form-control form-control-user' type='$type' autocomplete='off' value='' >";
			$str .="<input id='image_edit' name='image_edit' class='form-control form-control-user' type='hidden' autocomplete='off' value='$url$val'>";
			$str .="<input id='forchanging' name='forchanging' class='form-control form-control-user' type='hidden' autocomplete='off' value='$val'>";
			$str .="<input id='forchangingforImage' name='forchangingforImage' class='form-control form-control-user' type='hidden' autocomplete='off' value='$val'>";
			if($val != '')
			{
				$str .="<a href='$val' target='blank'>View</a> || <a href='javascript:;' onclick='deleteImage(\"".$modules."\",\"".$val."\")'>Delete</a>";
			}
		}
		else if($type == 'textarea')
		{
			$str .="<textarea id='$iden' name='$iden' class='form-control form-control-user' type='$type' autocomplete='off' required='$req'>$val</textarea>";
		}
		else if($type == 'number')
		{
			$str .="<input id='$iden' name='$iden' min='0' class='form-control form-control-user' type='$type' autocomplete='off' required='$req' value='$val'>";
		}
		else
		{
			$str .="<input id='$iden' name='$iden' class='form-control form-control-user' type='$type' autocomplete='off' required='$req' value='$val'>";
		}
		return $str;
	}

	function getHtmlType($type)
	{
		if($type == 'string')
			return 'text';
		else if($type == 'number')
			return  'number';
		else 
			return '';
	}

	function getDataTable($head,$data,$type,$method,$con)
	{
		$str = '';
		$count = 0;
		$str .= '<div class="table-responsive">';
		$str .= '<table class="table table-bordered" id="myTable" width="100%" cellspacing="0">';
		$str .= '<thead>';
		$str .= '<tr>';
		foreach($head as $key => $value) 
		{
			if($value['table'] == '1')
			{	
				$count++;
				$str .= '<th>'.$value['clientname'].'</th>';
			}
		}
		$str .= '<th>Action</th>';
		$str .= '</tr>';
		$str .= '</thead>';
		$str .= '<tbody>';
		if(count($data) > 0)
		{
			foreach ($data as $parent => $val) 
			{
				$str .= '<tr>';
				foreach($head as $child => $value) 
				{
					if($value['table'] == '1')
					{
						if($value['html'] == 'dropdown')
						{
							$str .= '<td>'.$val[$value['clientname']]['vName'].'</td>';
						}
						else if($child == 'dCreatedDate')
						{
							$str .= '<td>'.date_format(date_create($val[$value['clientname']]),"M d, h:i a").'</td>';
						}
						else
						{
							$str .= '<td>'.$val[$value['clientname']].'</td>';
						}
						
					}
				}
				if($method == 'edit')
					$str .= '<td><a href="master_add.php?type='.$type.'&id='.$val['id'].'">Edit</a> | <a href="javascript:;" onclick="assignItem('.$val['id'].')" data-toggle="modal" data-target="#deleteButton">Delete</a></td>';
				else
					$str .= '<td><a href="'.$type.'_detail_view.php?id='.$val['id'].'">View</a> | <a href="javascript:;" onclick="assignItem('.$val['id'].')" data-toggle="modal" data-target="#deleteButton">Delete</a></td>';
				$str .= '</tr>';
			}
		}
		else
		{
			$str .= '<tr style="text-align:center;color:red;"><td colspan="'.($count+1).'">No Data Available</td></tr>';
		}
		$str .= '</tbody>';
		$str .= '</table>';
		$str .= '</div>';
		return $str;
	}


	function getDataTableforrescuer($head,$data,$type)
	{
		$str = '';
		$count = 0;
		$str .= '<div class="table-responsive">';
		$str .= '<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">';
		$str .= '<thead>';
		$str .= '<tr>';
		foreach($head as $key => $value) 
		{
			if($value['table'] == '1')
			{	
				$count++;
				$str .= '<th>'.$value['clientname'].'</th>';
			}
		}
		$str .= '<th>Action</th>';
		$str .= '</tr>';
		$str .= '</thead>';
		$str .= '<tbody>';
		if(count($data) > 0)
		{
			foreach ($data as $parent => $val) 
			{
				$str .= '<tr>';
				foreach($head as $child => $value) 
				{
					if($value['table'] == '1')
					{
						if($value['html'] == 'dropdown')
						{
							$str .= '<td>'.GETXFROMYID($con,$value['data_fetch'],'vName',$val[$value['clientname']]).'</td>';
						}
						else if($child == 'dCreatedDate')
						{
							$str .= '<td>'.date_format(date_create($val[$value['clientname']]),"M d, H:m a").'</td>';
						}
						else
						{
							$str .= '<td>'.$val[$value['clientname']].'</td>';
						}
					}
				}
				$approve = 1;
				$dis = 2;
				$str .= '<td><a href="#" onclick="getstatus('.$val['id'].','.$approve.')">Approve</a> | <a href="javascript:;" onclick="getstatus('.$val['id'].','.$dis.')">Decline</a></td>';
				$str .= '</tr>';
			}
		}
		else
		{
			$str .= '<tr style="text-align:center;color:red;"><td colspan="'.($count+1).'">No Data Available</td></tr>';
		}
		$str .= '</tbody>';
		$str .= '</table>';
		$str .= '</div>';
		return $str;
	}
?>