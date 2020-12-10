
// let images = [];

// for (let i = 1; i < 16; i++) {
//   images.push(`images/photos/numeriquelles${i}.jpg`);
// }

// const interval = setInterval(function() {
//   let parade_1 = document.querySelector('.parade-1');
//   let parade_2 = document.querySelector('.parade-2');

//   let nb = Math.floor(Math.random() * Math.floor(images.length));

//   linkBtnMore_1.href = images[nb];

//   if(parade_2.style.backgroundImage == `url("${images[nb]}")`) {
//     parade_1.style.backgroundImage = `url(${images[nb == 15 ? nb - 1 : nb + 1]})`; 
//   } else {
//     parade_1.style.backgroundImage = `url(${images[nb]})`;
//   }
// }, 8000);

// const interval_2 = setInterval(function() {
//   let parade_1 = document.querySelector('.parade-1');
//   let parade_2 = document.querySelector('.parade-2');

//   let nb = Math.floor(Math.random() * Math.floor(images.length));

//   linkBtnMore_2.href = images[nb];

//   if(parade_1.style.backgroundImage == `url("${images[nb]}")`) {
//     parade_2.style.backgroundImage = `url(${images[nb === 15 ? nb - 1 : nb + 1]})`; 
//   } else {
//     parade_2.style.backgroundImage = `url(${images[nb]})`;
//   }
// }, 10000);