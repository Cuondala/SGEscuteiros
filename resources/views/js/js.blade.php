<script>


// data tables usada em todas as paginas index


$(document).ready(function () {
    $('#example').DataTable({
        order: [[3, 'asc']],
    });




 $('#nucleo').on('click', function(){


    //console.log('bom dia')

    $.ajax({
        type: "GET",
        url: "{{ route('ua.create') }}",
        dataType: "json",
        success: function (response) {
            console.log(response.nucleos)
            $("#nucleo").html("");
            $.each(response.nucleos, function (key, value) {
                $('#nucleo').append('<option value=" '+ value.id +' ">'+ value.nucleo_nome +'</option>');
            });

        }
    });
    });



    $('#secao').on('click',function(){

        $.ajax({
            type:"GET",
            url: "{{ route('ua.create') }}",
            dataType: "json",
            success: function(response){
                console.log(response.seccoes);

                $('#secao').html("");

                $.each(response.seccoes, function(key, value){
                    $('#secao').append('<option value=" '+ value.id +' "> '+value.seccao_nome+'</option> ');
                });
            }
        })
    });







});

function cadastrar(){
    $(document).on('click', '.create' function(e){

        e.preventDefault();

        var dados= {
            'unidade_autonoma_nome': $('.unidade_autonoma_nome').val(),
            'nucleo_id': $('.nucleo_id').val(),
            'seccao_id': $('.seccao_id').val(),
            'descricao ':$('.udescricao').val(),
        }

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            type: "POST",
            url: "{{ route('ua.store') }}",
            data: dados,
            dataType: "json",
            success: function (response) {
                console.log(response);
            }
        });
    });

}

</script>


