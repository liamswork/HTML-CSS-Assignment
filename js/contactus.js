const $outOfHoursButton = document.getElementById('outofhours');
const $outOfHoursDrop = document.getElementById('answer');
$outOfHoursButton.addEventListener('click', function(event) {
    toggleOutOfHours();
});

function toggleOutOfHours(){
    event.preventDefault();
    if(isOpen){
        $outOfHoursDrop.classList.toggle("drop-active");
        console.log("close");
        isOpen = false;
    }else{
        $outOfHoursDrop.classList.toggle("drop-active");
        console.log("open");
        isOpen = true;
    }
}