$(document).ready(function() {
    console.log(window.screen.width)
    if(window.screen.width > 600){
        $('#pagepiling').pagepiling({
            menu: '#switch',
            navigation: false,
            anchors: ['main', 'advantages', 'services', 'trial', 'footer']
        }
    );
    }
    
    $('#phone').mask("+7(999) 999-9999")
    $('#phone-context-pop').mask("+7(999) 999-9999")
    $('#phone-target-pop').mask("+7(999) 999-9999")
    $('#phone-web-pop').mask("+7(999) 999-9999")
    $('#phone-trial').mask("+7(999) 999-9999")
    $('#contact-phone').mask("+7(999) 999-9999")
    $('#main-phone').mask("+7(999) 999-9999")
    $('#main-form').mask("+7(999) 999-9999")
});
    


function isVisible(el){
    if (el.style.display === "none" ) {
        return false
    }else{
        return true
    }
}

let popsFlag = false

function showServicePop(e,id){
        e.stopPropagation();
        e.cancelBubble = true; // для IE
        const el = document.getElementById(id)
        if(isVisible(el)){
            el.style.display = 'none'
            popsFlag = false
        }else{
            el.style.display = 'flex'
            popsFlag = true
        }
}

const popsId = ['servicePopWeb', 'servicePopContext', 'servicePop']

function closePops(){
    if(popsFlag){
        popsId.forEach(el=>{
            document.getElementById(el).style.display = 'none'
        })
        popsFlag = false
    
    }
}

let contactButtonFlag = false

function switchContactButton(){
    if(contactButtonFlag){
        document.getElementsByClassName('contactButton-links')[0].style.marginTop = "1000px";
        document.getElementsByClassName('contactButton-links')[0].style.paddingBottom = "0px";
    }else{
        document.getElementsByClassName('contactButton-links')[0].style.marginTop = "0px";
        document.getElementsByClassName('contactButton-links')[0].style.paddingBottom = "60px";
    }
    contactButtonFlag=!contactButtonFlag
}

let contactPopFlag = false

function switchContactPop(event){
    if(contactPopFlag){
        document.getElementById('contactpop').style.display = "none";
    }else{
        document.getElementById('contactpop').style.display = "flex";
    }
    contactPopFlag=!contactPopFlag
}

let headerMenuFlag = false

function switchheaderMenu(){
    if(headerMenuFlag){
        document.getElementById('headerMenu').style.display = "none";
    }else{
        document.getElementById('headerMenu').style.display = "flex";
    }
    headerMenuFlag=!headerMenuFlag
}

function switchThankYou(){
    location.href = 'https://arcane.kz/thankyou';
}

$(window).load(function() {
    $("body").removeClass("preload");
  });


  function tgTicketsListener(id) {
    $(id).submit(function (e) {
        e.preventDefault();

        // Извлечение UTM-меток из URL
        var urlParams = new URLSearchParams(window.location.search);
        var utm_source = urlParams.get('utm_source') || '';
        var utm_medium = urlParams.get('utm_medium') || '';
        var utm_campaign = urlParams.get('utm_campaign') || '';
        var utm_content = urlParams.get('utm_content') || '';
        var utm_term = urlParams.get('utm_term') || '';

        var form_data = $(this).serialize(); // Собираем все данные из формы
        form_data += '&utm_source=' + encodeURIComponent(utm_source);
        form_data += '&utm_medium=' + encodeURIComponent(utm_medium);
        form_data += '&utm_campaign=' + encodeURIComponent(utm_campaign);
        form_data += '&utm_content=' + encodeURIComponent(utm_content);
        form_data += '&utm_term=' + encodeURIComponent(utm_term);
       
        form_data += '&form_id=' + e.target.id

        $.ajax({
            type: "POST",
            url: "./tgtickets.php",
            data: form_data,
            success: function () {
                switchThankYou()
            }
        });
    });
}

 tgTicketsListener('#main-form')
 tgTicketsListener('#trial-form')
 tgTicketsListener('#context-pop-form')
 tgTicketsListener('#target-pop-form')
 tgTicketsListener('#web-pop-form')
 
