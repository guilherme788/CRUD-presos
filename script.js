$(".sidebar ul li").on('click', function(){
    $(".sidebar ul li.active").removeClass('active');
    $(this).addClass('active');
  });

      $('.open-btn').on('click',function(){
        $('.sidebar').addClass('active');
      });

      $('.close-btn').on('click',function(){
        $('.sidebar').removeClass('active');
      })



      $('.navbar-toggler-icon').on('click',function(){
        $('.sidebar').addClass('active');
        });


        $('.navbar-toggler-icon').on('click',function(){
          $('.sidebar').removeClass('active');})
    
    
          const form = document.getElementById('form');
  const campos = document.querySelectorAll('.input');
  const spans = document.querySelectorAll('.span-required'); 



  function setError(index){
        campos[index].style.border= '1px solid #e63636';
  }


  function nameValidate(){
    if(campos[0].value.lenght<3){
      setError(0);
    }
    else{

    }
  }



