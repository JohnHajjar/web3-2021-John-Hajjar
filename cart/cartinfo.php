<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/a0043d9bc2.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="../jquery-comp-3.6.js"></script>
        <link href="http://fonts.cdnfonts.com/css/brandon-grotesque-regular" rel="stylesheet">

  
        <style>
                
                .cardinfo-bodycss {
                /* margin: 0;
                padding: 0; */
                border: none;
                overflow: hidden; /* Hide scrollbars */
                }

                @media screen and (min-width: 981px) {
                .cardinfo-bodycss {
                    font-size: 13px;
                }
                }

                @media screen and (min-width: 641px) and (max-width: 980px) {
                .cardinfo-bodycss {
                    font-size: 11px;
                }
                }

                @media screen and (max-width: 640px) {
                .cardinfo-bodycss {
                    font-size: 9px;
                }
                }

                body {
                /* background: linear-gradient(to bottom, #fff, #ddd); */
                color:white;
                background-color: black;
                width:100%;
                }

                .demo {
                width:70%;
                visibility: hidden;
                margin-left: 10rem;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                }

                @media screen and (max-width: 750px) {
                .demo {
                    width:30%;
                    margin-left:34rem;
                }
                }

                .demo__button {
                width: 200px;
                display: block;
                margin: 20px auto 0;

                background-color: #eee;
                transition: background-color 0.4s ease-out;

                border: 1px solid #a29e97;
                cursor: pointer;
                padding: 10px 0;

                text-transform: uppercase;
                font-size: 1.4rem;
                color: #000;
                }

                .demo__button:hover,
                .demo__button:focus {
                    background-color: #a29e97;
                    color: #fff;
                }
                

                .melnik909 {
                position: fixed;
                bottom: 1rem;
                right: 1rem;

                font-size: 1.2rem;
                color: #000;
                text-decoration: none;
                }

                .melnik909:hover,
                .melnik909:focus {
                    text-decoration: underline;
                }
                

                /*
                * CSS Payment Card
                */
                .payment-card {
                width: 60rem;
                box-sizing: border-box;
                padding: 2% 2% 4%;
                }

                .bank-card {
                position: relative;
                height: 60rem / 2;
                font-family: arial, sans-serif;
                }

                .bank-card__side {
                width: 65%;
                position: absolute;
                border-radius: 10px;

                border-width: 60rem / 360;
                border-style: solid;
                }

                .bank-card__side_front {
                background-color: #f0f0ee;
                padding: 5%;
                box-shadow: 0 0 10px #f4f4f2;
                border-color: #a29e97;

                top: 0;
                left: 0;
                z-index: 2;
                }

                .bank-card__side_back {
                background-color: #e0ddd7;
                padding: 24.5% 5% 11%;
                box-shadow: 0 0 2rem #f3f3f3;

                text-align: right;
                border-color: #dad9d6;

                top: 12%;
                right: 0;
                }

                .bank-card__side_back:before {
                content: "";
                width: 100%;
                height: 25%;
                background-color: #8e8b85;

                position: absolute;
                top: 14%;
                right: 0;
                }

                .bank-card__icon {
                display: block;
                width: 12%;
                height: 12%;

                background-size: contain;
                background-position: 50% 50%;
                background-repeat: no-repeat;

                position: absolute;
                bottom: 15%;
                }

                .bank-card__icon_mastercard {
                background-image: url("https://stas-melnikov.ru/paymentcard/mastercard.svg");
                right: 15%;
                }

                .bank-card__icon_visa {
                background-image: url("https://stas-melnikov.ru/paymentcard/visa.svg");
                right: 5%;
                }

                .bank-card__inner {
                margin-bottom: 4%;
                }

                .bank-card__inner:last-child {
                margin-bottom: 0;
                }

                .bank-card__label {
                display: inline-block;
                vertical-align: middle;
                width: 25%;
                }

                .bank-card__label_fullwidth {
                width: 100%;
                }

                .bank-card__hint {
                display: block;
                text-indent: -9999px;
                overflow: hidden;
                position: absolute;
                }

                .bank-card__caption {
                text-transform: uppercase;
                font-size: 60rem / 55;
                margin-left: 1%;
                }

                .bank-card__field {
                box-sizing: border-box;
                border: 60rem / 180 solid #d0d0ce;
                outline: none;
                width: 100%;

                padding: 0.7em;
                font-size: 60rem / 40;
                position: relative;
                z-index: 2;
                }

                .bank-card__field:focus {
                border-color: #fdde60;
                }

                @media screen and (max-width: 640px) {
                .bank-card__field {
                    font-size: 60rem / 50;
                }
                }

                .bank-card__separator {
                font-size: 60rem / 18;
                color: #c4c4c3;

                padding-left: 4%;
                padding-right: 4%;
                display: inline-block;
                vertical-align: middle;
                }

                .button-pay{ 
                    background-color: transparent;
                    color:white; 
                    border:1px solid rgba(212, 175, 55,1);
                    transition: 0.5s ease-in-out;
                    display: inline;
                    width:25%;

                }



                .button-pay:hover{
                    background-color: rgba(212, 175, 55,1);
                    color:white;
                    border:1px solid white;

                }

                .paypal-pay{
                    visibility:hidden;
                    display:grid;
                    justify-content:center; 
                    align-items:center;
                    margin-top:-35rem; 

                }

                /* @media screen and (max-width: 800px) {
                .button-pay {
                    width:50%;
                    }
                } */
        </style>
    </head>
    <body class="cardinfo-bodycss">
        <div>
            <table style="width:100%; font-size:15px;" align=center>
                <tr align=center>
                    <td>
                        <h1>
                            Please pick your payment method. 
                        </h1>
                    </td>
                <tr align=center>
                    <td>
                        <button class="button-pay card-click">
                            <img src="imgs/cctransparent.png" width=17%>
                            <h3>
                                Credit Card 
                            </h3>
                        </button>
                    </td>
                </tr>
                <tr align=center>
                    <td>
                        <button class="button-pay paypal-click">
                            <img src="imgs/paypaltransparent.png" width="17%">
                            <h3>
                                PayPal
                            </h3>
                        </button>
                    </td>
                </tr>
            </table>

        </div>
    	<div class="demo" style="margin-top:-10rem;">
		<form class="payment-card">
			<div class="bank-card">
				<div class="bank-card__side bank-card__side_front">
					<i class="bank-card__icon bank-card__icon_mastercard"></i>
					<i class="bank-card__icon bank-card__icon_visa"></i>
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__label_fullwidth">
							<span class="bank-card__hint">Holder of card</span>
							<input type="text" class="bank-card__field" placeholder="Holder of card" pattern="[A-Za-z, ]{2,}" name="holder-card" required>
						</label>
					</div>
					<div class="bank-card__inner">
						<label class="bank-card__label bank-card__label_fullwidth">
							<span class="bank-card__hint">Number of card</span>
							<input type="number" class="bank-card__field" placeholder="Number of card" pattern="[0-9]{16}" name="number-card" required>
						</label>
					</div>          
					<div class="bank-card__inner">
						<span class="bank-card__caption">valid thru</span>
					</div>
					<div class="bank-card__inner">
						<label class="bank-card__label">
							<span class="bank-card__hint">Month</span>
							<input type="text" class="bank-card__field" placeholder="MM" maxlength="2" pattern="[0-9]{2}" name="mm-card" required>
						</label>
						<span class="bank-card__separator">/</span>
						<label class="bank-card__label">
							<span class="bank-card__hint">Year</span>
							<input type="text" class="bank-card__field" placeholder="YY" maxlength="2" pattern="[0-9]{2}" name="year-card" required>
						</label>						
					</div>					
				</div>
				<div class="bank-card__side bank-card__side_back">
					<div class="bank-card__inner">
						<label class="bank-card__label">
							<span class="bank-card__hint">CVC</span>
							<input type="text" class="bank-card__field" placeholder="CVC" maxlength="3" pattern="[0-9]{3}" name="cvc-card" required>
						</label>
					</div>
				</div>				
			</div>
			<button class="demo__button" style="margin-top:10%;">Send</button>
		</form>
	</div>

    <div class="paypal-pay">
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container" style="max-width:300px;"></div>

    <!-- Include the PayPal JavaScript SDK -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD&disable-funding=card&intent=authorize"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                layout: 'vertical',
                color:  'gold',
                shape:  'pill',
                label:  'pay',
            }

        }).render('#paypal-button-container');
    </script>
    </div>
            


    <script>
        $(".card-click").click(function(){
            $(".demo").css("visibility","visible");
            $(".paypal-pay").css("visibility","hidden");
        });

        $(".paypal-click").click(function(){
            $(".demo").css("visibility","hidden");
            $(".paypal-pay").css("visibility","visible");
        });
        
    </script>
    
    </body>
</html>