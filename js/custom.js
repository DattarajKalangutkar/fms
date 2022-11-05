function save_stakeholder() {

   
    var stackholdername = $('#stackholdername').val();
    var categories = $('#categories').val();
    var stackcode = $('#stackcode').val();
    var country_code = $('#country_code').val();
    var contactperson = $('#contactperson').val();
    var phone = $('#phone').val();
    var currency = $('#currency').val();
    
    var regicurrency = $('#regicurrency').val();

    var total = 22;
    var total2 = 22;

   if (stackholdername == '') {
        $.toast({
            heading: 'Error',
            text: 'StackHolder Name is required',
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        })
        return false;
  

    } else if (categories == '') {
        $.toast({
            heading: 'Error',
            text: 'Categories  is required',
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        })
        return false;


    } else if (stackcode == '') {
        $.toast({
            heading: 'Error',
            text: 'Stackholder Code  is required',
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        })
        return false;

    } else if (country_code == '') {
        $.toast({
            heading: 'Error',
            text: 'Country Code is required',
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        })
        return false;


    } else if (contactperson == '') {
        $.toast({
            heading: 'Error',
            text: 'Contact Person  is required',
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        })
        return false;

    } else if (phone == '') {
        $.toast({
            heading: 'Error',
            text: 'Phone  is required',
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        })
        return false;

    } else if (currency == '') {
        $.toast({
            heading: 'Error',
            text: 'Currency  is required',
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        })
        return false;

    } else if (regicurrency == '') {
        $.toast({
            heading: 'Error',
            text: 'Tag Country  is required',
            showHideTransition: 'fade',
            icon: 'error',
            position: 'top-right',
        })
        return false;



    } else if (total != '') {
        //alert(total);
        for (var i = 0; i < total; i++) {
            if ($('#accountcurrency_' + i).val() == '') {
                $.toast({
                    heading: 'Error',
                    text: 'Account Currency is required',
                    showHideTransition: 'fade',
                    icon: 'error',
                    position: 'top-right',
                })  
                return false;
            }

        }
     } else if(total2 ==22){
        console.log(total2);
        for (var j = 0; j < total2; j++) {

            if ($('#skumodule_' + j).val() == '') {
                $.toast({
                    heading: 'Error',
                    text: 'Select SKU is required',
                    showHideTransition: 'fade',
                    icon: 'error',
                    position: 'top-right',
                })

                return false;
           
                
            }
        }

        
    } else {

        $.ajax({
            type: "POST",
            url: 'getData.php',
            data: $('form').serialize(),
            dataType: 'JSON',
            success: function(response) {
                var jsonData = JSON.parse(response);
                var name = response.title;
                // console.log(name);
                // user is logged in successfully in the back-end
                // let's redirect
                // if (jsonData.success == "1")
                // {
                //     location.href = 'my_profile.php';
                // }
                // else
                // {
                //     alert('Invalid Credentials!');
                // }
            }
        });

    }

}