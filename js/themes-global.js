/*

    RETROTube JS file lolololol
    themes-global.js

*/

let theme = localStorage.getItem('data-theme');

const changeThemeToDark = () => {
    document.documentElement.setAttribute("data-theme", "dark")
    localStorage.setItem("data-theme", "dark")
}

const changeThemeToLight = () => {
    document.documentElement.setAttribute("data-theme", "light")
    localStorage.setItem("data-theme", 'light')
}

const changeThemeToOlive = () => {
    document.documentElement.setAttribute("data-theme", "olive")
    localStorage.setItem("data-theme", 'olive')
}

const changeThemeToLogo = () => {
    document.documentElement.setAttribute("data-theme", "logo")
    localStorage.setItem("data-theme", 'logo')
}

if (theme == "dark") {
    changeThemeToDark()
}

if (theme == "light") {
    changeThemeToLight()
}

if (theme == "olive") {
    changeThemeToOlive()
}

if (theme == "logo") {
    changeThemeToLogo()
}