$(document).ready(function() {
	$('#pagepiling').pagepiling({
            menu: '#switch',
            navigation: false,
            anchors: ['main', 'advantages', 'services', 'trial', 'footer']
        }
    );
    $("#phone").mask("+7(999) 999-9999");
});


function isVisible(el){
    if (el.style.display === "none") {
        return false
    }else{
        return true
    }
}

function showServicePop(id){
    const el = document.getElementById(id)
    if(isVisible(el)){
        el.style.display = 'flex'
    }else{
        el.style.display = 'none'
    }
}