const a = document.getElementById("a");
const open = document.getElementById("open");
const times = document.getElementById("times");

a.addEventListener("click",()=>{
    open.classList.remove("hidden");
    open.classList.add("flex");
})
times.addEventListener("click", ()=>{
    open.classList.add("hidden");
    open.classList.remove("flex");
})
// endded
const ao = document.getElementById("ao");
const opening = document.getElementById("opening");
const close = document.getElementById("close");

ao.addEventListener("click",()=>{
    opening.classList.remove("hidden");
    opening.classList.add("flex");
})
close.addEventListener("click", ()=>{
    opening.classList.add("hidden");
    opening.classList.remove("flex");
})