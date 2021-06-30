$(function(){
	// all inputs area required
	$('input, select').attr('required','');
	
	// form validation
	$('input,select').on('click',function(){
		$('input,select').each(function(){
		    if($(this).val() == ''){
		        $(this).css("border","1px solid red");
		    }
		    else{
		    	$(this).css("border","1px solid green");
			}
		})
	});

	// confirm submition
	$('#submit').on('click',function(){
		if(!$('input,select').val()){
			Swal.fire('Please finish all inputs','','warning');
		}
		else{
			Swal.fire({
			title:'Do you want to submit?',
			showCancelButton:true,
			confirmButtonText:'Submit'
			}).then((result)=>{
				if(result.isConfirmed){
					Swal.fire('The form is submitted','','success');
					return true;
				}
			});
		}
		
	});


/////////////////////////////////////////////////////////

	//update kind value
	$('select[name="kind"]').on('click',function(){
		const kind = $(this).val();
		kindUnitValue(kind);
	});

//////////////////////////////////////////////////////////////////////////////////////////////////////
	let target = $('#appaisal-container');

	//add land appraisal
	$('#addLandAppraisal').on('click',function(){
		addLandAppraisal();
	});
	//remove land appraisal
	$('#deleteLandAppraisal').on('click',function(){
		removeLandAppraisal();
	});

	//auto calculate
	$('input[name="area"],input[name="unit-value"]').change(function(){
    	appraisalBaseMarketValue();
	});

	$('#calculate-land-appraisal').on('click',function(){
		let total = 0;
		$('input[name="appraisal-base-market-value"]').each(function(){
			total += parseFloat($(this).val(),10);
		})
		$('input[id="total-appraisal"]').attr('value',total);
	})

	function appraisalBaseMarketValue(){
		let area = $('input[name="area"]').val();
		let unitValue = $('input[name="unit-value"]').val();
		let marketValue = $('input[name="appraisal-base-market-value"]').attr('value',area*unitValue);
	}

	//add land appraisal input fields
	function addLandAppraisal(){
		target.append(
					`<div class="row">
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
				</div>`);
	}

	function removeLandAppraisal(){
		if(target.children().length > 0){
			target.children().last().remove();
		}
	}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	let improvementsTarget = $('#improvements-container');

	//add other improvements
	$('#addOtherImprovements').on('click',function(){
		addOtherImprovements();
	});
	$('#deleteOtherImprovements').on('click',function(){
		removeOtherImprovements();
	});

	$('input[name="total-number-improvement"],input[name="unit-value-improvement"]').change(function(){
    	improvementsBaseMarketValue();
	});

	function improvementsBaseMarketValue(){
		let totalNumber = $('input[name="total-number-improvement"]').val();
		let unitValue = $('input[name="unit-value-improvement"]').val();
		let marketValue = $('input[name="base-value-improvement"]').attr('value',totalNumber*unitValue);
	}

	function addOtherImprovements(){
		improvementsTarget.append(`<div class="row">
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
				</div>`);
	}

	function removeOtherImprovements(){
		if(improvementsTarget.children().length > 0){
			improvementsTarget.children().last().remove();
		}
	}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//function for kind unit value
	function kindUnitValue(kind){
		const targetunit = $('input[name="unit-value-improvement"]');
		switch(kind){
			case 'Abaca':
				targetunit.attr('value',96.28);
				break;
			case 'Atis':
				targetunit.attr('value',80.45);
				break;
			case 'Avocado':
				targetunit.attr('value',192.56);
				break;
			case 'Bamboo':
				targetunit.attr('value',127.93);
				break;
			case 'Bagacay,Cayali':
				targetunit.attr('value',112.11);
				break;
			case 'Banana':
				targetunit.attr('value',127.93);
				break;
			case 'Cacao':
				targetunit.attr('value',159.59);
				break;
			case 'Caimito':
				targetunit.attr('value',159.59);
				break;
			case 'Cahil':
				targetunit.attr('value',129.93);
				break;
			case 'Calamansi':
				targetunit.attr('value',159.59);
				break;
			case 'Camachile':
				targetunit.attr('value',80.45);
				break;
			case 'Camote':
				targetunit.attr('value',7.91);
				break;
			case 'Cassava':
				targetunit.attr('value',5.28);
				break;
			case 'Chico':
				targetunit.attr('value',96.28);
				break;
			case 'Citrus':
				targetunit.attr('value',127.93);
				break;
			case 'Coconut-tree':
				targetunit.attr('value',240.04);
				break;
			case 'Coffee':
				targetunit.attr('value',159.59);
				break;
			case 'Guyabano':
				targetunit.attr('value',80.45);
				break;
			case 'Gabi':
				targetunit.attr('value',9.23);
				break;
			case 'Igot/Malaigang':
				targetunit.attr('value',64.63);
				break;
			case 'Jackfruit':
				targetunit.attr('value',143.76);
				break;
			case 'Lansones':
				targetunit.attr('value',192.56);
				break;
			case 'Mabolo':
				targetunit.attr('value',96.28);
				break;
			case 'Macopa':
				targetunit.attr('value',96.28);
				break;
			case 'Mango':
				targetunit.attr('value',480.08);
				break;
			case 'Nipa':
				targetunit.attr('value',64.63);
				break;
			case 'Palawan':
				targetunit.attr('value',9.23);
				break;
			case 'Pili':
				targetunit.attr('value',192.56);
				break;
			case 'Pineapple':
				targetunit.attr('value',13.19);
				break;
			case 'Santol':
				targetunit.attr('value',208.38);
				break;
			case 'Tambis':
				targetunit.attr('value',96.28);
				break;
			case 'Tamarindo':
				targetunit.attr('value',47.48);
				break;
			case 'Molave,Narra,Mohogany,Gemelina,Acacia,Balite':
				targetunit.attr('value',1978.35);
				break;
			case 'Other-Trees':
				targetunit.attr('value',131.89);
				break;
			default:
				// Swal.fire('Choose kinds');
		}
	}

})


