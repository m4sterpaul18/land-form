<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-5/css/bootstrap.min.css">
	<style type="text/css">
		@media only screen and (max-width: 485px){
			label{
				font-size: 3vw;
			}
		}
		.memoranda{
			padding:1rem;
			border: 2px solid white;
		}
		.wrapper{
			border:1px solid white;
			padding: 2rem;
		}
	</style>
	<title>Land Form</title>

</head>
<body>
<div class="container p-5 my-5 text-light" style="border:2px solid black; border-radius:20px; background-color: #0c2723">
	<h4 class="text-center my-3">
	REAL PROPERTY FIELD APPRAISAL & ASSESSMENT SHEET - 
	</h4>
	<h1 class="text-center my-3" style="color:#29c3ad!important;">LAND / OTHER IMPROVEMENTS</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<!----form-1(Personal Information) -->
			<div class="row wrapper">
				<div class="form-group mt-3 col-md-6">
					<label>ARP NO.</label>
					<input class="form-control" type="text" name="arp-no">
				</div>
				<div class="form-group mt-3 col-md-6">
					<label>PIN</label>
					<input class="form-control" type="text" name="pin">
				</div>
				<div class="form-group col-md-2">
					<label>Title</label>
					<select class="form-control" name="title">
						<option value="OCT">OCT</option>
						<option value="TCT">TCT</option>
						<option value="CLOA">CLOA</option>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label>No.</label>
					<input class="form-control" type="text" name="title-no">
				</div>
				<div class="form-group col-md-2">
					<label>Dated</label>
					<input class="form-control" type="date" name="Dated">
				</div>
				<div class="form-group col-md-2">
					<label>Survey NO.</label>
					<input class="form-control" type="number" name="survey-no">
				</div>
				<div class="form-group col-md-2">
					<label>LOT NO.</label>
					<input class="form-control" type="number" name="lot-no">
				</div>
				<div class="form-group col-md-2">
					<label>Blk</label>
					<input class="form-control" type="number" name="blk">
				</div>
			</div>
			<div class="row wrapper">
				<div class="form-group col-md-6">
					<label>Owner</label>
					<input class="form-control" type="text" name="owner">
				</div>
				<div class="form-group col-md-6">
					<label>TIN:</label>
					<input class="form-control" type="text" name="owner">
				</div>
				<div class="form-group">
					<label>Address</label>
					<input class="form-control" type="text" name="address">
				</div>
				<div class="form-group">
					<label>Tel No.</label>
					<input class="form-control" type="text" name="tel-No">
				</div>
			</div>
			<div class="row wrapper">
				<div class="form-group col-md-6">
					<label>Administrator/Beneficial User</label>
					<input class="form-control" type="text" name="beneficial-user">
				</div>
				<div class="form-group col-md-6">
					<label>TIN:</label>
					<input class="form-control" type="text" name="owner">
				</div>
				<div class="form-group col-md-12">
					<label>Address</label>
					<input class="form-control" type="text" name="address">
				</div>
				<div class="form-group">
					<label>Tel No.</label>
					<input class="form-control" type="text" name="tel-No-admin">
				</div>
			</div>

			<!-- property location -->
			<h3 class="mt-5" style="color:#29c3ad!important;">Propery Location</h3>
			<div class="row wrapper">
				<div class="form-group col-md-6">
					<label>No./Street</label>
					<input class="form-control" type="text" name="no./street">
				</div>
				<div class="form-group col-md-6">
					<label>Brgy/District</label>
					<input class="form-control" type="text" name="brgy/district">
				</div>
				<div class="jumbotron col-md-6">
					<label>Municipality</label>
					<input class="form-control" type="text" name="municipality">
				</div>
				<div class="jumbotron col-md-6">
					<label>Province/City</label>
					<input class="form-control" type="text" name="province/city">
				</div>
			</div>

			<!-- property boundaries -->
			<h3 class="mt-5" style="color:#29c3ad!important;">Property Boundaries</h3>
			<div class="row wrapper">
				<div class="col-md-6">
					<div class="form-group col-md-12">
						<label>North</label>
						<input class="form-control" type="text" name="north">
					</div>
					<div class="form-group col-md-12">
						<label>East</label>
						<input class="form-control" type="text" name="east">
					</div>
					<div class="form-group col-md-12">
						<label>South</label>
						<input class="form-control" type="text" name="south">
					</div>
					<div class="form-group col-md-12">
						<label>West</label>
						<input class="form-control" type="text" name="west">
					</div>
				</div>
				<div class="col-md-6 wrapper">
					<p class="lead">Land Sketch</p>
					<div class="form-group col-md-12">
						<input class="form-control" type="file" name="sketch">
					</div>
				</div>
			</div>

			<!-- Land Appraisal -->
			<h3 class="mt-5" style="color:#29c3ad!important;">Land Appraisal</h3>
			<div class="btn-group">
				<button id="addLandAppraisal" type="button" class="btn btn-success my-3 btn-md">Add</button>
				<button id="deleteLandAppraisal" type="button" class="btn btn-danger my-3 btn-md">Delete</button>
			</div>

			<div class="wrapper">
				<div id="appaisal-container">
					<div class="row">
						<div class="form-group col-md-3">
							<label>Classification</label>
							<select name="classification" class="form-select">
								<option selected value="">Choose</option>
								<option value="Agricultural">Agricultural</option>
								<option value="Residential">Residential</option>
								<option value="Commercial">Commercial</option>
							</select>
						</div>
						<div class="form-group col-md-3">
							<label>Sub-classification</label>
							<select name="sub-classification" class="form-select">
								<!-- not sure yet what to put -->
								<option selected value="">Choose</option>
								<option value="1st">1st</option>
								<option value="2nd">2nd</option>
								<option value="3rd">3rd</option>
								<option value="4th">4th</option>
								
							</select>
						</div>
						<div class="form-group col-md-2">
							<label>Area(sqm)</label>
							<input class="form-control" type="number" min="0" name="area">
						</div>
						<div class="form-group col-md-2">
							<label>Unit Value</label>
							<input class="form-control" type="number" min="0" name="unit-value">
						</div>
						<div class="form-group col-md-2">
							<label>Base Market Value</label>
							<input class="form-control" type="number" min="0" name="appraisal-base-market-value" readonly>
						</div>
					</div>
				</div>
				<div class="col-md-3 mt-3">
						<h5>Total Value (PHP)</h5>
					<input class="form-control" type="number" id="total-appraisal" readonly>
				</div>
				<button id="calculate-land-appraisal" type="button" class="btn btn-success my-3" style="width:100%;">Calculate</button>
			</div>
				
			


			<!-- Other Improvements -->
			<h3 class="mt-5" style="color:#29c3ad!important;">Other Improvements</h3>
			<div class="btn-group">
				<button id="addOtherImprovements" type="button" class="btn btn-success my-3">Add</button>
				<button id="deleteOtherImprovements" type="button" class="btn btn-danger my-3">Delete</button>
			</div>
			<div class="wrapper">
				<div id="improvements-container">
					<div class="row">
						<div class="form-group col-md-6">
							<label>Kind</label>
							<select name="kind" class="form-select">
								<!-- mga cocoland? -->
								<option selected value="">Choose</option>
								<option value="Abaca">Abaca(per group)</option>
								<option value="Atis">Atis</option>
								<option value="Avocado">Avocado</option>
								<option value="Bamboo">Bamboo (tangnan,patong,per clump)</option>
								<option value="Bagacay,Cayali">Bagacay, Cayali (per clump)</option>
								<option value="Banana">Banana (per group)</option>
								<option value="Cacao">Cacao</option>
								<option value="Caimito">Caimito</option>
								<option value="Cahil">Cahil (Orange)</option>
								<option value="Calamansi">Calamansi (Lemon)</option>
								<option value="Camachile">Camachile</option>
								<option value="Camote">Camote(per hill)</option>
								<option value="Cassava">Cassava(per hill)</option>
								<option value="Chico">Chico</option>
								<option value="Citrus">Citrus(Suha)</option>
								<option value="Coconut-tree">Coconut Tree(bearing or productive)</option>
								<option value="Coffee">Coffee</option>
								<option value="Guyabano">Guyabano</option>
								<option value="Gabi">Gabi</option>
								<option value="Igot/Malaigang">Igot or Malaigang</option>
								<option value="Jackfruit">Jackfruit(Langka)</option>
								<option value="Lansones">Lansones</option>
								<option value="Mabolo">Mabolo</option>
								<option value="Macopa">Macopa</option>
								<option value="Mango">Mango</option>
								<option value="Nipa">Nipa(per hill)</option>
								<option value="Palawan">Palawan(per hill)</option>
								<option value="Pili">Pili</option>
								<option value="Pineapple">Pineapple</option>
								<option value="Santol">Santol</option>
								<option value="Tambis">Tambis</option>
								<option value="Tamarindo">Tamarindo</option>
								<option value="Molave,Narra,Mohogany,Gemelina,Acacia,Balite">Molave,Narra,Mohogany,Gemelina,Acacia,Balite (10 inches diameter)</option>
								<option value="Other-Trees">Other Trees (Ornamental)</option>
							</select>
						</div>
						<div class="form-group col-md-2">
							<label>Total Number</label>
							<input class="form-control" type="number" name="total-number-improvement" min="0">
						</div>
						<div class="form-group col-md-2">
							<label>Unit Value</label>
							<input class="form-control" type="number" name="unit-value-improvement" min="0">
						</div>
						<div class="form-group col-md-2">
							<label>Base Market Value</label>
							<input class="form-control" type="number" name="base-value-improvement" min="0" readonly>
						</div>
					</div>
				</div>
				
				<div class="col-md-3 mt-3">
					<h5>Total Value (PHP)</h5>
					<input class="form-control" type="number" id="total-improvements" readonly>
				</div>
				<button type="button" id="calculate-improvements" class="btn btn-success btn-block my-3" style="width: 100%">Calculate</button>
			</div>

			<!-- Market Value -->
			<h3 class="mt-5" style="color:#29c3ad!important;">Market Value</h3>
			<div class="row wrapper">
				<div class="form-group col-md-4">
					<label>Base Market Value</label>
					<input class="form-control" type="number" name="" min="0">
				</div>
				<div class="form-group col-md-2">
					<label>Adjustment Factors</label>
					<select name="adjustment-factors" class="form-select">
						<option selected value="">Choose</option>
						<option value="">Agricultural</option>
						<option value="">Residential</option>
						<option value="">Others</option>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label>Adjustment (%)</label>
					<input class="form-control" type="number" name="adjustment" min="0">
				</div>
				<div class="form-group col-md-2	">
					<label>Value Adjustment</label>
					<input class="form-control" type="number" name="value-adjustment" min="0">
				</div>
				<div class="form-group col-md-2">
					<label>Market Value</label>
					<input class="form-control" type="number" name="market-value" min="0">
				</div>
			</div>

			<!-- Property Assessment -->
			<h3 class="mt-5" style="color:#29c3ad!important;">Property Assessment</h3>
			<div class="row wrapper">
				<div class="form-group col-md-3">
					<label>Actual Use</label>
					<div class="form-group">
						<select name="actual-use" class="form-select">
							<option selected value="">Choose</option>
							<option value="Agricultural">Agricultural</option>
							<option value="Residential">Residential</option>
							<option value="Commercial">Commercial</option>
						</select>
					</div>
				</div>
				<div class="form-group col-md-3">
					<label>Market Value</label>
					<input class="form-control" type="number" name="">
				</div>
				<div class="form-group col-md-3">
					<label>Assesment Level</label>
					<input class="form-control" type="number" name="">
				</div>
				<div class="form-group col-md-3">
					<label>Assessed Value</label>
					<input class="form-control" type="number" name="assessed-value">
				</div>
				<div class="col-md-6">
					<div class="form-check mt-5">
	  					<input class="form-check-input" value="taxable" type="radio" name="tax">
	  					<label class="form-check-label" for="tax">
					   	Taxable
					  	</label>
					</div>
					<div class="form-check">
	  					<input class="form-check-input" value="excempt" type="radio" name="tax">
	  					<label class="form-check-label" for="tax">
					   	Excempt
					  	</label>
					</div>
				</div>
				<div class="col-md-6">
					<p class="lead mt-5">Effectivity of Assessment/Reassessment<p>
					<div class="row">
						<div class="form-group col-md-6">
							<label>Quarter</label>
							<input class="form-control" type="text" name="quarter">
						</div>
						<div class="form-group col-md-6">
							<label>Year</label>
							<input class="form-control" type="number" name="year">
						</div>
					</div>
				</div>
			</div>

			<!-- Appraised and assessed by -->
			<h3 class="mt-5" style="color:#29c3ad!important;">Appraised/Assessed By</h3>
			<div class="row wrapper">
				<div class="col-md-6">
					<div class="row">
						<p class="lead">Approval:</p>
						<div class="form-group col-md-6">
							<label>Name</label>
							<input class="form-control" type="text" name="approval">
						</div>
						<div class="form-group col-md-6">
							<label>Date</label>
							<input class="form-control" type="date" name="date-approval">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<p class="lead">Recommending:</p>
						<div class="form-group col-md-6">
							<label>Name</label>
							<input class="form-control" type="text" name="recommending">
						</div>
						<div class="form-group col-md-6">
							<label>Date</label>
							<input class="form-control" type="date" name="recommending-date">
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<p class="lead text-center mt-5">Approved By:</p>
						<div class="form-group col-md-6">
							<label>Name</label>
							<input class="form-control" type="text" name="recommending">
						</div>
						<div class="form-group col-md-6">
							<label>Date</label>
							<input class="form-control" type="date" name="recommending-date">
						</div>
					</div>
				</div>
			</div>

			<!-- memoranda -->
			<h3 class="mt-5" style="color:#29c3ad!important;">Memoranda</h3>
			<div class="form-group">
				<textarea class="form-control" rows="3" name="memoranda"></textarea>
			</div>

			<!-- date of entry in the record of assessment -->
			<div class="row">
				<p class="lead mt-5">Date of entry in the record of assessment:</p>
				<div class="form-group col-md-6">
					<input class="form-control" type="text" name="">
				</div>
				<div class="form-group col-md-6">
					<input class="form-control" type="text" name="" placeholder="Name">
				</div>
			</div>

			<!-- record of superseded assessment -->
			<h3 class="mt-5" style="color:#29c3ad!important;">RECORD OF SUPERSEDED ASSESSMENT</h3>
			<div class="row wrapper">
				<div class="form-group col-md-12">
					<label>PIN</label>
					<input class="form-control" type="number" name="pin" min="0">
				</div>
				<div class="form-group col-md-6">
					<label>ARP NO.</label>
					<input class="form-control" type="number" name="arp-no" min="0">
				</div>
				<div class="form-group col-md-6">
					<label>TD NO.</label>
					<input class="form-control" type="number" name="td-no" min="0">
				</div>
				<div class="form-group col-md-12">
					<label>Total Assessed Value</label>
					<input class="form-control" type="number" name="total-assessed-value" min="0">
				</div>
				<div class="form-group col-md-12">
					<label>Previous Owner</label>
					<input class="form-control" type="text" name="previous-owner" min="0">
				</div>
				<div class="form-group col-md-12">
					<label>Effectivity of Assessment</label>
					<input class="form-control" type="number" name="effectivity" min="0">
				</div>
				<div class="form-group col-md-12">
					<label>AR Page No.</label>
					<input class="form-control" type="number" name="ar-page-no" min="0">
				</div>
				<div class="form-group col-md-6 mt-5">
					<label>Recording Person</label>
					<input class="form-control" type="text" name="recording-person">
				</div>
				<div class="form-group col-md-6 mt-5">
					<label>Date</label>
					<input class="form-control" type="date" name="" min="0">
				</div>
				<button id="submit" type="submit" class="btn btn-success btn-block mt-5">Submit</button>
			</div>
	</form>
</div>
<script type="text/javascript" src="assets/js/jquery-3.6.0.js"></script>
<script type="text/javascript" src="assets/bootstrap-5/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="assets/sweet-alert/sweet-alert.js"></script>
<script type="text/javascript" src="assets/js/land.js"></script>
</body>
</html>