const productContainers = [...document.querySelectorAll('.product-container')];
    const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
    const preBtn = [...document.querySelectorAll('.pre-btn')];

    productContainers.forEach((item, i) => {
        let containerDimensions = item.getBoundingClientRect();
        let cardWidth = containerDimensions.width / 4; // Dividindo por 3 para mover um card por vez

        nxtBtn[i].addEventListener('click', () => {
            item.scrollLeft += cardWidth;
        })

        preBtn[i].addEventListener('click', () => {
            item.scrollLeft -= cardWidth;
        })
    })
