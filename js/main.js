function changeTheme() {
    if (localStorage.getItem("theme") === "light") {
        localStorage.setItem("theme", "dark");
        document.querySelector(".changetThemeBtn").innerHTML = "";
    }
    else {
        localStorage.setItem("theme", "light");
        document.querySelector(".changetThemeBtn").innerHTML = "";
    }
    document.querySelector("#theme").href = `css/theme/${localStorage.getItem("theme")}.css?v=${version}`;
}

function clickLink(lmn) {
    lmn.parentElement.querySelector(".link").click();
}
