$(document).ready(function() {
	$('#pagepiling').pagepiling({
            menu: '#switch',
            navigation: false,
            anchors: ['main', 'advantages', 'services']
        }
    );
    $("#phone").mask("+7(999) 999-9999");
});