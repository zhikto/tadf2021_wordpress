//span区切り
var textWrapper = document.querySelector('.target');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline()
    .add({
        targets: '.target .letter',
        opacity: [0, 1],
        easing: "easeInExpo",
        duration: 1200,
        delay: (el, i) => 200 + 100 * i
    })
    .add({
        targets: '.el1',
        opacity: [0, 1],
        easing: "easeInExpo",
        duration: 1200,
    })