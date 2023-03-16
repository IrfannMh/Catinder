function show() {
    document.getElementById("sidebar-filter").style.width = "350px";
    document.getElementById("menu-filter").style.marginLeft = "100%";
}

function hide() {
    document.getElementById("sidebar-filter").style.width = "0";
    document.getElementById("menu-filter").style.marginLeft= "0";
}
function skip(){
    alert("Skipped!");
}

function love(){
    alert("Loved!");
}

function sent(){
    alert("Check your Email!");
}

function cancel(){
    alert("Cancelled!");
}

function added(){
    alert("Added!");
}

function edited(){
    alert("Edited!");
}
function konfirmasi(){
    confirm("You're about to logout?")
}

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(150)
                .height(200);
        };
        reader.readAsDataURL(input.files[0]);
    }
}