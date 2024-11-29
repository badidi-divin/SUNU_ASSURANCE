aData={}
$("#cli_name").autocomplete({
    source:function(request,response){
        $.ajax({
            url:'http://localhost/Application%20d\'urgence/SUNU%20ASSURANCE/Auto-completion/server.php',
            type:'GET',
            dataType:'json',
            success:function(data){
                aData=$.map(data, function(value,key){
                    return {
                        id:value.id,
                        label:value.num_assurance,
                    };
                });
                var results=$.ui.autocomplete.filter(aData,request.term);
                response(results);
            }
        })
    },
    // select:function(event,ui){
    //     $('#capital').text(ui.item.capital);
    // }
});

function affiche(){
    const a=document.querySelector('pannier');
        a.style.display="none";
    }