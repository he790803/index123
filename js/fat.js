var app = new Vue({
    el: '.containe',
    data: {
        addclass: false,
        addclass02: false,

    },

})

const left = document.querySelector('.left');
const leftbtn = document.querySelector('.button01');
const right = document.querySelector('.right');
const rightbtn = document.querySelector('.button02');
const contain = document.querySelector('.containe');
var removebtn = document.querySelector('.remove');
var removebtn02 = document.querySelector('.remove02');

left.addEventListener('mouseenter', () => {
    contain.classList.add('hover-left');
});
left.addEventListener('mouseleave', () => {
    contain.classList.remove('hover-left');
});
leftbtn.addEventListener('click', () => {
    contain.classList.add('videomod');
});
removebtn.addEventListener('click', () => {
    contain.classList.remove('videomod');
});
right.addEventListener('mouseenter', () => {
    contain.classList.add('hover-right');
});
right.addEventListener('mouseleave', () => {
    contain.classList.remove('hover-right');
});
rightbtn.addEventListener('click', () => {
    contain.classList.add('videomod02');
});
removebtn02.addEventListener('click', () => {
    contain.classList.remove('videomod02');
});


function myFunction() {
    $("#myForm").attr("src", "");
}

function meFunction() {
    $("#myForm").attr("src", "https://www.youtube.com/embed/gXO8Y5kOVCk");
}

function my02Function() {
    $("#myForm02").attr("src", "");
}

function me02Function() {
    $("#myForm02").attr("src", "https://www.youtube.com/embed/bpH_aFSn42s");
}