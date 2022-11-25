let resizeTimeout;

window.addEventListener('resize', ()=> {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
        window.location = '#one';
    }, 100)
})

function copyEmail() {
    let email = "markuss0303@gmail.com"
    navigator.clipboard.writeText(email);
    alert("Nokopēts e-pasts: " + email);
}

let ageDifMs = Date.now() - new Date(2003, 3, 17);
let ageDate = new Date(ageDifMs);
let yearsOld = Math.abs(ageDate.getUTCFullYear() - 1970);
document.getElementById("old").innerHTML = yearsOld.toString()

let expDifMs = Date.now() - new Date(2021, 12, 25);
let expDate = new Date(expDifMs);
if (expDate.getUTCFullYear() - 1970 >= 1) {
    let expYears = Math.abs(expDate.getUTCFullYear() - 1970);
    let expMonths = Math.abs(expDate.getMonth());
    document.getElementById("howLong").innerHTML = expYears.toString() + " gadus un " + expMonths.toString() + " mēnešus"
} else {
    let exp = Math.abs(expDate.getMonth());
    document.getElementById("howLong").innerHTML = exp.toString() + " mēnešus"
}

getExpLength([2022, 5, 15], 'php-exp')
getExpLength([2021, 4, 3], 'js-exp')
getExpLength([2021, 3, 10], 'html-exp')

getExpLength([2021, 3, 10], 'git-exp')
getExpLength([2022, 6, 25], 'postgresql-exp')

getExpLength([2022, 5, 20], 'laravel-exp')
getExpLength([2022, 6, 5], 'vue-exp')
getExpLength([2021, 3, 10], 'css-exp')

getExpLength([2021, 12, 24], 'linux-exp')
getExpLength([2022, 1, 10], 'mysql-exp')

function getExpLength(date, id) {
    let expDifMs = Date.now() - new Date(date[0], date[1], date[2]);
    let expDate = new Date(expDifMs);

    let expYears = Math.abs(expDate.getUTCFullYear() - 1970);
    let expMonths = expDate.getMonth();

    let cardSpan = document.getElementById(id)
    if (expYears >= 1) {
        if (expYears === 11) {
            cardSpan.innerHTML = expYears.toString() + " gadi"
        } else if (expYears === 1) {
            cardSpan.innerHTML = expYears.toString() + " gads"
        } else if (expYears % 10 === 1) {
            cardSpan.innerHTML = expYears.toString() + " gadu"
        } else {
            cardSpan.innerHTML = expYears.toString() + " gadi"
        }
    } else {
        if (expMonths === 11) {
            cardSpan.innerHTML = expMonths.toString() + " mēneši"
        } else if (expMonths === 1) {
            cardSpan.innerHTML = expMonths.toString() + " Mēnesis"
        } else if (expMonths % 10 === 1) {
            cardSpan.innerHTML = expMonths.toString() + " mēnešu"
        } else {
            cardSpan.innerHTML = expMonths.toString() + " mēneši"
        }
    }
}
