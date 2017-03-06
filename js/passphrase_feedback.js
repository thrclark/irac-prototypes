var typingTimer;                //timer identifier
var doneTypingInterval = 500;  //time after user stops typing in ms

$(document).ready(function () {
    // on keyup, start the countdown
    $("#NewPassphrase").keyup(function () {
        var pass = $(this).val();

        clearTimeout(typingTimer);
        typingTimer = setTimeout(function () { updateMeter(pass); }, doneTypingInterval);
    });

    // on keydown, clear the countdown
    $("#NewPassphrase").keydown(function() {
        clearTimeout(typingTimer);
    });

    $("#NewPassphrase").blur(function () {
        var pass = $(this).val();

        clearTimeout(typingTimer);
        typingTimer = setTimeout(function () { updateMeter(pass); }, doneTypingInterval);
    });
});

function updateMeter(pass) {
    // Check passphrase length, make sure there are at least 4 unique characters

    if (pass.length >= 15 && pass.length <= 127 && pass.match(/(.).*?((?!.*?\1).).*?((?!.*?\2).).*?((?!.*?\3).)/)) {
        $("#pass-length").removeClass("glyphicon-remove").removeClass("alert-danger").addClass("glyphicon-ok").addClass("alert-success");
    } else {
        $("#pass-length").removeClass("glyphicon-ok").removeClass("alert-success").addClass("glyphicon-remove").addClass("alert-danger");
    }

    // At least four words of 2+ letters each

    if (fourWords(pass)) {
        $("#pass-minwords").removeClass("glyphicon-remove").removeClass("alert-danger").addClass("glyphicon-ok").addClass("alert-success");
    } else {
        $("#pass-minwords").removeClass("glyphicon-ok").removeClass("alert-success").addClass("glyphicon-remove").addClass("alert-danger");
    }

    // Passphrase does not contain "@"

    if (pass.match(/^[^@]*$/)) {
        $("#pass-atsign").removeClass("glyphicon-remove").removeClass("alert-danger").addClass("glyphicon-ok").addClass("alert-success");
    } else {
        $("#pass-atsign").removeClass("glyphicon-ok").removeClass("alert-success").addClass("glyphicon-remove").addClass("alert-danger");
    }

    // Passphrase does not contain "#"

    if (pass.match(/^[^#]*$/)) {
        $("#pass-numsign").removeClass("glyphicon-remove").removeClass("alert-danger").addClass("glyphicon-ok").addClass("alert-success");
    } else {
        $("#pass-numsign").removeClass("glyphicon-ok").removeClass("alert-success").addClass("glyphicon-remove").addClass("alert-danger");
    }

    // Passphrase does not contain "<", ">", or double quote

    if (pass.match(/^[^>|<|"|@|#]*$/)) {
        $("#pass-symbols").removeClass("glyphicon-remove").removeClass("alert-danger").addClass("glyphicon-ok").addClass("alert-success");
    } else {
        $("#pass-symbols").removeClass("glyphicon-ok").removeClass("alert-success").addClass("glyphicon-remove").addClass("alert-danger");
    }

    // Passphrase does not contain name or username

    var firstName = $("#firstName").data('value').toLowerCase();
    var middleName = $("#middleName").data('value').toLowerCase();
    var lastName = $("#lastName").data('value').toLowerCase();
    var username = $("#username").data('value').toLowerCase();

    if ((firstName.length <= 2 || pass.toLowerCase().indexOf(firstName) == -1) && (middleName.length <= 2 || pass.toLowerCase().indexOf(middleName) == -1) &&
        (lastName.length <= 2 || pass.toLowerCase().indexOf(lastName) == -1) && (pass.toLowerCase().indexOf(username) == -1)) {
        $("#pass-name").removeClass("glyphicon-remove").removeClass("alert-danger").addClass("glyphicon-ok").addClass("alert-success");
    } else {
        $("#pass-name").removeClass("glyphicon-ok").removeClass("alert-success").addClass("glyphicon-remove").addClass("alert-danger");
    }

    // TODO: Check predictable patterns
}

function fourWords(pass) {
    var words = pass.toLowerCase().split(/[\W\s]+/);

    var uniqueEligibleWords = [];
    for (i = 0; i < words.length; i++) {
        var uniqueCharacters = new Array();

        for (x = 0; x < words[i].length; x++) {
            if (uniqueCharacters.indexOf(words[i][x]) == -1) {
                uniqueCharacters.splice(uniqueCharacters.length, 0, words[i][x]);
            }
        }

        if ((uniqueCharacters.length >= 2) && (uniqueEligibleWords.indexOf(words[i]) == -1)) {
            uniqueEligibleWords.splice(uniqueEligibleWords.length, 0, words[i]);
        }
    }

    if (uniqueEligibleWords.length < 4) {
        return false;
    }

    return true;
}