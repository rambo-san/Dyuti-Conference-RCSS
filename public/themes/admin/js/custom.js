// Create Cookie
function createCookie(name, value, days) {
    value = btoa(value);
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        var expires = "; expires=" + date.toGMTString();
    } else var expires = "";
    document.cookie = name + "=" + value + expires + "; path=/";
}


function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0)
            return atob(c.substring(nameEQ.length, c.length));
    }
    return null;
}

// Delete Cookie
function eraseCookie(name) {
    createCookie(name, "", -1);
}

function loader(type) {
    if (type) {
        $("#loaderModal").show();
    } else {
        $("#loaderModal").hide();
    }
}
// Error Handling
function errorHandler(data) {
    var html = [];

    if (data.responseJSON.errors !== undefined) {
        var errors = data.responseJSON.errors;
        var dot = false;
        if (Object.keys(errors).length > 1) {
            dot = true;
        }
        $.each(errors, function(index, value) {
            if (dot) {
                value = "&bull; " + value;
            }
            html.push(value);
        });
    } else {
        html.push("Something went wrong.");
    }

    displayFailMsg(html.join("<br/>"));
}