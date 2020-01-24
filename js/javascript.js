
function login(showhide){
    if(showhide == "show"){
        document.getElementById('popupbox').style.display="block";
    }else if(showhide == "hide"){
        document.getElementById('popupbox').style.display="none"; 
    }
}
function isChecked() {
    var answ = document.getElementsByClassName("radio");
    var questions = document.getElementsByTagName("h5");
    var i = 0;
    var checkedA= 0 ;
    while(i < answ.length){
        if (answ[i].checked){
            checkedA++;
        }
        i++;    
    }
    if(checkedA == questions.length) {
        return true  
    }
    else {
        var msg = '<span style="color:red;" class="alert alert-danger">Veuillez répondre à toutes les questions</span><br /><br />';
        document.getElementById('alert').innerHTML = msg;  
        return false       
    }                  
} 
$(window).on(' load',function upDateNav(){
    if($(window).width()<990){
        $('.nav-style').removeClass('ml-auto');
    }
    if($(window).width()>=990){
        $('.nav-style').addClass('ml-auto');
    }
});
$(window).on(' resize',function upDateNav(){
    if($(window).width()<990){
        $('.nav-style').removeClass('ml-auto');
    }
    if($(window).width()>=990){
        $('.nav-style').addClass('ml-auto');
    }
});
$(window).on(' load',function upDateNav(){
    if($(window).width()<990){
        $('.navHome').removeClass('ml-auto');
    }
    if($(window).width()>=990){
        $('.navHome').addClass('ml-auto');
    }
});
$(window).on(' resize',function upDateNav(){
    if($(window).width()<990){
        $('.navHome').removeClass('ml-auto');
    }
    if($(window).width()>=990){
        $('.navHome').addClass('ml-auto');
    }
});

$('#shadow').hover(function () {
    $(this).addClass('magictime puffIn');
});

$('.btnCarouselNext').on('click', function(e) {
    e.preventDefault()
    $('.carousel').carousel('next')
  })

  $('.btnCarouselPrev').on('click', function(e) {
    e.preventDefault()
    $('.carousel').carousel('prev')
  })

//   $(document).ready(function() {
//     $('.carouselButton').click(function() {
//         $('.carouselButton').toggleClass('activeButton');

//     })
// })
