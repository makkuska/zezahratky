window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};

function check_if_capcha_is_filled (e) {
    if(allowSubmit) return true;
    e.preventDefault();
    alert('Fill in the capcha!');
}
