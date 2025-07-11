function changeTheme() {
    let lmnLight = document.getElementById("lightTheme");
    let lmnDark = document.getElementById("darkTheme");

    if (localStorage.getItem("theme") === "light") {
        localStorage.setItem("theme", "dark");
        lmnLight.classList.add('active');
        lmnDark.classList.remove('active');
    }
    else {
        localStorage.setItem("theme", "light");
        lmnLight.classList.remove('active');
        lmnDark.classList.add('active');
    }

    document.querySelector("#theme").href = `css/theme/${localStorage.getItem("theme")}.css?v=${version}`;
}

function clickLink(lmn) {
    lmn.parentElement.querySelector(".link").click();
}
