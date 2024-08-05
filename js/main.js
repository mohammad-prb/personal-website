function changeTheme() {
    if (localStorage.getItem("theme") === "light")
        localStorage.setItem("theme", "dark");
    else
        localStorage.setItem("theme", "light");
    document.querySelector("#theme").href = `css/theme/${localStorage.getItem("theme")}.css?v=${version}`;
}
