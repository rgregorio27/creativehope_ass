$(document).ready(function(){
    
   $.getJSON("https://jsonplaceholder.typicode.com/users", function(data){
        var user_info = '';

        $.each(data, function(key, value){
            user_info += '<tr>';
            user_info += '<td>'+ value.name +'</td>';
            user_info += '<td>'+ value.username +'</td>';
            user_info += '<td>'+ value.phone +'</td>';
            user_info += '<td>'+ value.company.name +'</td>';
            user_info += '</tr>';
        });
        console.log('https://jsonplaceholder.typicode.com/users');
        $('#userInfo').append(user_info);
   });

});