$(document).ready(function () {

    // plan section for front-page
    $(".owl-carousel").owlCarousel({
        items: 3,
        autoWidth: true,
        margin: 30
    });


    $('#send').submit((e) => {

        // 
        e.preventDefault()

        let data = $('#send').serialize()
        console.log(data)
        $.post(send_form, {
            action: "send_form",
            value: data,
            contentType: "text/xml;charset=utf-8",
        }, function (data) {
            $('#request .wrapper').addClass("success").html(
                `<h2 class="sectionHeading">Ваше сообщение отправлено! Спасибо</h2>${data}`
            )
        })
        /*
        $.ajax({
            type: "POST",
            data: data,
            dataType: "json",
            success: function () {
                // Вывод успеха
                $('#request .wrapper').addClass("success").html(
                    '<h2 class="sectionHeading">Ваше сообщение отправлено! Спасибо</h2>'
                )
            },
            error: function () {
                alert('error')
            }
        }, send_form)
        console.log(e)
        */

    })

    $("#request label").click((e) => {

        let target = e.target
        let id = target.getAttribute('for')

        let targetInput = $(`#request input[id=${id}]`)

        if ($(this).hasClass("active")) {
            return
        } else {

            (async () => {
                await $("#request label[class='active']").removeClass("active")
                e.target.classList.add("active")
            })()

        }

    })
})