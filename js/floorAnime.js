var textWrapper = document.querySelectorAll('.gallery-num p');
for (let i = 0; i < textWrapper.length; i++) {
    textWrapper[i].innerHTML = textWrapper[i].textContent.replace(/\S/g, "<span class='letter'>$&</span>");
}

//ギャラリータイトル，コピーのアニメーション
var tl1 = anime.timeline({
    easing: 'easeOutExpo',
});

tl1
    .add({
        targets: '.gallery-title p:nth-child(1)',
        opacity: [0, 1],
        translateX: ['2em', 0],
        delay: 800,
        duration: 1000
    })

    .add({
        targets: '.gallery-title p:nth-child(2)',
        opacity: [0, 1],
        translateY: ['1em', 0],
        delay: 800,
        duration: 1000
    }, 0)

    .add({
        targets: '.gallery-thumbnail img',
        scale: [1.2, 1],
        delay: 800,
        duration: 1000
    }, 0)

    .add({
        targets: '.gallery-copy',
        opacity: [0, 1],
        duration: 1200
    }, '-=1000')

    .add({
        targets: '.gallery-num .letter',
        easing: 'easeInOutQuad',
        translateY: ['1.2em', 0],
        duration: 800,
        delay: (el, i) => 100 + 100 * i
    }, '-=800');