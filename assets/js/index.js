$('.regNewUser_btn').click(function(e) {

    e.preventDefault();


    let name = $('input[name = "name"]').val(),
        lastName = $('input[name = "lastName"]').val(),
        date = $('input[name = "date"]').val(),
        city = $('input[name = "city"]').val(),
        sex = $('select[name = "sex"]').val();

    $.ajax({
        url: 'classes/include.php',
        type: 'POST',
        dataType: 'json',
        data: {
            name: name,
            lastName: lastName,
            date: date,
            city: city,
            sex: sex
        },
        success: function (data) {

            if(data.status) {
                document.querySelector('.creation_form').reset();
                alert('Пользователь успешно создан!')
            }
            else {
                if(data.type === 1) {
                    alert('Заполните все поля!')
                    return;
                } else if (data.type === 2) {
                    alert('Такое имя уже существует')
                    return;
                }
               alert('Что-то пошло не так...')
            }

        }


    })
})

//delete User

$('.delete_btn').click(function(e) {

    e.preventDefault();


    let id = $('input[name = "id"]').val();

    $.ajax({
        url: 'classes/include.php',
        type: 'GET',
        dataType: 'text',
        data: {
            id:id
        },
        success: function (data){
        }
    } )
})