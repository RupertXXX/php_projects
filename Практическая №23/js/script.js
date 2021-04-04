let resName;
let resValue;
let firstResValue;
let secondResValue

const getList = () => {
	$.ajax({
		url: 'nameAction.php',
		type: 'GET',
		success: (res) => {
			resName = res;
			resName = JSON.parse(res);
			setNames(resName);
		}
	});
	$.ajax({
		url: 'valueAction.php',
		type: 'GET',
		success: (res) => {
			resValue = res;
			resValue = JSON.parse(res);
			firstResValue = resValue[0][0];
			secondResValue = resValue[0][0];
		}
	});
}

const setNames = (names) => {
	for(let i = 0; i < names.length; i++){
		let option_is = "<option>" + names[i][0] + "</option>";
		$('#first_sel').append(option_is);
		$('#second_sel').append(option_is);
	}
}

let firstValue = 1;
let secondValue = 1;
let firstName = 0;
let secondName = 0;
let cross;

const calculate = (el) => {

	if(el.id == "first_tex"){
		firstResValue = parseInt(firstResValue, 10);
		secondResValue = parseInt(secondResValue, 10);
		firstValue = el.value;
		cross = firstValue * firstResValue;
		secondValue = cross / secondResValue;
		secondValue = rounded(secondValue);
		$('#second_tex').val(secondValue);
	}
	else if(el.id == "second_tex"){
		firstResValue = parseInt(firstResValue, 10);
		secondResValue = parseInt(secondResValue, 10);
		secondValue = el.value;
		cross = secondValue * secondResValue;
		firstValue = cross / firstResValue;
		firstValue = rounded(firstValue);
		$('#first_tex').val(firstValue);
	}
	else if(el.id == "first_sel"){
		firstName = el.selectedIndex;
		firstResValue = resValue[firstName][0];
		firstResValue = parseInt(firstResValue, 10);
		secondResValue = parseInt(secondResValue, 10);
		cross = firstValue * firstResValue;
		secondValue = cross / secondResValue;
		secondValue = rounded(secondValue);
		$('#second_tex').val(secondValue);
	}
	else if(el.id == "second_sel"){
		secondName = el.selectedIndex;
		secondResValue = resValue[secondName][0];
		firstResValue = parseInt(firstResValue, 10);
		secondResValue = parseInt(secondResValue, 10);
		cross = secondValue * secondResValue;
		firstValue = cross / firstResValue;
		firstValue = rounded(firstValue);
		$('#first_tex').val(firstValue);
	}
}

const rounded = (number) => {
    return +number.toFixed(4);
}