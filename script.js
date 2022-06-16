let hideBtns = Array.from(document.getElementsByClassName('js-hide'));
        hideBtns.forEach( function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();
                let product_id = event.target.dataset['pid'];
                let xhr = new XMLHttpRequest();
                xhr.open('GET', `/index.php?product_id=${product_id}&action=hide`);
                xhr.send();
                xhr.onload = function() {
                    if (xhr.status == 200) {
                        event.target.parentElement.parentElement.style.display = 'none';
                    }
                };

                xhr.onerror = function() {
                    console.log(`Ошибка соединения`);
                };
            });
        } );



let plusBtn = Array.from(document.getElementsByClassName('js-plus'));
        plusBtn.forEach(function(button){
            button.addEventListener('click', function(event){
                event.preventDefault();
                let product_id = event.target.dataset['pid'];
                  let xhr = new XMLHttpRequest();
                  xhr.open('GET', `/index.php?product_id=${product_id}&action=increment`);
                  xhr.send();
                  xhr.onload = function(){
                    if(xhr.status == 200){
                        event.target.parentElement.parentElement.querySelector('.js-quantity').innerHTML=xhr.responseText
                    }
                  }
                  xhr.onerror = function() {
                    console.log(`Ошибка соединения`);
                };
            })
        })

let minysBtn = Array.from(document.getElementsByClassName('js-minus'));
minysBtn.forEach(function(button){
            button.addEventListener('click', function(event){
                event.preventDefault();
                let product_id = event.target.dataset['pid'];
                  let xhr = new XMLHttpRequest();
                  xhr.open('GET', `/index.php?product_id=${product_id}&action=decrement`);
                  xhr.send();
                  xhr.onload = function(){
                    if(xhr.status == 200){
                        event.target.parentElement.parentElement.querySelector('.js-quantity').innerHTML=xhr.responseText
                    }
                  }
                  xhr.onerror = function() {
                    console.log(`Ошибка соединения`);
                };
            })
        })


