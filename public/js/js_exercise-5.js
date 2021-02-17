$(document).ready(function(){

    $('.preview').click(function(){
        
        $('html,body').animate({
            scrollTop: $(".exercise-1").offset().top},
            3000);
    });
    var exerciseStart;
    $('.button-mulai').click(function(){
        $('.exercise-1').animate({
            opacity: 1
        });

        $('.img-preview').animate({
            opacity: 1
        });

        $('.waktu').stopwatch({format:'{MM}:{ss}'}).stopwatch('start');
        exerciseStart = true;
        $('.exercise-1 .total-exercise').replaceWith($('.exercise-1 .total-exercise-active').text());
        
        $('html,body').animate({
            scrollTop: $(".preview").offset().top},
            2000);
        $(this).animate({
            opacity: 0
        });
    });

    var exerciseClicked1;
    $(".exercise-1").click(function(){
        if (exerciseStart != true ) {
            alert('klik tombol mulai terlebih dahulu!');
            exerciseClicked1 == false;
        }

        else if(exerciseStart == true && exerciseClicked2 != true){
            $(this).animate({
                opacity: 0.5
            });
            exerciseClicked1 = true;
            $('.exercise-2').animate({
                opacity: 1
            });
    
            $('.exercise-2 .total-exercise').replaceWith($('.exercise-2 .total-exercise-active').text());
    
            $('.img-preview').fadeOut(500, function() {
            $('.img-preview').attr("src",$('.img-preview-2').attr("src"));
            $('.img-preview').fadeIn(500);
            $('html,body').animate({
                scrollTop: $(".preview").offset().top},
                3000);
            });
        }
        
        else{
            $('.exercise-2').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked2;
    $(".exercise-2").click(function(){
        if (exerciseClicked1 == true && exerciseClicked3 != true) {
        exerciseClicked2 = true;
        
        $(this).animate({
            opacity: 0.5
        });
        
        $('.exercise-3').animate({
            opacity: 1
        });

        $('.exercise-3 .total-exercise').replaceWith($('.exercise-3 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
        $('.img-preview').attr("src",$('.img-preview-3').attr("src"));
        $('.img-preview').fadeIn(500);
        $('html,body').animate({
            scrollTop: $(".preview").offset().top},
            3000);
        });
        }
        else if (exerciseClicked1 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else if (exerciseClicked3 == true){
            $('.exercise-3').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked3;
    $(".exercise-3").click(function(){
        if (exerciseClicked2 == true && exerciseClicked4 != true) {
        exerciseClicked3 = true;
        $(this).animate({
            opacity: 0.5
        });
        $('.exercise-4').animate({
            opacity: 1
        });
        
        $('.exercise-4 .total-exercise').replaceWith($('.exercise-4 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
        $('.img-preview').attr("src",$('.img-preview-4').attr("src"));
        $('.img-preview').fadeIn(500);
        $('html,body').animate({
            scrollTop: $(".preview").offset().top},
            3000);
        });
    }
        else if (exerciseClicked2 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else {
            $('.exercise-4').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked4;
    $(".exercise-4").click(function(){
        if (exerciseClicked3 == true && exerciseClicked5 != true) {
        exerciseClicked4 = true;
        $(this).animate({
            opacity: 0.5
        });

        $('.exercise-5').animate({
            opacity: 1
        });

        $('.exercise-5 .total-exercise').replaceWith($('.exercise-5 .total-exercise-active').text());
        
        $('.img-preview').fadeOut(500, function() {
        $('.img-preview').attr("src",$('.img-preview-5').attr("src"));
        $('.img-preview').fadeIn(500);
        $('html,body').animate({
            scrollTop: $(".preview").offset().top},
            3000);
        });
    }
        else if (exerciseClicked3 != true) {
            alert("selesaikan dulu latihan sebelumnya !");
        }

        else {
            $('.exercise-5').animate({
                opacity: 0.5
            });
        }
    });

    var exerciseClicked5;
    $(".exercise-5").click(function(){
        if (exerciseClicked4 == true) {
            exerciseClicked5 = true;
            $(this).animate({
                opacity: 0.5
            });
            $(".waktu").stopwatch({format:'{MM}:{ss}'}).stopwatch('stop');
            $(".preview").hide();
            var waktu = $('.waktu').html();
            $('#timer').val(waktu);
        }

        else {
            alert("selesaikan dulu latihan sebelumnya!");
    }
    });
    
    $('.button-mulai-lagi').click(function(){
        location.reload();
    })
  });
  