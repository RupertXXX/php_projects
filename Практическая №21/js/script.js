const searchUser = (el) => { 
    let str = $('#inputlog').val().trim();
    if(str.length > 2) {
        let arr = [];
        let select = document.querySelectorAll('.check_item');
        select.forEach(function(item){
            arr.push(item.value);
        });
        $.ajax({
            url: 'action.php',
            type: 'POST',
            data: { login: str, ids: arr },
            success: (res) => {
                $('#users').html(res);
            }
        });
    }else {
        $('#users').html('');
    }
}
const addCheck = (id, login) =>{
    let str_input = "<div id='input_check" + id + "'><input type = 'checkbox' class='check_item' name ='perm[]' id = 'p" + id + "' value = '" + id + "' checked = 'checked' onchange = 'delCheck("+id+")' ><label for='p" + id + "'>" + login + "</label><br></div>";
    $('#permission').append(str_input);
    $('#users').html('');
}

const delCheck = (id) => {
    $('#input_check' + id).remove();
}

$(document).ready(() => {
    $(document).click((el) => {
		let div = $('#users');
			if (!div.is(el.target) && div.has(el.target).length === 0) {
				$('#users').html('');
		}
	});
});

