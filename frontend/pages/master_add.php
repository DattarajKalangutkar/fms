<?php 
	include '../../backend/api_function.php';
	include '../../backend/html_function.php';
	include '../../backend/api/config_master.php';
	$page_title = "Master Add";
	$tech = ($_GET['type']) ? $_GET['type']:'Dashboard';	
	$title = ($_GET['type']) ? ucwords($_GET['type']):'Dashboard';	
	$action = $api_url.'master/master.php?modules='.$tech;
	$primary_key = (isset($_GET['id'])) ? $_GET['id']:'';
	$data = [];
	if($primary_key != '')
	{
		$action .= '&id='.$primary_key;
		$data = json_decode(file_get_contents($action),true);
		$data = $data['rows'];
	}
?>
<?php include "../extra/top_header.php";?>
<body>
  <style type="text/css">
    .textclass{
      opacity: 1;
      border: 1px solid #dee2e6;
      font-weight: 400;
      font-size: 0.875rem;
      border-radius: 4px;
      width: 100%;
    }

    .marginclass{
      margin: 0px 20px;
    }
  </style>
  <div class="container-scroller">
    <?php include "../extra/_navbar.php";?>
    <div class="container-fluid page-body-wrapper">
      <?php include "../extra/_settings-panel.php";?>
      <?php include "../extra/_sidebar.php";?>
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Master : <?php echo $title;?></h4>
                  <form class="form-sample" id="myForm" name="myForm">
                  	<input type="hidden" id="primary_key" name="primary_key" value="<?php echo $primary_key;?>">
    								<input type="hidden" id="modules" name="modules" value="<?php echo $tech;?>">
                    <div class="row">
                    	<?php 
						        		foreach($master_config[$tech] as $key=>$val)
						        		{
						        			if($val['html'] != '')
						        			{
						        				$idname = $val['clientname'];
						        				$type = $val['html'];
						        				$req = ($val['validate'] == '1') ? true:false;
						        				$value = (isset($data[$val['clientname']])) ? $data[$val['clientname']]:'';
						        	?>

						        	<div class="col-md-6">
	                        <div class="form-group row">
	                          <label class="col-sm-3 col-form-label" for="<?php echo $idname;?>"><?php echo $val['displayName'];?></label>
	                          <div class="col-sm-9">
	                            <?php echo create_input($idname,$type,$req,$value,$val,$con,$tech,$api_url);?>
	                          </div>
	                        </div>
	                     </div>
									    <?php
									    		}
									    	}
									    ?>
                   	</div>
                    <div class="row">
                      <div class="col-md-12" style="text-align: center;">
                        <input type="button" class="btn btn-primary marginclass" onclick="validate(0)" value="Save">
                        <a class="btn btn-secondary" href="master_list.php?type=<?php echo $tech;?>">Cancel</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include "../extra/bottom_footer.php";?>
</body>
</html>
<script type="text/javascript">
	var validate_array = <?php echo json_encode($master_config[$tech]);?>;
	var key_feilds = Object.keys(validate_array);
	var exclude_feilds = ["dCreatedDate","vStatus"];
	function validate()
	{
		var data = {};
		var primary_key = document.getElementById('primary_key').value;
		//check for Mandatory feilds value
		for(let i=0;i<key_feilds.length;i++)
		{
			if(!exclude_feilds.includes(key_feilds[i]))
			{
				if(validate_array[key_feilds[i]]['validate'] == 1)
				{
					if(validate_array[key_feilds[i]]['clientname'] == document.getElementById("modules").value+"Image")
					{
						if(document.getElementById("forchangingforImage").value == "")
						{
							alert(validate_array[key_feilds[i]]['clientname']+" is required");
							return;
						}
					}
					else
					{
						if(validate_array[key_feilds[i]]['html'] == 'dropdown')
						{
							if(document.getElementById(validate_array[key_feilds[i]]['clientname']).value == "0")
							{
								alert(validate_array[key_feilds[i]]['clientname']+" is required");
								return;
							}
						}
						else
						{
							if(document.getElementById(validate_array[key_feilds[i]]['clientname']).value == "")
							{
								alert(validate_array[key_feilds[i]]['clientname']+" is required");
								return;
							}
						}
					}
				}
			}
		}

		//Frame a Data Set
		for(let i=0;i<key_feilds.length;i++)
		{
			if(!exclude_feilds.includes(key_feilds[i]))
			{
				data[validate_array[key_feilds[i]]['clientname']] = document.getElementById(validate_array[key_feilds[i]]['clientname']).value;
			}
			else
			{
				if(key_feilds[i] == 'vStatus')
				{
					data[validate_array[key_feilds[i]]['clientname']] = '1';
				}
				else
				{
					data[validate_array[key_feilds[i]]['clientname']] = '';
				}
			}
		}

		if(primary_key != '')
		{
			$.ajax({
				type: "PUT",
				url: '<?php echo $action;?>',
				data: JSON.stringify(data),
				success: function(res){
					var responseData = JSON.parse(res);
					if(responseData.flag) {
						alertify.success(responseData.message);
						setTimeout(function(){
						  window.location.href='master_list.php?type=<?php echo $tech;?>';
						}, 2000);
					} else {
						alertify.error(responseData.message);
					}     
				},
			});
		}
		else
		{
			$.ajax({
				type: "POST",
				url: '<?php echo $action;?>',
				data: JSON.stringify(data),
				success: function(res){
					var responseData = JSON.parse(res);
					if(responseData.flag) {
						alertify.success(responseData.message);
						setTimeout(function(){
						  window.location.href='master_list.php?type=<?php echo $tech;?>';
						}, 2000);
					} else {
						alertify.error(responseData.message);
					}    
				},
			});
		}
	}
</script>