$("#card").submit(function(){
    console.log(this);
    $.ajax({
    url: '',
    type: 'post',
    data: $(this).serialize(),
    })
  
    })