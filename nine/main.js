const pp=document.getElementById("play")

function playAudio() {
    var audio = document.getElementById('audio');
    if (audio.paused) {
        audio.play();
        pp.addEventListener("click",(e)=>{
            pp.innerHTML="play Audio ▶";
        })
    } else {
        audio.pause();
        pp.addEventListener("click",(e)=>{
            pp.innerHTML="pause Audio ❚❚";
        })
    }
}
pp.addEventListener("click",()=>{
    pp.innerHTML="pause Audio ❚❚";
})

