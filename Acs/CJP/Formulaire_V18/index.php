<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
        <form class="contact100-form validate-form">
            <span class="contact100-form-title">
                Send Us A Message
            </span>


            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <label class="label-input100" for="name">Full name</label>
                <input id="name" class="input100" type="text" name="name" placeholder="Enter your name...">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <label class="label-input100" for="email">Email Address</label>
                <input id="email" class="input100" type="text" name="email" placeholder="Enter your email...">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100">
                <div class="label-input100">What do you need?</div>
                <div>
                    <select class="js-select2" name="service">
                        <option>Please chooses</option>
                        <option>UI/UX Design</option>
                        <option>eCommerce Bussiness</option>
                        <option>Online Services</option>
                    </select>
                    <div class="dropDownSelect2"></div>
                </div>
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Message is required">
                <label class="label-input100" for="message">Message</label>
                <textarea id="message" class="input100" name="message" placeholder="Type your message here..."></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
                    Send
                </button>
            </div>

        </form>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>
