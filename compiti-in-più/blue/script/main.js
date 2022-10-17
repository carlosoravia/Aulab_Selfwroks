// inizio progetto 

// contenuto testuale citazione  

let cit = [
    {'title': 'Lorem Ipsum', 
    'pragraph': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum suscipit porro iure, vero modi obcaecati voluptatem sunt nihil eum voluptate tempora soluta magni quod veniam molestias cumque reiciendis corporis rerum?',
    'sub_paragraph': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum suscipit porro iure'
    },

    {'title': 'Lorem Ipsum', 
    'pragraph': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum suscipit porro iure, vero modi obcaecati voluptatem sunt nihil eum voluptate tempora soluta magni quod veniam molestias cumque reiciendis corporis rerum?',
    'sub_paragraph': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum suscipit porro iure'
    },

    {'title': 'Lorem Ipsum', 
    'pragraph': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum suscipit porro iure, vero modi obcaecati voluptatem sunt nihil eum voluptate tempora soluta magni quod veniam molestias cumque reiciendis corporis rerum?',
    'sub_paragraph': 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum suscipit porro iure'
    }
]


// inserimento automatico delle cit 

let citContainer = document.querySelector('#citContainer');

cit.forEach(Element => {
    let divCol = document.createElement('div');
    divCol.classList.add('col', 'mx-5');
    divCol.innerHTML = `
    <i class="bi bi-quote colorIconCit"></i>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum suscipit porro iure, vero modi obcaecati voluptatem sunt nihil eum voluptate tempora soluta magni quod veniam molestias cumque reiciendis corporis rerum?</p>
    <h4 class="mt-5 text-primary">lorem</h4>
    <p>lore dwdowswpw wswsowsm</p>`
    citContainer.appendChild(divCol);
})

// swiper 
var swipercollaborators = new Swiper(".mySwiperOperators", {
    slidesPerView: 3,
    spaceBetween: 30,
    pagination: {
    el: ".swiper-pagination",
    clickable: true,
    },
});



// richiamo file json collaboratori

fetch("./data/dati operatori.json")
    .then((Response) => Response.json())
    .then((data) => {
        
        let containerCards = document.querySelector('#container_cards')
    
        data.forEach(Element => {
            let divContainer = document.createElement('div');
            divContainer.classList.add('swiper-slide');
            divContainer.innerHTML = `
            <div class="card border-primary" style="width: 18rem;">
                <img src="https://swiperjs.com/demos/images/nature-1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title">${Element.first_name} ${Element.last_name}</h3>
                    <p class="card-text">${Element.category}</p>
                    <p class="card-text">${Element.role}</p>
                    <p class="card-text">${Element.country}</p>
                    <a href="#" class="btn btn-primary">see all team</a>
                </div>
            </div>`
            containerCards.appendChild(divContainer);
        });
        
        createCards('');
        console.log(createCards(''))
    })  




// swiper testimonials 





    