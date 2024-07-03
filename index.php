<?php
session_start();
if (isset($_POST["checkout-btn"])) {
    $order_number = rand(100, 999);

if( !($_SESSION["login"])) {
		header("Location: login.php");
		exit;
}
}
?>
<HTML>
<HEAD>
<TITLE>Kopas Tamsis</TITLE>
<link href="./assets/css/phppot-style.css" type="text/css" rel="stylesheet" />
<link href="./assets/css/one-page-checkout.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css/kopas.css">
<script src="./vendor/jquery/jqueryy.min.js" type="text/javascript"></script>
<script src="./vendor/jquery/jqueryy-ui.js"></script>
</HEAD>
<BODY class="backgroundmenu">
<div class="atas"></div>

<header>
        <div class="containerr">
            <ul>
                <li><a href="#makananberat">Makanan Berat</a></li>
                <li><a href="#makananringan">Makanan Ringan</a></li>
                <li><a href="#kopi">Kopi</a></li>
				<li><a href="#squash">Squash</a></li>
				<li><a href="#kopitradisional">Kopi Tradisional</a></li>
				<li><a href="#noncoffee">Non Coffee</a></li>
				<li><a href="#jusbuah">Jus Buah</a></li>
				<li><a href="#checkout">Checkout</a></li>
				<li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
</header>		


	<div class="phppot-container">

		<form name="one-page-checkout-form" id="one-page-checkout-form"
			action="" method="post" onsubmit="return checkout()">
			
<?php if(!empty($order_number)){?>

			<div class="order-message order-success">
			You order number is <?php echo $order_number;?>.
		<span class="btn-message-close"
					onclick="this.parentElement.style.display='none';" title="Close">&times;</span>

			</div>
<?php }?>


			<div class="section product-gallery">
            <div id="product-grid">

    <!-- Makanan Berat -->
	<br>
	<div id="makananberat" class="txt-heading">Makanan</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa rebus.jpg" id="<?php echo "MB1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Bakmi Jawa Rebus";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "MB1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB1";?>','<?php echo "Bakmi Jawa R";?>','<?php echo "16";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa goreng.jpg" id="<?php echo "MB2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Bakmi Jawa Goreng";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "MB2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB2";?>','<?php echo "Bakmi Jawa G";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab telur.jpeg" id="<?php echo "MB3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Goreng Arab Telur";?></strong>
		</div>
		<div class="product-price"><?php echo "17K";?></div>

		<input type="button" id="add_<?php echo "MB3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB3";?>','<?php echo "NasGor Arab Telur";?>','<?php echo "17";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab sosis.jpg" id="<?php echo "MB4";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Goreng Arab Sosis";?></strong>
		</div>
		<div class="product-price"><?php echo "17K";?></div>

		<input type="button" id="add_<?php echo "MB4";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB4";?>','<?php echo "NasGor Arab Sosis";?>','<?php echo "17";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab ayam.jpg" id="<?php echo "MB5";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Goreng Arab Ayam";?></strong>
		</div>
		<div class="product-price"><?php echo "20K";?></div>

		<input type="button" id="add_<?php echo "MB5";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB5";?>','<?php echo "Nasgor Arab Ayam";?>','<?php echo "20";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi telur.jpg" id="<?php echo "MB6";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Telur";?></strong>
		</div>
		<div class="product-price"><?php echo "11K";?></div>

		<input type="button" id="add_<?php echo "MB7";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB7";?>','<?php echo "Nasi Telur";?>','<?php echo "11";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi tempe.jpg" id="<?php echo "MB8";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Tempe";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "MB8";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB8";?>','<?php echo "Nasi Tempe";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi tahu.jpg" id="<?php echo "MB9";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Tahu";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "MB9";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB9";?>','<?php echo "Nasi Tahu";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi ayam.jpg" id="<?php echo "MB10";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Ayam";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "MB10";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB10";?>','<?php echo "Nasi Ayam";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi sop sayur.jpg" id="<?php echo "MB11";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Sop Sayur";?></strong>
		</div>
		<div class="product-price"><?php echo "12K";?></div>

		<input type="button" id="add_<?php echo "MB11";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB11";?>','<?php echo "Nasi Sop Sayur";?>','<?php echo "12";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi sop ayam.jpg" id="<?php echo "MB12";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Sop Ayam";?></strong>
		</div>
		<div class="product-price"><?php echo "17K";?></div>

		<input type="button" id="add_<?php echo "MB12";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB12";?>','<?php echo "Nasi Sop Ayam";?>','<?php echo "17";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/intel goreng.jpg" id="<?php echo "MB13";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Intel Goreng";?></strong>
		</div>
		<div class="product-price"><?php echo "12K";?></div>

		<input type="button" id="add_<?php echo "MB13";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB13";?>','<?php echo "Intel Goreng";?>','<?php echo "12";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/intel rebus.jpeg" id="<?php echo "MB14";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Intel Rebus";?></strong>
		</div>
		<div class="product-price"><?php echo "13K";?></div>

		<input type="button" id="add_<?php echo "MB14";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB14";?>','<?php echo "Intel Rebus";?>','<?php echo "13";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasgor lokal.jpeg" id="<?php echo "MB15";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Nasi Goreng Lokal";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "MB15";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB15";?>','<?php echo "Nasgor Lokal";?>','<?php echo "15";?>')" />
	</div>
    <br>
    <br>
    <!-- Makanan Ringan -->
    <div id="makananringan" class="txt-heading">Makanan ringan</div>
    <div class="product-item">
		<div class="product-image">
			<img src="data/snack/tahu cocol.jpg" id="<?php echo "MR1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Tahu Cocol";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "MR1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR1";?>','<?php echo "Tahu Cocol";?>','<?php echo "10";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/tempe cocol.jpg" id="<?php echo "MR2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Tempe Cocol";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "MR2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR2";?>','<?php echo "Tempe Cocol";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/kentang.jpg" id="<?php echo "MR3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "French Fries";?></strong>
		</div>
		<div class="product-price"><?php echo "12K";?></div>

		<input type="button" id="add_<?php echo "MR3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR3";?>','<?php echo "Frech Fries";?>','<?php echo "12";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/pisang goreng coklat.jpg" id="<?php echo "MR4";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Pisang Goreng Coklat";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "MR4";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR4";?>','<?php echo "Pisang Goreng Coklat";?>','<?php echo "15";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/pisang goreng keju.jpeg" id="<?php echo "MR5";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Pisang Goreng Keju";?></strong>
		</div>
		<div class="product-price"><?php echo "15k";?></div>

		<input type="button" id="add_<?php echo "MR5";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR5";?>','<?php echo "Pisang Goreng Keju";?>','<?php echo "15";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/pisang goreng mix.jpeg" id="<?php echo "MR6";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Pisang Gorex Mix";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "MR6";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR6";?>','<?php echo "Pisang Goreng Mix";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/pisang bakar coklat.jpg" id="<?php echo "MR7";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Pisang Bakar Coklat";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "MR7";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR7";?>','<?php echo "Pisang Bakar Keju";?>','<?php echo "15";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/pisang bakar keju.jpg" id="<?php echo "MR8";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Pisang Bakar Keju";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "MR8";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR8";?>','<?php echo "Pisang Bakar Coklat";?>','<?php echo "15";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/pisang goreng mix.jpeg" id="<?php echo "MR9";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Pisang Goreng Aja";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "MR9";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR9";?>','<?php echo "Pisang Goreng Aja";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/singkong.jpg" id="<?php echo "MR10";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Singkong Aja ";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "MR10";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR10";?>','<?php echo "Singkong Aja";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/singkong coklat.jpg" id="<?php echo "MR11";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Singkong Coklat";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "MR11";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR11";?>','<?php echo "Singkong Coklat";?>','<?php echo "15";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/snack/singkong keju.jpg" id="<?php echo "MR12";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Singkong Keju";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "MR12";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR12";?>','<?php echo "Singkong Keju";?>','<?php echo "15";?>')" />
	</div>
    <div class="product-item">
		<div class="product-image">
			<img src="data/snack/tahu tuna.jpg" id="<?php echo "MR13";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Tahu Tuna";?></strong>
		</div>
		<div class="product-price"><?php echo "12K";?></div>

		<input type="button" id="add_<?php echo "MR13";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MR13";?>','<?php echo "Singkong Keju";?>','<?php echo "12";?>')" />
	</div>
    <br>
    <br>

    <!-- Kopi -->

    <div id="kopi" class="txt-heading">Kopi</div>
    <div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa rebus.jpg" id="<?php echo "K1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Susu Original";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "K1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K1";?>','<?php echo "Kopi Susu Original";?>','<?php echo "16";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa goreng.jpg" id="<?php echo "K2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Susu Vanilla";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "K2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K2";?>','<?php echo "Kopi Susu Vanila";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab telur.jpeg" id="<?php echo "K3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Susu Caramel";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "K3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K3";?>','<?php echo "Kopi Susu Caramel";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab sosis.jpg" id="<?php echo "K4";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Susu Hazellnut";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "K4";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K4";?>','<?php echo "Kopi Susu Hazelnut";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab ayam.jpg" id="<?php echo "K5";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Susu Aren";?></strong>
		</div>
		<div class="product-price"><?php echo "16k";?></div>

		<input type="button" id="add_<?php echo "K5";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K5";?>','<?php echo "Kopi Susu Aren";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi telur.jpg" id="<?php echo "K6";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Lemon";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "K6";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K6";?>','<?php echo "Kopi Lemon";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi tempe.jpg" id="<?php echo "K7";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Capuccino";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "K7";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K7";?>','<?php echo "Capuccino";?>','<?php echo "15";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi tahu.jpg" id="<?php echo "K8";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Mocchachinno";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "K8";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K8";?>','<?php echo "Mochachinno";?>','<?php echo "16";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi ayam.jpg" id="<?php echo "K9";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Americano";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "K9";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K9";?>','<?php echo "Americano";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi sop sayur.jpg" id="<?php echo "K10";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Long Black ";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "K10";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "K10";?>','<?php echo "Long Black";?>','<?php echo "10";?>')" />
	</div>
    <br>
    <br>
    <!-- Squash -->
    <div id="squash" class="txt-heading">Squash</div>
    <div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa rebus.jpg" id="<?php echo "S1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Lemon";?></strong>
		</div>
		<div class="product-price"><?php echo "14K";?></div>

		<input type="button" id="add_<?php echo "S1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "S1";?>','<?php echo "Lemon";?>','<?php echo "14";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa goreng.jpg" id="<?php echo "S2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Orange";?></strong>
		</div>
		<div class="product-price"><?php echo "14K";?></div>

		<input type="button" id="add_<?php echo "S2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "S2";?>','<?php echo "Orange";?>','<?php echo "14";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab telur.jpeg" id="<?php echo "S3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Soda Susu";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "S3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "S3";?>','<?php echo "Soda Susu";?>','<?php echo "15";?>')" />
	</div>
<br>
<br>
 <!-- Kopi Tradisional -->
 <div id="kopitradisional" class="txt-heading">Kopi Tradisional</div>
    <div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa rebus.jpg" id="<?php echo "KT1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Cangkir";?></strong>
		</div>
		<div class="product-price"><?php echo "8K";?></div>

		<input type="button" id="add_<?php echo "KT1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "KT1";?>','<?php echo "Kopi Susu Cangkir";?>','<?php echo "8";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa goreng.jpg" id="<?php echo "KT2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Jahe";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "KT2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "KT2";?>','<?php echo "Kopi Jahe";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab telur.jpeg" id="<?php echo "KT3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Jahe Susu ";?></strong>
		</div>
		<div class="product-price"><?php echo "12K";?></div>

		<input type="button" id="add_<?php echo "KT3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "KT3";?>','<?php echo "Kopi Jahe Susu";?>','<?php echo "12";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab sosis.jpg" id="<?php echo "KT4";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Susu Cangkir";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "KT4";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "KT4";?>','<?php echo "Kopi Susu Cangkir";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab ayam.jpg" id="<?php echo "KT5";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Kopi Tarik";?></strong>
		</div>
		<div class="product-price"><?php echo "10k";?></div>

		<input type="button" id="add_<?php echo "KT5";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "KT5";?>','<?php echo "Kopi Tarik";?>','<?php echo "10";?>')" />
	</div>
<br>
<br>
<!-- Non Coffee -->
<div id="noncoffee" class="txt-heading">Non Coffee</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa rebus.jpg" id="<?php echo "NC1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Teh";?></strong>
		</div>
		<div class="product-price"><?php echo "9K";?></div>

		<input type="button" id="add_<?php echo "NC1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC1";?>','<?php echo "Teh";?>','<?php echo "9";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa goreng.jpg" id="<?php echo "NC2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Teh Tarik";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "NC2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC2";?>','<?php echo "Teh Tarik";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab telur.jpeg" id="<?php echo "NC3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Teh Susu";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "NC3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC3";?>','<?php echo "Teh Susu";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab sosis.jpg" id="<?php echo "NC4";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Lemon Tea";?></strong>
		</div>
		<div class="product-price"><?php echo "12K";?></div>

		<input type="button" id="add_<?php echo "NC4";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC4";?>','<?php echo "Lemon Tea";?>','<?php echo "12";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab ayam.jpg" id="<?php echo "NC5";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Jeruk";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "NC5";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC5";?>','<?php echo "Jeruk";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi telur.jpg" id="<?php echo "NC6";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Tape Ketan";?></strong>
		</div>
		<div class="product-price"><?php echo "11K";?></div>

		<input type="button" id="add_<?php echo "NC7";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC7";?>','<?php echo "Tape Ketan";?>','<?php echo "11";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi tempe.jpg" id="<?php echo "NC8";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Tape Ketan Susu";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "NC8";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC8";?>','<?php echo "Tape Ketan Susu";?>','<?php echo "15";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi tahu.jpg" id="<?php echo "NC9";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Jahe Sereh";?></strong>
		</div>
		<div class="product-price"><?php echo "8K";?></div>

		<input type="button" id="add_<?php echo "NC9";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC9";?>','<?php echo "Jahe Sereh";?>','<?php echo "8";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi ayam.jpg" id="<?php echo "NC10";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Jahe Sereh Lemon";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "NC10";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC10";?>','<?php echo "Jahe Sereh Lemon";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi sop sayur.jpg" id="<?php echo "NC11";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Jahe Teh";?></strong>
		</div>
		<div class="product-price"><?php echo "8K";?></div>

		<input type="button" id="add_<?php echo "NC11";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC11";?>','<?php echo "Jahe Teh";?>','<?php echo "8";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi sop ayam.jpg" id="<?php echo "NC12";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Jahe Susu";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "NC12";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "NC12";?>','<?php echo "Jahe Susu";?>','<?php echo "10";?>')" />
	</div>
<br>
<br>
<!-- Jus Buah -->
<div id="jusbuah" class="txt-heading">Jus Buah</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa rebus.jpg" id="<?php echo "JB1";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Avocado";?></strong>
		</div>
		<div class="product-price"><?php echo "16K";?></div>

		<input type="button" id="add_<?php echo "JB1";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "JB1";?>','<?php echo "Avocado";?>','<?php echo "15";?>')" />

	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/bakmi jawa goreng.jpg" id="<?php echo "JB2";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Mango";?></strong>
		</div>
		<div class="product-price"><?php echo "15K";?></div>

		<input type="button" id="add_<?php echo "JB2";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "JB2";?>','<?php echo "Mango";?>','<?php echo "15";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab telur.jpeg" id="<?php echo "JB3";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Melon";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "JB3";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "JB3";?>','<?php echo "Melon";?>','<?php echo "10";?>')" />
	</div>
	<div class="product-item">
		<div class="product-image">
			<img src="data/makananberat/nasi goreng arab sosis.jpg" id="<?php echo "JB4";?>"
				class="product-img">
		</div>
		<div>
			<strong><?php echo "Guava";?></strong>
		</div>
		<div class="product-price"><?php echo "10K";?></div>

		<input type="button" id="add_<?php echo "JB4";?>"
			value="Add to cart" class="btnAddAction"
			onClick="cartAction('add', '<?php echo "MB4";?>','<?php echo "Guava";?>','<?php echo "10";?>')" />
	</div>



<br>
<br>
<br>

</div>
      		 </div>
			<div id="checkout" class="billing-details">
		            <?php require_once './view/billing-details.php'; ?>
			</div>

			<div class="cart-error-message" id="cart-error-message">Keranjang tidak boleh kosong untuk checkout</div>
			<div id="shopping-cart" tabindex="1">
				<div id="tbl-cart">
					<div id="txt-heading">
						<div id="cart-heading">Keranjang Belanja Anda</div>
						<div id="close"></div>
					</div>
					<div id="cart-item">
        				<?php require_once './view/shopping-cart.php'; ?>
           			 </div>
				</div>
			</div>

			<div class="payment-details">
				<div class="payment-details-heading">Rincian Pembayaran</div>
				<div class="row">
					<div class="inline-block">
						<div>
							<input class="bank-transfer" type="radio" checked="checked"
								value="Direct bank transfer" name="direct-bank-transfer">Transfer Bank Langsung
						</div>

						<div class="info-label">Cantumkan nomor pesanan Anda saat melakukan transfer bank. Pesanan Anda akan dikirim setelah jumlah dikreditkan kepada kami.</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div id="inline-block">
					<input type="submit" class="checkout" name="checkout-btn"
						id="checkout-btn" value="Checkout">
				</div>
			</div>
		</form>
	</div>
	<script src="./assets/js/cart.js"></script>
	<script>
	
function checkout() {

	var valid = true;
	
	$("#first-name").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#shopping-cart").removeClass("error-field");
	$("#cart-error-message").hide();
	
	var firstName = $("#first-name").val();
	var cartItem = $("#cart-item-count").val();
	var email = $("#email").val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#first-name-info").html("").hide();
	$("#email-info").html("").hide();

	if (firstName.trim() == "") {
		$("#first-name-info").html("required.").css("color", "#ee0000").show();
		$("#first-name").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if(cartItem == 0){
		$("#cart-error-message").show();
		$("#shopping-cart").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;	
}
</script>
</BODY>
</HTML>