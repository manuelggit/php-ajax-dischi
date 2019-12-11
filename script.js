function getData(){

  $.ajax({
    url: "getAllDatabase.php",
    method: "GET",
    success: function(data){
      console.log('data', data);
    },
    error: function(error){
      console.log('error', error);
    }

  })
}

function init(){
  getData();
}

$(document).ready(init);
