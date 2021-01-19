// fleche 
let btn = document.querySelector('.btnarrow');
btn.addEventListener('click', inClick);
function inClick(){
    //fonction qui effectue au clique une remonté en haut de page
    window.scrollTo({
        top:0,
        left:0,
        //behavior permet de remonter en haut de page plus lentement avec smooth "doux"
        behavior: "smooth",
    })
}