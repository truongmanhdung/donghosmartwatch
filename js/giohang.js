$(document).ready(function () {
    $("input.input-qty").each(function () {
        var $this = $(this),
        qty = $this.parent().find(".is-form"),
        min = Number($this.attr("min")),
        max = Number($this.attr("max"));
        if (min == 0) {
        var d = 0;
        } else d = min;
        $(qty).on("click", function () {
        if ($(this).hasClass("minus")) {
            if (d > min) d += -1;
        } else if ($(this).hasClass("plus")) {
            var x = Number($this.val()) + 1;
            if (x <= max) d += 1;
        }
        $this.attr("value", d).val(d)
        var a = $('input.input-qty').val();
        });
    });
    var form = new Validator(".register-form");
    var form = new Validator(".register-form2");
    form.onSubmit = function GetData(formData) {
        var a = new Array(formData);
        console.log(a);
    };
    var nam = document.getElementById("nam");
    var nu = document.getElementById("nu");
    var submit = document.getElementById("submit");
    var message1 = document.getElementById("form-message1");
    submit.onclick = function (e) {
        if (nam.checked == false && nu.checked == false) {
        message1.innerHTML = "Vui lòng chọn giới tính";
        message1.style.color = "red";
        } else {
        message1.innerHTML = "";
        message1.style.color = "white";
        }
    };
    var name = document.querySelector('.gio-hang-content-item-name');
    var img = document.querySelector('.gio-hang-img img');
    var gia = document.querySelector('.gh-gia-cu');
    var thanhtien = document.querySelector('.gia-moi');
    name.innerHTML = sessionStorage.getItem('namedung');
    img.src = sessionStorage.getItem('imgdung');
    gia.innerHTML = sessionStorage.getItem('giadung');
    thanhtien.innerHTML = sessionStorage.getItem('giadung')
});