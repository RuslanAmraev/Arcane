$(document).ready(function() {
	$('#pagepiling').pagepiling({
            menu: '#switch',
            navigation: false,
            anchors: ['main', 'advantages', 'services', 'trial', 'footer']
        }
    );
    $("#phone").mask("+7(999) 999-9999");
});


function showServicePop(){
    document.getElementById('servicePop').style.display = 'flex'
}