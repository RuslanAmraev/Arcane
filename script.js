$(document).ready(function() {
    console.log(window.screen.width)
    if(window.screen.width > 500){
        $('#pagepiling').pagepiling({
            menu: '#switch',
            navigation: false,
            anchors: ['main', 'advantages', 'services', 'trial', 'footer']
        }
    );
    }
    
    $('phone').mask("+7(999) 999-9999")
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