$(document).ready(function () {
    var url = window.location.href;
    $(`.nav-item .nav-link[href="${url}"]`).addClass("active")
})
let sizeVariations = []
function validateTagInp(e) {
    let error = false;
    if (e.key === "Enter" || e.type == "click") {
        e.preventDefault();
        let wrapper = $(this).parents(".input-field")
        $(wrapper).find(".tag-inp").each(function () {
            if ($(this).val() == "") {
                error = true;
                alert($(this).data("error"))
            }
            if (!this.validity.valid) {
                error = true;
                alert($(this).data("error"), "danger")
                // Add your error handling or display logic here
            }
        })
        if (!error) {
            let temp = {
                size: $(wrapper).find(".tag-inp[data-name='size']").val(),
                price: $(wrapper).find(".tag-inp[data-name='price']").val()
            }
            sizeVariations.push(temp)
            console.log(sizeVariations)
            $(wrapper).find(".tag-inp").val("")
            $(wrapper).find(".tags-wrapper").html("")
            
            sizeVariations.forEach(item => {
                $(wrapper).find(".tags-wrapper").append(`<li data-tag='${JSON.stringify(item)}'>${item.size} (${item.price}$)<button type="button" onclick="removeTag(this)"><i class="fa-regular fa-xmark"></i></button></li>`)
            })            
            $("#product-sizes").val(JSON.stringify(sizeVariations))
        }
    }
}
$(document).ready(function(){
    Coloris({
        el: ".custom-color-picker",
        swatches: [
          '#264653',
          '#2a9d8f',
          '#e9c46a',
          '#f4a261',
          '#e76f51',
          '#d62828',
          '#023e8a',
          '#0077b6',
          '#0096c7',
          '#00b4d8',
          '#48cae4',
        ]
    });
})

function removeTag(btn) {
    let temp = $(btn).parent().data("tag")
    sizeVariations.forEach((item, ind) => {
        if (item.size == temp.size && temp.price == item.price) {
            sizeVariations.splice(ind, 1)
        }
    })
    $(btn).parents("li").remove()
    $("#product-sizes").val(JSON.stringify(sizeVariations))
}
$(document).ready(function () {
    $(".tag-btn").click(validateTagInp)
    $(".tag-inp").keypress(validateTagInp)
})



$(".thumbnail-upload").change(function () {
    let input = this;
    let img = new Image;
    $(this).next().html(img)
    $(img).addClass("img-fluid thumbnail-preview")
    for (var i = 0; i < input.files.length; i++) {
        if (input.files[i]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(img).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }
});
$(".pdf-upload").change(function () {
    debugger
    let input = this;
    let doc = document.createElement("object");
    $(this).next().html(doc)
    $(doc).addClass("img-fluid pdf-preview")
    for (var i = 0; i < input.files.length; i++) {
        if (input.files[i]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(doc).attr('data', e.target.result);
            }
            reader.readAsDataURL(input.files[i]);
        }
    }
});
$(".toggle-password").click(function(){
    if($(this).siblings("input").attr("type") == "password"){
        $(this).children().removeClass("fa-eye").addClass("fa-eye-slash")
        $(this).siblings("input").attr("type","text")
    }else{
        $(this).children().addClass("fa-eye").removeClass("fa-eye-slash")
        $(this).siblings("input").attr("type","password")
    }
})
function alert(message, type) {
    var alertPlaceholder = $(".alert-wrapper")
    var wrapper = document.createElement("div")
    wrapper.innerHTML = '<div class="alert alert-' + type + ' alert-dismissible" role="alert">' + message + '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>'

    alertPlaceholder.append(wrapper)
    setTimeout(() => {
        $(wrapper).remove()
    }, 5000);
}

(function ($) {
    let classes = ['outline-primary', 'outline-dark', 'outline-danger', 'info', 'secondary'];
    let selects = $('select[multiple]');
    selects.each(function (i, e) {
        let randomClass = classes[Math.floor(Math.random() * classes.length)];
        $(this).bsSelectDrop({
            // btnClass: 'btn btn-'+classes[i],
            btnClass: 'select-multiple',
            btnWidth: 'auto',
            darkMenu: false,
            showSelectionAsList: false,
            showActionMenu: true,
            // showSelectedText: (count, total) => {return `${count} von ${total} Städte ausgewählt`}
        });
    })
}(jQuery));
