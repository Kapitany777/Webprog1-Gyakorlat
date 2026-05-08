function ellenoriz() {
    let rendben = true;

    const nev = document.getElementById("nev");

    if (nev.value.length == 0) {
        nev.style.background = "#ff9999";
        nev.focus();
        return false;
    }
    else {
        nev.style.background = "#ffffff";
    }

    const email = document.getElementById("email");

    const checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //online segítség: https://regex101.com/

    if (!checkPattern.test(email.value)) {
        email.style.background = '#f99';
        return false;
    }

    return true;
}
